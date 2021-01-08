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
            <?php foreach($bayar as $byr) :?>
            <h3>Input Alamat Pengiriman dan Pembayaran</h3>

            <form action="<?php echo base_url(). 'dashboard_pmb/proses_pembelian';?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" readonly name="nama" class="form-control" value="<?php echo $byr->nama?>">
                </div>

                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" readonly name="alamat" class="form-control" value="<?php echo $byr->alamat?>">
                </div>

                <div class="form-group">
                    <label>Nomor Telephone</label>
                    <input type="text" readonly name="no_tlp" class="form-control" value="<?php echo $byr->no_tlp?>">
                </div>

                <div>
                    <label>Upload Bukti Pembayaran</label>
                    <input type="file" name="gambar" class="form-control">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Bayar</button>
                </div>
            </form>
            <?php endforeach; ?>

            <?php
            } else{
                echo "<h4>Anda Belum Memiliki Keranjang Belanja";
            }
            ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>