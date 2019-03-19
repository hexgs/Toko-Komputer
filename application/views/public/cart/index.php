
	<div class="container">
		<h1>Cart</h1>
		<hr>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Barang</th>
					<th>Harga</th>
					<th>Jumlah</th>
					<th>Subharga</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo '1'; ?></td>
					<td><?php echo 'monitor'; ?></td>
					<td><?php echo '$988.00'; ?></td>
					<td><?php echo '1'; ?></td>
					<td><?php echo '$988.00'; ?></td>
					<td>
						<a href="" class="btn btn-danger btn-xs">Hapus</a>
					</td>
				</tr>

			
			</tbody>
		</table>

		<a href="<?= base_url(); ?>home" class="btn btn-default">Lanjutkan Belanja</a>
		<a href="<?= base_url(); ?>checkout" class="btn btn-primary">Checkout</a>
	</div>
