<?php



class Home extends CI_Controller
{
    public function index()
    {
        $this->template->load("Template/Template","wp-admin/home");
    }
    
}
