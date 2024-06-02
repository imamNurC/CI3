<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_member extends CI_Controller {

public function __construct()

{
parent::__construct();
    $this->load->library(['form_validation', 'session']);
    $this->load->helper('url');
    $this->load->model('M_member','member');
    $this->table = 'member';
}

public function index()
{   
    $this->load->view('form/v_login');
}


public function signup(){
    if($this->input->method() === 'post'){
        $rules = $this->member->rulesLogin();
        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() != FALSE) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            if($email and $password){
                $data = [
                'email' => $email,
                'password' => $password
                ];
                
                $cek=$this->member->getOne($this->table,$data)->num_rows();
                
                if($cek>0){
                    $data['user'] = $this->member->displayAll($this->table)->result();
                    $this->load->view('form/v_member',$data);
                }else{
                    $this->session->set_flashdata('error', 'Email atau password tidak cocok');
                    redirect('form/login');
                }
            }
            }else{
                $this->session->set_flashdata('error', 'Seluruh data harus diisi');
                redirect('form/login');
            }//end if validation
        }//end if post
    }//end if function

}