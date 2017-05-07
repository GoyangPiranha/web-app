<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Halaman Login</title>

    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/style.css'); ?>" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Monofett' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Puritan' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="col-md-4 col-md-offset-4 form-login">


    <div class="outter-logo">
        <img href="<?php base_url()?>" class="img-responsive center-block" id="img-custom-login" src="<?php echo base_url('assets/bootstrap/img/logo.png'); ?>" alt="logo">
        <h4 class="text-center" id="throw">Throw<span id="app">App</span></h4>
        <h5 class="text-center" id="youridea">your ideas</h5>
    </div>

    <div class="outter-form-login" id="login">
        <div class="row">
            <div class="col-xs-12">
                <h5 class="text-center alert alert-warning"><strong>Halaman Belum Tersedia</strong></h5>
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

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
