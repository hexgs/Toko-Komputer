<!-- <?php $this->session->userdata() ?> -->
<!-- <?php var_dump($pelanggan); ?> -->

<!-- SECTION -->
<div class="section">
	<form action="<?php echo site_url('cart/checkout'); ?>" method ="post">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<div class="col-md-7">
				<!-- Billing Details -->
				<div class="billing-details">
					<div class="section-title">
						<h3 class="title">Billing address</h3>
					</div>
					<div class="form-group">
						<input type="text" readonly value="<?php echo $this->session->userdata('nama_pelanggan'); ?>" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" readonly value="<?php echo $this->session->userdata('email_pelanggan'); ?>" class="form-control">
					</div>
					<!-- <div class="form-group">
								<input type="number" readonly value="<?php echo $this->session->userdata('telepon'); ?>" class="form-control">
							</div> -->

					

					<div class="form-group">
						<textarea name="alamat" placeholder="alamat" class="form-control"></textarea>
					</div>

					<!-- <div class="form-group">
						<input type="text" name="atas_nama" class="form-control" placeholder="Nama">
					</div> -->

					<!-- /Billing Details -->
					
					<!-- <a href="<?= base_url(); ?>cart/checkout" class="btn btn-danger">Checkout</a> -->
					<!-- <button type="submit" id="submit" class="btn btn-danger">Checkout</button> -->
				</div>
				
				<div class="payment-details">
					<div class="section-title">
						<h3 class="title">Payment</h3>
					</div>
					<p>Silahkan lakukan pembayaran ke rekening 17273948891 atas nama ZenAiKomputer.</p>
					<p>Masukkan bukti pembayaran:</p>

					<div class="form-group">
						<input type="text" name="atas_nama" class="form-control" id="atas_nama" placeholder="Nama Rekening" required>
					</div>
					<div class="form-group">
						<input type="text" name="no_rekening" class="form-control" id="no_rekening" placeholder="No Rekening" required>
					</div>
					<div class="form-group">
						<input type="text" name="jenis_bank" class="form-control" id="jenis_bank" placeholder="Jenis Bank" required>
					</div>
					<div class="form-group">
						<input type="text" name="total_transfer" class="form-control" id="total_transfer" placeholder="Total Transfer" required>
					</div>

					<!-- <a href="<?= base_url(); ?>cart/checkout" class="btn btn-danger">Confirm</a> -->
					<a href="<?= base_url(); ?>cart/index" class="btn btn-default">Kembali</a>
					<button type="submit" id="submit" class="btn btn-danger">Checkout</button>
					<!-- <div class="form-group"> -->

					<!-- <div class="col-md-5 col-sm-12 col-xs-12"> -->
					<!-- <?php echo $error; ?> -->
					<!-- <?php echo form_open_multipart('cart/uploadbukti'); ?> -->
					<!-- <input type="file" name="foto"> -->
					<!-- <small class="form-text text-danger"><?= form_error('foto'); ?></small> -->
					<!-- <p class="help-text">* Ukuran Gambar Maximal 2 Mb.</p> -->
					<!-- <input type="submit" value="upload" /> -->
					<!-- <button class="btn btn-danger" type="submit" value="upload">Upload</button> -->
					<!-- </div> -->
					<!-- </div> -->
					<!-- <a href="<?= base_url(); ?>cart/terimakasih" class="btn btn-danger">Submit</a> -->
				</div>


			</div>
			<!-- /row -->
		</div>
		<!-- /container -->

		

		</form>
	</div>
	<!-- /SECTION -->