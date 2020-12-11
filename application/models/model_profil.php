<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_profil extends CI_Model{
    
    public function getProfilUser($username)
    {
        $this->db->select('*'); //memilih semua field
        $this->db->from('tb_user'); //memilih tabel
        $this->db->where('username', $username);
        $query = $this->db->get();
        return $query->result();
    }
    public function getData()
    {
        return $this->db->get('tb_user');
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
}