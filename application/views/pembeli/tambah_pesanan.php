<div class="container-fluid">
<?php foreach($pesan as $psn) :?>
    <h3><i class="fas fa-edit"></i>FORM PEMESANAN</h3>
      <form method="post" action="<?php echo base_url('dashboard_pmb/simpan_pesanan')?>" class="col-md-7">
          <div class="form-group">
              <label><strong>Nama Lengkap</strong></label>
              <input type="text" readonly name="nama" class="form-control" value="<?php echo $psn->nama?>">
          </div>

          <div class="form-group">
              <label><strong>Alamat Lengkap</strong></label>
              <input type="text" readonly name="alamat" class="form-control" value="<?php echo $psn->alamat?>">
          </div>

          <div class="form-group">
              <label><strong>Nomor Telephone</strong></label>
              <input type="text" readonly name="no_tlp" class="form-control" value="<?php echo $psn->no_tlp?>">
          </div>
          
          <div class="form-group">
            <label><strong>Jumlah Pesanan</strong></label>
            <input type="text" class="form-control" name="jumlah" placeholder="Masukkan jumlah pesanan Anda">
          </div>

          <div class="form-group">
            <label><strong>Motif</strong></label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="motif" id="exampleRadios1" value="Flora/Tumbuhan">
                    <label class="form-check-label" for="exampleRadios1">
                      Flora/Tumbuhan
                    </label>
                    <div class="form-check">
                      <a href="#" data-toggle="modal" data-target="#flora" class="stretched-link">Contoh Motif</a>
                    </div>
                  </div>
              
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="motif" id="exampleRadios2" value="Fauna/Hewan">
                    <label class="form-check-label" for="exampleRadios2">
                      Fauna/Hewan
                    </label>
                    <div class="form-check">
                    <a href="#" data-toggle="modal" data-target="#fauna" class="stretched-link">Contoh Motif</a>
                  </div>
                  </div>
              
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="motif" id="exampleRadios2" value="Alam">
                    <label class="form-check-label" for="exampleRadios2">
                      Alam
                    </label>
                    <div class="form-check">
                    <a href="#" data-toggle="modal" data-target="#alam" class="stretched-link">Contoh Motif</a>
                  </div>
                  </div>
            
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="motif" id="exampleRadios2" value="Abstrak">
                  <label class="form-check-label" for="exampleRadios2">
                    Abstrak
                  </label>
                  <div class="form-check">
                  <a href="#" data-toggle="modal" data-target="#abstrak" class="stretched-link">Contoh Motif</a>
                </div>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="motif" id="exampleRadios2" value="option2">
                  <input type="text" class="form-control" name="motif" placeholder="(jika terdapat pilihan motif lainnya)">
                </div>
          </div>
          
          <div class="form-group">
            <label><strong>Warna</strong></label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="warna" id="exampleRadios1" value="Gelap">
                  <label class="form-check-label" for="exampleRadios1">
                    Gelap
                  </label>
                  <div class="form-check">
                  <a href="#" data-toggle="modal" data-target="#gelap" class="stretched-link">Contoh Warna</a>
                  </div>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="warna" id="exampleRadios2" value="Terang">
                  <label class="form-check-label" for="exampleRadios2">
                    Terang
                  </label>
                  <div class="form-check">
                  <a href="#" data-toggle="modal" data-target="#terang" class="stretched-link">Contoh Warna</a>
                  </div>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="warna" id="exampleRadios2" value="Banyak Warna">
                  <label class="form-check-label" for="exampleRadios2">
                    Banyak warna
                  </label>
                  <div class="form-check">
                  <a href="#" data-toggle="modal" data-target="#banyak" class="stretched-link">Contoh Warna</a>
                  </div>
                </div>
          </div>

          <div class="form-group">
            <label><strong>Tambahan Rincian Pesanan</strong></label>
            <textarea class="form-control" name="rincian" rows="3" placeholder="contoh: warna dominan merah, dengan tambahan warna lain hijau dan kuning"></textarea>
          </div>
        <button type="submit" class="btn btn-primary btn-sm mt-3">Pesan</button>
      </form> 
<?php endforeach; ?> 
</div>

<!-- Modal M1-->
<div class="modal fade" id="flora" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contoh Motif Flora/Tumbuhan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row text-center mt-4">
          <?php foreach($motif1 as $mtf1) : ?>
          <div class="card ml-3 mb-3" style="width: 10rem;">
              <img src="<?php echo base_url().'/uploads/'.$mtf1->gambar?>" class="" height="150" width="100" style="display: block; margin: auto;">
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal M2-->
<div class="modal fade" id="fauna" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contoh Motif Fauna/Hewan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row text-center mt-4">
          <?php foreach($motif2 as $mtf2) : ?>
          <div class="card ml-3 mb-3" style="width: 10rem;">
              <img src="<?php echo base_url().'/uploads/'.$mtf2->gambar?>" class="" height="150" width="100" style="display: block; margin: auto;">
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal M3-->
<div class="modal fade" id="alam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contoh Motif Alam</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row text-center mt-4">
          <?php foreach($motif3 as $mtf3) : ?>
          <div class="card ml-3 mb-3" style="width: 10rem;">
              <img src="<?php echo base_url().'/uploads/'.$mtf3->gambar?>" class="" height="150" width="100" style="display: block; margin: auto;">
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal M4-->
<div class="modal fade" id="abstrak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contoh Motif Abstrak</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row text-center mt-4">
          <?php foreach($motif4 as $mtf4) : ?>
          <div class="card ml-3 mb-3" style="width: 10rem;">
              <img src="<?php echo base_url().'/uploads/'.$mtf4->gambar?>" class="" height="150" width="100" style="display: block; margin: auto;">
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal W1-->
<div class="modal fade" id="gelap" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contoh Warna Gelap</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row text-center mt-4">
          <?php foreach($warna1 as $wrn1) : ?>
          <div class="card ml-3 mb-3" style="width: 10rem;">
              <img src="<?php echo base_url().'/uploads/'.$wrn1->gambar?>" class="" height="150" width="100" style="display: block; margin: auto;">
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal W2-->
<div class="modal fade" id="terang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contoh Warna Terang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row text-center mt-4">
          <?php foreach($warna2 as $wrn2) : ?>
          <div class="card ml-3 mb-3" style="width: 10rem;">
              <img src="<?php echo base_url().'/uploads/'.$wrn2->gambar?>" class="" height="150" width="100" style="display: block; margin: auto;">
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal W3-->
<div class="modal fade" id="banyak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contoh Banyak Warna</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row text-center mt-4">
          <?php foreach($warna3 as $wrn3) : ?>
          <div class="card ml-3 mb-3" style="width: 10rem;">
              <img src="<?php echo base_url().'/uploads/'.$wrn3->gambar?>" class="" height="150" width="100" style="display: block; margin: auto;">
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>