<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_pgd extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('model_bahan');
        $this->load->helper('url');
    }

    public function index(){
        $data['bahan'] = $this->model_bahan->tampil_data()->result();
        $this->load->view('header');
        $this->load->view('sidebar/sidebar_pgd');
        $this->load->view('pergudangan/data_bahan',$data);
        $this->load->view('footer');
    }

    public function edit_bahan($id_bahan){
        $where = array('id_bahan' => $id_bahan);
        $data['bahan'] = $this->model_bahan->edit_bahan($where, 'tb_bahan')->result();
        $this->load->view('header');
        $this->load->view('sidebar/sidebar_pgd');
        $this->load->view('pergudangan/edit_bahan', $data);
        $this->load->view('footer');
    }

    public function update_bahan(){
        $id_bahan      =$this->input->post('id_bahan');
        $nama_bhn      =$this->input->post('nama_bhn');
        $stok          =$this->input->post('stok');
        //$status        =$this->input->post('harga');

        $data = array(
            'id_bahan'     => $id_bahan,
            'nama_bhn'     => $nama_bhn,
            'stok'         => $stok
        );

        $where = array(
            'id_bahan' => $id_bahan
        );

        $this->model_bahan->update_bahan($where,$data,'tb_bahan');
        redirect('dashboard_pgd/index');
    }

    public function pendataan_bhn(){
        $this->load->view('header');
        $this->load->view('sidebar/sidebar_pgd');
        $this->load->view('pergudangan/pendataan_bhn');
        $this->load->view('footer');
        
    }

    public function simpan_pendataan(){
        $nama_bhn = $this->input->post('nama_bhn');
        $jumlah = $this->input->post('jumlah');
        $total = $this->input->post('total');

        $data = array(
            'nama_bhn'     => $nama_bhn,
            'jumlah'    => $jumlah,
            'total'         => $total,
        );

        $this->model_bahan->simpan_data($data, 'tb_pendataan_bhn');
        redirect('dashboard_pgd/index');
    }
}