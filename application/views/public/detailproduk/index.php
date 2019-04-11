<!-- <?php var_dump($detail_produk); ?> -->
<!-- container -->
<div class="container">
    <!-- row -->
    <div class="row">
        <!-- Product main img -->
        <div class="col-md-5 col-md-push-2">

            <div id="product-main-img">
                <div class="product-preview">
                    <img src="<?= base_url(); ?>assets/front/img/product01.png" alt="">
                </div>

                <div class="product-preview">
                    <img src="<?= base_url(); ?>assets/front/img/product03.png" alt="">
                </div>

                <div class="product-preview">
                    <img src="<?= base_url(); ?>assets/front/img/product06.png" alt="">
                </div>

                <div class="product-preview">
                    <img src="<?= base_url(); ?>assets/front/img/product08.png" alt="">
                </div>
            </div>
        </div>
        <!-- /Product main img -->

        <!-- Product thumb imgs -->
        <div class="col-md-2  col-md-pull-5">
            <div id="product-imgs">
                <div class="product-preview">
                    <img src="<?= base_url(); ?>assets/front/img/product01.png" alt="">
                </div>

                <div class="product-preview">
                    <img src="<?= base_url(); ?>assets/front/img/product03.png" alt="">
                </div>

                <div class="product-preview">
                    <img src="<?= base_url(); ?>assets/front/img/product06.png" alt="">
                </div>

                <div class="product-preview">
                    <img src="<?= base_url(); ?>assets/front/img/product08.png" alt="">
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
                    <div class="qty-label">
                        Qty
                        <div class="input-number">
                            <input type="number">
                            <span class="qty-up">+</span>
                            <span class="qty-down">-</span>
                        </div>
                    </div>
                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="<?= base_url(); ?>cart">add to cart</a></button>
                </div>

            </div>
        </div>
        <!-- /Product details -->
    </div>
    <!-- /row -->
</div>
<!-- /container -->