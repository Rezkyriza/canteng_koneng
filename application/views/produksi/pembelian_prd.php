<div class="container-fluid">
    <h4>Invoice Pembelian Produk</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id Invoice</th>
            <th>Nama Pemesan</th>
            <th>Nama Produk</th>
            <th>Jumlah Produk</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>  

        <?php foreach($invoice as $inv): ?>
        <tr>
            <td><?php echo $inv->id ?></td>
            <td><?php echo $inv->nama ?></td>
            <td><?php echo $inv->nama_prdk ?></td>
            <td><?php echo $inv->jumlah ?></td>
            <td align="right"><?php echo number_format($inv->harga,0,',','.')?></td>
            <td><?php echo anchor('dashboard_prd/detail/'.$inv->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>