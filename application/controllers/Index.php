<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Spipu\Html2Pdf\Html2Pdf;

class Index extends CI_Controller {

    var $API_PERPUSTAKAAN = "";
    var $API_KEUANGAN = "";
    var $API_WISUDA = "";

    function __construct()
    {
        parent::__construct();
        $this->API_PERPUSTAKAAN = "https://private-1704aa-perpusdummy.apiary-mock.com/v1/api?nim=";
        $this->API_KEUANGAN = "https://private-daf49-keuangandummy.apiary-mock.com/v1/api?nim=";
        $this->API_WISUDA = "https://private-c436a6-pembayaranwisudadummy.apiary-mock.com/v1/api?nim=";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('Select');
        $this->load->model('Login');
        $this->load->model('Update');
        $this->load->model('Insert');
		
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
                $data['status_validation'] = $this->Select->getStatusVerifikasiByNim($nim);
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
        $data['status_validation'] = $this->Select->getStatusVerifikasiByNim($nim);
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
        $data['status_validation'] = $this->Select->getStatusVerifikasiByNim($nim);
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
        $data['request'] = [
                                json_decode($this->curl->simple_get($this->API_KEUANGAN.$nim)),
                                json_decode($this->curl->simple_get($this->API_PERPUSTAKAAN.$nim)),
                                json_decode($this->curl->simple_get($this->API_WISUDA.$nim))
                            ];
        $data['nim'] = $nim;
        $data['kategori'] = $this->Select->getCategory();
        $data['user'] = $this->Select->getMahasiswaById($nim);
        $data['bebas_lab'] = $this->Select->getBebasLabById($nim);
        $data['obj'] = $this->Select;
        $data['image'] = $this->Select->getImagesByNim($nim);
        $data['status_validation'] = $this->Select->getStatusVerifikasiByNim($nim);
        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/list_yudisium', $data);
        $this->load->view('frontend/templates/footer');
    }

    public function uploadImg($category_id)
    {
        $nim = $this->session->userdata('id_user');
        $upload = $this->Insert->addImg();
        if ($upload['result'] == 'success') {
            $this->Insert->addBerkas($nim, $upload, $category_id);
            $this->session->set_flashdata('success', 'Data berhasil di upload');
            redirect('list_yudisium');
        } else {
            $this->session->set_flashdata('danger', 'Data gagal di upload');
            redirect('list_yudisium');
        }
    }

    public function updateImage($kd_kategori)
    {
        $nim = $this->session->userdata('id_user');
        $upload = $this->Insert->addImg();
        if ($upload['result'] == 'success') {
            $this->Update->updateImage($nim, $upload, $kd_kategori);
            $this->session->set_flashdata('success', 'Data berhasil di upload');
            redirect('list_yudisium');
        } else {
            $this->session->set_flashdata('danger', 'Data gagal di upload '.$upload['error']);
            redirect('list_yudisium');
        }
    }

    function cetakYudisium(){
        $nim = $this->session->userdata('id_user');
        $data['mahasiswa'] = $this->Select->getMahasiswaById($nim);
        try {
            ob_start();
            $this->load->view('frontend/templates/surat_yudisium', $data);
            $content = ob_get_clean();
        
            $html2pdf = new Html2Pdf('P', 'A4', 'en');
            $html2pdf->writeHTML($content);
            $html2pdf->output('surat_yudisium.pdf');
        } catch (Html2PdfException $e) {
            $html2pdf->clean();
        
            $formatter = new ExceptionFormatter($e);
            echo $formatter->getHtmlMessage();
        }
    }
}