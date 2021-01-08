<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>Detail Pembelian</h3>

    <?php foreach($pembelian as $pmb) :?>
        <form method="post" action="<?php echo base_url().'dashboard_prd/detail' ?>">
            <div>
                <label>ID Invoice</label>
                <input type="text" name="id" class="form-control" value="<?php echo $pmb->id ?>">
            </div>

            <div>
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $pmb->nama ?>">
            </div>

            <div>
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" value="<?php echo $pmb->alamat ?>">
            </div>

            <div>
                <label>ID Produk</label>
                <input type="text" name="id_produk" class="form-control" value="<?php echo $pmb->id_produk ?>">
            </div>

            <div>
                <label>Nama Produk</label>
                <input type="text" name="nama_prdk" class="form-control" value="<?php echo $pmb->nama_prdk ?>">
            </div>

            <div>
                <label>Jumlah</label>
                <input type="text" name="jumlah" class="form-control" value="<?php echo $pmb->jumlah ?>">
            </div>

            <div>
                <label>Total Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $pmb->harga ?>">
            </div>

            <div>
                <label>Bukti Pembayaran</label>
                <img src="<?php echo base_url().'/uploads/'.$pmb->gambar?>" class="" height="200" width="150" style="display: block; margin: auto;">
            </div>

            <?php echo anchor('dashboard_prd/pembelian','<div class="btn btn-sm btn-danger mt-3">Kembali</div>') ?>
        </form>
    <?php endforeach; ?>
</div>