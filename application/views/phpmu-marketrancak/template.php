<?php include APPPATH."views/layout/header.php" ; ?>


<div id="category_model" class="header-cate-model main-gambo-model modal fade" tabindex="-1" role="dialog" aria-modal="false">
<div class="modal-dialog category-area" role="document">
<div class="category-area-inner">
<div class="modal-header">
<button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
<i class="uil uil-multiply"></i>
</button>
</div>
<div class="category-model-content modal-content">
<div class="cate-header">
<h4>Select Category</h4>
</div>
<ul class="category-by-cat">

<?php 
$l = count($cp);
for($j=0;$j<$l;$j++){
?>

<li>
<a href="#" class="single-cat-item">
<div class="icon">
<img src="<?= base_url('asset/foto_produk/'.$cp[$j]['gambar'])?>" alt="">
</div>
<div class="text"> <?= $cp[$j]['nama_kategori']?></div>
</a>
</li>

<?php } ?>


</ul>
    <a href="#" class="morecate-btn"><i class="uil uil-apps"></i>More Categories</a>
</div>
</div>
 </div>
</div>


<div id="search_model" class="header-cate-model main-gambo-model modal fade" tabindex="-1" role="dialog" aria-modal="false">
<div class="modal-dialog search-ground-area" role="document">
<div class="category-area-inner">
<div class="modal-header">
<button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
<i class="uil uil-multiply"></i>
</button>
</div>
<div class="category-model-content modal-content">
<div class="search-header">
<form action="#">
<input type="search" placeholder="Search for products...">
<button type="submit"><i class="uil uil-search"></i></button>
</form>
</div>
<div class="search-by-cat">
<a href="#" class="single-cat">
<div class="icon">
<img src="<?= base_url('asset/new/')?>images/category/icon-1.svg" alt="">
</div>
<div class="text">
Fruits and Vegetables
</div>
</a>
<a href="#" class="single-cat">
<div class="icon">
<img src="<?= base_url('asset/new/')?>images/category/icon-2.svg" alt="">
</div>
<div class="text"> Grocery & Staples </div>
</a>
<a href="#" class="single-cat">
<div class="icon">
<img src="<?= base_url('asset/new/')?>images/category/icon-3.svg" alt="">
</div>
<div class="text"> Dairy & Eggs </div>
</a>
<a href="#" class="single-cat">
<div class="icon">
<img src="<?= base_url('asset/new/')?>images/category/icon-4.svg" alt="">
</div>
<div class="text"> Beverages </div>
</a>
<a href="#" class="single-cat">
<div class="icon">
<img src="<?= base_url('asset/new/')?>images/category/icon-5.svg" alt="">
</div>
<div class="text"> Snacks </div>
</a>
<a href="#" class="single-cat">
<div class="icon">
<img src="<?= base_url('asset/new/')?>images/category/icon-6.svg" alt="">
</div>
<div class="text"> Home Care </div>
</a>
<a href="#" class="single-cat">
<div class="icon">
<img src="<?= base_url('asset/new/')?>images/category/icon-7.svg" alt="">
</div>
<div class="text"> Noodles & Sauces </div>
</a>
<a href="#" class="single-cat">
<div class="icon">
<img src="<?= base_url('asset/new/')?>images/category/icon-8.svg" alt="">
</div>
<div class="text"> Personal Care </div>
</a>
<a href="#" class="single-cat">
<div class="icon">
<img src="<?= base_url('asset/new/')?>images/category/icon-9.svg" alt="">
</div>
<div class="text"> Pet Care </div>
</a>
</div>
</div>
</div>
</div>
</div>


