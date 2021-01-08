<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id Pesanan</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Jadwal</th>
        </tr>  

        <?php foreach($inv_psn as $invp): ?>
        <tr>
            <td><?php echo $invp->id_pesanan ?></td>
            <td><?php echo $invp->jumlah ?></td>
            <td><?php echo anchor('dashboard_prd/ajukan_harga/'.$invp->id_pesanan, '<div class="btn btn-sm btn-primary">Ajukan</div>') ?></td>
            <td><?php echo anchor('dashboard_prd/penjadwalan_psn/'.$invp->id_pesanan, '<div class="btn btn-sm btn-primary">Jadwalkan</div>') ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>