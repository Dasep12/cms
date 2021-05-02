<?php

class Draft extends CI_Controller
{
    public function index()
    {
        $this->template->load("Template/Template","wp-admin/draft");
    }
    
}
