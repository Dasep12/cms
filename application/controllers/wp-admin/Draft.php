<?php

class Draft extends CI_Controller
{
    public function index()
    {
        $data = array(
            'post'           => $this->m_cms->getData(['status' => 0],"tbl_artikel")->result() , 
            'countPost'      => $this->m_cms->getData(['status' => 0],"tbl_artikel")->num_rows() , 
            'countDraft'      => $this->m_cms->getData(['status' => 1],"tbl_artikel")->num_rows() , 
        );
        $this->template->load("Template/Template","wp-admin/draft",$data);
    }


    public function delete($id)
    {
        $delete = $this->m_cms->delete("tbl_artikel",array('id' => $id));
            if($delete > 0 ){
                $this->session->set_flashdata('ok','data terhapus');
                redirect('wp-admin/Draft');
            }else {
               $this->session->set_flashdata('err','gagal hapus');
                redirect('wp-admin/Draft/');
            }
    }

    public function edit($id)
    {
        $data  = array(
            'post'              => $this->m_cms->getData(['id' => $id],"tbl_artikel")->row() ,
            'kategori'          => $this->m_cms->get("kategori")->result() ,
            'countPost'      => $this->m_cms->getData(['status' => 0],"tbl_artikel")->num_rows() , 
            'countDraft'      => $this->m_cms->getData(['status' => 1],"tbl_artikel")->num_rows() , 
        );
        $this->template->load("Template/Template","wp-admin/editdraft",$data);
    }

    public function update()
    {
       
        $content        = $this->input->post('content');
        $title          = $this->input->post('title');
        $kategori       = $this->input->post('kategori');
        $id             = $this->input->post("id");
        $data = array(
            'title'         => $title ,
            'kategori'      => $kategori ,
            'date'          => date('y-m-d H:i:s') ,
            'content'       => $content ,
        );

        $where = ['id' => $id ];
        $update =  $this->m_cms-> update("tbl_artikel",$data,$where);
            if($update > 0 ){
                $this->session->set_flashdata('ok','artikel di perbarui');
                redirect('wp-admin/Draft/');
            }else {
               $this->session->set_flashdata('err','artikel gagal di perbarui');
                redirect('wp-admin/Draft/');
            }

    }
    
}
