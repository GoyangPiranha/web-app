<!DOCTYPE html>
<html lang="en" style="margin-bottom: 65px;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Rekap Penjualan</title>

    <link href="<?php echo base_url('assets/assets/materialize/css/materialize.min.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/style.css'); ?>" rel="stylesheet">
</head>
<body style="margin-top: 65px; background: white;">
<!-- NAVBAR -->
<nav class="navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url('login'); ?>"><span class="glyphicon glyphicon-chevron-left"></span><span  id="registration">Rekap Penjualan</span></a>
        </div>
    </div><!--/.container -->
</nav>
<!-- NAVBAR -->

<div class="col-md-4 col-md-offset-4 form-login">
    <?php foreach($riwayat_penjualan as $row){ ?>
    <div class="list-view-column">
        <div class="row">
            <div class="col-xs-4">
                <a href="<?=base_url()?>Details_produk/details/<?=$row->id_produk?>"><img id="img-no-bg" class="img-responsive center-block" src="<?php echo base_url(); ?>assets/images/Product/<?php echo $row->foto_produk_depan; ?>" alt="product-img"></a>
            </div>
            <div class="col-xs-8">
                <div class="row">
                    <div class="col-xs-12">
                        <a href="<?=base_url()?>Details_produk/details/<?=$row->id_produk?>">
                        <h6><strong><?php echo $row->nama_produk ?></strong></h6>
                        </a>
                    </div>
                    <div class="col-xs-12">
                        <h6>Oleh <a href="<?=base_url()?>Profile/show/<?=$row->id_user_produk?>"><?php echo $row->nama_user ?></a></h6>
                    </div>
                    <!--<div class="col-xs-12">
                        <h6><a style="color:#00b0ff;" href="">Mostly Positive (1280 Review)</a></h6>
                    </div>-->
                    <div class="col-xs-12">
                        <h5><strong><?php echo $row->harga_produk ?></strong></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!--
    <div class="list-view-column">
        <div class="row">
            <div class="col-xs-4">
                <img id="img-no-bg" class="img-responsive center-block" src="<?php echo base_url('assets/images/sample2.png'); ?>" alt="product-img">
            </div>
            <div class="col-xs-8">
                <div class="row">
                    <div class="col-xs-12">
                        <h6><strong>Sample Title</strong></h6>
                    </div>
                    <div class="col-xs-12">
                        <h6>Oleh <a href="">Alvin</a></h6>
                    </div>
                    <div class="col-xs-12">
                        <h6><a style="color:#00b0ff;" href="">Mostly Positive (1280 Review)</a></h6>
                    </div>
                    <div class="col-xs-12">
                        <h5><strong>Rp. 500.000</strong></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="list-view-column">
        <div class="row">
            <div class="col-xs-4">
                <img id="img-no-bg" class="img-responsive center-block" src="<?php echo base_url('assets/images/sample2.png'); ?>" alt="product-img">
            </div>
            <div class="col-xs-8">
                <div class="row">
                    <div class="col-xs-12">
                        <h6><strong>Sample Title</strong></h6>
                    </div>
                    <div class="col-xs-12">
                        <h6>Oleh <a href="">Alvin</a></h6>
                    </div>
                    <div class="col-xs-12">
                        <h6><a style="color:#00b0ff;" href="">Mostly Positive (1280 Review)</a></h6>
                    </div>
                    <div class="col-xs-12">
                        <h5><strong>Rp. 500.000</strong></h5>
                    </div>
                </div>
            </div>
        </div>
    </div><div class="list-view-column">
        <div class="row">
            <div class="col-xs-4">
                <img id="img-no-bg" class="img-responsive center-block" src="<?php echo base_url('assets/images/sample2.png'); ?>" alt="product-img">
            </div>
            <div class="col-xs-8">
                <div class="row">
                    <div class="col-xs-12">
                        <h6><strong>Sample Title</strong></h6>
                    </div>
                    <div class="col-xs-12">
                        <h6>Oleh <a href="">Alvin</a></h6>
                    </div>
                    <div class="col-xs-12">
                        <h6><a style="color:#00b0ff;" href="">Mostly Positive (1280 Review)</a></h6>
                    </div>
                    <div class="col-xs-12">
                        <h5><strong>Rp. 500.000</strong></h5>
                    </div>
                </div>
            </div>
        </div>
    </div><div class="list-view-column">
        <div class="row">
            <div class="col-xs-4">
                <img id="img-no-bg" class="img-responsive center-block" src="<?php echo base_url('assets/images/sample2.png'); ?>" alt="product-img">
            </div>
            <div class="col-xs-8">
                <div class="row">
                    <div class="col-xs-12">
                        <h6><strong>Sample Title</strong></h6>
                    </div>
                    <div class="col-xs-12">
                        <h6>Oleh <a href="">Alvin</a></h6>
                    </div>
                    <div class="col-xs-12">
                        <h6><a style="color:#00b0ff;" href="">Mostly Positive (1280 Review)</a></h6>
                    </div>
                    <div class="col-xs-12">
                        <h5><strong>Rp. 500.000</strong></h5>
                    </div>
                </div>
            </div>
        </div>
    </div><div class="list-view-column">
        <div class="row">
            <div class="col-xs-4">
                <img id="img-no-bg" class="img-responsive center-block" src="<?php echo base_url('assets/images/sample2.png'); ?>" alt="product-img">
            </div>
            <div class="col-xs-8">
                <div class="row">
                    <div class="col-xs-12">
                        <h6><strong>Sample Title</strong></h6>
                    </div>
                    <div class="col-xs-12">
                        <h6>Oleh <a href="">Alvin</a></h6>
                    </div>
                    <div class="col-xs-12">
                        <h6><a style="color:#00b0ff;" href="">Mostly Positive (1280 Review)</a></h6>
                    </div>
                    <div class="col-xs-12">
                        <h5><strong>Rp. 500.000</strong></h5>
                    </div>
                </div>
            </div>
        </div>
    </div><div class="list-view-column">
        <div class="row">
            <div class="col-xs-4">
                <img id="img-no-bg" class="img-responsive center-block" src="<?php echo base_url('assets/images/sample2.png'); ?>" alt="product-img">
            </div>
            <div class="col-xs-8">
                <div class="row">
                    <div class="col-xs-12">
                        <h6><strong>Sample Title</strong></h6>
                    </div>
                    <div class="col-xs-12">
                        <h6>Oleh <a href="">Alvin</a></h6>
                    </div>
                    <div class="col-xs-12">
                        <h6><a style="color:#00b0ff;" href="">Mostly Positive (1280 Review)</a></h6>
                    </div>
                    <div class="col-xs-12">
                        <h5><strong>Rp. 500.000</strong></h5>
                    </div>
                </div>
            </div>
        </div>
    </div><div class="list-view-column">
        <div class="row">
            <div class="col-xs-4">
                <img id="img-no-bg" class="img-responsive center-block" src="<?php echo base_url('assets/images/sample2.png'); ?>" alt="product-img">
            </div>
            <div class="col-xs-8">
                <div class="row">
                    <div class="col-xs-12">
                        <h6><strong>Sample Title</strong></h6>
                    </div>
                    <div class="col-xs-12">
                        <h6>Oleh <a href="">Alvin</a></h6>
                    </div>
                    <div class="col-xs-12">
                        <h6><a style="color:#00b0ff;" href="">Mostly Positive (1280 Review)</a></h6>
                    </div>
                    <div class="col-xs-12">
                        <h5><strong>Rp. 500.000</strong></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
</div>

<nav class="navbar navbar-default navbar-fixed-bottom" style="background: #606062;">
    <div class="row" style="margin: 0;">
        <div class="col-xs-4" style="text-align: center;">
            <a href="<?php echo base_url("Detail/wishlist");?>"><img id="footimg" src="<?php echo base_url('assets/images/shopping-cart.png'); ?>"></a>
        </div>
        <div class="col-xs-4" style="text-align: center;">
            <a href="<?php echo base_url("Home");?>"><img id="footimg" src="<?php echo base_url('assets/images/home.png'); ?>"></a>
        </div>
        <div class="col-xs-4" style="text-align: center;">
            <a href="<?php echo base_url("Profile");?>"><img id="footimg" src="<?php echo base_url('assets/images/user.png'); ?>"></a>
        </div>
    </div>
</nav>

<script src="<?php echo base_url('assets/assets/js/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
</body>
</html>
