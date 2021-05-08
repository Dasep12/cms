<?php

class M_cms extends CI_Model 
{
    public function get($table)
    {
       return $this->db->get($table);
    }

    public function getData($where,$table)
    {
      return $this->db->get_where($table,$where);
    }


    public function insert($data,$table)
    {
        $this->db->insert($table,$data);
        return $this->db->affected_rows();
    }

    //getkode otomatis
    public function getCode()
    {
      $query = $this->db->query("SELECT MAX(idkategori) as nourut FROM kategori");
      return $query->row();
    }

    //update 
    public function update($table,$data,$where)
    {
      $this->db->update($table,$data,$where);
      return $this->db->affected_rows();
    }

    //delete
    public function delete($table,$id)
    {
      $this->db->delete($table,$id);
      return $this->db->affected_rows();
    }
    
}
