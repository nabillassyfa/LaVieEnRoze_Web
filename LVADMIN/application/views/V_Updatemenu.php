<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="<?php echo base_url('img/LVRoze.png');?>" type="image/png">
  <title>LA VIE EN ROSE</title>

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

  </header>


  <section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
      <div class="banner_content text-center">
      <h1>Update Menu</h1>
      <div class="page_link">
      <a href="#">Update</a>
      <a href="#">Menu</a>
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


    `<section class="book_table_area section_gap">
    <div class="container">
    <div class="book_table_inner row">
    <div class="col-lg-5">
    <div class="table_img">
    <img src="<?php echo base_url('img/LVRoze.png');?>" alt="" width="105%">
    </div>
    </div>
    <div class="col-lg-7">
    <div class="table_form">
    <h3>Update Menu</h3>
    <form class="book_table_form row" action="<?= site_url('C_LVRoze/updatemenu') ?>" method="post">
    <div class="form-group col-md-12">
    <input type="hidden" value="<?php echo $data_menu->id_menu ?>" name ="id_menu">
    <label for="exampleFormControlInput1" class="form-label">Nama Menu</label>
    <input type="text" class="form-control" value="<?php echo $data_menu->nama_menu ?>" name="nama_menu">
    </div>
    <div class="form-group col-md-12">
    <label for="exampleFormControlInput1" class="form-label">Harga Menu</label>
    <input type="text" class="form-control" value="<?php echo $data_menu->harga_menu ?>" name="harga_menu">
    </div>
    <div class="form-group col-md-12">
    <label for="exampleFormControlInput1" class="form-label">Jenis Menu</label>
    <input type="text" class="form-control" value="<?php echo $data_menu->jenis_menu ?>" name="jenis_menu">
    </div>
    <div class="form-group col-md-12">
    <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
    <input type="text" class="form-control" value="<?php echo $data_menu->keterangan ?>" name="keterangan">
    </div>
    <div class="container">
      <div class="form-group col-md-12">
      <button type="submit" value="submit" class="btn submit_btn form-control">Submit</button>
      <button type="submit" value="submit" class="btn submit_btn form-control">Cancel</button>
      </div>
  
  </div>
  </form>
  </div>
  </div>
  </div>
  </div>
  </section>


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