<?php

class Dashboard_prd extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('model_produk');
        $this->load->model('model_invoice');
        $this->load->helper('url');
    }

    public function index(){
        $data['produk'] = $this->model_produk->tampil_data()->result();
        $this->load->view('header');
        $this->load->view('sidebar/sidebar_prd');
        $this->load->view('produksi/data_produk',$data);
        $this->load->view('footer');
    }

    public function tambah_aksi(){
        $nama_prdk = $this->input->post('nama_prdk');
        $keterangan = $this->input->post('keterangan');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $gambar = $_FILES['gambar']['name'];
        if ($gambar = '') {} else{
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')){
                echo "Gambar Gagal Diupload";
            }
            else{
                $gambar=$this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_prdk'     => $nama_prdk,
            'keterangan'    => $keterangan,
            'harga'         => $harga,
            'stok'          => $stok,
            'gambar'        => $gambar
        );

        $this->model_produk->tambah_produk($data, 'tb_produk');
        redirect('dashboard_prd/index');
    }

    public function edit_produk($id_produk){
        $where = array('id_produk' => $id_produk);
        $data['produk'] = $this->model_produk->edit_produk($where, 'tb_produk')->result();
        $this->load->view('header');
        $this->load->view('sidebar/sidebar_prd');
        $this->load->view('produksi/edit_produk', $data);
        $this->load->view('footer');
    }

    public function update(){
        $id_produk      =$this->input->post('id_produk');
        $nama_prdk      =$this->input->post('nama_prdk');
        $keterangan     =$this->input->post('keterangan');
        $harga          =$this->input->post('harga');
        $stok           =$this->input->post('stok');

        $data = array(
            'nama_prdk'     => $nama_prdk,
            'keterangan'    => $keterangan,
            'harga'         => $harga,
            'stok'          => $stok
        );

        $where = array(
            'id_produk' => $id_produk
        );

        $this->model_produk->update_data($where,$data,'tb_produk');
        redirect('dashboard_prd/index');
    }

    public function hapus($id_produk){
        $where = array('id_produk'=>$id_produk);
        $this->model_produk->hapus_produk($where, 'tb_produk');
        redirect('dashboard_prd/index');
    }

    public function pembelian(){
        $data['invoice'] = $this->model_invoice->tampil_data();
        $this->load->view('header');
        $this->load->view('sidebar/sidebar_prd');
        $this->load->view('produksi/pembelian_prd', $data);
        $this->load->view('footer');
    }

    public function detail($id_invoice){
        $data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
        $data['pembelian'] = $this->model_invoice->ambil_id_pembelian($id_invoice);
        $this->load->view('header');
        $this->load->view('sidebar/sidebar_prd');
        $this->load->view('produksi/detail_pembelian', $data);
        $this->load->view('footer');
    }

}