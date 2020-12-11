<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA PRODUK</h3>

    <?php foreach($produk as $prd) :?>
        <form method="post" action="<?php echo base_url().'dashboard_prd/update' ?>">
            <div>
                <label>Nama Produk</label>
                <input type="text" name="nama_prdk" class="form-control" value="<?php echo $prd->nama_prdk ?>">
            </div>

            <div>
                <label>Keterangan</label>
                <input type="hidden" name="id_produk" class="form-control" value="<?php echo $prd->id_produk ?>">
                <input type="text" name="keterangan" class="form-control" value="<?php echo $prd->keterangan ?>">
            </div>

            <div>
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $prd->harga ?>">
            </div>

            <div>
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" value="<?php echo $prd->stok ?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
        </form>
    <?php endforeach; ?>
</div>