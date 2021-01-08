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
                    <?php
                        echo form_open('dashboard_pmb/tambah_keranjang');
                        echo form_hidden('id', $prd->id_produk);
                        echo form_hidden('price', $prd->harga);
                        echo form_hidden('name', $prd->nama_prdk);
                        echo form_hidden('redirect_page', str_replace('index.php/','',current_url()));
        ?>
                    <div class="row">
                        <div class="col-sm-2"><input type="number" name="qty" max="10000" step="1" min="1" value="1" class="form-control"></div>
                        <div class="col-sm-2"><button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-cart-plus"> Add </i></button></div>
                        
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>