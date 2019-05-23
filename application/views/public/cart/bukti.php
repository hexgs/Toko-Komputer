<!-- <?php var_dump($pelanggan); ?> -->
<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<div class="col-md-7">
				<!-- Billing Details -->
				<div class="billing-details">
					<div class="section-title">
						<h3 class="title">Bukti Pembayaran</h3>
					</div>
					<p>Silahkan lakukan pembayaran ke rekening xxxxxx atas nama ZenAiKomputer.</p>
					<p>Masukkan bukti pembayaran:</p>

					<div class="form-group">
						<input type="text" name="atas_nama" class="form-control" id="atas_nama" placeholder="Nama" required>
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

					<a href="<?= base_url(); ?>cart/terimakasih" class="btn btn-danger">Confrim</a>
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
	</div>
	<!-- /SECTION -->