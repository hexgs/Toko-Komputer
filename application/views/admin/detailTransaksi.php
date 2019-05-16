<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Detail Transaksi</h3>
                <hr>
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                <?php if ($this->session->flashdata('flash')) : ?>
                <?php endif; ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php foreach ($transact as $tsc) : ?>
                    <div class="col-md-6 col-sm-6">
                        <table class="table table-striped">
                            <tr>
                                <td>Nama Pelanggan</td>
                                <td>: <?= $tsc['nama_pelanggan'] ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Pembelian</td>
                                <td>: <?= $tsc['tanggal_pembelian'] ?></td>
                            </tr>
                            <tr>
                                <td>Total Pembelian</td>
                                <td>: <?= $tsc['total_pembelian'] ?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>: <?= $tsc['alamat'] ?></td>
                            </tr>
                            <tr>
                                <td>Bukti Pembayaran</td>
                                <td>: <?= $tsc['bukti_pembayaran'] ?></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                        </table>
                    <?php endforeach; ?>
                    <a href="#" class="btn btn-default" onclick="window.history.go(-1)">Kembali</a>
                    <a href="<?= base_url('') ?>admin/item/updateItem/<?= $tsc['id_produk'] ?>" class="btn btn-warning">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>