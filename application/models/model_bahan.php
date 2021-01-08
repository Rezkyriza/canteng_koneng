<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_bahan extends CI_Model{
    public function tampil_data(){
        return $this->db->get('tb_bahan');
    }

    public function edit_bahan($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_bahan($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function simpan_data($data,$table){
        $this->db->insert($table,$data);
    }
}