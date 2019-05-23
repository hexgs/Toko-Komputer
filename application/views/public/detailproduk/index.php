<br>
<!-- <?php var_dump($detail_produk); ?> -->
<!-- container -->
<div class="container">
    <!-- row -->
    <div class="row">
        <!-- Product main img -->
        <div class="col-md-5 col-md-push-2">

            <div id="product-main-img">
                <div class="product-preview">
                    <img src="<?= base_url() . 'assets/front/img/' . $detail_produk->foto ?>" alt="">
                </div>
            </div>
        </div>
        <!-- /Product main img -->

        <!-- Product thumb imgs -->
        <div class="col-md-2  col-md-pull-5">
            <div id="product-imgs">
                <div class="product-preview">
                    <img src="<?= base_url() . 'assets/front/img/' . $detail_produk->foto ?>" alt="">
                </div>
            </div>
        </div>
        <!-- /Product thumb imgs -->

        <!-- Product details -->
        <div class="col-md-5">
            <div class="product-details">
                <h2 class="product-name"><?= $detail_produk->nama_produk; ?></h2>

                <div>
                    <h3 class="product-price">Rp. <?= number_format($detail_produk->harga); ?></h3>
                    <span class="product-available">Stock: <?= $detail_produk->stok; ?></span>
                </div>
                <p><?= $detail_produk->deskripsi; ?></p>

                <div class="add-to-cart">
                    <button class="add-to-cart-btn" onclick="window.location.href = '<?= base_url(); ?>cart/addCart/<?= $detail_produk->id_produk; ?>';"><i class="fa fa-shopping-cart"></i> add to cart</button>
                </div>

            </div>
        </div>
        <!-- /Product details -->
    </div>
    <!-- /row -->
</div>
<!-- /container -->