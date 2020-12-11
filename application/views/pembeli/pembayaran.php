<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total=0;
                if($keranjang = $this->cart->contents()){
                    foreach($keranjang as $item){
                        $grand_total = $grand_total + $item['subtotal'];
                    }

                    echo "Total belanja anda: Rp. ".number_format($grand_total,0,',','.');
                
                ?>
            </div><br><br>
            <h3>Input Alamat Pengiriman dan Pembayaran</h3>

            <form method = "post" action="<?php echo base_url('dashboard_pmb/proses_pembelian') ?> ">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Nomor Telephone</label>
                    <input type="text" name="no_tlp" placeholder="Nomor Telephone Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select class="form-control">
                        <option>JNE</option>
                        <option>JNT</option>
                        <option>Pos Indonesia</option>
                        <option>SiCepat</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Pilih BANK</label>
                    <select class="form-control">
                        <option>BCA - xxxxxxxx</option>
                        <option>BRI - xxxxxxxx</option>
                        <option>BNI - xxxxxxxx</option>
                        <option>Mandiri- xxxxxxxx</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary mb-3">Kirim</button>
            </form>

            <?php
            } else{
                echo "<h4>Anda Belum Memiliki Keranjang Belanja";
            }
            ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>