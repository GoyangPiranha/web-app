
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0  user-scalable=no"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/assets/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="<?php echo base_url('assets/bootstrap/css/style.css');?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('./assets/style.css'); ?>">

   <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <style type="text/css">.thumb-image{float:left;width:100px;position:relative;padding:5px;}</style>


</head>
<body style="margin-top: 0px; margin-bottom: 60px;">

<nav class="navbar-default navbar-fixed-top" style="background-color:#FFC300;">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="javascript:window.history.go(-1);"><span class="glyphicon glyphicon-chevron-left"></span><span  id="registration">Detail</span></a>
        </div>
    </div><!--/.container -->
</nav>

<?php foreach($produk as $produk){ ?>
<div class="container">

<div id="batasatas"></div>
<!--tulis disini-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" style="margin-bottom: 5px;">
        <div class="item active">
            <img src="<?php echo base_url(); ?>assets/images/Product/<?php echo $produk->foto_produk_depan; ?>" alt="Chania" class="center-block">
            <!--<div class="carousel-caption">
            <h4>Tampak Depan</h4>-->
            <!--</div>-->
        </div>

        <div class="item">
            <img src="<?php echo base_url(); ?>assets/images/Product/<?php echo $produk->foto_produk_belakang; ?>" alt="wwww" class="center-block">
            <!--<div class="carousel-caption">
            <h4>Tampak Belakang</h4>-->
            <!--</div>-->
        </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" id="carousel-left">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" id="carousel-right">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div id="batasbawah"></div>

<h3 style="text-align: center;"><?php echo $produk->nama_produk; ?></h3>
<h4 style="text-align: center; margin-top: -7px;">Oleh <a href="<?=base_url()?>Profile/show/<?=$produk->id_user?>"><?php echo $produk->nama_user; ?></a></h4>
<h5 id="produkprice" style="text-align: center; margin-top: -7px;">Rp. <?php echo $produk->harga_produk ?></h5>

<div id="deskripsiproduk">
    <div class="row">
        <div class="col-xs-12">
            <p style="font-size: 120%;">Deskripsi:</p>
            <p style="font-size: 120%;"><?php echo $produk->deskripsi; ?></p>
        </div>
        <!--<div class="col-xs-2">
            <a href=""><img src="<?php echo base_url('assets/images/shopping-cart.png'); ?>" ></a>
        </div>-->
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div id="pembatas" style="background-color: #FFC300; margin-bottom: 2%;"></div>
        </div>
        <div class="col-xs-6">
            <button id="buttonproduk" class=" btn" type="button">Beli</button>
        </div>
        <div class="col-xs-6">
            <button id="buttonproduk" class=" btn" type="button">Wishlist</button>
        </div>
    </div>
</div>

</div>
<?php } ?>

<nav class="navbar navbar-default navbar-fixed-bottom" style="background: #606062;">
    <div class="row" style="margin: 0;">
        <div class="col-xs-4" style="text-align: center;">
            <a><img id="footimg" src="<?php echo base_url('assets/images/shopping-cart.png'); ?>"></a>
        </div>
        <div class="col-xs-4" style="text-align: center;">
            <a><img id="footimg" src="<?php echo base_url('assets/images/home.png'); ?>"></a>
        </div>
        <div class="col-xs-4" style="text-align: center;">
            <a><img id="footimg" src="<?php echo base_url('assets/images/user.png'); ?>"></a>
        </div>
    </div>
</nav>

</body>
</html>
<script>
   
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
