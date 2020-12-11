<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>FORM PEMESANAN</h3>
      <form method="post" action="<?php echo base_url('dashboard_pmb/simpan_pesanan')?>">
        <div class="form-group">
          <label for="exampleFormControlInput1">Jumlah Pesanan</label>
          <input type="text" class="form-control" name="jumlah" placeholder="Masukkan jumlah pesanan Anda">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Rincian Pesanan</label>
          <textarea class="form-control" name="rincian" rows="3" placeholder="Masukkan rincian pesanan Anda"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-sm mt-3">Pesan</button>
      </form>  
</div>
