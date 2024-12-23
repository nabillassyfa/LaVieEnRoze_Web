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
    <h4>Detail Pesanan <br> No Rekap: <?php echo $rekap->id ?></div></h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id Menu</th>
            <th>Nama Menu</th>
            <th>Jumlah Pesanan</th>
            <th>Harga Satuan</th>
            <th>Sub-Total</th>
            <th>Status Pesanan</th>
        </tr>

        <?php
        $total = 0;
        foreach ($pesanan as $psn) :
            $subtotal = $psn->jumlah * $psn->harga;
            $total += $subtotal;

        ?>

<tr>
    <td><?php echo $psn->id_menu ?></td>
    <td><?php echo $psn->nama_menu ?></td>
    <td><?php echo $psn->jumlah ?></td>
    <td><?php echo number_format($psn->harga) ?></td>
    <td><?php echo number_format($subtotal, 0, ',', '.') ?></td>
    <td>
        <a href="<?php echo site_url('C_Rekap/status/' . $psn->id . '/1') ?>">Disiapkan</a>
        <a href="<?php echo site_url('C_Rekap/status/' . $psn->id . '/2') ?>">Dijalan</a>
        <a href="<?php echo site_url('C_Rekap/status/' . $psn->id . '/3') ?>">Selesai</a>
    </td>
</tr>


        <?php endforeach; ?>
        <tr>
            <td colspan="4" align="right">Grand Total</td>
            <td align="right">Rp. <?php echo number_format($total,0,',','.')  ?></td>
        </tr>

    </table>

    <a href="<?php echo site_url('C_Rekap/index')?>"><div class="btn btn-sm btn-primary">Kembali</div></a>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function updateOrderStatus(orderID, newStatus) {
        $.ajax({
            url: '<?php echo site_url('C_Rekap/update_status'); ?>',
            type: 'POST',
            data: { orderID: orderID, newStatus: newStatus },
            success: function(response) {
                // Handle the response or update the UI as needed
                console.log('Order status updated successfully');
            },
            error: function() {
                // Handle the error if the update fails
                console.log('Failed to update order status');
            }
        });
    }
</script>
