<!doctype html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href=".../img/favicon.png" type="image/png">
<title>Book A Table</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css');?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('vendors/linericon/style.css');?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('css/font-awesome.min.css');?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('vendors/owl-carousel/owl.carousel.min.css');?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('vendors/lightbox/simpleLightbox.css');?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('vendors/nice-select/css/nice-select.css');?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('vendors/animate-css/animate.css');?>" type="text/css">

<link rel="stylesheet" href="<?php echo base_url('css/style.css');?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('css/responsive.css');?>" type="text/css">
</head>
<body>

<header class="header_area">
<div class="main_menu">
<nav class="navbar navbar-expand-lg navbar-light">
<div class="container">

<a class="navbar-brand logo_h" href="index-2.html">
<img class="logo-1" src="img/logo.png" alt="">
<img class="logo-2" src="img/logo-2.png" alt="">
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
    top: 35px; /* Sesuaikan dengan posisi vertikal yang diinginkan */
    right: -900px; /* Sesuaikan dengan posisi horizontal yang diinginkan */
    }
  </style>

<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item"><a class="nav-link" href="<?php echo site_url ('C_LVRoze/menuadmin')?>">Menu</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo site_url ('C_LVRoze/reservasi')?>">Data Reservasi</a></li>
							<li class="nav-item active"><a class="nav-link" href="<?php echo site_url ('C_LVRoze/kontak')?>">Contact</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo site_url ('C_LVRoze/dtuser')?>">User</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo site_url ('C_Rekap/index')?>">Pesanan</a></li>
            </ul>
					</div>
                </div>
                <a class="login-image " onclick="return confirm('Apakah anda yakin untuk keluar?')" href="<?php echo site_url('C_LVRoze/logout')?>" >
                <img src="<?php echo base_url('img/lg.png');?>" alt="" width="3%" class="round-image" ></a>
</nav>
</div>
</header>


<section class="banner_area">
<div class="banner_inner d-flex align-items-center">
<div class="container">
<div class="banner_content text-center">
<h1>Book A Table</h1>
<div class="page_link">
<a href="index-2.html">Home</a>
<a href="book-table.html">Book A Table</a>
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

<center>
<div class="col-md-6">
<div class="card-body">
                        <table class="table table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>Nama Pengirim</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($data as $value) {
                                ?>
                                <tr>
                                    <td><?= $value->nama_pengirim ?></td>
                                    <td>
                                        <div class="d-flex">
                                        <a href="<?= site_url('C_LVRoze/pesan/'. $value->id_customer) ?>" class="btn btn-sm btn-info text-white">Detail</a>
                                        </div>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    </div>
                  </center>


                  <footer class="footer-area p_120">
        <div class="container">
          <div class="row">
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
              <p class="col-lg-8 col-md-8 footer-text m-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank"> <br>Nabilla Assyfa Ramadhani <br>Revana Faliha Salma</a></p>
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
      <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7ca0a8c35f674ab5","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  </body>

</html>