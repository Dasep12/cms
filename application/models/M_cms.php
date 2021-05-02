<?php

class M_cms extends CI_Model 
{
    public function get($table)
    {
       return $this->db->get($table);
    }
    
}