<div class="bs-canvas bs-canvas-left position-fixed bg-cart h-100">
<div class="bs-canvas-header side-cart-header p-3 ">
<div class="d-inline-block  main-cart-title">My Cart <span>(2 Items)</span></div>
<button type="button" class="bs-canvas-close close" aria-label="Close"><i class="uil uil-multiply"></i></button>
</div>
<div class="bs-canvas-body">
<div class="cart-top-total">
<div class="cart-total-dil">
<h4>Gambo Super Market</h4>
<span>$34</span>
</div>
<div class="cart-total-dil pt-2">
<h4>Delivery Charges</h4>
<span>$1</span>
</div>
</div>
<div class="side-cart-items">
<div class="cart-item">
<div class="cart-product-img">
<img src="<?= base_url('asset/new/')?>images/product/img-1.jpg" alt="">
<div class="offer-badge">6% OFF</div>
</div>
<div class="cart-text">
<h4>Product Title Here</h4>
<div class="cart-radio">
<ul class="kggrm-now">
<li>
<input type="radio" id="a1" name="cart1">
<label for="a1">0.50</label>
</li>
<li>
<input type="radio" id="a2" name="cart1">
<label for="a2">1kg</label>
</li>
<li>
<input type="radio" id="a3" name="cart1">
<label for="a3">2kg</label>
</li>
<li>
<input type="radio" id="a4" name="cart1">
<label for="a4">3kg</label>
</li>
</ul>
</div>
<div class="qty-group">
<div class="quantity buttons_added">
<input type="button" value="-" class="minus minus-btn">
<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
<input type="button" value="+" class="plus plus-btn">
</div>
<div class="cart-item-price">$10 <span>$15</span></div>
</div>
<button type="button" class="cart-close-btn"><i class="uil uil-multiply"></i></button>
</div>
</div>
<div class="cart-item">
<div class="cart-product-img">
<img src="<?= base_url('asset/new/')?>images/product/img-2.jpg" alt="">
<div class="offer-badge">6% OFF</div>
</div>
<div class="cart-text">
<h4>Product Title Here</h4>
<div class="cart-radio">
<ul class="kggrm-now">
<li>
<input type="radio" id="a5" name="cart2">
<label for="a5">0.50</label>
</li>
<li>
<input type="radio" id="a6" name="cart2">
<label for="a6">1kg</label>
</li>
<li>
<input type="radio" id="a7" name="cart2">
<label for="a7">2kg</label>
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
<button type="button" class="cart-close-btn"><i class="uil uil-multiply"></i></button>
</div>
</div>
</div>
</div>
<div class="bs-canvas-footer">
<div class="cart-total-dil saving-total ">
<h4>Total Saving</h4>
<span>$11</span>
</div>
<div class="main-total-cart">
<h2>Total</h2>
<span>$35</span>
</div>
<div class="checkout-cart">
<a href="#" class="promo-code">Have a promocode?</a>
<a href="#" class="cart-checkout-btn hover-btn">Proceed to Checkout</a>
</div>
</div>
</div>


<header class="header clearfix">
<div class="top-header-group">
<div class="top-header">
<div class="res_main_logo">
<a href="index.html"><img src="<?= base_url('asset/new/')?>images/dark-logo-1.svg" alt=""></a>
</div>
<div class="main_logo" id="logo">
<a href="index.html"><img src="<?= base_url('asset/new/')?>images/logo.svg" alt=""></a>
<a href="index.html"><img class="logo-inverse" src="<?= base_url('asset/new/')?>images/dark-logo.svg" alt=""></a>
</div>
<div class="select_location">
<div class="ui inline dropdown loc-title">
<div class="text">
<i class="uil uil-location-point"></i>
Gurugram
</div>
<i class="uil uil-angle-down icon__14"></i>
<div class="menu dropdown_loc">
<div class="item channel_item">
<i class="uil uil-location-point"></i>
Gurugram
</div>
<div class="item channel_item">
<i class="uil uil-location-point"></i>
New Delhi
</div>
<div class="item channel_item">
<i class="uil uil-location-point"></i>
Bangaluru
</div>
<div class="item channel_item">
<i class="uil uil-location-point"></i>
Mumbai
</div>
<div class="item channel_item">
<i class="uil uil-location-point"></i>
Hyderabad
</div>
<div class="item channel_item">
<i class="uil uil-location-point"></i>
Kolkata
</div>
<div class="item channel_item">
<i class="uil uil-location-point"></i>
Ludhiana
</div>
<div class="item channel_item">
<i class="uil uil-location-point"></i>
Chandigrah
</div>
</div>
</div>
</div>
<div class="search120">
<div class="ui search">
<div class="ui left icon input swdh10">
<input class="prompt srch10" type="text" placeholder="Search for products..">
<i class='uil uil-search-alt icon icon1'></i>
</div>
</div>
</div>
<div class="header_right">
<ul>
<li>
<a href="#" class="offer-link"><i class="uil uil-phone-alt"></i>1800-000-000</a>
</li>
<li>
<a href="offers.html" class="offer-link"><i class="uil uil-gift"></i>Offers</a>
</li>
<li>
<a href="faq.html" class="offer-link"><i class="uil uil-question-circle"></i>Help</a>
</li>
<li>
<a href="dashboard_my_wishlist.html" class="option_links" title="Wishlist"><i class='uil uil-heart icon_wishlist'></i><span class="noti_count1">3</span></a>
</li>
<li class="ui dropdown">
<a href="#" class="opts_account">
<img src="<?= base_url('asset/new/')?>images/avatar/img-5.jpg" alt="">
<span class="user__name">John Doe</span>
<i class="uil uil-angle-down"></i>
</a>
<div class="menu dropdown_account">
<div class="night_mode_switch__btn">
<a href="#" id="night-mode" class="btn-night-mode">
<i class="uil uil-moon"></i> Night mode
<span class="btn-night-mode-switch">
<span class="uk-switch-button"></span>
</span>
</a>
</div>
<a href="dashboard_overview.html" class="item channel_item"><i class="uil uil-apps icon__1"></i>Dashbaord</a>
<a href="dashboard_my_orders.html" class="item channel_item"><i class="uil uil-box icon__1"></i>My Orders</a>
<a href="dashboard_my_wishlist.html" class="item channel_item"><i class="uil uil-heart icon__1"></i>My Wishlist</a>
<a href="dashboard_my_wallet.html" class="item channel_item"><i class="uil uil-usd-circle icon__1"></i>My Wallet</a>
<a href="dashboard_my_addresses.html" class="item channel_item"><i class="uil uil-location-point icon__1"></i>My Address</a>
<a href="offers.html" class="item channel_item"><i class="uil uil-gift icon__1"></i>Offers</a>
<a href="faq.html" class="item channel_item"><i class="uil uil-info-circle icon__1"></i>Faq</a>
<a href="sign_in.html" class="item channel_item"><i class="uil uil-lock-alt icon__1"></i>Logout</a>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="sub-header-group">
<div class="sub-header">
<div class="ui dropdown">
<a href="#" class="category_drop hover-btn" data-toggle="modal" data-target="#category_model" title="Categories"><i class="uil uil-apps"></i><span class="cate__icon">Select Category</span></a>
</div>
<nav class="navbar navbar-expand-lg navbar-light py-3">
<div class="container-fluid">
<button class="navbar-toggler menu_toggle_btn" type="button" data-target="#navbarSupportedContent"><i class="uil uil-bars"></i></button>
<div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt1-5 mt-lg-0 mobileMenu" id="navbarSupportedContent">
<ul class="navbar-nav main_nav align-self-stretch">
<li class="nav-item"><a href="index.html" class="nav-link active" title="Home">Home</a></li>
<li class="nav-item"><a href="shop_grid.html" class="nav-link new_item" title="New Products">New Products</a></li>
<li class="nav-item"><a href="shop_grid.html" class="nav-link" title="Featured Products">Featured Products</a></li>
<li class="nav-item">
<div class="ui icon top left dropdown nav__menu">
<a class="nav-link" title="Pages">Pages <i class="uil uil-angle-down"></i></a>
<div class="menu dropdown_page">
<a href="dashboard_overview.html" class="item channel_item page__links">Account</a>
<a href="about_us.html" class="item channel_item page__links">About Us</a>
<a href="shop_grid.html" class="item channel_item page__links">Shop Grid</a>
<a href="single_product_view.html" class="item channel_item page__links">Single Product View</a>
 <a href="checkout.html" class="item channel_item page__links">Checkout</a>
