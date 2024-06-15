<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Matkul2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(['form_validation', 'session']);
        $this->load -> helper('url');

        $this->load->model('M_matkul2', 'matkul');
        $this->table = 'matkul';
    }
    public function index()
    {
        $data['matkul'] = $this->matkul->getall();
        $this->load->view('form/v_displaymatkul', $data);
    }
    public function display()
    {
        $data['matkul'] = $this->matkul->getall();
        $this->load->view('form/v_displaymatkul', $data);
    }

    public function addMatkul()
    {
        if ($this->input->method() === 'post') {
            $datamatkul = [

                'kd_mk' => $this->input->post('kd_mk'),
                'matkul' => $this->input->post('matkul'),
                'semester' => $this->input->post('semester'),
                'sks' => $this->input->post('sks')
            ];
            $matkul_saved = $this->matkul->insert($datamatkul);
            if ($matkul_saved) {
                redirect('form/matkul2/display');
            }
        }
    }

    public function delete($id)
    {
        $where = array('kd_mk' => $id);
        $delete = $this->matkul->hapus_data($where, $this->table);
        if ($delete) {
            echo json_encode(array("status" => true));
        } else {
            echo json_encode(array("status" => false));
        }
    }

    function edit($id){
        $where=array('kd_mk'=>$id);
        $data=$this->matkul->edit_data($where,$this->table);
        if($data){
        echo json_encode(array("status" => true , 'data' => $data));
        }else{
        echo json_encode(array("status" => false));
        }
    }


    public function update(){
        $kd_mk=$this->input->post('hdnMatkulId');
        // $matkul=$this->input->post('matkul_edit');
        // $smt=$this->input->post('smt_edit');
        $sks=$this->input->post('sks_edit');
        $data=array(
        // 'matkul'=>$matkul,
        // 'semester'=>$smt,
        'sks'=>$sks
        );
        $where=array('kd_mk'=>$kd_mk);
        $test=$this->matkul->update_data($where,$data,$this->table);
        redirect('form/matkul2/display');
    }
}
