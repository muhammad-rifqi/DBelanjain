<?php include APPPATH."views/layout/menu_user.php" ; ?>



<div class="wrapper">

<div class="main-banner-slider">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="owl-carousel offers-banner owl-theme">

<?php
$jumlah = count($produk);
for($i=0;$i<$jumlah;$i++){
?>

<div class="item">
<div class="offer-item">
<div class="offer-item-img">
<div class="gambo-overlay"></div>
<img src="<?= file_exists('asset/foto_produk/'.$produk[$i]['gambar']) ? base_url('asset/foto_produk/'.$produk[$i]['gambar']) : base_url('asset/foto_produk/no-image.png'); ?>" alt="">
</div>
<div class="offer-text-dt">
<div class="offer-top-text-banner">
<p>6% Off</p>
<div class="top-text-1">Buy More & Save More</div>
<span>Fresh Vegetables</span>
</div>
<a href="<?= base_url('produk/detail/'.$produk[$i]['produk_seo']); ?>" class="Offer-shop-btn hover-btn">Shop Now</a>
</div>
</div>
</div>

<?php } ?>

</div>
</div>
</div>
</div>
</div>


<div class="section145">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="main-title-tt">
<div class="main-title-left">
<span>Shop By</span>
<h2>Categories</h2>
</div>
</div>
</div>
<div class="col-md-12">
<div class="owl-carousel cate-slider owl-theme">


<?php

$jml = count($cp);
for($j=0;$j<$jml;$j++){
?>


<div class="item">
<a href="#" class="category-item">
<div class="cate-img">
<img src="<?= base_url('asset/foto_produk/'.$cp[$j]['gambar'])?>" alt="">
</div>
<h4><?= $cp[$j]['nama_kategori']?></h4>
</a>
</div>

<?php } ?>

</div>
</div>
</div>
</div>
</div>


<div class="section145">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="main-title-tt">
<div class="main-title-left">
<span>For You</span>
<h2><?= $nama_kategori[0]['nama_kategori'] ?></h2>
</div>
<a href="#" class="see-more-btn">See All</a>
</div>
</div>
<div class="col-md-12">
<div class="owl-carousel featured-slider owl-theme">

<?php
$p = count($pda);
for($m=0;$m<$p;$m++){

    if(file_exists("asset/foto_produk/".$pda[$m]['gambar'])){
        $img =  base_url('asset/foto_produk/'.$pda[$m]['gambar']);
    }else{
        $img =  base_url('asset/foto_produk/no-image.png');
    }
    
?>

<div class="item">
<div class="product-item">
<a href="<?= base_url('produk/detail/'.$pda[$m]['produk_seo']); ?>" class="product-img">

<img src="<?= $img; ?>" alt="">

<div class="product-absolute-options">
<span class="offer-badge-1">6% off</span>
<span class="like-icon" title="wishlist"></span>
</div>
</a>
<div class="product-text-dt">
<p>Available<span>(In Stock)</span></p>
<h4><?= $pda[$m]['nama_produk'];?></h4>
<div class="product-price">$<?= $pda[$m]['harga_beli'];?> <span>$5000</span></div>
<div class="qty-cart">
<div class="quantity buttons_added">
<input type="button" value="-" class="minus minus-btn">
<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
<input type="button" value="+" class="plus plus-btn">
</div>
<span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
</div>
</div>
</div>
</div>


<?php } ?>


</div>
</div>
</div>
</div>
</div>


<div class="section145">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="main-title-tt">
<div class="main-title-left">
<span>Offers</span>
<h2>Best Values</h2>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<a href="#" class="best-offer-item">
<img src="<?= base_url()?>asset/images/best-offers/offer-1.jpg" alt="">
</a>
</div>
<div class="col-lg-4 col-md-6">
<a href="#" class="best-offer-item">
<img src="<?= base_url()?>asset/images/best-offers/offer-2.jpg" alt="">
</a>
</div>
<div class="col-lg-4 col-md-6">
<a href="#" class="best-offer-item offr-none">
<img src="<?= base_url()?>asset/images/best-offers/offer-3.jpg" alt="">
<div class="cmtk_dt">
<div class="product_countdown-timer offer-counter-text" data-countdown="2021/01/06"></div>
</div>
</a>
</div>
<div class="col-md-12">
<a href="#" class="code-offer-item">
<img src="<?= base_url()?>asset/images/best-offers/offer-4.jpg" alt="">
</a>
</div>
</div>
</div>
</div>


<div class="section145">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="main-title-tt">
<div class="main-title-left">
<span>For You</span>
<h2><?= $nama_kategori2[0]['nama_kategori'];?></h2>
</div>
<a href="#" class="see-more-btn">See All</a>
</div>
</div>
<div class="col-md-12">
<div class="owl-carousel featured-slider owl-theme">

<?php
$y= count($produk2);
for($z=0;$z<$y;$z++){

    if(file_exists("asset/foto_produk/".$produk2[$z]['gambar'])){
        $im =  base_url('asset/foto_produk/'.$produk2[$z]['gambar']);
    }else{
        $im =  base_url('asset/foto_produk/no-image.png');
    }

?>

<div class="item">
<div class="product-item">
<a href="<?= base_url('produk/detail/'.$produk2[$z]['produk_seo']); ?>" class="product-img">
<img src="<?= $im; ?>" alt="">
<div class="product-absolute-options">
<span class="offer-badge-1">6% off</span>
<span class="like-icon" title="wishlist"></span>
</div>
</a>
<div class="product-text-dt">
<p>Available<span>(In Stock)</span></p>
<h4> <?= $produk2[$z]['nama_produk'] ?></h4>
<div class="product-price">$<?=$produk2[$z]['harga_beli']?> <span>$15000</span></div>
<div class="qty-cart">
<div class="quantity buttons_added">
<input type="button" value="-" class="minus minus-btn">
<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
<input type="button" value="+" class="plus plus-btn">
</div>
<span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
</div>
</div>
</div>
</div>


<?php } ?>

</div>
</div>
</div>
</div>
</div>


<div class="section145">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="main-title-tt">
<div class="main-title-left">
<span>For You</span>
<h2>Added New Products</h2>
</div>
<a href="#" class="see-more-btn">See All</a>
</div>
</div>
<div class="col-md-12">
<div class="owl-carousel featured-slider owl-theme">


<?php
$a= count($produk3);
 for($b=0;$b<$a;$b++){

    
    if(file_exists("asset/foto_produk/".$produk3[$b]['produk_seo'])){
        $im =  base_url('asset/foto_produk/'.$produk3[$b]['produk_seo']);
    }else{
        $im =  base_url('asset/foto_produk/no-image.png');
    }
    
?>


<div class="item">
<div class="product-item">
<a href="<?= base_url('produk/detail/'.$produk3[$b]['produk_seo']); ?>" class="product-img">
<img src="<?= base_url('asset/foto_produk/'.$produk3[$b]['gambar'])?>" alt="">
<div class="product-absolute-options">
<span class="offer-badge-1">New</span>
<span class="like-icon" title="wishlist"></span>
</div>
</a>
<div class="product-text-dt">
<p>Available<span>(In Stock)</span></p>
<h4> <?= $produk3[$b]['nama_produk'] ?></h4>
<div class="product-price">$<?= $produk3[$b]['harga_beli'] ?> <span>$15</span></div>
<div class="qty-cart">
<div class="quantity buttons_added">
<input type="button" value="-" class="minus minus-btn">
<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
<input type="button" value="+" class="plus plus-btn">
</div>
<span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
</div>
</div>
</div>
</div>

<?php } ?>

</div>
</div>
</div>
</div>
</div>

</div>
