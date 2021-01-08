<?php

class Model_invoice extends CI_Model{
    public function index(){
        date_default_timezone_set('Asia/Jakarta');
        $tgl_pesan = date('Y-m-d');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
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
        $status = $this->input->post('status');

        /*$invoice = array(
            'nama'          => $nama,
            'alamat'        => $alamat,
            'tgl_pesan'     => date('Y-m-d H:i:s'),
            'batas_bayar'   => date('Y-m-d', strtotime('+7 days', strtotime($tgl_pesan)))
        );
        $this->db->insert('tb_pembelian', $invoice);*/
        

        foreach ($this->cart->contents() as $item){
            $data = array(
                'nama'              => $nama,
                'alamat'            => $alamat,
                'id_produk'         => $item['id'],
                'nama_prdk'         => $item['name'],
                'jumlah'            => $item['qty'],
                'harga'             => $item['price'],
                'tgl_pesan'         => date('Y-m-d H:i:s'),
                'batas_bayar'       => date('Y-m-d', strtotime('+7 days', strtotime($tgl_pesan))),
                'gambar'            => $gambar,
                'status'            => "Penjual mengecek bukti pembayaran"
            );
            $this->db->insert('tb_pembelian', $data);
        }
        return TRUE;

    }

    public function tampil_data(){
        $result = $this->db->get('tb_pembelian');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }

    public function ambil_id_pembelian($where,$table){
        return $this->db->get_where($table,$where);
    }

    /*public function ambil_id_pembelian($id_invoice){
        $result = $this->db->where('id', $id_invoice)->get('tb_pembelian');
        if($result->num_rows() > 0){
            return $result->result();
        } else{
            return false;
        }
    }*/

    public function tampil_data_pesanan(){
        $result = $this->db->get('tb_pesanan');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }

    public function ambil_data_ajukan($where,$table){
        return $this->db->get_where($table,$where);
    }
    public function update_data_pesanan($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
}