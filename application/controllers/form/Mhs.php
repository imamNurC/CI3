<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mhs extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library(['form_validation', 'session']);
        $this->load -> helper('url');
        $this->load->model('M_mhs','mhs');
        $this->table = 'mahasiswa';

        }
        public function index(){
            $this->load->library('session');
            $data['mhs']=$this->mhs->getall();
            $this->load->view('form/v_mhs',$data);
            //$this->load->view('form/v_mhs');
    }

    public function savemhs(){
        if ($this->input->method() === 'post') {
            $rules = $this->mhs->rulesmhs();
            
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() != FALSE) {
                
                $datamhs = [
                
                    'npm'=>$this->input->post('npm'),
                    'nama' => $this->input->post('nama'),
                    'jurusan' => $this->input->post('jurusan'),
                    'telp' => $this->input->post('telp'),
                    'alamat'=>$this->input->post('alamat')
                ];
                $mhs_saved = $this->mhs->insert($datamhs);
                if ($mhs_saved) {
                    $this->session->set_flashdata('msg','Data berhasil disimpan');
                    $this->session->set_flashdata('msg_class','alert-success');
                    redirect('form/mhs/index');
                }
            }else{
                //echo "semua harus diisi";
                $this->session->set_flashdata('msg','Semua harus diisi!');
                
                $this->session->set_flashdata('msg_class','alert-warning');
                
            }
                return redirect('form/mhs/index');
            }//end if post
        }//end if function



        public function update(){
            $npm=$this->input->post('npm');
            $nama=$this->input->post('nama');
            $jurusan=$this->input->post('jurusan');
            $telp=$this->input->post('telp');
            $alamat=$this->input->post('alamat');
            $data=array(
            'nama'=>$nama,
            'jurusan'=>$jurusan,
            'telp'=>$telp,
            'alamat'=>$alamat
            );
            $where=array('npm'=>$npm);
            $this->mhs->update_data($where,$data,$this->table);
            
            $this->session->set_flashdata('msg','Data berhasil diupdate');
            $this->session->set_flashdata('msg_class','alert-success');
            redirect('form/mhs/index');

        }


        public function edit($id){
            $where=array('npm'=>$id);
            $data['user']=$this->mhs->edit_data($where,$this->table)->result();
            $this->load->view('form/v_editmhs',$data);
        }


        public function hapus($id){
            $where=array('npm'=>$id);
            $this->mhs->hapus_data($where,$this->table);
            redirect('form/mhs/index');
        }
}