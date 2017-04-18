<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>List Konveksi</title>


    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/style.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</head>
<body style="margin-top: 60px; background: white;">
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
            <div class="card list-view-column">
                <div class="card-header" role="tab" id="bri">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseBri" aria-expanded="true" aria-controls="collapseOne">
                            <div class="radio radio-primary">
                                <strong>Andshop Custom</strong>
                            </div>
                        </a>
                    </h5>
                </div>
                <div id="collapseBri" class="collapse" role="tabpanel" aria-labelledby="bri">
                    <div class="card-block">
                        <div class="row" id="row-konveksi">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <img id="img-konveksi" class="img-responsive center-block" src="<?php echo base_url('assets/images/konveksi1.jpg'); ?>" alt="product-img">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h5 class="text-left"><strong>Deskripsi: </strong></h5>
                                    </div>
                                    <div class="col-xs-12">
                                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam, corporis cum dicta doloremque enim error exercitationem, ipsum iure labore maiores minus, quasi quia reiciendis sed tempora temporibus veritatis vero?</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-2">
                                <h5 class="text-left"><strong>Harga</strong></h5>
                            </div>
                            <div class="col-xs-10">
                                <h5 class="text-left"><strong>: Rp. 250.000/unit</strong></h5>
                            </div>
                            <div class="col-xs-12">
                                <div class="checkbox">
                                    <input type="checkbox" id="cb2">
                                    <label for="cb2"><strong>Pilih Konveksi</strong></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card list-view-column">
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
                        <div class="row">
                            <div class="col-xs-8">
                                <div class="row">
                                    <div class="col-xs-12">
                                        a/n <strong>Zainul Bahar, S.Kom </strong>
                                    </div>
                                    <div class="col-xs-12">
                                        No. Rek <strong>000982883877728</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4">
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
                        <div class="row">
                            <div class="col-xs-8">
                                <div class="row">
                                    <div class="col-xs-12">
                                        a/n <strong>Zainul Bahar, S.Kom </strong>
                                    </div>
                                    <div class="col-xs-12">
                                        No. Rek <strong>000982883877728</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4">
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
                        <div class="row">
                            <div class="col-xs-8">
                                <div class="row">
                                    <div class="col-xs-12">
                                        a/n <strong>Zainul Bahar, S.Kom </strong>
                                    </div>
                                    <div class="col-xs-12">
                                        No. Rek <strong>000982883877728</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4">
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
            </div>
        </div>
        <input name="submit" type="submit" class="btn btn-block btn-custom-green submit" value="Lanjut"></input>
    </form>


</div>


<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
