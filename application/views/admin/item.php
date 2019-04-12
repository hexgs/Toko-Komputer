<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Item List</h3>
              <hr>
              <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');
              ?>"></div>
              <?php if($this->session->flashdata('flash')): ?>
              <?php endif; ?>
              <a href="<?= base_url('') ?>admin/item/addItem" class="btn btn-primary">Add Item</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Harga</th>
                  <th>Status</th>
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
                  <td><?php echo 'Rp '.number_format($produk['harga'],0,',','.') ?></td>
                  <td><?php echo $produk['status'] ?></td>
                  <td><?php echo $produk['stok'] ?></td>
                  <td><?php echo $produk['nama_kategori'] ?></td>
                  <td>
                      <a href="<?= base_url('') ?>admin/item/detailItem/<?= $produk['id_produk'] ?>" class="btn btn-primary">Detail</a>
                      <a href="<?= base_url('') ?>admin/item/updateItem/<?= $produk['id_produk'] ?>" class="btn btn-warning">Ubah</a>
                      <a href="<?= base_url('') ?>admin/item/deleteItem/<?= $produk['id_produk'] ?>" class="btn btn-danger tombol-hapus">Hapus</a>
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
