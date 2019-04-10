<!-- <?php var_dump($vga); ?> -->
<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">VGA</h3>
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
								<?php foreach ($vga as $produk) : ?>
									<!-- product -->
									<div class="product">
										<div class="product-img">
											<img src="<?= base_url(); ?>assets/front/img/product01.png" alt="">
										</div>
										<div class="product-body">
											<!-- <p class="product-category"><?php echo $produk['id_kategori'] ?></p> -->
											<h3 class="product-name"><?php echo $produk['nama_produk'] ?></h3>
											<h4 class="product-price">Rp. <?php echo number_format($produk['harga']) ?></h4>
											<div class="product-btns">
												<button class="quick-view" onclick="window.location.href = '<?= base_url(); ?>produk';"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
											</div>
										</div>
										<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
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