<?php

class Insert extends CI_Model
{
    public function addCategory()
    {
        $auth = array(
            'kd_prodi' => $this->input->post('prodi', TRUE),
            'nama_kategori' => $this->input->post('kategori', TRUE),
            'status' => $this->input->post('status', TRUE),
            'format' => $this->input->post('format', TRUE),
            'status_upload' => $this->input->post('status_upload', TRUE)
        );

        return $this->db->insert('sia.d_yud_kategori', $auth);
    }
}