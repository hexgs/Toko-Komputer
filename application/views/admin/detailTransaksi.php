<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Detail Transaksi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php foreach ($pembelian as $pb) : ?>
                    <div class="col-md-6 col-sm-6">
                        <table class="table table-striped">
                            <tr>
                                <td>Nama Pelanggan</td>
                                <td>: <?= $pb['nama_pelanggan'] ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Pembelian</td>
                                <td>: <?= $pb['tanggal_pembelian'] ?></td>
                            </tr>
                            <tr>
                                <td>Total Pembelian</td>
                                <td>: <?= $pb['total_pembelian'] ?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>: <?= $pb['alamat'] ?></td>
                            </tr>
                            <tr>
                                <td>Bukti Pembayaran</td>
                                <td>: <?= $pb['bukti_pembayaran'] ?></td>
                            </tr>
                        </table>
                        <a href="#" class="btn btn-default" onclick="window.history.go(-1)">Kembali</a>
                        <!-- <a href="<?= base_url('') ?>admin/item/updateItem/<?= $pb['id_pembelian'] ?>" class="btn btn-warning">Edit</a> -->
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>