<!doctype html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/foodbar/book-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 May 2023 01:04:31 GMT -->
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="<?php echo base_url('img/LVRoze.png');?>" type="image/png">
<title>Book A Table</title>

<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css');?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('vendors/linericon/style.css');?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('css/font-awesome.min.css');?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('vendors/owl-carousel/owl.carousel.min.css');?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('vendors/lightbox/simpleLightbox.css');?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('vendors/nice-select/css/nice-select.css');?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('vendors/animate-css/animate.css');?>" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<link rel="stylesheet" href="<?php echo base_url('css/style.css');?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('css/responsive.css');?>" type="text/css">
</head>
<body>

<header class="header_area">
<div class="main_menu">
<nav class="navbar navbar-expand-lg navbar-light">
<div class="container">

<a class="navbar-brand logo_h" href="index-2.html">
<img class="logo-1" src="<?php echo base_url('img/LVRoze.png');?>" alt="" width="25%">
<img class="logo-2" src="<?php echo base_url('img/LVRoze.png');?>" alt="" width="25%">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
</div>
</header>


<section class="banner_area">
<div class="banner_inner d-flex align-items-center">
<div class="container">
<div class="banner_content text-center">
<h1>Checkout</h1>
<div class="page_link">
<a href="#">Keranjang</a>
<a href="#">Checkout</a>
</div>
</div>
</div>
<div class="shape shape1"></div>
<div class="shape shape2"></div>
<div class="shape shape3"></div>
<div class="shape shape4"></div>
<div class="shape shape5"></div>
<div class="shape shape6"></div>
<div class="shape shape7"></div>
</div>
</section>
<br>
<br>
    <body>
    <div style="margin-left: 90%;;">
    <a href="<?=site_url('c_LVrose/menulogin')?>" ><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg></a></div>
        <div class="container-fluid">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>No</th>
                <th>Nama Menu</th>
                <th>Kuantitas</th>
                <th>Harga</th>
                <th>Total Harga</th>
            </tr>
            <?php
            $no = 1;
            foreach ($this->cart->contents() as $items) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $items ['name'] ?></td>
                <td><?php echo $items ['qty'] ?></td>
                <td align="rigth"> Rp. <?php echo number_format($items ['price'], 0, ',','.') ?></td>
                <td align="rigth"> Rp. <?php echo number_format( $items ['subtotal'], 0, ',','.') ?></td>
            </tr>
            <?php endforeach;?>
            <tr>
                <td colspan="4"></td>
                <td align="rigth"> Rp. <?php echo number_format( $this->cart->total(), 0, ',','.') ?></td>
            </tr>
        </table>
        </div>
        <div>
            <a onclick="return confirm('Apakah anda yakin untuk menghapus semua pesanan??')" href="<?php echo site_url ('C_LVRose/hapus_keranjang') ?>" class="btn btn-sm btn-danger"> Hapus</a>
            <a href="<?php  echo site_url ('C_LVRose/cekout') ?>"  class="btn btn-sm btn-primary"> Checkout</a>
        </div>
    <body>

    <footer class="footer-area p_120">
<div class="container">
<div class="row">
<div class="col-lg-2  col-md-6 col-sm-6">
<div class="single-footer-widget tp_widgets">
<h6 class="footer_title">Top Menu</h6>
<ul class="list">
<li>
<a href="<?php echo site_url('C_LVRose/linkMenu')?>">Menu</a>
</li>
</ul>
</div>
</div>
<div class="col-lg-2  col-md-6 col-sm-6">
<div class="single-footer-widget tp_widgets">
<h6 class="footer_title">Quick Links</h6>
<ul class="list">
<li>
<a href="<?php echo site_url('C_LVRose/kontak')?>">Contact</a>
</li>
<li>
<a href="<?php echo site_url('C_LVRose/about')?>">About</a>
</li>
<li>
<a href="<?php echo site_url('C_LVRose/booking')?>">Book A Table</a>
</li>
</ul>
</div>
</div>
<div class="col-lg-2  col-md-6 col-sm-6">
<div class="single-footer-widget tp_widgets">
</div>
</div>
<div class="col-lg-2  col-md-6 col-sm-6">
<div class="single-footer-widget tp_widgets">
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6">
<aside class="f_widget news_widget">
<div class="f_title">
<h3 class="footer_title">Newsletter</h3>
</div>
<p>Stay updated with our latest trends</p>
<div id="mc_embed_signup">
<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
<div class="input-group d-flex flex-row">
<input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
<button class="btn sub-btn">
<span class="lnr lnr-arrow-right"></span>
</button>
</div>
<div class="mt-10 info"></div>
</form>
</div>
</aside>
</div>
</div>
<div class="row footer-bottom d-flex justify-content-between align-items-center">
<p class="col-lg-8 col-md-8 footer-text m-0">
Revana Faliha Salma (2202869) & Nabilla Assyfa Ramadhani (2205297)
</p>
<div class="col-lg-4 col-md-4 footer-social">
<a href="#">
<i class="fa fa-facebook"></i>
</a>
<a href="#">
<i class="fa fa-twitter"></i>
</a>
<a href="#">
<i class="fa fa-dribbble"></i>
</a>
<a href="#">
<i class="fa fa-behance"></i>
</a>
</div>
</div>
</div>
</footer>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/stellar.js"></script>
<script src="vendors/lightbox/simpleLightbox.min.js"></script>
<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="vendors/isotope/isotope-min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
<script src="vendors/counter-up/jquery.counterup.js"></script>
<script src="vendors/popup/jquery.magnific-popup.min.js"></script>
<script src="vendors/swiper/js/swiper.min.js"></script>
<script src="vendors/scroll/jquery.mCustomScrollbar.js"></script>

<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/contact.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="js/gmaps.min.js"></script>
<script src="js/theme.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7ca0a9309a654ac9","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/foodbar/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 May 2023 01:05:15 GMT -->
</html>