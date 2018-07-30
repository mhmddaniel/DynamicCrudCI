<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class UserModel extends CI_Model{

    private $table = "user";
    private $primary_key = "username";
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

    function login($primary_key,$secondary_key)
    {
        return $this->db->where($this->primary_key,$primary_key)->where($this->secondary_key,$secondary_key)->get($this->table)->row();
    }
}