<?php

class Model_jadwal extends CI_Model{
    public function ambil_jadwalpsn($where,$table){
        return $this->db->get_where($table,$where);
    }
    public function update_data_pesanan($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

}