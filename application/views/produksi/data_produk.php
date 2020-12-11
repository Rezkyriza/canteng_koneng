<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambahProduk"><i class="fas fa-plus fa-sm"></i> Tambah Produk</button>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Stok</th>
            <th colspan="3">Aksi</th>
        </tr>

        <?php
        $no=1;
        foreach($produk as $prd) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $prd->nama_prdk ?></td>
            <td><?php echo $prd->keterangan ?></td>
            <td><?php echo $prd->harga ?></td>
            <td><?php echo $prd->stok ?></td>
            <td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td>
            <td><?php echo anchor('dashboard_prd/edit_produk/' .$prd->id_produk, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
            <td><?php echo anchor('dashboard_prd/hapus_produk/' .$prd->id_produk, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
        </tr>
        <?php endforeach; ?>

    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahProduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?php echo base_url(). 'dashboard_prd/tambah_aksi';?>" method="post" enctype="multipart/form-data">
            <div>
                <label>Nama Produk</label>
                <input type="text" name="nama_prdk" class="form-control">
            </div>

            <div>
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control">
            </div>

            <div>
                <label>Harga</label>
                <input type="text" name="harga" class="form-control">
            </div>

            <div>
                <label>Stok</label>
                <input type="text" name="stok" class="form-control">
            </div>

            <div>
                <label>Gambar Produk</label>
                <input type="file" name="gambar" class="form-control">
            </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>