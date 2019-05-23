<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Transaction List</h3>
				<hr>
				<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
				<?php if ($this->session->flashdata('flash')) : ?>
				<?php endif; ?>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<table id="example2" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Pelanggan</th>
							<!-- <th>Ongkir</th> -->
							<th>Tanggal Pembelian</th>
							<th>Total Pembelian</th>
							<th>Alamat</th>
							<th>Aksi</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<?php $nomor = 1; ?>
						<?php foreach ($transact as $tsc) : ?>
							<tr>
								<td><?php echo $nomor ?></td>
								<td><?php echo $tsc['nama_pelanggan'] ?></td>
								<!-- <td></td> -->
								<td><?php echo $tsc['tanggal_pembelian'] ?></td>
								<td><?php echo $tsc['total_pembelian'] ?></td>
								<td><?php echo $tsc['alamat'] ?></td>

								<td>
									<a href="<?php echo base_url(); ?>admin/transaction/detailtransaksi/<?php echo $tsc['id_pembelian'] ?>" class="btn btn-primary">Detail</a>
									<a href="<?php echo base_url(); ?>admin/user/uploadresi/<?php echo $tsc['id_pembelian'] ?>" class="btn btn-warning">Upload Resi</a>
								</td>
								<td>
									<?php
									$status = $tsc['total_transfer'];
									if ($status > 0) {
										?>
										<a class="btn btn-success">Complete</a>
									<?php
								} else {
									?>
										<a class="btn btn-danger">Pending</a>
									<?php
								} ?>
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