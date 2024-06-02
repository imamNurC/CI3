<?php

class M_member extends CI_Model{
    public function displayAll($table){
        return $this->db->get($table);
    }

    public function getOne($table,$where){
        return $this->db->get_where($table,$where);
    }
    
    public function rulesLogin(){

        return [
            [
            'field' => 'email',
            'label' => 'email',
            'rules' => 'required|valid_email'
            ],
            [
            'field' => 'password',
            'label' => 'password',
            'rules' => 'required|max_length[32]'
            ],
        ];

    }
}