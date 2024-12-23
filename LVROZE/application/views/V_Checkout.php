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
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $("#pesanButton").click(function(){
            alert("Pesanan anda sudah ditambahkan");
        });
    });
</script>
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

                    

<div style="margin-left: 90%;;">
    <a href="<?=site_url('c_LVrose/menulogin')?>" ><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg></a></div>
<div class="container">
<div class="book_table_inner row">
<?php 
$total = 0;
if ($keranjang = $this->cart->contents ()){
   foreach ($keranjang as $item) {
        $total = $total + $item['subtotal'];
   }
   echo "Total Belanja Anda : Rp. ".number_format ($total, 00,',','.');
}
?>
<br>
<br>
<center> <h3> Input alamat pengiriman </h3></center>
<form class="book_table_form row" action="<?= site_url('C_LVRose/pesanan') ?>" method="post">
<div class="form-group col-md-12">
<label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
<input type="text" class="form-control" id="name" name="nama" placeholder="Masukkan nama" required>
</div>
<div class="form-group col-md-12">
<label for="exampleFormControlInput1" class="form-label">Alamat</label>
<input type="tel" class="form-control" id="alamat" name="alamat" placeholder="Maukan Alamat" required>
</div>
<div class="form-group col-md-12">
<label for="exampleFormControlInput1" class="form-label">Jasa Pengiriman</label>
<select class="form-control" id="pengririman" name="pengiriman">
    <option value="JNE">JNE<option>
    <option value="TIKI">TIKI<option>
    <option value="J&T">J&T<option>
    <option value="GOJEK">GOJEK<option>
    <option value="GRAB">GRAB<option>
</select>
</div>
<div class="form-group col-md-12">
<label for="exampleFormControlInput1" class="form-label">Metode Pembayaran</label>
<select class="form-control" id="pembayaran" name="pembayaran">
    <option value="BCA">BCA - XXXXXXX<option>
    <option value="BRI">BRI - XXXXXXX<option>
    <option value="BSI">BSI - XXXXXXX<option>
    <option  value="BNI">BNI - XXXXXXX<option>
    <option  value="MANDIRI">MANDIRI - XXXXXXXX<option>
</select>
</div>
<div class="container">
  <div class="form-group col-md-12">
  <button type="submit" class="btn submit_btn form-control" >Pesan</button>
  </div>