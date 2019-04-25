<!-- <?php $this->session->userdata() ?> -->
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
								<h3 class="title">Billing address</h3>
							</div>
							<div class="form-group">
								<input type="text" readonly value="<?php echo $this->session->userdata('nama_pelanggan'); ?>" class="form-control">
							</div>
							<div class="form-group">
								<input type="text" readonly value="<?php echo $this->session->userdata('email_pelanggan'); ?>" class="form-control">
							</div>
							<div class="form-group">
								<input type="number" readonly value="<?php echo $this->session->userdata('telepon'); ?>" class="form-control">
							</div>
						<!-- /Billing Details -->
						<a href="<?= base_url(); ?>cart/index" class="btn btn-default">Kembali</a>
						<a href="<?= base_url(); ?>cart/checkout" class="btn btn-danger">Checkout</a>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->	