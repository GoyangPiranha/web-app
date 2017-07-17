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
            <a class="navbar-brand" href="javascript:window.history.go(-1);"><span class="glyphicon glyphicon-chevron-left"></span><span  id="registration">Metode Pembayaran</span></a>
        </div>
    </div><!--/.container -->
</nav>
<!-- NAVBAR -->
<div class="container">
    <div class="alert alert-warning " role="alert">
        <!--<h6 class="text-center">Pembayaran harus ditransfer sebelum tanggal 14 September 2017 Pukul 10.00 WIB. Melewati batas pembayaran maka transaksi akan dibatalkan secara otomatis.</h6>-->
    </div>
</div>

<!--<form>-->
    <div class="col-lg-4 col-lg-offset-4 form-login">
    <div id="accordion" role="tablist" aria-multiselectable="true">
    <?php foreach($rekening as $row){ ?>
        <div class="card list-view-column">
            <div class="card-header" role="tab" id="bri">
                <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="<?php echo '#'.$row->nama_bank ?>" aria-expanded="true" aria-controls="collapseOne">
                        <div class="radio radio-primary">
                            <strong><?php echo $row->nama_bank ?></strong>
                        </div>
                    </a>
                </h5>
            </div>
            <div id="<?php echo $row->nama_bank?>" class="collapse" role="tabpanel" aria-labelledby="bri">
                <div class="card-block">
                    <div class="row" id="row-payment">
                        <div class="col-xs-6">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h5 id="custom-h5">No. Rek <strong><?php echo $row->no_rekening ?></strong></h5>
                                </div>
                                <div class="col-xs-12"><div class="line-separator" id="separator"></div></div>
                                <div class="col-xs-12">
                                    <div class="checkbox">
                                         <a href="<?=base_url()?>Payment_method/process/<?=$row->id_bank?>"><input name="submit" type="submit" class="btn btn-block btn-custom-green submit" value="Pilih"></input></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="row">
                                <div class="col-xs-12"></div>
                                <div class="col-xs-12">
                                    <img id="img-payment" class="img-responsive center-block" src="<?php echo base_url(); ?>assets/images/Bank/<?php echo $row->logo_bank; ?>" alt="product-img">
                                </div>
                                <div class="col-xs-12"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <!--<div class="card list-view-column">
            <div class="card-header" role="tab" id="mandiri">
                <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseMandiri" aria-expanded="true" aria-controls="collapseOne">
                        <div class="radio radio-primary">
                            <strong>Bank Mandiri</strong>
                        </div>
                    </a>
                </h5>
            </div>
            <div id="collapseMandiri" class="collapse" role="tabpanel" aria-labelledby="mandiri">
                <div class="card-block">
                    <div class="row" id="row-payment">
                        <div class="col-xs-6">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h5 id="custom-h5">No. Rek <strong>000982883877728</strong></h5>
                                </div>
                                <div class="col-xs-12"><div class="line-separator" id="separator"></div></div>
                                <div class="col-xs-12">
                                    <div class="checkbox">
                                        <input type="checkbox" id="cb2">
                                        <label for="cb2"><strong>Pilih Bank</strong></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="row">
                                <div class="col-xs-12"></div>
                                <div class="col-xs-12">
                                    <img id="img-payment" class="img-responsive center-block" src="<?php echo base_url('assets/images/mandiri.webp'); ?>" alt="product-img">
                                </div>
                                <div class="col-xs-12"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card list-view-column">
            <div class="card-header" role="tab" id="bca">
                <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseBca" aria-expanded="true" aria-controls="collapseOne">
                        <div class="radio radio-primary">
                            <strong>Bank BCA</strong>
                        </div>
                    </a>
                </h5>
            </div>
            <div id="collapseBca" class="collapse" role="tabpanel" aria-labelledby="bca">
                <div class="card-block">
                    <div class="row" id="row-payment">
                        <div class="col-xs-6">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h5 id="custom-h5">No. Rek <strong>000982883877728</strong></h5>
                                </div>
                                <div class="col-xs-12"><div class="line-separator" id="separator"></div></div>
                                <div class="col-xs-12">
                                    <div class="checkbox">
                                        <input type="checkbox" id="cb2">
                                        <label for="cb2"><strong>Pilih Bank</strong></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="row">
                                <div class="col-xs-12"></div>
                                <div class="col-xs-12">
                                    <img id="img-payment" class="img-responsive center-block" src="<?php echo base_url('assets/images/bca.webp'); ?>" alt="product-img">
                                </div>
                                <div class="col-xs-12"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card list-view-column">
            <div class="card-header" role="tab" id="bni">
                <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseBni" aria-expanded="true" aria-controls="collapseOne">
                        <div class="radio radio-primary">
                            <strong>Bank BNI</strong>
                        </div>
                    </a>
                </h5>
            </div>
            <div id="collapseBni" class="collapse" role="tabpanel" aria-labelledby="bni">
                <div class="card-block">
                    <div class="row" id="row-payment">
                        <div class="col-xs-6">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h5 id="custom-h5">No. Rek <strong>000982883877728</strong></h5>
                                </div>
                                <div class="col-xs-12"><div class="line-separator" id="separator"></div></div>
                                <div class="col-xs-12">
                                    <div class="checkbox">
                                        <input type="checkbox" id="cb2">
                                        <label for="cb2"><strong>Pilih Bank</strong></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="row">
                                <div class="col-xs-12"></div>
                                <div class="col-xs-12">
                                    <img id="img-payment" class="img-responsive center-block" src="<?php echo base_url('assets/images/bni.webp'); ?>" alt="product-img">
                                </div>
                                <div class="col-xs-12"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!--end of card list view column-->
    </div>

    <!--<div class="col-xs-12"><div class="line-separator" style="" id="separator"></div></div>
    <div class="card list-view-column" style="margin-top:20px;">
            <div class="card-header" role="tab" id="bni">
                <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#rekPembeli" aria-expanded="true" aria-controls="collapseOne">
                        <div class="radio radio-primary">
                            <strong>Rekening Pembeli</strong>
                        </div>
                    </a>
                </h5>
            </div>
            <div id="rekPembeli" class="collapse" role="tabpanel" aria-labelledby="bni">
                <div class="card-block">
                    <div class="row" id="row-payment">
                        <div class="col-xs-12" style="margin-bottom:5px;">
                            <div class="form-group">
                                <div class="input-group center-block">
                                    <input name="nama_pemilik" type="text" class="form-control" placeholder="Nama Pemilik" aria-describedby="basic-addon1" id="edit-profil-input" value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12" style="margin-bottom:5px;">
                            <div class="form-group">
                                <div class="input-group center-block">
                                    <input name="no_rek" type="text" class="form-control" placeholder="Nomor Rekening" aria-describedby="basic-addon1" id="edit-profil-input" value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="input-group center-block">
                                    <input name="nama_bank" type="text" class="form-control" placeholder="Nama Bank" aria-describedby="basic-addon1" id="edit-profil-input" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->

    <!--<div class="row">
        <div class="col-xs-12" style="margin-bottom: 10px;">
             <input type="submit" value="Selesai" class="btn btn-block btn-custom-yellow center-block"></input> 
        </div>
    </div>-->
</div> 
<!--</form>-->


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
