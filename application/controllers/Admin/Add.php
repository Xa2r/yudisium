<?php

class Add extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Insert');
        $this->load->library('session');
    }
    
    public function addCategory()
    {
        $auth = $this->Insert->addCategory();
        if ($auth) {
            $this->session->set_flashdata('success', 'Data kategori berhasil ditambahkan.');
            redirect('kategory_yudisium');
        } else {
            $this->session->set_flashdata('danger', 'Data kategori gagal ditambahkan.');
            redirect('kategory_yudisium');
        }
    }
}