<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_matkul extends CI_Model {

    // Mendapatkan semua data Matkul
    public function get_all() {
        return $this->db->get('matkul')->result(); // Ambil semua data dari tabel 'matkul'
    }

    // Menyimpan data Matkul baru
    public function insert($data) {
        $this->db->insert('matkul', $data); // Masukkan data baru ke dalam tabel 'matkul'
    }

    // Menghapus data Matkul berdasarkan ID
    public function delete($id) {
        $this->db->delete('matkul', array('kd_mk' => $id)); // Hapus data Matkul dengan ID tertentu dari tabel 'matkul'
    }

    // Mengambil data Matkul berdasarkan ID
    public function get_by_id($id) {
        return $this->db->get_where('matkul', array('kd_mk' => $id))->row(); // Ambil data Matkul dengan ID tertentu dari tabel 'matkul'
    }

    // Menyimpan perubahan data Matkul setelah proses edit
    public function update($id, $data) {
        $this->db->where('kd_mk', $id); // Filter berdasarkan ID
        $this->db->update('matkul', $data); // Update data Matkul yang sesuai dengan ID
    }

    public function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }


    // public function edit_data($where,$table){
    //     return $this->db->get_where($table,$where)->row(); // Use row() instead of result() if you expect only one row
    // }
    

    // public function hapus_data($where,$table){
    //     $this->db->where($where);
    //     $this->db->delete($table);
    // }

}
