<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Details Item</h3>
				<hr>
				<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
				<?php if($this->session->flashdata('flash')): ?>
				<?php endif; ?>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<?php foreach ($details as $detail) : ?>
					<div class="col-md-5 col-sm-6">
						<img src="<?= base_url('') ?>assets/img/product/<?= $detail['foto'] ?>">
					</div>
					<div class="col-md-6 col-sm-6">
						<table class="table table-striped">
							<tr>
								<td>Nama Produk</td>
								<td>: <?= $detail['nama_produk'] ?></td>
							</tr>
							<tr>
								<td>Harga</td>
								<td>: Rp <?= number_format($detail['harga'],0,',','.') ?></td>
							</tr>
							<tr>
								<td>Status</td>
								<td>: <?= $detail['status'] ?></td>
							</tr>
							<tr>
								<td>Stok</td>
								<td>: <?= $detail['stok'] ?></td>
							</tr>
							<tr>
								<td>Berat (Gr)</td>
								<td>: <?= $detail['berat'] ?></td>
							</tr>
							<tr>
								<td>Kategori</td>
								<td>: <?= $detail['nama_kategori'] ?></td>
							</tr>
							<tr>
								<td>Deskripsi</td>
								<td>: <?= $detail['deskripsi'] ?></td>
							</tr>
							<tr>
								<td></td>
							</tr>
						</table>
				<?php endforeach; ?>
						<a href="#" class="btn btn-default" onclick="window.history.go(-1)">Kembali</a>
						<a href="<?= base_url('') ?>admin/item/updateItem/<?= $detail['id_produk'] ?>" class="btn btn-warning">Edit</a>
				</div>
			</div>
		</div>
	</div>
</div>