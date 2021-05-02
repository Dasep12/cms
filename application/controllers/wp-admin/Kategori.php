<?php

class Kategori extends CI_Controller
{
    
    public function index()
    {
        $this->template->load('Template/Template',"wp-admin/kategori");
    }

    public function add()
    {
        $this->template->load("Template/Template","wp-admin/addkategori");
    }
}
