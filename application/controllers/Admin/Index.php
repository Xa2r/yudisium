<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Spipu\Html2Pdf\Html2Pdf;

class Index extends CI_Controller {

    var $API_PERPUSTAKAAN = "";
    var $API_KEUANGAN = "";
    var $API_WISUDA = "";
    var $API_LABORATORIUM = "";

    function __construct()
    {
        parent::__construct();
        $this->API_PERPUSTAKAAN = "https://private-1704aa-perpusdummy.apiary-mock.com/rest/V1/perpustakaan?nim=";
        $this->API_KEUANGAN = "https://private-daf49-keuangandummy.apiary-mock.com/rest/V1/keuangan?nim=";
        $this->API_WISUDA = "https://private-c436a6-pembayaranwisudadummy.apiary-mock.com/rest/V1/wisuda?nim=";
        $this->API_LABORATORIUM = "https://private-e11bed-laboratoriumdummy.apiary-mock.com/rest/V1/laboratorium?nim=";
        $this->load->library('curl');
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
        $lists = $this->Select->getJurusan();
        $data = [];
        foreach($lists as $list) {
            $nim = $list['nim'];
            $data['request'] = [
                json_decode($this->curl->simple_get($this->API_KEUANGAN.$nim)),
                json_decode($this->curl->simple_get($this->API_PERPUSTAKAAN.$nim)),
                json_decode($this->curl->simple_get($this->API_WISUDA.$nim)),
                json_decode($this->curl->simple_get($this->API_LABORATORIUM.$nim))
            ];
        }
        $data['obj'] = $this->Select;
        $data['admin'] = $this->Login->getSessionAdmin($this->session->userdata('username'));
        $data['yud_mahasiswa'] = $this->Select->getYudisiumMahasiswa();
        $data['list'] = $this->Select->getJurusan();
        $data['kategori'] = $this->Select->getCategory();
        $this->load->view('admin/template/header');
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/list_seleksi', $data);
        $this->load->view('admin/template/footer');
    }

    public function laboran()
    {
        $data['admin'] = $this->Login->getSessionAdmin($this->session->userdata('username'));
        $data['bebas_lab'] = $this->Select->getBebasLab();
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

    function cetakBebasLab($nim){
        $data['admin'] = $this->Login->getSessionAdmin($this->session->userdata('username'));
        $data['mahasiswa'] = $this->Select->getMahasiswaById($nim);
        try {
            ob_start();
            $this->load->view('admin/template/surat_bebas_lab', $data);
            $content = ob_get_clean();
        
            $html2pdf = new Html2Pdf('P', 'A4', 'en');
            $html2pdf->writeHTML($content);
            $html2pdf->output('surat_bebeas_lab.pdf');
        } catch (Html2PdfException $e) {
            $html2pdf->clean();
        
            $formatter = new ExceptionFormatter($e);
            echo $formatter->getHtmlMessage();
        }
    }
}