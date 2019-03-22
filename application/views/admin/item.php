<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Item List</h3>
            </div>
            <div class="container">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal"> Tambah Item </button>
                <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="judulModal"> Tambah Item </h3>

                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url(); ?>admin/item/tambah" method="post">
                                    <div class="form-group">
                                        <label for="id_kategori">Kategori Produk</label>
                                        <select class="form-control" id="id_kategori" name="id_kategori">
                                            <option value="1">Laptop</option>
                                            <option value="2">Monitor</option>
                                            <option value="3">RAM</option>
                                            <option value="4">. . .</option>
                                            <option value="5">. . .</option>
                                            <option value="6">. . .</option>
                                            <option value="7">. . .</option>
                                            <option value="8">. . .</option>
                                            <option value="9">. . .</option>
                                            <option value="10">. . .</option>
                                            <option value="11">. . .</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_produk">Nama Produk</label>
                                        <input type="text" class="form-control" id="nama_produk" name="nama_produk">
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga Produk</label>
                                        <input type="text" class="form-control" id="harga" name="harga">
                                    </div>
                                    <div class="form-group">
                                        <label for="stok">Stok Produk</label>
                                        <input type="text" class="form-control" id="stok" name="stok">
                                    </div>
                                    <div class="form-group">
                                        <label for="berat">Berat Produk</label>
                                        <input type="text" class="form-control" id="berat" name="berat">
                                    </div>
                                    <div class="form-group">
                                        <label for="foto">Foto Produk</label>
                                        <input type="file" id="foto" name="foto">
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi Produk</label>
                                        <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 1; ?>
                        <?php foreach ($item as $produk) : ?>
                        <tr>
                            <td><?php echo $nomor ?></td>
                            <td><?php echo $produk['nama_produk'] ?></td>
                            <td><?php echo $produk['harga'] ?></td>
                            <td><?php echo $produk['stok'] ?></td>
                            <td><?php echo $produk['id_kategori'] ?></td>
                            <td>
                                <a href="#" class="btn btn-primary">Detail</a>
                                <a href="#" class="btn btn-warning">Ubah</a>
                                <a href="<?= base_url()  ?>Item_model" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php $nomor++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> 