<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_pmb extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('model_produk');
        $this->load->model('model_profil');
        $this->load->model('model_invoice');
        $this->load->helper('url');
    }

    public function index(){
        $data['produk'] = $this->model_produk->tampil_data()->result();
        $this->load->view('header');
        $this->load->view('sidebar/sidebar_pmb');
        $this->load->view('pembeli/pembeli', $data);
        $this->load->view('footer');
    }

    public function edit_profil(){
        $username = $this->session->userdata('username');
        $data['profil'] = $this->model_profil->getProfilUser($username);
        $data['tb_user'] = $this->model_profil->getData()->result();
        $this->load->view('header');
        $this->load->view('sidebar/sidebar_pmb');
        $this->load->view('pembeli/edit_profil', $data);
        $this->load->view('footer');
    }
    
    public function update_profil(){
        $id_user        =$this->input->post('id_user');
        $nama           =$this->input->post('nama');
        $username       =$this->input->post('username');
        $password       =$this->input->post('password');
        $alamat         =$this->input->post('alamat');
        $no_tlp         =$this->input->post('no_tlp');

        $data = array(
            'id_user'       => $id_user,
            'nama'          => $nama,
            'password'      => $password,
            'alamat'        => $alamat,
            'no_tlp'        => $no_tlp
        );

        $where = array(
            'username' => $username
        );

        $this->model_profil->update_data($where,$data,'tb_user');
        redirect('dashboard_pmb');
    }

    public function detail($id_produk){
        $data['produk'] = $this->model_produk->detail_produk($id_produk);
        $this->load->view('header');
        $this->load->view('sidebar/sidebar_pmb');
        $this->load->view('pembeli/detail_produk', $data);
        $this->load->view('footer');
    }

    public function tambah_keranjang($id_produk){
        $produk = $this->model_produk->find($id_produk);


        $data = array(
            'id'      => $produk->id_produk,
            'qty'     => 1 ,
            'price'   => $produk->harga,
            'name'    => $produk->nama_prdk
    );
    
    $this->cart->insert($data);
    redirect('dashboard_pmb/index');
    }

    public function detail_keranjang(){
        $this->load->view('header');
        $this->load->view('sidebar/sidebar_pmb');
        $this->load->view('pembeli/keranjang');
        $this->load->view('footer');
    }

    public function hapus_keranjang(){
        $this->cart->destroy();
        redirect('pembeli/pembeli/index');
    }

    public function pembayaran(){
        $this->load->view('header');
        $this->load->view('sidebar/sidebar_pmb');
        $this->load->view('pembeli/pembayaran');
        $this->load->view('footer');
    }

    public function proses_pembelian(){
        $is_processed = $this->model_invoice->index();
        if($is_processed){
            $this->cart->destroy();
            $this->load->view('header');
            $this->load->view('sidebar/sidebar_pmb');
            $this->load->view('pembeli/proses_pembelian');
            $this->load->view('footer');
        } else{
            echo "Maaf, Pembelian Anda Gagal Diproses";
        }
    }

    public function tampil_form_psn(){
        $this->load->view('header');
        $this->load->view('sidebar/sidebar_pmb');
        $this->load->view('pembeli/tambah_pesanan');
        $this->load->view('footer');
        
    }

    public function simpan_pesanan(){
        
        $jumlah     =$this->input->post('jumlah');
        $rincian    =$this->input->post('rincian');
        

        $data = array(
            'id_pesanan'   => '',
            'jumlah'       => $jumlah,
            'rincian'      => $rincian
        );
        $this->model_produk->simpan_data($data,'tb_pesanan');
        redirect('dashboard_pmb/index');
    }
    
    public function tampil_data_psn(){
        $data['data'] = $this->model_produk->tampil_pesanan()->result();
        $this->load->view('header');
        $this->load->view('sidebar/sidebar_pmb');
        $this->load->view('pembeli/tampil_pesanan', $data);
        $this->load->view('footer');
    }
    
}