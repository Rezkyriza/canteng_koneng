<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>Form Pengajuan Harga</h3>

    <?php foreach($ajukan as $ajk) :?>
        <form method="post" action="<?php echo base_url().'dashboard_prd/proses_ajukan' ?>">
            <div>
                <label>ID Pesanan</label>
                <input type="text" name="id_pesanan" class="form-control" value="<?php echo $ajk->id_pesanan ?>">
            </div>

            <div class="form-group">
              <label><strong>Nama Lengkap</strong></label>
              <input type="text" readonly name="nama" class="form-control" value="<?php echo $ajk->nama?>">
            </div>

            <div class="form-group">
                <label><strong>Alamat Lengkap</strong></label>
                <input type="text" readonly name="alamat" class="form-control" value="<?php echo $ajk->alamat?>">
            </div>

            <div class="form-group">
                <label><strong>Nomor Telephone</strong></label>
                <input type="text" readonly name="no_tlp" class="form-control" value="<?php echo $ajk->no_tlp?>">
            </div>

            <div>
                <label>Jumlah Produk</label>
                <input type="text" name="jumlah" class="form-control" value="<?php echo $ajk->jumlah ?>">
            </div>

            <div>
                <label>Motif yang diajukan pemesan</label>
                <input type="text" name="rincian" class="form-control" value="<?php echo $ajk->motif ?>">
            </div>

            <div>
                <label>Warna yang diajukan pemesan</label>
                <input type="text" name="rincian" class="form-control" value="<?php echo $ajk->warna ?>">
            </div>

            <div>
                <label>Rincian Tambahan Produk</label>
                <input type="text" name="rincian" class="form-control" value="<?php echo $ajk->rincian ?>">
            </div>

            <div>
                <label>Harga</label>
                <input type="text" name="total" class="form-control" value="<?php echo $ajk->total ?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-3">Ajukan</button>
        </form>
    <?php endforeach; ?>
</div>