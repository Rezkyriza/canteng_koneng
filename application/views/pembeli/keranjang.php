<div class="container-fluid">
    <h4>Keranjang Belanja</h4>
    <?php
        echo form_open('dashboard_pmb/update_keranjang'); ?>
    <table class="table table-boardered table-striped table-hover">
        <tr>
            <th>Jumlah</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Sub-Total</th>
            <th class="text-center">Aksi</th>
        </tr>

        <?php
        $no=1;
        foreach($this->cart->contents() as $items) : ?>
            <?php echo form_hidden($no.'[rowid]', $items['rowid']); ?>
            <tr>
                <td><?php echo form_input(array('name'=> $no.'[qty]', 'value'=> $items['qty'], 'maxlength'=>'3', 'min'=>'0', 'size'=>'1', 'type'=>'number', 'class'=>'form-control')) ?></td>
                <td><?php echo $items['name'] ?></td>
                <td align="right">Rp. <?php echo number_format($items['price'],0,',','.') ?></td>
                <td align="right">Rp. <?php echo number_format($items['subtotal'],0,',','.') ?></td>
                <td class="text-center">
                    <a href="<?=base_url('dashboard_pmb/hapus_keranjang/'.$items['rowid'])?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php $no++; ?>
        <?php endforeach ?>
        <tr>
            <td align="right" colspan="3"><strong>Total</strong></td>
            <td align="right">Rp. <?php echo number_format($this->cart->total(),0,',','.') ?></td>
        </tr>
    </table>

    <div align="right">
        <a href="<?php echo base_url('dashboard_pmb/hapus_Allkeranjang') ?>"><div class="btn btn-sm btn-danger">Hapus Keranjang</div></a>
        <button type="submit" class="btn btn-sm btn-primary"> Update Keranjang </i></button>
        <a href="<?php echo base_url('dashboard_pmb/pembayaran') ?>"><div class="btn btn-sm btn-success">Pembayaran</div></a>
    </div>

    <?php echo form_close(); ?>
</div>