<div class="container-fluid">
    <?php foreach($profil as $prf) :?>
    <h3><i class="fas fa-edit"></i>EDIT PROFIL</h3>
        <form method="post" action="<?php echo base_url().'dashboard_pmb/update_profil' ?>">
            <div>
                <label>ID Pengguna</label>
                <input type="text" readonly name="id_user" class="form-control" value="<?php echo $prf->id_user?>">
            </div>
            <div>
                <label>Nama Pengguna</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $prf->nama ?>">
            </div>

            <div>
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $prf->username ?>">
            </div>

            <div>
                <label>Password</label>
                <input type="text" name="password" class="form-control" value="<?php echo $prf->password ?>">
            </div>

            <div>
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" value="<?php echo $prf->alamat ?>">
            </div>

            <div>
                <label>No Telephone</label>
                <input type="text" name="no_tlp" class="form-control" value="<?php echo $prf->no_tlp ?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
        </form>
    <?php endforeach; ?>
</div>