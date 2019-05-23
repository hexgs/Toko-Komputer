<!-- SECTION -->
<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
								<img src="<?= config_item('base_url()'); ?>assets/front/img/product01.png" alt="">
							</div>

							<div class="product-preview">
								<img src="<?= config_item('base_url()'); ?>assets/front/img/product03.png" alt="">
							</div>

							<div class="product-preview">
								<img src="<?= config_item('base_url()'); ?>assets/front/img/product06.png" alt="">
							</div>

							<div class="product-preview">
								<img src="<?= config_item('base_url()'); ?>assets/front/img/product08.png" alt="">
							</div>
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							<div class="product-preview">
								<img src="<?= config_item('base_url()'); ?>assets/front/img/product01.png" alt="">
							</div>

							<div class="product-preview">
								<img src="<?= config_item('base_url()'); ?>assets/front/img/product03.png" alt="">
							</div>

							<div class="product-preview">
								<img src="<?= config_item('base_url()'); ?>assets/front/img/product06.png" alt="">
							</div>

							<div class="product-preview">
								<img src="<?= config_item('base_url()'); ?>assets/front/img/product08.png" alt="">
							</div>
						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name">nama product</h2>
							<!-- <div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<a class="review-link" href="#">10 Review(s) | Add your review</a>
							</div> -->
							<div>
								<h3 class="product-price">$980.00 </h3>
								<span class="product-available">In Stock</span>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

							<!-- <div class="product-options">
								<label>
									Size
									<select class="input-select">
										<option value="0">X</option>
									</select>
								</label>
								<label>
									Color
									<select class="input-select">
										<option value="0">Red</option>
									</select>
								</label>
							</div> -->

							<div class="add-to-cart">
								<div class="qty-label">
									Qty
									<div class="input-number">
										<input type="number">
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
								</div>
								<button class="add-to-cart-btn" onclick="window.location.href = '<?= base_url(); ?>cart/addCart/<?= $produk['id_produk']; ?>';"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>

						</div>
					</div>
					<!-- /Product details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->