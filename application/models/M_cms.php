<?php

class M_cms extends CI_Model 
{
    public function get($table)
    {
       return $this->db->get($table);
    }


    public function insert($data,$table)
    {
        $this->db->insert($table,$data);
        return $this->db->affected_rows();
    }
    
}
