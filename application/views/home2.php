
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

</head>
<body style="margin-top: 0px; margin-bottom: 60px;" id="bodyid" >

<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <div class="row">
                <div class="col-xs-2 col-md-6">

                    <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()" style="background-color: rgba(255, 255, 255, 0)!important;">☰</button>
                </div>
                <div class="col-xs-7 col-md-4">
                    <div id="imaginary_container">
                        <div class="input-group stylish-input-group">
                            <input type="text" class="form-control"  placeholder="Search" >
                            <span class="input-group-addon">
                            <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3 col-md-2">
                    <a class="navbar-brand" href="#" id="brand">
                    <?php
            if (isset($_SESSION['USERNAME'])) {
              echo $_SESSION['USERNAME'];
            }else{
              echo 'Hai';
              }?></a>
                </div>
            </div>
</nav>
<?php foreach($user as $row){ ?>
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none; width: 250px; overflow: hidden; background-color: #FFC300;" id="mySidebar">
  <div class="row" style="background: url(./assets/images/Sampul/<?php echo $row->foto_background_user ?>) 50% 50% no-repeat;">
            <div class="col-xs-4" id="profilmenu" >
                <div style=" background: url(./assets/images/Profil/<?php echo $row->foto_profile_user ?>) 50% 50% no-repeat; background-size: cover; overflow: hidden; width: 75px; height: 75px; border-radius: 50px;" class="circle">
                </div>
            </div>
            <div class="col-xs-6" style="text-align: left; line-height: 50%; margin-left: 5px; margin-right: -5px;">
                <p style="color: white;  padding-left: 0; font-size: 110%;  padding-right: 5%; padding-top: 25px; line-height: 100%; "><?php echo $row->nama_user?></p>
                <p style="color: orange; font-size: 80%; padding-top: 0;">Regular Account</p>
            </div>
            <div class="col-xs-2">
                <button class="w3-bar-item w3-button" onclick="w3_close()" style="float: right;"><img src="<?php echo base_url('assets/images/cross-out.png'); ?>" style="margin-left: -7px;"></button>
            </div>
        </div>
  <a href="#" class="w3-bar-item w3-button" id="menusidebar" style="text-decoration: none;"><h4>Upgrade</h4></a>

  <a href="<?php echo base_url("Detail/throwit");?>" class="w3-bar-item w3-button" id="menusidebar" style="text-decoration: none;"><h4>Canvass</h4></a>

  <a href="<?php echo base_url("Purchasing_history");?>" class="w3-bar-item w3-button" id="menusidebar" style="text-decoration: none;"><h4>History</h4></a>

  <a href="<?php echo base_url("Profile_edit");?>" class="w3-bar-item w3-button" id="menusidebar" style="text-decoration: none;"><h4>Setting</h4></a>


  <a href="<?php echo base_url('Home/logout'); ?>" class="w3-bar-item w3-button" id="menusidebar" style="text-decoration: none;"><h4>Logout</h4></a>

</div>
<?php } ?>


<!--produk-->

        <?php foreach($produk as $row){?>                
        <div class="col-xs-6 col-md-3" id="produk">
            <div class="thumbnail">
                <a href="<?=base_url()?>Details_produk/details/<?=$row->id_produk?>"><img src="<?php echo base_url(); ?>assets/images/Product/<?php echo $row->foto_produk_depan; ?>" alt="" class="img-responsive"></a>
                <div class="caption">
                    <h5 id="produkname"><a href="<?=base_url()?>Details_produk/details/<?=$row->id_produk?>"><?php echo $row->nama_produk ?></a></h5>
                    <p id="produkcaption">Oleh <?php echo $row->nama_user ?></p>
                    <p id="produkrating"><?php echo $row->rating_produk ?></p>
                    <h5 id="produkprice">Rp. <?php echo $row->harga_produk ?></h5>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <a href="<?=base_url()?>Wishlist/insert/<?=$row->id_produk?>"><button type="button" class="btn btn-info btn-product">Whistlist</button></a>
                    </div>
                    <div class="col-xs-6">

                        <a href="<?=base_url()?>Konveksi_list/konveksi/<?=$row->id_produk?>/<?=$row->id_kategori_produk?>"><button type="button" class="btn btn-success btn-product">Beli</button></a>

                    </div>
                </div>
            </div>
        </div>
        <?php } ?>


    </div>
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

</body>
</html>
<script>

function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

function callfunction(a) {
    if (a.value == "throwit") {
        window.location = "<?php echo base_url(); ?>Throw_it";
    }
    else if (a.value == "category"){

    }
}

</script>
