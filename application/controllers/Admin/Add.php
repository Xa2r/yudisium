<?php

class Add extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Insert');
        $this->load->model('Select');
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

    public function addActiveMahasiswa()
    {
        $nim = $this->input->post('nim');
        $userActive = $this->Select->getMahasiswaActive();
        $nimUser = array();
        foreach ($userActive as $user) {
            $nimUser[] = $user['nim'];
        }

        if (array_search($nim, $nimUser)) {
            $this->session->set_flashdata('warning', 'Data sudah aktif.');
            redirect('list_seleksi');
        } else {
            $insert = $this->Insert->addActiveMahasiswa();
            if ($insert) {
                $this->session->set_flashdata('success', 'Data berhasil diaktifkan.');
                redirect('list_seleksi');
            } else {
                $this->session->set_flashdata('danger', 'Data gagal diaktifkan.');
                redirect('list_seleksi');
            }
        }
    }

    public function addBebasLab()
    {
        $nim = $this->input->post('nim');
        $userActive = $this->Select->getBebasLab();
        $nimUser = array();
        foreach ($userActive as $user) {
            $nimUser[] = $user['nim'];
        }

        if (array_search($nim, $nimUser)) {
            $this->session->set_flashdata('warning', 'Nim sudah aktif.');
            redirect('laboran');
        } else {
            $insert = $this->Insert->addBebasLab();
            if ($insert) {
                $this->session->set_flashdata('success', 'Data berhasil diaktifkan.');
                redirect('laboran');
            } else {
                $this->session->set_flashdata('danger', 'Data gagal diaktifkan.');
                redirect('laboran');
            }
        }
    }
}