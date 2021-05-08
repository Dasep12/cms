<?php

class Post extends CI_Controller
{
    public function index()
    {
        $data = array(
            'post'      => $this->m_cms->getData(['status' => 1],"tbl_artikel")->result() ,
            'countPost'      => $this->m_cms->getData(['status' => 0],"tbl_artikel")->num_rows() , 
            'countDraft'      => $this->m_cms->getData(['status' => 1],"tbl_artikel")->num_rows() ,
        );
        $this->template->load("Template/Template","wp-admin/listpost",$data);
    }

    public function tambahPost()
    {
        $data = array(
            'kategori'      => $this->m_cms->get("kategori")->result()  ,
            'countPost'      => $this->m_cms->getData(['status' => 0],"tbl_artikel")->num_rows() , 
            'countDraft'      => $this->m_cms->getData(['status' => 1],"tbl_artikel")->num_rows() ,
        );
        $this->template->load("Template/Template","wp-admin/addpost",$data);
    }

    public function simpanPostingan()
    {
        $content        = $this->input->post('content');
        $title          = $this->input->post('title');
        $kategori       = $this->input->post('kategori');
        $status       = $this->input->post('status');
        
        if($status == 1){
            $status = 1 ;
        }else {
            $status = 0;
        }
        $data = array(
            'idpost'        => md5('his') ,
            'author'        => "Dasep" ,
            'title'         => $title ,
            'kategori'      => $kategori ,
            'date'          => date('y-m-d H:i:s') ,
            'content'       => $content ,
            'status'        => $status
        );
       $input =  $this->m_cms->insert($data,"tbl_artikel");
            if($input > 0 ){
                $this->session->set_flashdata('ok','posting sukses');
                redirect('wp-admin/Post/tambahPost');
            }else {
               $this->session->set_flashdata('err','posting gagal');
                redirect('wp-admin/Post/tambahPost');
            }
    }

    //
    public function delete($id)
    {
        $delete = $this->m_cms->delete("tbl_artikel",array('id' => $id));
            if($delete > 0 ){
                $this->session->set_flashdata('ok','data terhapus');
                redirect('wp-admin/Post');
            }else {
               $this->session->set_flashdata('err','gagal hapus');
                redirect('wp-admin/Post/');
            }
    }


    public function image()
    {
        if(isset($_FILES['upload']['name'])){
            $file                    = $_FILES['upload']['tmp_name'];
            $file_name               = $_FILES['upload']['name'];
            $file_name_array         = explode(".", $file_name);
            $extension               = end($file_name_array);
            $new_image_name          = rand() . '.' . $extension;
            $allowed_extension       = array("jpg", "gif", "png");
            if(in_array($extension, $allowed_extension)){
                move_uploaded_file($file, 'assets/post/' . $new_image_name);
                $function_number = $_GET['CKEditorFuncNum'];
                $url =  base_url() . '/assets/post/' . $new_image_name;
                $message = '';
                echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($function_number, '$url', '$message');</script>";
            }

        }
    }

    public function edit($id)
    {
        $data  = array(
            'post'      => $this->m_cms->getData(['id' => $id],"tbl_artikel")->row() ,
            'kategori'      => $this->m_cms->get("kategori")->result() ,
            'countPost'      => $this->m_cms->getData(['status' => 0],"tbl_artikel")->num_rows() , 
            'countDraft'      => $this->m_cms->getData(['status' => 1],"tbl_artikel")->num_rows() ,
        );
        $this->template->load("Template/Template","wp-admin/editpost",$data);
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
                redirect('wp-admin/Post/');
            }else {
               $this->session->set_flashdata('err','artikel gagal di perbarui');
                redirect('wp-admin/Post/');
            }

    }


    
}
