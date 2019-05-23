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