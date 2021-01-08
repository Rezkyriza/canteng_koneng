<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>Form Penjadwalan Pesanan</h3>

    <?php foreach($jadwalpsn as $jpsn) :?>
        <form method="post" action="<?php echo base_url().'dashboard_prd/proses_ajukan' ?>">
            <div>
                <label>ID Pesanan</label>
                <input type="text" readonly name="id_pesanan" class="form-control" value="<?php echo $jpsn->id_pesanan ?>">
            </div>

            <div class="form-group">
                <label>Nama Pemesan</label>
                <input type="text" readonly name="nama" class="form-control" value="<?php echo $jpsn->nama?>">
            </div>

            <div class="form-group">
                <label>Jumlah Produk</label>
                <input type="text" readonly name="jumlah" class="form-control" value="<?php echo $jpsn->jumlah ?>">
            </div>

            <div class="form-group">
                <label>Motif yang diajukan pemesan</label>
                <input type="text" readonly name="rincian" class="form-control" value="<?php echo $jpsn->motif ?>">
            </div>

            <div class="form-group">
                <label>Warna yang diajukan pemesan</label>
                <input type="text" readonly name="rincian" class="form-control" value="<?php echo $jpsn->warna ?>">
            </div>

            <div class="form-group">
                <label>Rincian Tambahan Produk</label>
                <input type="text" readonly name="rincian" class="form-control" value="<?php echo $jpsn->rincian ?>">
            </div>

            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="total" class="form-control" value="<?php echo $jpsn->total ?>">
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        <label>Tanggal Mulai</label>
                        <input type="date" placeholder="" name="dari" class="form-control" required><span class="add-on menu-icon icon-calendar"></span>
                    </div>
                    <div class="col-md-2">
                        <label>Tanggal Selesai</label>
                        <input type="date" placeholder="" name="sampai" class="form-control" required><span class="add-on menu-icon icon-calendar"></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Bahan Baku</label>
                <br><button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#dataBahan"><i class="fas fa-plus fa-sm"></i> Daftar Bahan</button>
                <input type="text" name="total" class="form-control" value="">
            </div>

            <div class="form-group">
            <label><strong>Jenis Produksi</strong></label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="jenis" id="exampleRadios1" value="Produksi produk jadi">
                  <label class="form-check-label" for="exampleRadios1">
                    Produksi produk jadi
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="jenis" id="exampleRadios2" value="Produksi produk pesanan">
                  <label class="form-check-label" for="exampleRadios2">
                    Produksi produk pesanan
                  </label>
            </div>

            <div class="form-group">
                <label>Tenaga Kerja</label>
                <br><button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#dataTenaga"><i class="fas fa-plus fa-sm"></i> Daftar Tenaga Kerja</button>
                <input type="text" name="total" class="form-control" value="">
            </div>

            <div>
                <button type="submit" class="btn btn-primary btn-sm mt-3">Ajukan</button>
            </div>
        </form>
    <?php endforeach; ?>
</div>