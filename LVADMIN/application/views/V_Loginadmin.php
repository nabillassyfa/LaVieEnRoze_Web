<!doctype html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo base_url('img/favicon.png');?>" type="image/png">
    <title>LA VIE EN ROSE</title>

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
    <link rel="stylesheet" href="<?php echo base_url('css/responsive.css');?>" type="text/css">
  </head>
  <body>

    <section class="home_banner relative">
    <div class="container-fluid pl-0">
      <div class="row justify-content-center align-items-center full_height">
        <div class="col-lg-6 p-0">
          <div class="banner_left d-flex justify-content-center flex-column">
            <h1>LA VIE EN ROSE</h1>
            <p>Selamat datang di La Vie En Rose, Silahkan Login untuk mengakses menu</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="banner_right d-flex justify-content-center align-items-center">
            <div class="round-planet planet">
              <div class="round-planet planet2">
                <div class="round-planet planet3">
                  <div class="shape shape1"></div>
                  <div class="shape shape2"></div>
                  <div class="shape shape3"></div>
                  <div class="shape shape4"></div>
                  <div class="shape shape5"></div>
                  <div class="shape shape6"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <img class="face-img img-fluid" src="<?php echo base_url ('img/banner/home-banner.png')?>" alt="">
  </section>

  <section class="reservation">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="main_title position-relative">
            <h1>Login For Admin</h1>
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
        <div class="offset-lg-2 offset-md-1 col-lg-8 col-md-10">
          <div class="table_form">
            <form class="book_table_form row" action="<?php echo site_url ('C_LVRoze/ceklogin')?>" method="post">
              <div class="form-group col-md-12">
                <input type="text" class="form-control" id="user" name="user" placeholder="Enter your username">
              </div>
              <div class="form-group col-md-12">
                <input type="password" class="form-control" id="pw" name="pw">
              </div>
              <div class="form-group col-md-12">
                <button type="submit" value="submit" class="btn submit_btn form-control">Login</button>
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
        <div class="col-lg-2  col-md-6 col-sm-6">
          <div class="single-footer-widget tp_widgets">
            <h6 class="footer_title">Top Products</h6>
              <ul class="list">
                <li><a href="#">Managed Website</a></li>
                <li><a href="#">Manage Reputation</a></li>
                <li><a href="#">Power Tools</a></li>
                <li><a href="#">Marketing Service</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2  col-md-6 col-sm-6">
            <div class="single-footer-widget tp_widgets">
              <h6 class="footer_title">Quick Links</h6>
                <ul class="list">
                  <li><a href="#">Jobs</a></li>
                  <li><a href="#">Brand Assets</a></li>
                  <li><a href="#">Investor Relations</a></li>
                  <li><a href="#">Terms of Service</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-2  col-md-6 col-sm-6">
              <div class="single-footer-widget tp_widgets">
                <h6 class="footer_title">Features</h6>
                  <ul class="list">
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Brand Assets</a></li>
                    <li><a href="#">Investor Relations</a></li>
                    <li><a href="#">Terms of Service</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-2  col-md-6 col-sm-6">
                <div class="single-footer-widget tp_widgets">
                  <h6 class="footer_title">Resources</h6>
                    <ul class="list">
                      <li><a href="#">Guides</a></li>
                      <li><a href="#">Research</a></li>
                      <li><a href="#">Experts</a></li>
                      <li><a href="#">Agencies</a></li>
                    </ul>
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
  </body>

</html>