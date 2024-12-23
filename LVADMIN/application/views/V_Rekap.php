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
					<li class="nav-item"><a class="nav-link" href="<?php echo site_url ('C_LVRoze/kontak')?>">Contact</a></li>
                    <li class="nav-item "><a class="nav-link" href="<?php echo site_url ('C_LVRoze/dtuser')?>">User</a></li>
                    <li class="nav-item active"><a class="nav-link" href="<?php echo site_url ('C_Rekap/index')?>">Pesanan</a></li>
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
                        <h1>Data Pesanan</h1>
                        <div class="page_link">
                            <a href="index-2.html">Home</a>
                            <a href="book-table.html">Data Pesanan</a>
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

        <div class="container-fluid">
            <h4>Rekap Pesanan</h4>

            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <th>Id</th>
                    <th>Nama Pemesan</th>
                    <th>Alamat Pengiriman</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Aksi</th>
                </tr>

                <?php foreach ($rekap as $rkp){?>
                    <tr>
                        <td><?php echo $rkp->id ?></td>
                        <td><?php echo $rkp->nama ?></td>
                        <td><?php echo $rkp->alamat ?></td>
                        <td><?php echo $rkp->tgl_pesan ?></td>
                        <td><?php echo anchor(site_url('C_Rekap/detail/' . $rkp->id), '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>