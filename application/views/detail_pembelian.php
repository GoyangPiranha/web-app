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
   <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
   <script type="text/javascript" src="assets/js/jquery.uploadPreview.min.js"></script>

<style type="text/css">.thumb-image{float:left;width:100px;position:relative;padding:5px;}</style>

</head>
<body style="margin-top: 0px; margin-bottom: 60px;">
<nav class="navbar-default navbar-fixed-top" style="background-color:#FFC300;">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url('login'); ?>"><span class="glyphicon glyphicon-chevron-left"></span><span  id="registration">Detail Pembelian</span></a>
        </div>
    </div><!--/.container -->
</nav>
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

    <div class="row" id="deskripsiproduk" style="text-align:center;">

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
