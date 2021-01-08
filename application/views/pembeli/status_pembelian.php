<div class="container-fluid">
    <h4>Data Pesanan</h4>
    <table class="table table-boardered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>ID Pembelian</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Status</th>
        </tr>

        <?php
        $no=1;
        foreach($data as $dt) { ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $dt->id?></td>
                <td><?php echo $dt->nama_prdk?></td>
                <td><?php echo $dt->jumlah?></td>
                <td align="right">Rp. <?php echo number_format($dt->harga,0,',','.') ?></td>
                <td><?php echo $dt->status?></td>
            </tr>
        <?php } ?>
    </table>
</div>