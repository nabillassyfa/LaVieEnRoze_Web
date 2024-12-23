<!doctype html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?php echo base_url('img/favicon.png');?>" type="image/png">
        <title>La Vie En Rose</title>

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
        <link rel="stylesheet" href="<?php echo base_url('css/responsive.css');?>" type="text/css">
        <style>
          .round-image {
          border-radius: 50%;
          }
          .login-image {
          position: absolute;
          top: 45px; /* Sesuaikan dengan posisi vertikal yang diinginkan */
          right: -900px; /* Sesuaikan dengan posisi horizontal yang diinginkan */
          }
        </style>
    </head>
    <body>

    <header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<a class="navbar-brand logo_h" href="index-2.html">
						<img class="logo-1" src="<?php echo base_url('img/LVRoze.png');?>" alt="" width="30%">
						<img class="logo-2" src="<?php echo base_url('img/LVRoze.png');?>" alt="" width="30%">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="<?php echo site_url ('C_LVRoze/menuadmin')?>">Menu</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo site_url ('C_LVRoze/reservasi')?>">Data Reservasi</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo site_url ('C_LVRoze/kontak')?>">Contact</a></li>
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
                    <h1>Menu</h1>
                    <div class="page_link">
                        <a href="index-2.html">Home</a>
                        <a href="menu.html">Menu</a>
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
                                <span> 
                                   <a href="<?php echo base_url('/index.php/C_LVRoze/updateForm/').$data->id_menu?>">Update |</a>
                                 <a href="<?php echo base_url('/index.php/C_LVRoze/deletemn/').$data->id_menu?>"  onclick="return confirm('Apakah Anda yakin ingin menghapus menu ini?')">Delete</a>
                                </span>
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
                                <span> 
                                   <a href="<?php echo base_url('/index.php/C_LVRoze/updateForm/').$data->id_menu?>">Update |</a>
                                 <a href="<?php echo base_url('/index.php/C_LVRoze/deletemn/').$data->id_menu?>"  onclick="return confirm('Apakah Anda yakin ingin menghapus menu ini?')">Delete</a>
                                </span>
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
                                foreach ($dat as $data){
                            ?>
                            <li>
                                <h4><?= $data->nama_menu ?>
                                    <span><?= $data->harga_menu ?></span>
                                </h4>
                                <p><?= $data->keterangan ?></p>
                                <span> 
                                  <a href="<?php echo base_url('/index.php/C_LVRoze/updateForm/').$data->id_menu?>"  >Update |</a>
                                  <a href="<?php echo base_url('/index.php/C_LVRoze/deletemn/').$data->id_menu?>" onclick="return confirm('Apakah Anda yakin ingin menghapus menu ini?')?>">Delete</a>
                                </span>
                            </li>
                            <?php
			                    $cacah++;
		                        }
		                      ?>
                        </ul>
                        <button class="btn submit_btn form-control" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Tambah Menu
                        </button>
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <form action="<?= site_url('C_LVRoze/createAction') ?>" method="post">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Menu</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-6">
                                                <label for="exampleFormControlInput1" class="form-label">Nama Menu</label>
                                                <input type="text" class="form-control" name="nama_menu" id="exampleFormControlInput1">
                                            </div>
                                            <div class="mb-6">
                                                <label for="exampleFormControlInput1" class="form-label">Harga Menu</label>
                                                <input type="text" class="form-control" name="harga_menu" id="exampleFormControlInput1">
                                            </div>
                                            <div class="mb-6">
                                                <label for="exampleFormControlInput1" class="form-label">Keterangan Menu</label>
                                                <input type="text" class="form-control" name="keterangan" id="exampleFormControlInput1">
                                            </div>
                                            <div class="mb-3">
                                              <label for="jenis_menu">Jenis Menu</label>
                                              <select class="form-select" aria-label="Category" id="jenis_menu" name="jenis_menu" required>
                                                  <option value="1">Makanan</option>
                                                  <option value="2">Minuman</option>
                                                  <option value="3">Desert</option>
                                              </select>
                                          </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                  </div>
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