<!-- <?php var_dump($produk); ?> -->
<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">New Product</h3>
				</div>
			</div>
			<!-- /section title -->


			<!-- NEW PRODUCT (CONNECT DATABASE) -->
			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						<div id="tab1" class="tab-pane active">
							<div class="products-slick" data-nav="#slick-nav-1">
								<?php foreach ($produk as $produk) : ?>
									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="<?= base_url() . 'assets/front/img/' . $produk['foto'] ?>" width="100px" height="250px" />
											<div class="product-label">
												<span class="new">NEW</span>
											</div>
										</div>
										<div class="product-body">
											<!-- <p class="product-category">Category</p> -->
											<h3 class="product-name"><?php echo $produk['nama_produk']; ?></h3>
											<h4 class="product-price">Rp. <?php echo number_format($produk['harga']) ?>
												<!-- <del class="product-old-price">$990.00</del> -->
											</h4>

											<div class="product-btns">
												<button class="quick-view" onclick="window.location.href = '<?= base_url(); ?>detailproduk/detail/<?= $produk['id_produk']; ?>';"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
											</div>
										</div>
										<div class="add-to-cart">
											<button class="add-to-cart-btn" onclick="window.location.href = '<?= base_url(); ?>cart/addCart/<?= $produk['id_produk']; ?>';"><i class="fa fa-shopping-cart"></i> add to cart</button>
										</div>
									</div>
									<!-- /product -->
								<?php endforeach; ?>
							</div>
							<div id="slick-nav-1" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->
					</div>
				</div>
			</div>
			<!-- Products tab & slick -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->


<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">Top Selling</h3>
					<div class="section-nav">
					</div>
				</div>
			</div>
			<!-- /section title -->

			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						<div id="tab2" class="tab-pane fade in active">
							<div class="products-slick" data-nav="#slick-nav-2">
								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="<?= config_item('base_url()'); ?>assets/front/img/product06.png" alt="">
									</div>
									<div class="product-body">
										<!-- <p class="product-category">Category</p> -->
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 </h4>

										<div class="product-btns">
											<button class="quick-view" onclick="window.location.href = '<?= base_url(); ?>produk';"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</div>
								<!-- /product -->

								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="<?= config_item('base_url()'); ?>assets/front/img/product07.png" alt="">
									</div>
									<div class="product-body">
										<!-- <p class="product-category">Category</p> -->
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 </h4>

										<div class="product-btns">
											<button class="quick-view" onclick="window.location.href = '<?= base_url(); ?>produk';"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</div>
								<!-- /product -->

								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="<?= config_item('base_url()'); ?>assets/front/img/product08.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 </h4>

										<div class="product-btns">
											<button class="quick-view" onclick="window.location.href = '<?= base_url(); ?>produk';"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</div>
								<!-- /product -->

								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="<?= config_item('base_url()'); ?>assets/front/img/product09.png" alt="">
									</div>
									<div class="product-body">
										<!-- <p class="product-category">Category</p> -->
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 </h4>

										<div class="product-btns">
											<button class="quick-view" onclick="window.location.href = '<?= base_url(); ?>produk';"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</div>
								<!-- /product -->

								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="<?= config_item('base_url()'); ?>assets/front/img/product01.png" alt="">
									</div>
									<div class="product-body">
										<!-- <p class="product-category">Category</p> -->
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 </h4>

										<div class="product-btns">
											<button class="quick-view" onclick="window.location.href = '<?= base_url(); ?>produk';"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</div>
								<!-- /product -->
							</div>
							<div id="slick-nav-2" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->
					</div>
				</div>
			</div>
			<!-- /Products tab & slick -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION <-->
</-->