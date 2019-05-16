<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">User List</h3>
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
							<th>Nama</th>
							<th>Email</th>
							<th>Telepon</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<?php $nomor = 1; ?>
						<?php foreach ($users as $user) : ?>
							<tr>
								<td><?php echo $nomor ?></td>
								<td><?php echo $user['nama_pelanggan'] ?></td>
								<td><?php echo $user['email_pelanggan'] ?></td>
								<td><?php echo $user['telepon'] ?></td>
								<td>
									<?php
									$status = $user['status'];
									if ($status == 1) {
										?>
										<button class="btn btn-success">Active</button>
									<?php
								} else {
									?>
										<button class="btn btn-danger">InActive</button>
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