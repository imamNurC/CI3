<?php
class M_frs extends CI_Model
{
    private $_table = "frs";
    public function getall()
    {
        $this->db->select('*');
        $this->db->from('frs');
        $this->db->join('mahasiswa', 'frs.npm = mahasiswa.npm', 'inner');
        $this->db->join('matkul', 'frs.kd_mk = matkul.kd_mk', 'inner');
        //$this->db->where('tbl_salary.status',0);
        $query = $this->db->get();
        //echo $this->db->last_query();

        return $query->result();
    }
    public function insert($frs)
    {
        if (!$frs) {
            return;
        }
        return $this->db->insert($this->_table, $frs);
    }

    public function edit_data($where, $table)
    {
        $this->db->select('*')
            ->from('frs')
            ->join('mahasiswa', 'frs.npm = mahasiswa.npm', 'inner')
            ->join('matkul', 'frs.kd_mk = matkul.kd_mk', 'inner')
            ->where('frs.id', $where);
        $query = $this->db->get()->result();
        return $query;
    }
    public function ubah_data($id = null)
    {
        $this->db->select();
        $this->db->from('frs as a');
        $this->db->join('mahasiswa as b', 'a.npm=b.npm', 'inner');
        $this->db->join('matkul as c', 'a.kd_mk=c.kd_mk', 'innner');
        if ($id != null) {
            $this->db->where($id);
        }
        $query = $this->db->get()->result();
        return $query;
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

    public function get_name($title)
    {
        $this->db->like('npm', $title, 'BOTH');
        $this->db->order_by('npm', 'asc');
        $this->db->limit(3);
        return $this->db->get('mahasiswa')->result();
        ///var_dump($query);
    }
    public function get_matkul($title)
    {
        $this->db->like('kd_mk', $title, 'BOTH');
        $this->db->order_by('kd_mk', 'asc');
        $this->db->limit(3);
        return $this->db->get('matkul')->result();
        ///var_dump($query);
    }
}
