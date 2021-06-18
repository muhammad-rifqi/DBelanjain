<?php
$rows = $this->db->query("SELECT a.*, b.nama_kota, c.nama_provinsi FROM `rb_reseller` a JOIN rb_kota b ON a.kota_id=b.kota_id
                            JOIN rb_provinsi c ON b.provinsi_id=c.provinsi_id where a.id_reseller='$record[id_reseller]'")->row_array();
$kat = $this->model_app->view_where('rb_kategori_produk',array('id_kategori_produk'=>$record['id_kategori_produk']))->row_array();
$jual = $this->model_reseller->jual_reseller($record['id_reseller'],$record['id_produk'])->row_array();
$beli = $this->model_reseller->beli_reseller($record['id_reseller'],$record['id_produk'])->row_array();
$disk = $this->db->query("SELECT * FROM rb_produk_diskon where id_produk='$record[id_produk]'")->row_array();
$diskon = ($disk['diskon']/$record['harga_konsumen'])*100;
if ($disk['diskon']>0){ $diskon_persen = "<div class='top-right'>$diskon</div>"; }else{ $diskon_persen = ''; }
if ($disk['diskon']>=1){ 
  $harga_konsumen =  "Rp ".($record['harga_konsumen']-$disk['diskon']);
  $harga_asli = "Rp ".$record['harga_konsumen'];
}else{
  $harga_konsumen =  "Rp ".$record['harga_konsumen'];
  $harga_asli = "";
}

?>

<?php include APPPATH."views/layout/menu_user.php" ; ?>


<div class="wrapper">
<div class="gambo-Breadcrumb">
<div class="container">
<div class="row">
<div class="col-md-12">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li class="breadcrumb-item"><a href="shop_grid.html">Vegetables & Fruits</a></li>
<li class="breadcrumb-item active" aria-current="page">Product Title</li>
</ol>
</nav>
</div>
</div>
</div>
</div>
<div class="all-product-grid">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="product-dt-view">
<div class="row">
<div class="col-lg-4 col-md-4">
<div id="sync1" class="owl-carousel owl-theme">
<div class="item">
<img src="<?= base_url();?>asset/foto_produk/<?= $detail_produk[0]['gambar'];?>" alt="">
</div>
<div class="item">
<img src="<?= base_url();?>asset/foto_produk/<?= $detail_produk[0]['gambar'];?>" alt="">
</div>
<div class="item">
<img src="<?= base_url();?>asset/foto_produk/<?= $detail_produk[0]['gambar'];?>" alt="">
</div>
<div class="item">
<img src="<?= base_url();?>asset/foto_produk/<?= $detail_produk[0]['gambar'];?>" alt="">
</div>
</div>
<div id="sync2" class="owl-carousel owl-theme">
<div class="item">
<img src="<?= base_url();?>asset/foto_produk/<?= $detail_produk[0]['gambar'];?>" alt="">
</div>
<div class="item">
<img src="<?= base_url();?>asset/foto_produk/<?= $detail_produk[0]['gambar'];?>" alt="">
</div>
<div class="item">
<img src="<?= base_url();?>asset/foto_produk/<?= $detail_produk[0]['gambar'];?>" alt="">
</div>
<div class="item">
<img src="<?= base_url();?>asset/foto_produk/<?= $detail_produk[0]['gambar'];?>" alt="">
</div>
</div>
</div>
<div class="col-lg-8 col-md-8">
<div class="product-dt-right">
<h2><?= $detail_produk[0]['nama_produk']; ?></h2>
<div class="no-stock">
<p class="pd-no">Product No.<span>12345</span></p>
<p class="stock-qty">Available<span>(Instock)</span></p>
</div>
<div class="product-radio">
<ul class="product-now">
<li>
<input type="radio" id="p1" name="product1">
<label for="p1">500g</label>
</li>
<li>
<input type="radio" id="p2" name="product1">
<label for="p2">1kg</label>
</li>
<li>
<input type="radio" id="p3" name="product1">
<label for="p3">2kg</label>
</li>
<li>
<input type="radio" id="p4" name="product1">
<label for="p4">3kg</label>
</li>
</ul>
</div>
<p class="pp-descp"> <?= $detail_produk[0]['keterangan']?></p>
<div class="product-group-dt">
<ul>
<li><div class="main-price color-discount">Discount Price<span><?= $diskon?></span></div></li>
<li><div class="main-price mrp-price">MRP Price<span><?= $detail_produk[0]['harga_beli']?></span></div></li>
</ul>
<ul class="gty-wish-share">
<li>
<div class="qty-product">
<div class="quantity buttons_added">
<input type="button" value="-" class="minus minus-btn">
<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
<input type="button" value="+" class="plus plus-btn">
</div>
</div>
</li>
<li><span class="like-icon save-icon" title="wishlist"></span></li>
</ul>
<ul class="ordr-crt-share">
<li><button class="add-cart-btn hover-btn"  onclick="<?= base_url('/auth/login');?>"><i class="uil uil-shopping-cart-alt"></i>Add to Cart</button></li>
<li><button class="order-btn hover-btn">Order Now</button></li>
</ul>
</div>
<div class="pdp-details">
<ul>
<li>
<div class="pdp-group-dt">
<div class="pdp-icon"><i class="uil uil-usd-circle"></i></div>
<div class="pdp-text-dt">
<span>Lowest Price Guaranteed</span>
<p>Get difference refunded if you find it cheaper anywhere else.</p>
</div>
</div>
</li>
<li>
<div class="pdp-group-dt">
<div class="pdp-icon"><i class="uil uil-cloud-redo"></i></div>
<div class="pdp-text-dt">
<span>Easy Returns & Refunds</span>
<p>Return products at doorstep and get refund in seconds.</p>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-12">
<div class="pdpt-bg">
<div class="pdpt-title">
<h4>More Like This</h4>
</div>
<div class="pdpt-body scrollstyle_4">
<div class="cart-item border_radius">
<a href="single_product_view.html" class="cart-product-img">
<img src="<?= base_url();?>asset/new/images/product/img-6.jpg" alt="">
<div class="offer-badge">4% OFF</div>
</a>
<div class="cart-text">
<h4>Product Title Here</h4>
<div class="cart-radio">
<ul class="kggrm-now">
<li>
<input type="radio" id="k1" name="cart1">
<label for="k1">0.50</label>
</li>
<li>
<input type="radio" id="k2" name="cart1">
<label for="k2">1kg</label>
</li>
<li>
<input type="radio" id="k3" name="cart1">
<label for="k3">2kg</label>
</li>
<li>
<input type="radio" id="k4" name="cart1">
<label for="k4">3kg</label>
</li>
</ul>
</div>



<div class="qty-group">
<div class="quantity buttons_added">
<input type="button" value="-" class="minus minus-btn">
<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
<input type="button" value="+" class="plus plus-btn">
</div>
<div class="cart-item-price">$12 <span>$15</span></div>
</div>
</div>
</div>
<div class="cart-item border_radius">
<a href="single_product_view.html" class="cart-product-img">
<img src="<?= base_url();?>asset/new/images/product/img-2.jpg" alt="">
<div class="offer-badge">6% OFF</div>
</a>
<div class="cart-text">
<h4>Product Title Here</h4>
<div class="cart-radio">
<ul class="kggrm-now">
<li>
<input type="radio" id="k5" name="cart2">
<label for="k5">0.50</label>
</li>
<li>
<input type="radio" id="k6" name="cart2">
<label for="k6">1kg</label>
</li>
<li>
<input type="radio" id="k7" name="cart2">
<label for="k7">2kg</label>
</li>
</ul>
</div>


<div class="qty-group">
<div class="quantity buttons_added">
<input type="button" value="-" class="minus minus-btn">
<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
<input type="button" value="+" class="plus plus-btn">
</div>
<div class="cart-item-price">$24 <span>$30</span></div>
</div>
</div>
</div>
<div class="cart-item border_radius">
<a href="single_product_view.html" class="cart-product-img">
<img src="<?= base_url();?>asset/new/images/product/img-5.jpg" alt="">
</a>
<div class="cart-text">
<h4>Product Title Here</h4>
<div class="cart-radio">
<ul class="kggrm-now">
<li>
<input type="radio" id="k8" name="cart3">
<label for="k8">0.50</label>
</li>
<li>
<input type="radio" id="k9" name="cart3">
<label for="k9">1kg</label>
</li>
<li>
<input type="radio" id="k10" name="cart3">
<label for="k10">1.50kg</label>
</li>
</ul>
</div>



<div class="qty-group">
<div class="quantity buttons_added">
<input type="button" value="-" class="minus minus-btn">
<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
<input type="button" value="+" class="plus plus-btn">
</div>
<div class="cart-item-price">$15</div>
</div>

</div>
</div>
</div>
</div>
</div>



<div class="col-lg-8 col-md-12">
<div class="pdpt-bg">
<div class="pdpt-title">
<h4>Product Details</h4>
</div>
<div class="pdpt-body scrollstyle_4">
<div class="pdct-dts-1">
<div class="pdct-dt-step">
<h4>Description</h4>
<p> <?= $detail_produk[0]['keterangan']?></p>
</div>
<div class="pdct-dt-step">
<h4>Benefits</h4>
<div class="product_attr">
Aliquam nec nulla accumsan, accumsan nisl in, rhoncus sapien.<br>
In mollis lorem a porta congue.<br>
Sed quis neque sit amet nulla maximus dignissim id mollis urna.<br>
Cras non libero at lorem laoreet finibus vel et turpis.<br>
Mauris maximus ligula at sem lobortis congue.<br>
</div>
</div>
<div class="pdct-dt-step">
<h4>How to Use</h4>
<div class="product_attr">
The peeled, orange segments can be added to the daily fruit bowl, and its juice is a refreshing drink.
</div>
</div>
<div class="pdct-dt-step">
<h4>Seller</h4>
<div class="product_attr">
Gambolthemes Pvt Ltd, Sks Nagar, Near Mbd Mall, Ludhana, 141001
</div>
</div>
<div class="pdct-dt-step">
<h4>Disclaimer</h4>
<p>Phasellus efficitur eu ligula consequat ornare. Nam et nisl eget magna aliquam consectetur. Aliquam quis tristique lacus. Donec eget nibh et quam maximus rutrum eget ut ipsum. Nam fringilla metus id dui sollicitudin, sit amet maximus sapien malesuada.</p>
</div>
</div>
</div>
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
<h2>Top Featured Products</h2>
</div>
<a href="#" class="see-more-btn">See All</a>
</div>
</div>
<div class="col-md-12">
<div class="owl-carousel featured-slider owl-theme">



<?php 

$p = count($pda);
for($m=0;$m<$p;$m++){
?>

<div class="item">
<div class="product-item">
<a href="<?= base_url('produk/detail/'.$pda[$m]['produk_seo']); ?>" class="product-img">
<img src="<?= base_url('asset/foto_produk/'.$pda[$m]['gambar']) ?>" alt="">
<div class="product-absolute-options">
<span class="offer-badge-1">6% off</span>
<span class="like-icon" title="wishlist"></span>
</div>
</a>
<div class="product-text-dt">
<p>Available<span>(In Stock)</span></p>
<h4><?= $pda[$m]['nama_produk'];?></h4>
<div class="product-price">$12 <span>$15</span></div>
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
