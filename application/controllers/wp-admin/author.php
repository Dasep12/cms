<?php


class Author extends CI_Controller
{
    public function index()
    {
        $data = array(
          'author'         => $this->m_cms->get("author")->result() ,
          'countPost'      => $this->m_cms->getData(['status' => 0],"tbl_artikel")->num_rows() , 
          'countDraft'     => $this->m_cms->getData(['status' => 1],"tbl_artikel")->num_rows() , 
        );
        $this->template->load("Template/Template","wp-admin/author", $data);
      }
      
    public function add()
    {

        $data = array(
          'countPost'      => $this->m_cms->getData(['status' => 0],"tbl_artikel")->num_rows() , 
          'countDraft'     => $this->m_cms->getData(['status' => 1],"tbl_artikel")->num_rows() , 
        );
        $this->template->load("Template/Template","wp-admin/addauthor", $data);
    }


    public function input()
    {
      $file   = $_FILES['file']['name'];
      $this->load->library('upload');
      $config['upload_path']     =  './assets/dist/img/' ;
      $config['allowed_types']   = 'jpg|png|jpeg' ;
      $this->upload->initialize($config);
        if(!$this->upload->do_upload('file')){
          echo $this->upload->display_errors();
        }else {
            $data = array(
              'photo'  => $file 
            );

            $input = $this->m_cms->insert($data,"author");
            echo $input ;
        }
    }
    
}
