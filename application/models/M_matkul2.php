<?php
class M_matkul2 extends CI_Model
{
    private $_table = "matkul";

    public function getall()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        return $this->db->get()->result();
    }
    public function insert($mhs)
    {
        if (!$mhs) {
            return;
        }
        return $this->db->insert($this->_table, $mhs);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where)->result();
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
