<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_prd extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('model_produk');
        $this->load->model('model_invoice');
        $this->load->model('model_jadwal');
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

    public function detail($id){
        $where = array('id' => $id);
        $data['pembelian'] = $this->model_invoice->ambil_id_pembelian($where, 'tb_pembelian')->result();
        $this->load->view('header');
        $this->load->view('sidebar/sidebar_prd');
        $this->load->view('produksi/detail_pembelian', $data);
        $this->load->view('footer');
    }

    public function pemesanan(){
        $data['inv_psn'] = $this->model_invoice->tampil_data_pesanan();
        $this->load->view('header');
        $this->load->view('sidebar/sidebar_prd');
        $this->load->view('produksi/pemesanan_prd', $data);
        $this->load->view('footer');
    }

    public function ajukan_harga($id_pesanan){
        $where = array('id_pesanan' => $id_pesanan);
        $data['ajukan'] = $this->model_invoice->ambil_data_ajukan($where, 'tb_pesanan')->result();
        $this->load->view('header');
        $this->load->view('sidebar/sidebar_prd');
        $this->load->view('produksi/ajukan_harga', $data);
        $this->load->view('footer');
    }

    public function proses_ajukan(){
        $id_pesanan     =$this->input->post('id_pesanan');
        $jumlah         =$this->input->post('jumlah');
        $rincian        =$this->input->post('rincian');
        $total          =$this->input->post('total');

        $data = array(
            'id_pesanan'    => $id_pesanan,
            'jumlah'        => $jumlah,
            'rincian'       => $rincian,
            'total'          => $total
        );

        $where = array(
            'id_pesanan' => $id_pesanan
        );

        $this->model_invoice->update_data_pesanan($where,$data,'tb_pesanan');
        redirect('dashboard_prd/index');
    }

    public function penjadwalan_psn($id_pesanan){
        $where = array('id_pesanan' => $id_pesanan);
        $data['jadwalpsn'] = $this->model_jadwal->ambil_jadwalpsn($where, 'tb_pesanan')->result();
        $this->load->view('header');
        $this->load->view('sidebar/sidebar_prd');
        $this->load->view('produksi/jadwal_pesanan', $data);
        $this->load->view('footer');
    }

}