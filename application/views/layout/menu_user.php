
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
<img src="<?= base_url()?>asset/images/category/icon-1.svg" alt="">
</div>
<div class="text">
Fruits and Vegetables
</div>
</a>
<a href="#" class="single-cat">
<div class="icon">
<img src="<?= base_url()?>asset/images/category/icon-2.svg" alt="">
</div>
<div class="text"> Grocery & Staples </div>
</a>
<a href="#" class="single-cat">
<div class="icon">
<img src="<?= base_url()?>asset/images/category/icon-3.svg" alt="">
</div>
<div class="text"> Dairy & Eggs </div>
</a>
<a href="#" class="single-cat">
<div class="icon">
<img src="<?= base_url()?>asset/images/category/icon-4.svg" alt="">
</div>
<div class="text"> Beverages </div>
</a>
<a href="#" class="single-cat">
<div class="icon">
<img src="<?= base_url()?>asset/images/category/icon-5.svg" alt="">
</div>
<div class="text"> Snacks </div>
</a>
<a href="#" class="single-cat">
<div class="icon">
<img src="<?= base_url()?>asset/images/category/icon-6.svg" alt="">
</div>
<div class="text"> Home Care </div>
</a>
<a href="#" class="single-cat">
<div class="icon">
<img src="<?= base_url()?>asset/images/category/icon-7.svg" alt="">
</div>
<div class="text"> Noodles & Sauces </div>
</a>
<a href="#" class="single-cat">
<div class="icon">
<img src="<?= base_url()?>asset/images/category/icon-8.svg" alt="">
</div>
<div class="text"> Personal Care </div>
</a>
<a href="#" class="single-cat">
<div class="icon">
<img src="<?= base_url()?>asset/images/category/icon-9.svg" alt="">
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
<img src="<?= base_url()?>asset/images/product/img-1.jpg" alt="">
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
<img src="<?= base_url()?>asset/images/product/img-2.jpg" alt="">
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
<a href="index.html"><img src="<?= base_url()?>asset/images/dark-logo-1.svg" alt=""></a>
</div>
<div class="main_logo" id="logo">
<a href="<?= base_url();?>"><img src="<?= base_url()?>asset/images/dbelanjain.png" alt=""></a>
<a href="<?= base_url();?>"><img class="logo-inverse" src="<?= base_url()?>asset/images/dark-logo.svg" alt=""></a>
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
<img src="<?= base_url()?>asset/images/avatar/img-5.jpg" alt="">
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
<?php include"../home/menu_member.php";?>
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
<li class="nav-item"><a href="<?= base_url();?>" class="nav-link active" title="Home">Home</a></li>
<li class="nav-item"><a href="<?= base_url('user/allproduk');?>" class="nav-link new_item" title="New Products">New Products</a></li>
<li class="nav-item"><a href="<?= base_url('user/allproduk');?>" class="nav-link" title="Featured Products">Featured Products</a></li>
<li class="nav-item"><a href="<?= base_url('user/kontak');?>" class="nav-link" title="Contact">Contact Us</a></li>
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

