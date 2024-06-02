<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pegawai extends CI_Controller {
public function __construct() {
parent::__construct();
// load base_url
$this->load->helper('url');
}

public function index()
{

$this->load->view('form/v_pegawai');

}

public function save()

{

$data['name'] = $this->input->post('nama');
$data['email'] = $this->input->post('email');
$data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
$data['agama'] = $this->input->post('agama');
$data['alamat'] = $this->input->post('alamat');
$this->load->view('form/result_pegawai',$data);

}

}