<div class="container-fluid">
    <h4>Data Pesanan</h4>
    <table class="table table-boardered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>ID Pesanan</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Pembayaran Awal</th>
            <th>Pelunasan</th>
        </tr>

        <?php
        $no=1;
        foreach($data as $dt) { ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $dt->id_pesanan?></td>
                <td><?php echo $dt->jumlah?></td>
                <td align="right">Rp. <?php echo number_format($dt->total,0,',','.') ?></td>
                <td><a href="<?php echo base_url('dashboard_pmb/pembayaran_awal') ?>"><div class="btn btn-sm btn-success">Pembayaran</div></a></td>
                <td><a href="<?php echo base_url('dashboard_pmb/pelunasan') ?>"><div class="btn btn-sm btn-success">Pelunasan</div></a></td>
            </tr>
        <?php } ?>
    </table>
</div>