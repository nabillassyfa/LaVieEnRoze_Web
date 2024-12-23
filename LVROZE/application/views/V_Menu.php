<!doctype html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/foodbar/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 May 2023 01:03:20 GMT -->
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css');?>"type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('vendors/linericon/style.css');?>"type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('css/font-awesome.min.css');?>"type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('vendors/owl-carousel/owl.carousel.min.css');?>"type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('../../../cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.11/css/lightgallery.min.css');?>"type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('vendors/nice-select/css/nice-select.css');?>"type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('vendors/animate-css/animate.css');?>"type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('vendors/popup/magnific-popup.css');?>" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('vendors/swiper/css/swiper.min.css');?>" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('vendors/scroll/jquery.mCustomScrollbar.css');?>" type="text/css">

        <link rel="stylesheet" href="<?php echo base_url ('css/style.css');?>" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('css/responsive.css');?>" type="text/css"></head>
<body>

<header class="header_area">
<div class="main_menu">
<nav class="navbar navbar-expand-lg navbar-light">
<div class="container">

<a class="navbar-brand logo_h" href="<?php echo site_url('C_LVRose/index2')?>">
<img class="logo-1" src="<?php echo base_url('img/LVRoze.png');?>" alt="" width="25%">
<img class="logo-2" src="<?php echo base_url('img/LVRoze.png');?>" alt="" width="25%">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

<style>
    .round-image {
  border-radius: 50%;
}
.login-image {
  position: absolute;
  top: 25px; /* Sesuaikan dengan posisi vertikal yang diinginkan */
  right: -680px; /* Sesuaikan dengan posisi horizontal yang diinginkan */
}
</style>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="nav navbar-nav menu_nav ml-auto" style="margin-right: 0;">
    <li class="nav-item"><a class="nav-link" href="<?php echo site_url ('C_LVRose/index')?>">Home</a></li>
    <li class="nav-item"><a class="nav-link" href="<?php echo site_url ('C_LVRose/about')?>">About</a></li>
    <li class="nav-item active"><a class="nav-link" href="<?php echo site_url ('C_LVRose/linkMenu')?>">Menu</a></li>
    <li class="nav-item"><a class="nav-link" href="<?php echo site_url ('C_LVRose/booking')?>">book a table</a></li>
    <li class="nav-item"><a class="nav-link" href="<?php echo site_url ('C_LVRose/kontak')?>">Contact</a></li>
  </ul>
</div>

<div class="navbar">
    <ul class="nav navbar-nav navbar-right">
        <li>
            <?php
            $keranjang = 'Keranjang Belanja: '.$this->cart->total_items(). 'items'
            ?>
        </li>
    </ul>
</div>

</div>
<a class="login-image " href="<?php echo site_url('C_LVRose/linklogin')?>">
<img src="<?php echo base_url('img/ft.jpg');?>" alt="" width="6%" class="round-image" >
</a>
</nav>

</div>

</header>


<section class="banner_area">
<div class="banner_inner d-flex align-items-center">
<div class="container">
<div class="banner_content text-center">
<h1>Menu</h1>
<div class="page_link">
<a href="<?php echo site_url ('C_LVRose/index')?>">Home</a>
<a href="<?php echo site_url ('C_LVRose/linkMenu')?>">Menu</a>
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


<section class="menu_area white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_title position-relative">
                        <h1>Makanan</h1>
                        <hr>
                        <div class="round-planet planet">
                            <div class="round-planet planet2">
                                <div class="shape shape1"></div>
                                <div class="shape shape2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="book_table_inner row align-items-center">
            <div class="offset-lg-4 offset-md-2 col-lg-10 col-md-10">
            <div class="row menu_inner">
                <div class="col-md-10 col-lg-6 col-xl-12">
                    <div class="menu_list">
                        <ul class="list">
                            <?php
                                $cacah=1;
                                foreach ($data as $data){
                            ?>
                            <li>
                                <h4><?= $data->nama_menu ?>
                                    <span><?= $data->harga_menu ?></span>
                                </h4>
                                <p><?= $data->keterangan ?></p>
                            </li>
                            <?php
			                    $cacah++;
		                        }
		                      ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_title position-relative">
                        <h1>Minuman</h1>
                        <hr>
                        <div class="round-planet planet">
                            <div class="round-planet planet2">
                                <div class="shape shape1"></div>
                                <div class="shape shape2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="book_table_inner row align-items-center">
            <div class="offset-lg-4 offset-md-2 col-lg-10 col-md-10">
            <div class="row menu_inner">
                <div class="col-md-10 col-lg-6 col-xl-12">
                    <div class="menu_list">
                        <ul class="list">
                            <?php
                                $cacah=1;
                                foreach ($isi as $data){
                            ?>
                            <li>
                                <h4><?= $data->nama_menu ?>
                                    <span><?= $data->harga_menu ?></span>
                                </h4>
                                <p><?= $data->keterangan ?></p>
                            </li>
                            <?php
			                    $cacah++;
		                        }
		                      ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_title position-relative">
                        <h1>Desert</h1>
                        <hr>
                        <div class="round-planet planet">
                            <div class="round-planet planet2">
                                <div class="shape shape1"></div>
                                <div class="shape shape2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="book_table_inner row align-items-center">
            <div class="offset-lg-4 offset-md-2 col-lg-10 col-md-10">
            <div class="row menu_inner">
                <div class="col-md-10 col-lg-6 col-xl-12">
                    <div class="menu_list">
                        <ul class="list">
                            <?php
                                $cacah=1;
                                foreach ($dataa as $data){
                            ?>
                            <li>
                                <h4><?= $data->nama_menu ?>
                                    <span><?= $data->harga_menu ?></span>
                                </h4>
                                <p><?= $data->keterangan ?></p>
                            </li>
                            <?php
			                    $cacah++;
		                        }
		                      ?>
                        </ul>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <br> <br> <br> <br>
        <div class="container">
            <div class="form-group col-md-12">
                <button type="submit" value="submit" class="btn submit_btn form-control" onclick="location.href=href='<?php echo site_url ('C_LVRose/linklogin')?>'">Pesan Sekarang!</button>
            </div>
        </div>
</section>

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
<script src="js/jquery.lightbox.js"></script>
<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="vendors/isotope/isotope-min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
<script src="vendors/counter-up/jquery.counterup.js"></script>
<script src="js/mail-script.js"></script>
<script src="vendors/popup/jquery.magnific-popup.min.js"></script>
<script src="vendors/swiper/js/swiper.min.js"></script>
<script src="vendors/scroll/jquery.mCustomScrollbar.js"></script>
<script src="js/theme.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7ca0a914bbe94ac9","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/foodbar/menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 May 2023 01:04:31 GMT -->
</html>