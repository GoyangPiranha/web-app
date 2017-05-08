<!DOCTYPE html>
<html lang="en" style="margin-bottom: 65px;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Wishlist</title>

    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/style.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>
<body style="margin-top: 65px; background: white;">
<!-- NAVBAR -->
<nav class="navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url('login'); ?>"><span class="glyphicon glyphicon-chevron-left"></span><span  id="registration"> Wishlist</span></a>
        </div>
    </div><!--/.container -->
</nav>
<!-- NAVBAR -->

<div class="col-md-4 col-md-offset-4 form-login">
    <div class="list-view-column">
        <div class="row">
            <div class="col-xs-10">
            </div>
            <div class="col-xs-2">
                <span id="wishlist-delete" class="glyphicon glyphicon-trash small"></span>
            </div>
        </div>
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
                        <h5><strong>Rp. 500.000</strong></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-8"></div>
            <div class="col-xs-4">
                <button style="padding: 3px 7px;border-radius: 2px;font-size: 12px;" class="pull-right btn btn-custom-yellow small">Bayar</button>
            </div>
        </div>

        <!--separator-->
        <div class="line-separator" id="separator"></div>
        <!--separator-->

        <div class="row" style="padding-left: 10px;">
            <div class="col-xs-4">
                <h4 class="small"><strong>Harga :</strong></h4>
            </div>

        </div>
    </div>
    <div class="list-view-column">
        <div class="row">
            <div class="col-xs-10">
            </div>
            <div class="col-xs-2">
                <span id="wishlist-delete" class="glyphicon glyphicon-trash small"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4">
                <img id="img-no-bg" class="img-responsive center-block" src="<?php echo base_url('assets/images/sample2.png'); ?>" alt="product-img">
            </div>
            <div class="col-xs-8">
                <div class="row">
                    <div class="col-xs-12">
                        <h5><strong>Sample Title</strong></h5>
                    </div>
                    <div class="col-xs-12">
                        <h6>Oleh <a href="">Alvin</a></h6>
                    </div>
                    <div class="col-xs-12">
                        <h5><strong>Rp. 500.000</strong></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-8"></div>
            <div class="col-xs-4">
                <button style="padding: 3px 7px; border-radius: 2px;font-size: 12px;" class="pull-right btn btn-custom-yellow small">Bayar</button>
            </div>
        </div>

        <!--separator-->
        <div class="line-separator" id="separator"></div>
        <!--separator-->

        <div class="row" style="padding-left: 10px;">
            <div class="col-xs-4">
                <h4 class="small"><strong>Harga :</strong></h4>
            </div>

        </div>
    </div>
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
            <a href="<?php echo base_url("Welcome");?>"><img id="footimg" src="<?php echo base_url('assets/images/user.png'); ?>"></a>
        </div>
    </div>
</nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
</body>
</html>