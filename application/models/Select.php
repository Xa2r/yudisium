<?php

class Select extends CI_Model
{
    public function getCategory()
    {
        $auth = $this->db->get('sia.d_yud_kategori');
        return $auth->result_array();
    }

    public function getYudisiumMahasiswa()
    {
        return $this->db->from('sia.d_yud_mahasiswa')
                ->join('sia.d_mahasiswa', 'sia.d_mahasiswa.nim=sia.d_yud_mahasiswa.nim')
                ->get()
                ->result_array();
    }

    public function getMahasiswaById($nim)
    {
        return $this->db->from('sia.master_prodi')
                ->join('sia.d_mahasiswa', 'sia.master_prodi.kd_prodi=sia.d_mahasiswa.kd_prodi')
                ->where('sia.d_mahasiswa.nim', $nim)
                ->get()
                ->result_array();

    }

    public function getYudisiumMahasiswaById()
    {
        $id_user = $this->input->post('id_user');

        $userId = $this->db->get_where('sia.d_yud_mahasiswa', array('nim' => $id_user))
                    ->row_array();

        return $userId;
    }
}