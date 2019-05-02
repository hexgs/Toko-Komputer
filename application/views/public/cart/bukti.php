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
							<!-- <div class="form-group"> -->
								
								<!-- <div class="col-md-5 col-sm-12 col-xs-12"> -->
									<input type="file" class="form-control col-md-7 col-xs-12" name="foto">
									<small class="form-text text-danger"><?= form_error('foto'); ?></small>
									<p class="help-text">* Ukuran Gambar Maximal 2 Mb.</p>
								<!-- </div> -->
							<!-- </div> -->
						<a href="<?= base_url(); ?>cart/terimakasih" class="btn btn-danger">Submit</a>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->	