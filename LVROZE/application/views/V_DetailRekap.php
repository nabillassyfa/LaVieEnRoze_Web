<!doctype html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/foodbar/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 May 2023 01:05:10 GMT -->
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="<?php echo base_url('img/LVRoze.png');?>" type="image/png">
<title>Contact Us</title>
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
        <link rel="stylesheet" href="<?php echo base_url('css/responsive.css');?>" type="text/css"></head></head>
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

<style>
    .round-image {
  border-radius: 50%;
}
.login-image {
  position: absolute;
  top: 25px; /* Sesuaikan dengan posisi vertikal yang diinginkan */
  right: -870px; /* Sesuaikan dengan posisi horizontal yang diinginkan */
}
</style>
<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
<ul class="nav navbar-nav menu_nav ml-auto">
<li class="nav-item"><a class="nav-link" href="<?php echo site_url ('C_LVRose/menulogin')?>">Menu</a></li>
<li class="nav-item"><a class="nav-link" href="<?php echo site_url ('C_LVRose/reservasi')?>">Reservasi</a></li>
<li class="nav-item"><a class="nav-link" href="<?php echo site_url ('C_LVRose/klogin')?>">Contact</a></li>
<li class="nav-item"><a class="nav-link" href="<?php echo site_url ('C_LVRose/psn')?>">Pesanan</a></li>
</ul>
</div>
</div>
</nav>
    <a class="login-image " onclick="return confirm('Apakah anda yakin untuk keluar?')" href="<?php echo site_url('C_LVRose/logout')?>">
    <img src="<?php echo base_url('img/lg.png');?>" alt="" width="3%" class="round-image" ></a>
</div>
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
    <h4>Detail Pesanan <br></h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Nama Menu</th>
            <th>Jumlah Pesanan</th>
            <th>Harga Satuan</th>
            <th>Sub-Total</th>
            <th>Status</th>
        </tr>

        <?php
        $total = 0;
        foreach ($pesanan as $psn) :
            $subtotal = $psn->jumlah * $psn->harga;
            $total += $subtotal;

        ?>

        <tr>
            <td><?php echo $psn->nama_menu ?></td>
            <td><?php echo $psn->jumlah ?></td>
            <td><?php echo number_format($psn->harga)  ?></td>
            <td><?php echo number_format($subtotal,0,',','.')  ?></td>
            <td><?php echo $psn->status ?></td>
        </tr>

        <?php endforeach; ?>

        <tr>
            <td colspan="4" align="right">Grand Total</td>
            <td align="right">Rp. <?php echo number_format($total,0,',','.')  ?></td>
        </tr>

    </table>

    <a onclick="return confirm('Apakah anda yakin pesanan telah selesai?')" href="<?php echo site_url('C_Rekap/selesai/' . $psn->id_rekap . '/' . $psn->status)?>"><div class="btn btn-sm btn-primary">Selesai</div></a>
</div>