<a href="request_product.html" class="item channel_item page__links">Product Request</a>
<a href="order_placed.html" class="item channel_item page__links">Order Placed</a>
<a href="bill.html" class="item channel_item page__links">Bill Slip</a>
<a href="sign_in.html" class="item channel_item page__links">Sign In</a>
<a href="sign_up.html" class="item channel_item page__links">Sign Up</a>
<a href="forgot_password.html" class="item channel_item page__links">Forgot Password</a>
<a href="contact_us.html" class="item channel_item page__links">Contact Us</a>
</div>
</div>
</li>
<li class="nav-item">
<div class="ui icon top left dropdown nav__menu">
<a class="nav-link" title="Blog">Blog <i class="uil uil-angle-down"></i></a>
<div class="menu dropdown_page">
<a href="our_blog.html" class="item channel_item page__links">Our Blog</a>
<a href="blog_no_sidebar.html" class="item channel_item page__links">Our Blog Two No Sidebar</a>
<a href="blog_left_sidebar.html" class="item channel_item page__links">Our Blog with Left Sidebar</a>
<a href="blog_right_sidebar.html" class="item channel_item page__links">Our Blog with Right Sidebar</a>
<a href="blog_detail_view.html" class="item channel_item page__links">Blog Detail View</a>
<a href="blog_left_sidebar_single_view.html" class="item channel_item page__links">Blog Detail View with Sidebar</a>
</div>
</div>
</li>
<li class="nav-item"><a href="contact_us.html" class="nav-link" title="Contact">Contact Us</a></li>
</ul>
</div>
</div>
</nav>
<div class="catey__icon">
<a href="#" class="cate__btn" data-toggle="modal" data-target="#category_model" title="Categories"><i class="uil uil-apps"></i></a>
</div>
<div class="header_cart order-1">
<a href="#" class="cart__btn hover-btn pull-bs-canvas-left" title="Cart"><i class="uil uil-shopping-cart-alt"></i><span>Cart</span><ins>2</ins><i class="uil uil-angle-down"></i></a>
</div>
<div class="search__icon order-1">
<a href="#" class="search__btn hover-btn" data-toggle="modal" data-target="#search_model" title="Search"><i class="uil uil-search"></i></a>
</div>
</div>
</div>
</header>


