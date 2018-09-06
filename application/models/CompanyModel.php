<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class CompanyModel extends CI_Model
{

    private $table = "perusahaan";
    private $primary_key = "id";
    private $secondary_key = "id_perusahaan";
    private $special_key = "nik_pemohon";

    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    function get_last_primary_key()
    {
        return $this->db->select_max($this->primary_key)->get($this->table)->row($this->primary_key);
    }

    function delete($primary_key)
    {
        return $this->db->where($this->primary_key,$primary_key)->delete($this->table);
    }

    function deactivate_data($primary_key)
    {
        return $this->db->where($this->secondary_key,$primary_key)->update($this->table, array('latest'=>FALSE));
    }

    function get_from_primary_key($column_name, $primary_key)
    {
        return $this->db->select($column_name)->where($this->primary_key, $primary_key)->get($this->table)->row($column_name);
    }

    function get_by_primary_key($primary_key)
    {
        return $this->db->where($this->primary_key,$primary_key)->get($this->table)->row();
    }

    function get_all_from_foreign_key($foreign_key)
    {
        return $this->db->where($this->foreign_key,$foreign_key)->get($this->table)->result();
    }

    function get()
    {
        return $this->db->where('latest',TRUE)->get($this->table)->result();
    }

    function count()
    {
        return $this->db->where('latest',TRUE)->get($this->table)->num_rows();
    }
}