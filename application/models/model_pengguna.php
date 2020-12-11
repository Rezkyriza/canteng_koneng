<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_pengguna extends CI_Model{
    public function get($username)
    {
        return $this->db->get_where('tb_user', ['username' => $username])->row_array();
    }
}