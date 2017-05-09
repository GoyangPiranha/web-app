<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

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
   <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.uploadPreview.min.js"></script>

<style type="text/css">.thumb-image{float:left;width:100px;position:relative;padding:5px;}</style>

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
                    <a class="navbar-brand" href="#" id="brand">
                    <?php 
            if (empty($username)) {
              echo "Hai";
            }else{
              echo $username;
              }?></a>
                </div>
            </div>
</nav>

<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none; width: 250px; overflow: hidden; background-color: #FFC300;" id="mySidebar">
  <div class="row" style="background: url(./assets/images/<?php if (empty($avatar)) {echo"profil.png";}else{echo$avatar;}?>) 50% 50% no-repeat;">
            <div class="col-xs-4" id="profilmenu" >
                <div style=" background: url(./assets/images/<?php if (empty($avatar)) {echo"profil.png";}else{echo$avatar;}?>) 50% 50% no-repeat; background-size: cover; overflow: hidden; width: 75px; height: 75px; border-radius: 50px;" class="circle">
                </div>
            </div>
            <div class="col-xs-6" style="text-align: left; line-height: 50%; margin-left: 5px; margin-right: -5px;">
                <p style="color: white;  padding-left: 0; font-size: 110%;  padding-right: 5%; padding-top: 25px; line-height: 100%; ">
                <?php echo $fullname;?> </p>
                <p style="color: orange; font-size: 80%; padding-top: 0;">Regular Account</p>
            </div>
            <div class="col-xs-2">
                <button class="w3-bar-item w3-button" onclick="w3_close()" style="float: right;"><img src="<?php echo base_url('assets/images/cross-out.png'); ?>" style="margin-left: -7px;"></button>
            </div>
        </div>
  <a href="#" class="w3-bar-item w3-button" id="menusidebar" style="text-decoration: none;">Upgrade</a>

  <a href="#" class="w3-bar-item w3-button" id="menusidebar" style="text-decoration: none;">Canvass</a>

  <a href="#" class="w3-bar-item w3-button" id="menusidebar" style="text-decoration: none;">History</a>
  
  <a href="#" class="w3-bar-item w3-button" id="menusidebar" style="text-decoration: none;">Setting</a>
  
  <a href="#" class="w3-bar-item w3-button" id="menusidebar" style="text-decoration: none;">Logout</a>
 
</div>

<!-- tulis disini -->

<div class="container">
    <div class="row" id="deskripsiproduk" style="margin-top: 5%;">
        <div class="col-xs-6">
            <img class="img-responsive" style="width: 120px; height: 150px; margin-bottom: 2%;" src="<?php echo base_url('assets/images/sample1.png'); ?>" >            
        </div>
        <div class="col-xs-6">
            <div>Nomer Transaksi 12341323</div>
            <div>Jumlah: 1 buah</div>
            <div id="pembatas" style="background-color: #FFC300; margin-bottom: 2%;"></div>
            <h3 style="margin-top: -2%;">Status:</h3>
            <div id="status" >
                <button type="submit" class="btn btn-danger">Belum Dibayar</button>
            </div>
            

        </div>
        
        
    </div>
    <h3 style="text-align: center;">Yellow Ham</h3>
        <h5 style="text-align: center; margin-top: -7px;">Oleh Alwin Store</h5>
        <h5 style="text-align: center; margin-top: -7px; color: deepskyblue;">Mostly Positif (2313 Review)</h5>
        
    <div class="row" id="deskripsiproduk"">
        
        <form id="f" enctype="multipart/form-data" method="POST" action="some.php">
            <table>
            <tr>
            <td width="29%" height="100" align="center" valign="middle">
                <img class="product" width="200" height="250" />
                <input type="file" class="uploads" name="images[]" id="upload-photo">
                <label id="upload-photo-label" for="upload-photo">Browse</label>
            </td>
            </tr>
            </table>
            <button id="buttonproduk" class=" btn" type="button">Konfirmasi</button>
        </form>

        
    </div>
</div>

<!-- batas -->
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

function readURL() {
    var input = this;
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(input).prev().attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$(function () {
    $(".uploads").change(readURL)
    $("#f").submit(function(){
        // do ajax submit or just classic form submit
        alert("fake subminting")
        return false
    })
});
</script>



