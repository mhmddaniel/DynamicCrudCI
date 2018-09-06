<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ApplicantModel extends CI_Model{

    private $table = "pemohon";
    private $primary_key = "nik";
    private $secondary_key = "id";
    private $special_key = "nama_pemohon";

    function insert($data){
        $this->db->insert($this->table, $data);
    }

    function get_from_primary_key($column_name,$primary_key)
    {
        return $this->db->select($column_name)->where($this->primary_key,$primary_key)->get($this->table)->row($column_name);
    }

    function deactivate_data($primary_key)
    {
        return $this->db->where($this->primary_key,$primary_key)->update($this->table, array('latest'=>FALSE));
    }

    function delete($primary_key)
    {
        return $this->db->where($this->primary_key,$primary_key)->delete($this->table);
    }

    function get_by_primary_key($primary_key)
    {
        return $this->db->where($this->primary_key,$primary_key)->get($this->table)->row();
    }

    function get_by_secondary_key($secondary_key)
    {
        return $this->db->where($this->secondary_key,$secondary_key)->get($this->table)->row();
    }

    function get_all_primary_key()
    {
        return $this->db->select($this->primary_key)->select($this->special_key)->get($this->table)->result();
    }

    function get()
    {
        return $this->db->where('latest',TRUE)->get($this->table)->result();
    }

    function filter_by($column,$value)
    {
        return $this->db->where($column,$value)->get($this->table)->result();
    }

    function calc_age($column,$value)
    {
        $null = null;
        return $this->db->where("floor(datediff(curdate(),".$column.") / 365) > " ,$value[0])->where("floor(datediff(curdate(),".$column.") / 365) < " ,$value[1])->get($this->table)->result();
    }

    function count()
    {
        return $this->db->where('latest',TRUE)->get($this->table)->num_rows();
    }
}