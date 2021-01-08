<div class="container-fluid">
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>ID Bahan</th>
            <th>Nama Bahan</th>
            <th>Stok Bahan</th>
            <th>Status</th>
            <th colspan="3">Aksi</th>
        </tr>

        <?php
        $no=1;
        foreach($bahan as $bhn) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $bhn->id_bahan ?></td>
            <td><?php echo $bhn->nama_bhn ?></td>
            <td><?php echo $bhn->stok ?></td>
            <td><?php echo $bhn->status ?></td>
            <td><?php echo anchor('dashboard_pgd/edit_bahan/' .$bhn->id_bahan, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
        </tr>
        <?php endforeach; ?>

    </table>
</div>

