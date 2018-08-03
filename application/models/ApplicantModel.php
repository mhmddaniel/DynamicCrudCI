<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ApplicantModel extends CI_Model{

    private $table = "pemohon";
    private $primary_key = "nik";
    private $secondary_key = "nama_pemohon";

    function insert($data){
        $this->db->insert($this->table, $data);
    }

    function get_from_primary_key($column_name,$primary_key)
    {
        return $this->db->select($column_name)->where($this->primary_key,$primary_key)->get($this->table)->row($column_name);
    }

    function get_by_primary_key($primary_key)
    {
        return $this->db->where($this->primary_key,$primary_key)->get($this->table)->row();
    }

    function get_all_primary_key()
    {
        return $this->db->select($this->primary_key)->select($this->secondary_key)->get($this->table)->result();
    }

    function get()
    {
        return $this->db->get($this->table)->result();
    }

    function count()
    {
        return $this->db->get($this->table)->num_rows();
    }
}