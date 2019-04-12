<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Item List</h3>
              <hr>
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
                <?php foreach($item as $produk): ?>
                <tr>
                  <td><?php echo $nomor ?></td>
                  <td><?php echo $produk['nama_produk'] ?></td>
                  <td><?php echo $produk['harga'] ?></td>
                  <td><?php echo $produk['stok'] ?></td>
                  <td><?php echo $produk['nama_kategori'] ?></td>
                  <td>
                      <a href="#" class="btn btn-primary">Detail</a>
                      <a href="#" class="btn btn-warning">Ubah</a>
                      <a href="#" class="btn btn-danger">Hapus</a>
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
