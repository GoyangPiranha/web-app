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
<body style="margin-top: 65px; background: #FFFFFF;">
<!-- NAVBAR -->
<nav class="navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url('Home'); ?>"><span class="glyphicon glyphicon-chevron-left"></span><span  id="registration"> Home</span></a>
        </div>
    </div><!--/.container -->
</nav>
<!-- NAVBAR -->

<div class="col-md-4 col-md-offset-4 form-login">

                        <?php
                        if (empty($status)) {
                          echo "";
                        }else{
                          echo "<div class='alert alert-success alert-dismissible text-center' role='alert'>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                              <span aria-hidden='true'>&times;</span>
                            </button>
                            $status
                          </div>";
                          }

                        ?>

<?php foreach ($wishlist as $wishlist) { ?>
    <div class="list-view-column">
        <div class="row">
            <div class="col-xs-10">
            </div>
            <div class="col-xs-2">
                <a href="<?=base_url()?>Wishlist/deleteWishlist/<?=$wishlist->id?>"><span id="wishlist-delete" class="glyphicon glyphicon-trash small"></span><a/>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4">
                <img id="img-no-bg" class="img-responsive center-block" src="assets/images/Product/<?php echo $wishlist->foto_produk_depan ?>" alt="product-img">
            </div>
            <div class="col-xs-8">
                <div class="row">
                    <div class="col-xs-12">
                        <h5><strong><?php echo $wishlist->nama_produk ?></strong></h5>
                    </div>
                    <div class="col-xs-12">
                        <h6>Oleh <a href=""><?php echo $wishlist->nama_user ?></a></h6>
                    </div>
                    <div class="col-xs-12">
                        <h5><strong><?php echo $wishlist->harga_produk ?></strong></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-8"></div>
            <div class="col-xs-4">
                <button href="<?=base_url('');?>Konveksi_list" style="padding: 3px 7px;border-radius: 2px;font-size: 12px;" class="pull-right btn btn-custom-yellow small">Bayar</button>
            </div>
        </div>
    </div>
<?php } ?>

</div>



<nav class="navbar navbar-default navbar-fixed-bottom" style="background: #606062;">
    <div class="row" style="margin: 0;">
        <div class="col-xs-4" style="text-align: center;">
            <a href="<?php echo base_url("Wishlist");?>"><img id="footimg" src="<?php echo base_url('assets/images/shopping-cart.png'); ?>"></a>
        </div>
        <div class="col-xs-4" style="text-align: center;">
            <a href="<?php echo base_url("Home");?>"><img id="footimg" src="<?php echo base_url('assets/images/home.png'); ?>"></a>
        </div>
        <div class="col-xs-4" style="text-align: center;">
            <a href="<?php echo base_url("Profile");?>"><img id="footimg" src="<?php echo base_url('assets/images/user.png'); ?>"></a>
        </div>
    </div>
</nav>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">-->
<script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
</body>
</html>