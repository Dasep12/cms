<?php

class Post extends CI_Controller
{
    public function index()
    {
        $data = array(
            'post'      => $this->m_cms->get("tbl_artikel")->result()
        );
        $this->template->load("Template/Template","wp-admin/listpost",$data);
    }

    public function tambahPost()
    {
        $this->template->load("Template/Template","wp-admin/addpost");
    }

    public function simpanPostingan()
    {
        $content = $_POST['content'];
        
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
    
}
