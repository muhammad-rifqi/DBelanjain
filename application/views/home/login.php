<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, shrink-to-fit=9">
<meta name="description" content="Gambolthemes">
<meta name="author" content="Gambolthemes">
<title>DBelanjain - Sign In</title>

<link rel="icon" type="image/png" href="<?= base_url()?>asset/images/logo-cop.png">

<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
<link href='<?= base_url();?>asset/vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
<link href="<?= base_url();?>asset/css/style.css" rel="stylesheet">
<link href="<?= base_url();?>asset/css/responsive.css" rel="stylesheet">
<link href="<?= base_url();?>asset/css/night-mode.css" rel="stylesheet">
<link href="<?= base_url();?>asset/css/step-wizard.css" rel="stylesheet">

<link href="<?= base_url();?>asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="<?= base_url();?>asset/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
<link href="<?= base_url();?>asset/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
<link href="<?= base_url();?>asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?= base_url();?>asset/vendor/semantic/semantic.min.css">
</head>
<body>
    
<?php if ($this->session->flashdata('msg')) { ?>
    <div class="alert alert-danger alert-dismissable" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <h3 class="alert-heading font-size-h4 font-w400">Failed</h3>
        <p class="mb-0"><?= $this->session->flashdata('message') ?> </p>
    </div>
<?php } ?>
      


<div class="sign-inup">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-5">
<div class="sign-form">
<div class="sign-inner">
<div class="sign-logo" id="logo">
<a href="#"><img src="<?= base_url()?>asset/images/dbelanjain.png" alt=""></a>
<a href="#"><img class="logo-inverse" src="<?= base_url()?>asset/images/dark-logo.svg" alt=""></a>
</div>


<div class="form-dt">
<div class="form-inpts checout-address-step">
<form method="POST" action="<?= base_url('index.php/auth/loginprocess')?>">
<div class="form-title"><h6>Sign In</h6></div>
<div class="form-group pos_rel">
<input id="phone[number]" name="username" type="text" placeholder="Enter Your Username" class="form-control lgn_input" required="">
<i class="uil uil-mobile-android-alt lgn_icon"></i>
</div>
<div class="form-group pos_rel">
<input id="password1" name="password" type="password" placeholder="Enter Password" class="form-control lgn_input" required="">
<i class="uil uil-padlock lgn_icon"></i>
</div>
<button class="login-btn hover-btn" type="submit">Sign In Now</button>
</form>
</div>
<div class="password-forgor">
<a href="forgot_password.html">Forgot Password?</a>
</div>
<div class="signup-link">
<p>Don't have an account? - <a href="<?= base_url('index.php/auth/register');?>">Sign Up Now</a></p>
</div>
</div>
</div>
</div>
<div class="copyright-text text-center mt-3">
<i class="uil uil-copyright"></i>Copyright 2020 <b>DBelanjain</b> . All rights reserved
</div>
</div>
</div>
</div>
</div>

<script src="<?= base_url();?>asset/js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url();?>asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url();?>asset/vendor/OwlCarousel/owl.carousel.js"></script>
<script src="<?= base_url();?>asset/vendor/semantic/semantic.min.js"></script>
<script src="<?= base_url();?>asset/js/jquery.countdown.min.js"></script>
<script src="<?= base_url();?>asset/js/custom.js"></script>
<script src="<?= base_url();?>asset/js/product.thumbnail.slider.js"></script>
<script src="<?= base_url();?>asset/js/offset_overlay.js"></script>
<script src="<?= base_url();?>asset/js/night-mode.js"></script>
</body>
</html>
