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

    public function addActiveMahasiswa()
    {
        $auth = array(
            'nim' => $this->input->post('nim', TRUE),
            'tanggal_aktif' => date('Y-m-d'),
            'status_aktif' => 'A'
        );

        return $this->db->insert('sia.d_yud_mahasiswa', $auth);
    }

    public function addBebasLab()
    {
        $auth = array(
            'nim' => $this->input->post('nim', TRUE),
            'tgl_cetak' => date('Y-m-d'),
            'status' => 'A'
        );

        return $this->db->insert('sia.bebas_lab', $auth);
    }
}