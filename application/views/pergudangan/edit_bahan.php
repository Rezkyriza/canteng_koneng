<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA BAHAN</h3>

    <?php foreach($bahan as $bhn) :?>
        <form method="post" action="<?php echo base_url().'dashboard_pgd/update_bahan' ?>">
            <div>
                <label>ID Bahan</label>
                <input type="text" readonly name="id_bahan" class="form-control" value="<?php echo $bhn->id_bahan ?>">
            </div>
            <div>
                <label>Nama Bahan</label>
                <input type="text" readonly name="nama_bhn" class="form-control" value="<?php echo $bhn->nama_bhn ?>">
            </div>

            <div>
                <label>Stok Bahan</label>
                <input type="text" name="stok" class="form-control" value="<?php echo $bhn->stok ?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
        </form>
    <?php endforeach; ?>
</div>