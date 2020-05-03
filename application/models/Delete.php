<?php

class Delete extends CI_Model
{
    public function deleteCategory($kd_kategori)
    {
        $delete = $this->db->delete('sia.d_yud_kategori', array('kd_kategori' => $kd_kategori));
        return $delete;
    }

    public function deleteListSeleksi($nim)
    {
        return $this->db->delete('sia.d_yud_mahasiswa', array('nim' => $nim));
    }
}