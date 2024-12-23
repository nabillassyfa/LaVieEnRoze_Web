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
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent"></div>
                    </div>
                </nav>
            </div>
        </header>


        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="container">
                    <div class="banner_content text-center">
                        <h1>Data Pesan</h1>
                        <div class="page_link">
                            <a href="index-2.html">Home</a>
                            <a href="book-table.html">Data Pesan</a>
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
    <div class="container">
        <div class="card my-5">
            <div class="card-header">
                <div class="card-toolbar">
                    <a href="<?= site_url('C_LVRoze/dtuser') ?>" class="btn submit_btn form-control">Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row mt-5">
                    <div class="row">
                        <div class="col-lg-5">
                            <p class="banner_content text">Nama User</p>
                        </div>
                        <div class="col-lg-7">
                            <p class="banner_content text"><?= $data->nama?></p>
                        </div>
                        <div class="col-lg-5">
                            <p class="banner_content text">Email User</p>
                        </div>
                        <div class="col-lg-7">
                            <p class="banner_content text"><?= $data->email?></p>
                        </div>
                        <div class="col-lg-5">
                            <p class="banner_content text">No Hp User</p>
                        </div>
                        <div class="col-lg-7">
                            <p class="banner_content text"><?= $data->no_telp?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>