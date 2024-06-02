<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Studi extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Load helper for URL and form
        $this->load->helper(['url', 'form']);
        // Load library for form validation
        $this->load->library('form_validation');
    }

    public function save() {
        // Validasi form
        $this->form_validation->set_rules('npm', 'NPM', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        // Tambahkan validasi untuk field lainnya sesuai kebutuhan
    
        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, kembali ke form input
            $this->load->view('form/input_nilai');
        } else {
            // Jika validasi berhasil, hitung total nilai
            $nilai_uts = $this->input->post('nilai_uts');
            $nilai_uas = $this->input->post('nilai_uas');
            $nilai_tugas = $this->input->post('nilai_tugas');
            $nilai_kehadiran = $this->input->post('nilai_kehadiran');
    
            // Hitung total nilai
            $total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas + $nilai_kehadiran) / 4;
    
            // Masukkan data total nilai ke dalam array data
            $data['npm'] = $this->input->post('npm');
            $data['nama'] = $this->input->post('nama');
            $data['jurusan'] = $this->input->post('jurusan');
            $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
            $data['nilai_uts'] = $nilai_uts;
            $data['nilai_uas'] = $nilai_uas;
            $data['nilai_tugas'] = $nilai_tugas;
            $data['nilai_kehadiran'] = $nilai_kehadiran;
            $data['total_nilai'] = $total_nilai;
    
            // Load view hasil studi dengan data yang telah dihitung
            $this->load->view('form/hasil_studi', $data);
        }
    }
    
}