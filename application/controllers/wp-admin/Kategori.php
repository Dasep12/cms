<?php

class Kategori extends CI_Controller
{
    
    public function index()
    {
        $data = array(
            'kategori'      => $this->m_cms->get("kategori")->result() ,
            'countPost'      => $this->m_cms->getData(['status' => 0],"tbl_artikel")->num_rows() , 
            'countDraft'      => $this->m_cms->getData(['status' => 1],"tbl_artikel")->num_rows() ,
        );
        $this->template->load('Template/Template',"wp-admin/kategori",$data);
    }

    public function add()
    {
        $p = $this->m_cms->getCode();
        $urutan = (int) substr($p->nourut , 3,6);
        $urutan++ ;

        $huruf = "CAT" ;
        $kode = $huruf . sprintf("%03s" ,$urutan);
        $data   = array(
            'nourut'    => $kode ,
            'countPost'      => $this->m_cms->getData(['status' => 0],"tbl_artikel")->num_rows() , 
            'countDraft'      => $this->m_cms->getData(['status' => 1],"tbl_artikel")->num_rows() ,
        );
        $this->template->load("Template/Template","wp-admin/addkategori",$data);
    }


    public function input()
    {
        $kode       = $this->input->post('kode');
        $kategori   = $this->input->post('kategori');

        $data = array(
            'idkategori'    => $kode ,
            'kategori'      => $kategori 
        );
        $input = $this->m_cms->insert($data,"kategori");
        if($input > 0 ){
            $this->session->set_flashdata('ok','ditambahkan kategori baru');
            redirect('wp-admin/Kategori/add');
        }else {
            $this->session->set_flashdata('err','gagal');
            redirect('wp-admin/Kategori/add');
        }
    }


    public function ubah()
    {
        $data = array(
            'kategori'  => $this->input->post('kategori') ,
            
        );
       $update =  $this->m_cms->update("kategori",$data,array('id' => $this->input->post('id')));
        if($update > 0 ){
            $this->session->set_flashdata('ok','ditambahkan kategori baru');
            redirect('wp-admin/Kategori');
        }else {
            $this->session->set_flashdata('err','gagal');
            redirect('wp-admin/Kategori');
        }
    }

    public function delete($id)
    {
        $delete = $this->m_cms->delete("kategori",array('id' => $id));
            if($delete > 0 ){
                $this->session->set_flashdata('ok','data terhapus');
                redirect('wp-admin/Kategori');
            }else {
               $this->session->set_flashdata('err','gagal hapus');
                redirect('wp-admin/Kategori');
            }
    }
}
