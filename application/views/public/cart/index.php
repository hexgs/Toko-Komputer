<!-- <?php var_dump($cart) ?>
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
			<?php $nomor = 1; ?>
			
				<tr>
					<td><?php echo $nomor; ?></td>
					<td><?= $cart->nama_produk; ?></td>
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
	</div> -->
<div class="container">
	<h1>Cart</h1>
	<?php echo form_open('cart/update'); ?>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Barang</th>
				<th>Jumlah</th>
				<th>Harga</th>
				<th>Sub-Total</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<?php $i = 1; ?>

		<?php foreach ($this->cart->contents() as $items) : ?>

			<?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>

			<tr>
				<td><?php echo $i; ?></td>
				<td>
					<?php echo $items['name']; ?>

					<?php if ($this->cart->has_options($items['rowid']) == TRUE) : ?>

						<p>
							<?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value) : ?>

								<strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

							<?php endforeach; ?>
						</p>

					<?php endif; ?>

				</td>
				<td><?php echo form_input(array('name' => 'qty' . $i, 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
				<td>Rp. <?php echo $this->cart->format_number($items['price']); ?></td>
				<td>Rp. <?php echo $this->cart->format_number($items['subtotal']); ?></td>
				<td><a href="<?= base_url(); ?>cart/delete/<?= $items['rowid']; ?>" class="btn btn-danger btn-xs">Hapus</a></td>
			</tr>

			<?php $i++; ?>

		<?php endforeach; ?>

		<tr>
			<td colspan="3"> </td>
			<td class="right"><strong>Total</strong></td>
			<td class="right">Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></td>
		</tr>

	</table>
	<a href="<?= base_url(); ?>home" class="btn btn-default">Lanjutkan Belanja</a>
	<?php echo form_submit('', 'Update your Cart', "class='btn btn-primary'"); ?>
	<a href="<?= base_url(); ?>cart/billing" class="btn btn-danger">Checkout</a>
	<?php form_close(); ?>
</div>