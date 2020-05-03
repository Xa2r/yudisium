<?php

class Remove extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Delete');
    }

    public function delete($kd_kategori)
    {
        $delete = $this->Delete->deleteCategory($kd_kategori);
        if ($delete) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
            redirect('kategory_yudisium');
        } else {
            $this->session->set_flashdata('danger', 'Data gagal dihapus');
            redirect('kategory_yudisium');
        }
    }
}