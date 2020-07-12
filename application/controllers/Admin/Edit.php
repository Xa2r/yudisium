<?php

class Edit extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Update');
    }

    public function update($kd_kategori)
    {
        $update = $this->Update->updateCategory($kd_kategori);
        if ($update) {
            $this->session->set_flashdata('success', 'Data berhasil diupdate');
            redirect('kategory_yudisium');
        } else {
            $this->session->set_flashdata('danger', 'Data gagal diupdate');
            redirect('kategory_yudisium');
        }
    }

    public function updateStatusVerifikasi($nim)
    {
        $update = $this->Update->updateStatusVerifikasi($nim);
        if ($update) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan.');
            redirect('list_seleksi');
        } else {
            $this->session->set_flashdata('danger', 'Data gagal disimpan.');
            redirect('list_seleksi');
        }
    }
}