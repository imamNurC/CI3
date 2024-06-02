<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
public function __construct() {
parent::__construct();
// load base_url
$this->load->helper('url');
$this->load->library('form_validation');
$this->load->library('session');
}

public function index()
{

$this->load->view('form/v_login');

}

public function login() {
    $this->form_validation->set_rules('username','Username','required');
    $this->form_validation->set_rules('pwd','Password','required');
    
    if ($this->form_validation->run() == TRUE) {
        $username = $this->input->post('username');
        $password = $this->input->post('pwd');

        // Lakukan pengecekan autentikasi
        if ($username === 'admin' && $password === 'adm1n321') {
            // Autentikasi berhasil
            // Redirect ke halaman atau form berikutnya
            $this->load->view('form/form_studi');
        } else {
            // Autentikasi gagal, tampilkan pesan error atau form login kembali
            $data['error'] = 'Username atau password salah';
            $this->load->view('form/v_login', $data);
        }
    } else {
        // Jika validasi form gagal, tampilkan kembali form login dengan error
        $this->load->view('form/v_login');
    }
}

public function signup(){
    $this->form_validation->set_rules('name','Name','required');
    $this->form_validation->set_rules('email','Email','required');
    $this->form_validation->set_rules('phone','Phone','required');
    if($this->form_validation->run()==TRUE){
    $this->load->view('welcome_message');
    }else{
    $this->load->view('form/v_signup');
    }
    }

}

