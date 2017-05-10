
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0  user-scalable=no"/>
    <script src="<?php echo base_url('assets/assets/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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

<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none; width: 250px; overflow: hidden; background-color: #FFC300;" id="mySidebar">
  <div class="row" style="background: url(./assets/images/<?php if (isset($_SESSION['AVATAR'])) {echo $_SESSION['AVATAR'];}else{echo"profil.png";}?>) 50% 50% no-repeat;">
            <div class="col-xs-4" id="profilmenu" >
                <div style=" background: url(./assets/images/<?php if (isset($_SESSION['AVATAR'])) {echo $_SESSION['AVATAR'];}else{echo"profil.png";}?>) 50% 50% no-repeat; background-size: cover; overflow: hidden; width: 75px; height: 75px; border-radius: 50px;" class="circle">
                </div>
            </div>
            <div class="col-xs-6" style="text-align: left; line-height: 50%; margin-left: 5px; margin-right: -5px;">
                <p style="color: white;  padding-left: 0; font-size: 110%;  padding-right: 5%; padding-top: 25px; line-height: 100%; "><?php echo $_SESSION['FULLNAME'];?></p>
                <p style="color: orange; font-size: 80%; padding-top: 0;">Regular Account</p>
            </div>
            <div class="col-xs-2">
                <button class="w3-bar-item w3-button" onclick="w3_close()" style="float: right;"><img src="<?php echo base_url('assets/images/cross-out.png'); ?>" style="margin-left: -7px;"></button>
            </div>
        </div>
  <a href="#" class="w3-bar-item w3-button" id="menusidebar" style="text-decoration: none;">Upgrade</a>

  <a href="<?php echo base_url("Detail/throwit");?>" class="w3-bar-item w3-button" id="menusidebar" style="text-decoration: none;">Canvass</a>

  <a href="<?php echo base_url("Purchasing_history");?>" class="w3-bar-item w3-button" id="menusidebar" style="text-decoration: none;">History</a>

  <a href="<?php echo base_url("Profile_edit");?>" class="w3-bar-item w3-button" id="menusidebar" style="text-decoration: none;">Setting</a>
  

  <a href="<?php echo base_url('Home/logout'); ?>" class="w3-bar-item w3-button" id="menusidebar" style="text-decoration: none;">Logout</a>
 
</div>




<div id="myCarousel" class="carousel slide" onclick="w3_close()" data-ride="carousel">
    <!-- Indicators -->
    <!-- <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol> -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" style="margin-bottom: 5px;">
        <div class="item active">
            <img src="<?php echo base_url('assets/images/fashion1.jpg'); ?>" alt="Chania">
        </div>

        <div class="item">
            <img src="<?php echo base_url('assets/images/fashion2.jpg'); ?>" alt="Chania">
        </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container" onclick="w3_close()">
    <div class="row">

        <div class="col-xs-6">
            <button type="button" class="buttonmenu1" onclick="callfunction(this)" value="category">Category</button>
        </div>
        <div class="col-xs-6">
            <button type="button"  class="buttonmenu2" onclick="callfunction(this)" value="throwit" >Throw It</button>
        </div>
        <div class="col-xs-6">
            <p>Kaos</p>
        </div>
        <div class="col-xs-6">
            <button type="button" class="seeall">See All</button>
        </div>

        <div class="col-xs-6 col-md-4" id="produk">
            <div class="thumbnail">
                <img src="<?php echo base_url('assets/images/sample1.png'); ?>" alt="" class="img-responsive">
                <div class="caption">
                    <h5 id="produkname"><a href="#">First Product</a></h5>
                    <p id="produkcaption">oleh Alvin Store</p>
                    <p id="produkrating">Mostly Positive(123 review)</p>
                    <h5 id="produkprice">$24.99</h5>
                </div>
            </div>
        </div>

        <div class="col-xs-6 col-md-4" id="produk">
            <div class="thumbnail">
                <img src="<?php echo base_url('assets/images/sample1.png'); ?>" alt="" class="img-responsive">
                <div class="caption">
                    <h5 id="produkname"><a href="#">First Product</a></h5>
                    <p id="produkcaption">oleh Alvin Store</p>
                    <p id="produkrating">Mostly Positive(123 review)</p>
                    <h5 id="produkprice">$24.99</h5>
                </div>
            </div>
        </div>

        <div class="col-xs-6">
            <p>Kemeja</p>
        </div>
        <div class="col-xs-6">
            <button type="button" class="seeall">See All</button>
        </div>

        <div class="col-xs-6 col-md-4" id="produk">
            <div class="thumbnail">
                <img src="<?php echo base_url('assets/images/sample1.png'); ?>" alt="" class="img-responsive">
                <div class="caption">
                    <h5 id="produkname"><a href="#">First Product</a></h5>
                    <p id="produkcaption">oleh Alvin Store</p>
                    <p id="produkrating">Mostly Positive(123 review)</p>
                    <h5 id="produkprice">$24.99</h5>
                </div>
            </div>
        </div>

        <div class="col-xs-6 col-md-4" id="produk">
            <div class="thumbnail">
                <img src="<?php echo base_url('assets/images/sample1.png'); ?>" alt="" class="img-responsive">
                <div class="caption">
                    <h5 id="produkname"><a href="#">First Product</a></h5>
                    <p id="produkcaption">oleh Alvin Store</p>
                    <p id="produkrating">Mostly Positive(123 review)</p>
                    <h5 id="produkprice">$24.99</h5>
                </div>
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
        window.location = "<?php echo base_url(); ?>Detail/throwit";
    }
    else if (a.value == "category"){

    }
}

</script>