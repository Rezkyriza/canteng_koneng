<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_produk extends CI_Model{
    public function tampil_data(){
        return $this->db->get('tb_produk');
    }

    public function tampil_motif1(){
        return $this->db->where('motif', 'fauna')->get('tb_produk');
    }

    public function tampil_motif2(){
        return $this->db->where('motif', 'flora')->get('tb_produk');
    }

    public function tampil_motif3(){
        return $this->db->where('motif', 'alam')->get('tb_produk');
    }

    public function tampil_motif4(){
        return $this->db->where('motif', 'abstrak')->get('tb_produk');
    }

    public function tampil_warna1(){
        return $this->db->where('warna', 'gelap')->get('tb_produk');
    }

    public function tampil_warna2(){
        return $this->db->where('warna', 'terang')->get('tb_produk');
    }

    public function tampil_warna3(){
        return $this->db->where('warna', 'banyak warna')->get('tb_produk');
    }

    public function tambah_produk($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_produk($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_produk($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function find($id_produk){
        $result = $this->db->where('id_produk',$id_produk)
                           ->limit(1)
                           ->get('tb_produk');
        if($result->num_rows()>0){
            return $result->row();
        } else{
            return array();
        }
    }

    public function detail_produk($id_produk){
        $result = $this->db->where('id_produk',$id_produk)->get('tb_produk');
        if($result->num_rows()>0){
            return $result->result();
        }else{
            return false;
        }
    }

    public function simpan_data($data,$table){
        $this->db->insert($table,$data);
    }

    public function tampil_pesanan(){
        return $this->db->get('tb_pesanan');
    }

    public function tampil_pembelian(){
        return $this->db->get('tb_pembelian');
    }
}