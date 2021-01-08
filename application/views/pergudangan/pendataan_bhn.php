<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>FORM PENDATAAN BAHAN BAKU HABIS</h3>
        <form action="<?php echo base_url(). 'dashboard_pgd/simpan_pendataan';?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
              <label><strong>Nama Bahan Baku</strong></label>
              <select class="form-control " name="nama_bhn" aria-label="Default select example">
                <option selected>--Pilih Bahan--</option>
                <option value="Malan">Malan</option>
                <option value="Cantin">Canting</option>
                <option value="Kain Mori">Kain Mori</option>
                <option value="Pewarna Merah">Pewarna Merah</option>
                <option value="Pewarna Kuning">Pewarna Kuning</option>
                <option value="Pewarna Hijau">Pewarna Hijau</option>
              </select>
          </div>

          <div class="form-group">
              <label><strong>Jumlah</strong></label>
              <input type="text"  name="jumlah" class="form-control" >
          </div>

          <div class="form-group">
              <label><strong>Total Harga</strong></label>
              <input type="text"  name="total" class="form-control" >
          </div>
          
            <button type="submit" class="btn btn-primary btn-sm mt-3">Kirim</button>
        </form> 
</div>