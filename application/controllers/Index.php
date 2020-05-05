<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

    var $API_PERPUSTAKAAN = "";
    var $API_KEUANGAN = "";

    function __construct()
    {
        parent::__construct();
        $this->API_PERPUSTAKAAN = "https://private-1704aa-perpusdummy.apiary-mock.com/v1/api?nim=";
        $this->API_KEUANGAN = "https://private-daf49-keuangandummy.apiary-mock.com/v1/api?nim=";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('Select');
        $this->load->model('Login');
        $this->load->model('Update');
		
	}

    public function index()
    {
        if ($this->session->userdata('id_user')) {
            redirect('home');
        } else {
            $this->load->view('index');
        }
    }

    public function formLogin()
    {
        if ($this->session->userdata('id_user')) {
            $this->load->view('frontend/templates/header');
            $this->load->view('frontend/home');
            $this->load->view('frontend/templates/footer');
        } else {
            $this->load->view('frontend/login');
        }
    }

    public function login()
    {
        $userId = $this->Select->getYudisiumMahasiswaById();

        if (!$userId) {
            $this->session->set_flashdata('danger', '<small>Sorry, you haven`t registered as a participant of the graduation, please contact the department</small>');
            redirect('index');
        } else {
            $user = $this->Login->loginUser();
            if ($user['msg'] == 'success') {
                $data = array(
                    'id_user' => $user['data']['id_user']
                );
                $this->session->set_userdata($data);
                $nim = $this->session->userdata('id_user');
                $data['user'] = $this->Select->getMahasiswaById($nim);
                 $this->load->view('frontend/templates/header', $data);
                $this->load->view('frontend/home');
                $this->load->view('frontend/templates/footer');
            } else {
                $this->session->set_flashdata('danger', '<small>Username or password not correct</small>');
                redirect('index');
            }
        }
    }

    public function home()
    {
        $nim = $this->session->userdata('id_user');
         $data['user'] = $this->Select->getMahasiswaById($nim);
         $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/home');
        $this->load->view('frontend/templates/footer');
    }

    public function logout()
    {
        $this->session->unset_userdata('id_user');
        redirect('index');
    }

    public function biodata()
    {
        $nim = $this->session->userdata('id_user');
        $data['user'] = $this->Select->getMahasiswaById($nim);
        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/form_biodata', $data);
        $this->load->view('frontend/templates/footer');
    }

    public function update()
    {
        $nim = $this->session->userdata('id_user');
        $update = $this->Update->updateMahasiswa($nim);
        if (!$update) {
            $this->session->set_flashdata('danger', 'Data gagal diupdate');
            redirect('form_biodata');
        } else {
            $this->session->set_flashdata('success', 'Data berhasil diupdate');
            redirect('form_biodata');
        }
    }

    public function list()
    {
        $nim = $this->session->userdata('id_user');
        $data['request'] = [json_decode($this->curl->simple_get($this->API_KEUANGAN.$nim)),
                                json_decode($this->curl->simple_get($this->API_PERPUSTAKAAN.$nim))];
        $data['kategori'] = $this->Select->getCategory();
        $data['user'] = $this->Select->getMahasiswaById($nim);
        $data['bebas_lab'] = $this->Select->getBebasLabById($nim);
        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/list_yudisium', $data);
        $this->load->view('frontend/templates/footer');
    }
}