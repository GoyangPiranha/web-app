
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <link rel="stylesheet" href="<?php base_url("assets/style.css");?>">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



</head>
<body style="margin-top: 0px; margin-bottom: 60px;">

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
                    <a class="navbar-brand" href="#" id="brand">Brand</a>
                </div>
            </div>
</nav>

<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none; width: 250px; overflow: hidden; background-color: #FFC300;" id="mySidebar">
  <div class="row" style="background: url(./images/f1.jpg) 50% 50% no-repeat;">
            <div class="col-xs-4" id="profilmenu" >
                <div style=" background: url(./images/f1.jpg) 50% 50% no-repeat; background-size: cover; overflow: hidden; width: 75px; height: 75px; border-radius: 50px;" class="circle">
                </div>
            </div>
            <div class="col-xs-6" style="text-align: left; line-height: 50%; margin-left: 5px; margin-right: -5px;">
                <p style="color: white;  padding-left: 0; font-size: 110%;  padding-right: 5%; padding-top: 25px; line-height: 100%; ">Tio Renndy Winarna</p>
                <p style="color: orange; font-size: 80%; padding-top: 0;">Regular Account</p>
            </div>
            <div class="col-xs-2">
                <button class="w3-bar-item w3-button" onclick="w3_close()" style="float: right;"><img src="./images/cross-out.png" style="margin-left: -7px;"></button>
            </div>
        </div>
    <div id="pembatas"></div>
  <a href="#" class="w3-bar-item w3-button" id="menusidebar">Upgrade</a>
  <div id="pembatas"></div>
  <a href="#" class="w3-bar-item w3-button" id="menusidebar">Canvass</a>
  <div id="pembatas"></div>
  <a href="#" class="w3-bar-item w3-button" id="menusidebar">History</a>
  <div id="pembatas"></div>
  <a href="#" class="w3-bar-item w3-button" id="menusidebar">Setting</a>
  <div id="pembatas"></div>
  <a href="#" class="w3-bar-item w3-button" id="menusidebar">Logout</a>
  <div id="pembatas"></div>
</div>


<div class="container">

<div id="batasatas"></div>
<!--tulis disini-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" style="margin-bottom: 5px;">
        <div class="item active">
            <img src="http://placehold.it/200x250" alt="Chania" class="center-block">
            <div class="carousel-caption">
            <h4>Tampak Depan</h4>
            </div>
        </div>

        <div class="item">
            <img src="http://placehold.it/200x250" alt="Chania" class="center-block">
            <div class="carousel-caption">
            <h4>Tampak Belakang</h4>
            </div>
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

<h3 style="text-align: center;">Yellow Ham</h3>
<h5 style="text-align: center; margin-top: -7px;">Oleh Alwin Store</h5>
<h5 style="text-align: center; margin-top: -7px; color: deepskyblue;">Mostly Positif (2313 Review)</h5>

<div id="deskripsiproduk">
    <div class="row">
        <div class="col-xs-6">
            <p style="font-size: 80%;">Description:</p>
            <p style="font-size: 80%;">Samdklsmd maslkdm laksdmlsa lkmlds lkmldas lm;lasd lm;lads kmsaldk kjnas kdsandls knasdl klsnlda</p>
        </div>
        <div class="col-xs-2">
            <p style="font-size: 80%;">Size: M/L/XL</p>
        </div>
        <div class="col-xs-4">
            <p  style="font-size: 80%;">Available: 6 Pcs</p>
            <a href=""><img src="./images/shopping-cart.png" style="vertical-align: bottom;"></a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div id="pembatas" style="background-color: #FFC300; margin-bottom: 2%;"></div>
        </div>
        <div class="col-xs-6">
            <button id="buttonproduk" class=" btn" type="button">Beli</button>
        </div>
        <div class="col-xs-6">
            <button id="buttonproduk" class=" btn" type="button">Send Message</button>
        </div>
    </div>
</div>

</div>

<nav class="navbar navbar-default navbar-fixed-bottom" style="background: #606062;">
    <div class="row" style="margin: 0;">
        <div class="col-xs-4" style="text-align: center;">
            <a><img id="footimg" src="./images/shopping-cart.png"></a>
        </div>
        <div class="col-xs-4" style="text-align: center;">
            <a><img id="footimg" src="./images/home.png"></a>
        </div>
        <div class="col-xs-4" style="text-align: center;">
            <a><img id="footimg" src="./images/user.png"></a>
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
