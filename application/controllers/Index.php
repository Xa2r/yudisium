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
		
	}

    public function index()
    {
        $this->load->view('index');
    }

    public function login()
    {
        $this->load->view('frontend/login');
    }

    public function home()
    {
        $this->load->view('frontend/home');
    }

    public function biodata()
    {
        $this->load->view('frontend/form_biodata');
    }

    public function list()
    {
        $data['request'] = [json_decode($this->curl->simple_get($this->API_KEUANGAN.'14030001')),
                                json_decode($this->curl->simple_get($this->API_PERPUSTAKAAN.'14030001'))];
        $data['kategori'] = $this->Select->getCategory();
        $this->load->view('frontend/list_yudisium', $data);
    }
}