<?php


class Author extends CI_Controller
{
    public function index()
    {
        $data = array(
          'countPost'      => $this->m_cms->getData(['status' => 0],"tbl_artikel")->num_rows() , 
          'countDraft'      => $this->m_cms->getData(['status' => 1],"tbl_artikel")->num_rows() , 
        );
        $this->template->load("Template/Template","wp-admin/author", $data);
    }
    
}
