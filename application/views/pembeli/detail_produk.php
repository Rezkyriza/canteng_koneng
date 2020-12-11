<div class="container-fluid">
    <div class="card">
        <h5 class="card-header">Detail Produk</h5>
        <div class="card-body">
            <?php foreach($produk as $prd): ?>
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo base_url().'/uploads/'.$prd->gambar ?>"class="card-img-top">
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <tr>
                            <td>Nama Produk</td>
                            <td><strong><?php echo $prd->nama_prdk ?></strong></td>
                        </tr>

                        <tr>
                            <td>Keterangan</td>
                            <td><strong><?php echo $prd->keterangan ?></strong></td>
                        </tr>

                        <tr>
                            <td>Stok</td>
                            <td><strong><?php echo $prd->stok ?></strong></td>
                        </tr>

                        <tr>
                            <td>Harga</td>
                            <td><strong><div class="btn btn-sm btn-success">Rp. <?php echo number_format($prd->harga,0,',','.') ?></div></strong></td>
                        </tr>

                    </table>

                    <?php echo anchor('dashboard_pmb/tambah_keranjang/'.$prd->id_produk,'<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                    <?php echo anchor('dashboard_pmb/','<div class="btn btn-sm btn-danger">Kembali</div>') ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>