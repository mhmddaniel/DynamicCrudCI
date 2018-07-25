<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class VariableModel extends CI_Model{

    private $table = "variable";
    private $primary_key = "variable_id";
    private $foreign_key = "subform_id";

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

    function get_all_from_primary_key($primary_key)
    {
        return $this->db->where($this->primary_key,$primary_key)->get($this->table)->row();
    }

    function get_all_from_foreign_key($foreign_key)
    {
        return $this->db->where($this->foreign_key,$foreign_key)->get($this->table)->result();
    }
}