<!DOCTYPE html>
<html lang="en" style="margin-bottom: 65px;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Metode Pembayaran</title>


    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/style.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/style.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</head>
<body style="margin-top: 60px; background: white;">
<!-- NAVBAR -->
<nav class="navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="javascript:window.history.go(-1);"><span class="glyphicon glyphicon-chevron-left"></span><span  id="registration">Rekening User</span></a>
        </div>
    </div><!--/.container -->
</nav>
<!-- NAVBAR -->
<div class="container">
    <div class="alert alert-warning " role="alert">
        <!--<h6 class="text-center">Pembayaran harus ditransfer sebelum tanggal 14 September 2017 Pukul 10.00 WIB. Melewati batas pembayaran maka transaksi akan dibatalkan secara otomatis.</h6>-->
    </div>


    <div class="col-lg-4 col-lg-offset-4 form-login">
    <div id="accordion" role="tablist" aria-multiselectable="true">
    
    </div>
    <h3 style="text-align:center;">Rekening Pemilik</h3>
    <form action="<?=base_url()?>Insert_rekening/update/" method="post">
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                        <input name="nama_pemilik" type="text" class="form-control" placeholder="Nama Pemilik" aria-describedby="basic-addon1">
                    </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                        <input name="no_rek" type="text" class="form-control" placeholder="Nomer Rekening" aria-describedby="basic-addon1">
                    </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                        <input name="nama_bank" type="text" class="form-control" placeholder="Nama Bank" aria-describedby="basic-addon1">
                    </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12" style="margin-bottom: 10px;">
             <input type="submit" value="Selesai" class="btn btn-block btn-custom-yellow center-block"></input> 
        </div>
    </div>
 
</form>


<!--end of col-lg-4-->

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

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
