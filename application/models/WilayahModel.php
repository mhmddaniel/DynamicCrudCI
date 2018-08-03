<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class WilayahModel extends CI_Model{

    private $table = "wilayah";
    private $primary_key = "kode";
    private $secondary_key = "password";

    function insert($data){
        $this->db->insert($this->table, $data);
    }

    function get_last_primary_key(){
        return  $this->db->select_max($this->primary_key)->get($this->table)->row($this->primary_key);
    }

    function get_from_primary_key($column_name,$primary_key)
    {
        return $this->db->select($column_name)->where($this->primary_key,$primary_key)->get($this->table)->row($column_name);
    }

    function get()
    {
        return $this->db->get($this->table)->result();
    }

    function get_provinces()
    {
        return $this->db->where('CHAR_LENGTH('.$this->primary_key.')',2)->get($this->table)->result();
    }

    function get_areas($kode,$limit)
    {
        return $this->db->where('CHAR_LENGTH('.$this->primary_key.')',$limit)->like($this->primary_key,$kode, 'after')->get($this->table)->result();
    }

}