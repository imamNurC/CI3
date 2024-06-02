<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matkul extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library(['form_validation', 'session']);
        $this->load -> helper('url');
        $this->load->model('M_matkul','matkul');
        $this->table = 'matkul';

        }
        public function index(){
            $this->load->library('session');
            $data['matkul']=$this->matkul->get_all();
            $this->load->view('form/v_matkul',$data);
            //$this->load->view('form/v_matkul');
    }


    // Menyimpan data Matkul baru
    public function save() {
        $data = array(
            'kd_mk' => $this->input->post('kd_mk'),
            'matkul' => $this->input->post('matkul'),
            'sks' => $this->input->post('sks'),
            'semester' => $this->input->post('semester')
        );
        $this->matkul->insert($data); // Panggil method insert dari model untuk menyimpan data baru
        redirect('form/matkul/index');

    }

    // Menghapus data Matkul berdasarkan ID
    public function delete($id) {
        $this->matkul->delete($id); // Panggil method delete dari model untuk menghapus data
        redirect('form/matkul/index');
  
    }

    // Mengambil data Matkul berdasarkan ID untuk proses edit
    public function edit($id) {
        $where=array('kd_mk'=>$id);
        $data['matkul'] = $this->matkul->edit_data($where,$this->table)->result(); // Ambil data Matkul berdasarkan ID
        $this->load->view('form/v_edit_matkul', $data); // Tampilkan halaman edit dengan data Matkul yang akan diedit
    }
    

    // Menyimpan perubahan data Matkul setelah proses edit
    public function update() {
        $data = array(
            'matkul' => $this->input->post('matkul'),
            'sks' => $this->input->post('sks'),
            'semester' => $this->input->post('semester')
        );
        $this->matkul->update($this->input->post('kd_mk'), $data); // Panggil method update dari model untuk menyimpan perubahan

        $this->session->set_flashdata('msg','Data berhasil diupdate');
        $this->session->set_flashdata('msg_class','alert-success');
        redirect('form/matkul/index');

    }


    
}
