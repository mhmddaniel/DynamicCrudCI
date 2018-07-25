<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class InputModel extends CI_Model{

    private $table = "input_type";
    private $primary_key = "type_id";

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

    function get_by_column_name($column_name)
    {
        return $this->db->select($column_name)->get($this->table)->result();
    }
}