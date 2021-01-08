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

    public function tambah_keranjang(){
        //$produk = $this->model_produk->find($id_produk);
        $redirect_page = $this->input->post('redirect_page');
        $data = array(
            'id'      => $this->input->post('id'),
            'qty'     => $this->input->post('qty'),
            'price'   => $this->input->post('price'),
            'name'    => $this->input->post('name')
    );
    
    $this->cart->insert($data);
    redirect($redirect_page, 'refresh');
    }
    

    public function detail_keranjang(){
        $this->load->view('header');
        $this->load->view('sidebar/sidebar_pmb');
        $this->load->view('pembeli/keranjang');
        $this->load->view('footer');
    }

    public function hapus_keranjang($rowid){
        $this->cart->remove($rowid);
        redirect('dashboard_pmb/detail_keranjang');
    }

    public function hapus_Allkeranjang(){
        $this->cart->destroy();
        redirect('pembeli/pembeli/index');
    }

    public function update_keranjang(){
        $no=1;
        foreach($this->cart->contents() as $items){
            $data = array(
                'rowid'   => $items['rowid'],
                'qty'     => $this->input->post($no.'[qty]'),
        );
        $this->cart->update($data);
        $no++;
        }
        redirect('dashboard_pmb/detail_keranjang');
    }

    public function pembayaran(){
        $username = $this->session->userdata('username');
        $data['bayar'] = $this->model_profil->getProfilUser($username);
        $data['tb_user'] = $this->model_profil->getData()->result();
        $this->load->view('header');
        $this->load->view('sidebar/sidebar_pmb');
        $this->load->view('pembeli/pembayaran', $data);
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
        $data['motif1'] = $this->model_produk->tampil_motif1()->result();
        $data['motif2'] = $this->model_produk->tampil_motif2()->result();
        $data['motif3'] = $this->model_produk->tampil_motif3()->result();
        $data['motif4'] = $this->model_produk->tampil_motif4()->result();
        $data['warna1'] = $this->model_produk->tampil_warna1()->result();
        $data['warna2'] = $this->model_produk->tampil_warna2()->result();
        $data['warna3'] = $this->model_produk->tampil_warna3()->result();
        $username = $this->session->userdata('username');
        $data['pesan'] = $this->model_profil->getProfilUser($username);
        $data['tb_user'] = $this->model_profil->getData()->result();
        $this->load->view('header');
        $this->load->view('sidebar/sidebar_pmb');
        $this->load->view('pembeli/tambah_pesanan', $data);
        $this->load->view('footer');
        
    }

    public function simpan_pesanan(){
        $nama       = $this->input->post('nama');
        $alamat     = $this->input->post('alamat');
        $no_tlp     = $this->input->post('no_tlp');
        $jumlah     =$this->input->post('jumlah');
        $motif      =$this->input->post('motif');
        $warna      =$this->input->post('warna');
        $rincian    =$this->input->post('rincian');
        

        $data = array(
            'id_pesanan'   => '',
            'nama'         => $nama,
            'alamat'       => $alamat,
            'no_tlp'       => $no_tlp,
            'jumlah'       => $jumlah,
            'motif'        => $motif,
            'warna'        => $warna,
            'rincian'      => $rincian
        );
        $this->model_produk->simpan_data($data,'tb_pesanan');
        redirect('dashboard_pmb/index');
    }
    
    public function tampil_data_psn(){
        $username = $this->session->userdata('username');
        $data['profil'] = $this->model_profil->getProfilUser($username);
        $data['data'] = $this->model_produk->tampil_pesanan()->result();
        $this->load->view('header');
        $this->load->view('sidebar/sidebar_pmb');
        $this->load->view('pembeli/tampil_pesanan', $data);
        $this->load->view('footer');
    }
    
    public function tampil_status(){
        $data['data'] = $this->model_produk->tampil_pembelian($this->session->userdata('nama'))->result();
        $this->load->view('header');
        $this->load->view('sidebar/sidebar_pmb');
        $this->load->view('pembeli/status_pembelian', $data);
        $this->load->view('footer');
    }
}