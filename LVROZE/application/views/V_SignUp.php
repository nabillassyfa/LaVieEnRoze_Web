<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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


    <title>Login</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
            <img src="<?=base_url('img/LVRoze.png')?>" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="mb-4">
                    <div style="margin-left: 100%;;">
                        <a href="<?=site_url('c_LVrose/linklogin')?>" ><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
              <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg></a></div>
              <h3>Sign Up</h3>
              <p class="mb-4">Silahkan masukkan data Anda.</p>
            </div>
            <form action="<?= site_url('C_LVRose/createActionDaftar') ?>" method="post">
            <div class="form-group col-md-12">
              <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" required>
            </div>
            <div class="form-group col-md-12">
              <label for="exampleFormControlInput1" class="form-label">Nomor Telepon</label>
                <input type="tel" class="form-control" id="no_telp" name="no_telp" placeholder="Nomor telepon" required>
            </div>
            <div class="form-group col-md-12">
              <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan alamat email" required>
            </div>
            <div class="form-group col-md-12">
              <label for="exampleFormControlInput1" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
            </div>
            <div class="form-group col-md-12">
              <label for="exampleFormControlInput1" class="form-label">Password</label>
              <input type="password" class="form-control" id="pass" name="pass" placeholder="Masukkan alamat password" required>
            </div>
            <div class="container">
              <div class="form-group col-md-12">
                <button type="submit" value="submit" class="btn submit_btn form-control" onclick="myFunction()">Make an Account!</button>
              </div>
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="<?=base_url('assets/login/js/jquery-3.3.1.min.js')?>"></script>
    <script src="<?=base_url('assets/login/js/popper.min.js')?>"></script>
    <script src="<?=base_url('assets/login/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('assets/login/js/main.js')?>"></script>
  </body>
</html>