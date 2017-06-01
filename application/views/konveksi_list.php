<!DOCTYPE html>
<html lang="en" style="margin-bottom: 65px">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <title>List Konveksi</title>
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/style.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/style.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</head>
<body style="margin-top: 20px; background: white;">
<!-- NAVBAR -->
<nav class="navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url('login'); ?>"><span class="glyphicon glyphicon-chevron-left"></span><span  id="registration">List Konveksi</span></a>
        </div>
    </div><!--/.container -->
</nav>
<!-- NAVBAR -->

<div class="col-lg-4 col-lg-offset-4 form-login">
    <form action="<?php echo base_url(''); ?>" class="inner-login" method="POST" enctype="multipart/form-data">
        <div id="accordion" role="tablist" aria-multiselectable="true">
            <!--list view-->    
            <?php foreach($konveksi as $konveksi) { ?>
            <div class="card list-view-column konveksi-col">
                <div class="card-header" role="tab" id="bri">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#first" aria-expanded="true" aria-controls="collapseOne">
                            <div class="radio radio-primary">
                                <strong><?php echo $konveksi->nama ?></strong>
                            </div>
                        </a>
                    </h5>
                </div>
                <div id="first" class="collapse" role="tabpanel" aria-labelledby="bri">
                    <div class="card-block">
                        <div class="row" id="row-konveksi">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12" style="margin-bottom: 10px;">
                                        <img id="img-konveksi" class="img-responsive center-block" src="assets/images/<?php echo $konveksi->logo ?>" alt="product-img">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12"><div class="line-separator" id="separator"></div></div>
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h5 class="text-left"><strong>Deskripsi: </strong></h5>
                                    </div>
                                    <div class="col-xs-12">
                                        <p class="text-justify"><?php echo $konveksi->deskripsi ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12"><div class="line-separator" id="separator"></div></div>
                            <div class="col-xs-2">
                                <h5 class="text-left"><strong>Harga</strong></h5>
                            </div>
                            <div class="col-xs-10" style="margin-bottom: 5px;">
                                <h5 class="text-left"><strong>: Rp. <?php echo $konveksi->harga ?>/unit</strong></h5>
                            </div>
                            <div class="col-xs-12"><div class="line-separator" id="separator"></div></div>
                            <div class="col-xs-12">
                                <a href="<?=base_url()?>Wishlist/deleteWishlist/<?=$wishlist->id?>"><input name="submit" type="submit" class="btn btn-block btn-custom-green submit" value="Lanjut"></input></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!--ends of list view-->


        </div>
    </form>
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

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
