<div class="container-fluid">

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo base_url('assets/img/karosel2.jpeg')?>" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('assets/img/karosel1.jpg')?>" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="row text-center mt-4">
      <?php foreach($produk as $prdk) : ?>
        <?php
              echo form_open('dashboard_pmb/tambah_keranjang');
              echo form_hidden('id', $prdk->id_produk);
              echo form_hidden('qty', 1);
              echo form_hidden('price', $prdk->harga);
              echo form_hidden('name', $prdk->nama_prdk);
              echo form_hidden('redirect_page', str_replace('index.php/','',current_url()));
        ?>
        <div class="card ml-3 mb-3" style="width: 16rem;">
          <img src="<?php echo base_url().'/uploads/'.$prdk->gambar?>" class="" height="200" width="150" style="display: block; margin: auto;">
          <div class="card-body">
              <h5 class="card-title mb-1"><?php echo $prdk->nama_prdk?></h5>
              <small><?php echo $prdk->keterangan?></small>
              <br><span class="badge badge-success mb-3">Rp. <?php echo number_format($prdk->harga, 0,',','.') ?></span>
              <br><button class="btn btn-sm btn-primary"><i class="fas fa-cart-plus"> Add </i></button>
              <!--<?php echo anchor('dashboard_pmb/tambah_keranjang/'.$prdk->id_produk,'<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
              <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambahJumlah" onclick="$('#tambahJumlah #formJumlah').attr('action', '<?=site_url('dashboard_pmb/tambah_keranjang/'.$prdk->id_produk)?>')"><i class="fas fa-plus fa-sm"></i> Tambah Produk</button>-->
              <?php echo anchor('dashboard_pmb/detail/'.$prdk->id_produk,'<div class="btn btn-sm btn-success">Detail</div>') ?>
          </div>
        </div>
        <?php echo form_close(); ?>
      <?php endforeach; ?>
  </div>
</div>

<!-- Modal
<div class="modal fade" id="tambahJumlah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

            <form id="formJumlah" action="" method="post">

                <div class="form-group">
                    <label>Jumlah</label>
                    <input type="text" name="jumlah" class="form-control">
                </div>
            </form>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Kirim</button>
      </div>
      </form>
    </div>
  </div>
</div>


<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/bower_components/jquery.min.js"></script>
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/bower_components/fastclick/lib/fastclick.js"></script>
<script src="assets/js/adminlte.min.js"></script>
<script src="assets/js/autonumeric/autonumeric.min.js"></script>
<script src="assets/js/autonumeric/autoNumeric.js"></script>

<script>
  $(document).on("click", "#tombolTambah", function(){
    let nama_prdk = $(this).data('nama_prdk');
    let harga = $(this).data('harga');

    $(".modal-body #nama_prdk").val(nama_prdk);
    $(".modal-body #harga").val(harga);
  })
</script> -->