<div class="wrapper">

<div class="main-banner-slider">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="owl-carousel offers-banner owl-theme">

<?php 
$j = count($produk);
for($i=0;$i<$j;$i++){
if(!file_exists('asset/foto_produk/'.$produk[$i]['gambar'])){
    $img = base_url('asset/foto_produk/no-image.png');
}else{
    
    $img = base_url('asset/foto_produk/'.$produk[$i]['gambar']);
}
?>

<div class="item">
<div class="offer-item">
<div class="offer-item-img">
<div class="gambo-overlay"></div>
<img src="<?= $img; ?>" alt="">
</div>

<div class="offer-text-dt">
<div class="offer-top-text-banner">
<p>6% Off</p>
<div class="top-text-1">Buy More & Save More</div>
<span><?= $produk[$i]['nama_produk'];?></span>
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
$l = count($cp);
for($j=0;$j<$l;$j++){
?>

<div class="item">
<a href="#" class="category-item">
<div class="cate-img">
<img src="<?= base_url('asset/foto_produk/'.$cp[$j]['gambar'])?>" alt="">
</div>
<h4> <?= $cp[$j]['nama_kategori']?> </h4>
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
<h2><?php $ku1 = $this->model_app->view_where("rb_kategori_produk",array('urutan'=>'1'))->row_array(); echo $ku1['nama_kategori']; ?></h2>
</div>
<a href="#" class="see-more-btn">See All</a>
</div>
</div>
<div class="col-md-12">
<div class="owl-carousel featured-slider owl-theme">


<?php 
$pda = $this->model_reseller->produk_perkategori(0,0,$ku1['id_kategori_produk'],10)->result_array();
$p = count($pda);
for($m=0;$m<$p;$m++){
?>

<div class="item">
<div class="product-item">
<a href="<?= base_url('produk/detail/'.$pda[$m]['produk_seo']); ?>" class="product-img">
<?php
if(!file_exists('asset/foto_produk/'.$pda[$m]['gambar'])){
?>
<img src="<?= base_url('asset/foto_produk/no-image.png')?>" alt="">
<?php
}else{
?>
<img src="<?= base_url('asset/foto_produk/'.$pda[$m]['gambar'])?>" alt="">
<?php } ?>
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
<img src="<?= base_url('asset/new/')?>images/best-offers/offer-1.jpg" alt="">
</a>
</div>
<div class="col-lg-4 col-md-6">
<a href="#" class="best-offer-item">
<img src="<?= base_url('asset/new/')?>images/best-offers/offer-2.jpg" alt="">
</a>
</div>
<div class="col-lg-4 col-md-6">
<a href="#" class="best-offer-item offr-none">
<img src="<?= base_url('asset/new/')?>images/best-offers/offer-3.jpg" alt="">
<div class="cmtk_dt">
<div class="product_countdown-timer offer-counter-text" data-countdown="2021/01/06"></div>
</div>
</a>
</div>
<div class="col-md-12">
<a href="#" class="code-offer-item">
<img src="<?= base_url('asset/new/')?>images/best-offers/offer-4.jpg" alt="">
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
<?php
$ku2 = $this->model_app->view_where("rb_kategori_produk",array('urutan'=>'2'))->row_array();
?>
<span>For You</span>
<h2><?= $ku2[nama_kategori] ?></h2>
</div>
<a href="#" class="see-more-btn">See All</a>
</div>
</div>
<div class="col-md-12">
<div class="owl-carousel featured-slider owl-theme">

<?php
$produk2 = $this->model_reseller->produk_perkategori(0,0,$ku2['id_kategori_produk'],10)->result_array();
$y= count($produk2);
for($z=0;$z<$y;$z++){
?>

<div class="item">
<div class="product-item">
<a href="<?= base_url('produk/detail/'.$produk2[$z]['produk_seo']); ?>" class="product-img">
<img src="<?= base_url('asset/foto_produk/'.$produk2[$z]['gambar'])?>" alt="">
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
<?php
$ku3 = $this->model_app->view_where("rb_kategori_produk",array('urutan'=>'3'))->row_array();
?>
<span>For You</span>
<h2><?= $ku3['nama_kategori']?></h2>
</div>
<a href="#" class="see-more-btn">See All</a>
</div>
</div>
<div class="col-md-12">
<div class="owl-carousel featured-slider owl-theme">

<?php
 $produk3 = $this->model_reseller->produk_perkategori(0,0,$ku3['id_kategori_produk'],10)->result_array();
 $a= count($produk3);
 for($b=0;$b<$a;$b++){
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


<?php include APPPATH."views/layout/footer.php" ; ?>
