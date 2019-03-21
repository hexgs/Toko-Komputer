<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">User List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Telepon</th>
                </tr>
                </thead>
                <tbody>
                <?php $nomor = 1; ?>
                <?php foreach($user as $pelanggan): ?>
                <tr>
                  <td><?php echo $nomor ?></td>
                  <td><?php echo $pelanggan['nama_pelanggan'] ?></td>
                  <td><?php echo $pelanggan['email_pelanggan'] ?></td>
                  <td><?php echo $pelanggan['telepon'] ?></td>
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
