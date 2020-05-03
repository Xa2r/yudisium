<?php

class Update extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Select');
    }

    public function updateMahasiswa($nim)
    {
        $data = array(
            'nama' => $this->input->post('nama', TRUE),
            'tmp_lahir' => $this->input->post('tmp_lahir', TRUE),
            'tgl_lahir' => $this->input->post('tgl_lahir', TRUE),
            'j_kelamin' => $this->input->post('jk', TRUE),
            'kd_agama' => $this->input->post('agama', TRUE),
            'alamat_mhs' => $this->input->post('alamat', TRUE),
            'hp_mhs' => $this->input->post('hp', TRUE),
            'email_mhs' => $this->input->post('email', TRUE),
            'nm_ibu_kandung' => $this->input->post('nama_ortu', TRUE),
            'kerja_ibu' => $this->input->post('kerja_ortu', TRUE),
            'alamat_ibu' => $this->input->post('alamat_ortu', TRUE),
            'status_kawin' => $this->input->post('status', TRUE),
            'nm_sekolah' => $this->input->post('nm_sekolah', TRUE),
            'judul' => $this->input->post('judul', TRUE),
            'dosen_pem_1' => $this->input->post('dosen1', TRUE),
            'dosen_pem_2' => $this->input->post('dosen2', TRUE)
        );
        
        $this->db->where('nim', $nim);
        $update = $this->db->update('sia.d_mahasiswa', $data);

        return $update;
    }

    public function updateCategory($kd_kategori)
    {
        $data = array(
            'kd_prodi' => $this->input->post('prodi', TRUE),
            'nama_kategori' => $this->input->post('kategori', TRUE),
            'status' => $this->input->post('status', TRUE),
            'format' => $this->input->post('format', TRUE),
            'status_upload' => $this->input->post('status_upload', TRUE)
        );

        $this->db->where('kd_kategori', $kd_kategori);
        $update = $this->db->update('sia.d_yud_kategori', $data);

        return $update;
    }
}