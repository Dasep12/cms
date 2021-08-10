<?php

class Portofolio extends CI_Controller
{

    public function index()
    {
        // $data = array(
        //     'author'         => $this->m_cms->get("author")->result(),
        //     'countPost'      => $this->m_cms->getData(['status' => 0], "tbl_artikel")->num_rows(),
        //     'countDraft'     => $this->m_cms->getData(['status' => 1], "tbl_artikel")->num_rows(),
        // );

        $data = array(
            'author'     => $this->m_cms->get("author")->result(),
            'countPost'  => $this->m_cms->getData(['status' => 1], "tbl_artikel")->num_rows(),
            'countDraft' => $this->m_cms->getData(['status' => 1], "tbl_artikel")->num_rows()
        );
        $this->template->load("template/template", "wp-admin/portofolio", $data);
    }
}
