<?php

class Edit extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Update');
        $this->load->model('Select');
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

    public function updateStatusImage($nim, $category_id)
    {
        $selectImage = $this->Select->getImagesByCategory($nim, $category_id);
        foreach ($selectImage as $data) {
            $status = $data['status'];

            if ($status == 'T') {
                $update = $this->Update->updateStatusImage('A', $nim, $category_id);
                $this->session->set_flashdata('success', 'Data berhasil disimpan.');
                redirect('list_seleksi');
            } elseif ($status == 'A') {
                $update = $this->Update->updateStatusImage('T', $nim, $category_id);
                $this->session->set_flashdata('success', 'Data berhasil disimpan.');
                redirect('list_seleksi');
            } else {
                $this->session->set_flashdata('danger', 'Data gagal disimpan.');
                redirect('list_seleksi');
            }
        }
    }
}