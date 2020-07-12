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
            'status' => 'A',
            'status_upload' => 'T'
        );

        return $this->db->insert('sia.bebas_lab', $auth);
    }

    public function addImg()
    {
        $config = array(
            'upload_path' => './images/',
            'allowed_types' => 'jpeg|jpg',
            'remove_space' => TRUE
        );

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('berkas')) {
            $return = array(
                'result' => 'success',
                'file' => $this->upload->data(),
                'error' => '' 
            );

            return $return;
        } else {
            $return = array(
                'result' => 'failed',
                'file' => '',
                'error' => $this->upload->display_errors()
            );

            return $return;
        }
    }

    public function addBerkas($nim, $upload, $category_id)
    {
        $auth = array(
            'nim' => $nim,
            'img' => $upload['file']['file_name'],
            'status' => 'T',
            'id_kategori' => $category_id,
            'tgl_upload' => date("Y-m-d")
        );

        return $this->db->insert('sia.images_upload', $auth);
    }

    public function statusVerifikasi()
    {
        $auth = array(
            'nim' => $this->input->post('nim', TRUE),
            'status' => $this->input->post('hasil', TRUE),
        );

        return $this->db->insert('sia.status_verifikasi', $auth);
    }
}