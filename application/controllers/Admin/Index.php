<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Login');
        $this->load->model('Select');
        $this->load->library('session');
	}

    public function index()
    {
        $data['admin'] = $this->Login->getSessionAdmin($this->session->userdata('username'));
        if ($this->session->userdata('username')) {
            $this->load->view('admin/template/header');
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/home', $data);
            $this->load->view('admin/template/footer');
        } else {
            $this->load->view('admin/template/header');
            $this->load->view('admin/index');
            $this->load->view('admin/template/footer');
        }
    }

    public function login()
    {
        $admin = $this->Login->loginAdmin();

        if ($admin['msg'] == 'success') {
            $data = array(
                'username' => $admin['data']['username']
            );
            $this->session->set_userdata($data);
            $getData['admin'] = $this->Login->getSessionAdmin($this->session->userdata('username'));
            $this->load->view('admin/template/header');
            $this->load->view('admin/sidebar', $getData);
            $this->load->view('admin/home', $getData);
            $this->load->view('admin/template/footer');
        } else {
            $this->session->set_flashdata('danger', '<small>Username or password not correct</small>');
            redirect('admin');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        redirect('admin');
    }

    public function kategory()
    {
        $data['admin'] = $this->Login->getSessionAdmin($this->session->userdata('username'));
        $data['kategori'] = $this->Select->getCategory();
        $this->load->view('admin/template/header');
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/kategory_yudisium', $data);
        $this->load->view('admin/template/footer');
    }

    public function seleksi()
    {
        $data['admin'] = $this->Login->getSessionAdmin($this->session->userdata('username'));
        $data['yud_mahasiswa'] = $this->Select->getYudisiumMahasiswa();
        $this->load->view('admin/template/header');
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/list_seleksi', $data);
        $this->load->view('admin/template/footer');
    }

    public function laboran()
    {
        $data['admin'] = $this->Login->getSessionAdmin($this->session->userdata('username'));
        $this->load->view('admin/template/header');
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/laboran', $data);
        $this->load->view('admin/template/footer');
    }

    public function update()
    {
        $data['admin'] = $this->Login->getSessionAdmin($this->session->userdata('username'));
        $this->load->view('admin/template/header');
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/edit_profile', $data);
        $this->load->view('admin/template/footer');
    }

    public function getMahasiswaById()
    {
        $nim = $this->input->get('nim');
        $data['mahasiswa'] = $this->Select->getMahasiswaById($nim);
        $this->load->view('admin/template/data_mahasiswa', $data);
    }
}