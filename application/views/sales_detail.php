<!DOCTYPE html>
<html lang="en" style="margin-bottom: 65px">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Detail Penjualan</title>

    <link rel="stylesheet" href="<?php echo base_url('./assets/style.css'); ?>">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/style.css'); ?>" rel="stylesheet">
  </head>
  <body style="margin-top: 10px; background: #FFFFFF">
    <!-- NAVBAR -->
    <nav class="navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url('login'); ?>"><span class="glyphicon glyphicon-chevron-left"></span><span  id="registration">  Detail Penjualan</span></a>
          </div>
        </div><!--/.container -->
      </nav>
    <!-- NAVBAR -->

    <div class="col-lg-12 col-lg-offset-0 bg-register">
        <img class="img-responsive" src="<?php echo base_url('assets/images/bg-shirt.png'); ?>" id="img-bg-regist">
    </div>
    <!-- top detail begins-->
    <div class="col-md-4 col-md-offset-4 form-login">
        <div class="outter-form-register">
            <div class="row">
              <div class="col-xs-6">
                <img id="purchase-details" class="img-responsive center-block" style="" src="<?php echo base_url('assets/images/sample1.png'); ?>">
              </div>
              <div class="col-xs-6">
                <div class="row">
                  <div class="col-xs-12">
                    <table>
                      <thead>
                        <td class="small" style="padding-right:5px;">No transaksi</td>
                        <td class="small">: 123123123</td>
                      </thead>
                      <thead >
                        <td class="small" style="padding-right:5px; padding-bottom:5px">Jumlah</td>
                        <td class="small" style="padding-bottom:5px;">: 1 buah</td>
                      </thead>
                    </table>
                  </div>
                  <!-- line separator -->
                  <div class="col-xs-12">
                    <div class="line-separator" id="separator" style="margin-bottom:3px;"></div>
                  </div>
                  <!-- line separator -->
                  <div class="col-xs-12">
                    <h5 class="text-center">Status</h5>
                  </div>

                </div>
              </div>
            </div>
        </div>
    </div>
    <!-- middle detail begins -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-5"></div>
        <div class="col-xs-7">
            <div class="col-xs-12 text-left"><h4><strong>Yellow Ham</strong></h4></div>
            <div class="col-xs-12 text-left"><h5 class="small-font" style="margin-top:0px;">Oleh Alwin Store</h5></div>
            <div class="col-xs-12 text-left"><h5 class="small"style="color:blue;"><strong>Mostly Positive (1289 reviews)</strong></h5></div>
        </div>
      </div>
    </div>

    <!-- bottom detail begins -->
    <div class="col-md-4 col-md-offset-4 form-login" style="margin-top:5px;">
        <div class="outter-form-register" style="border-radius:0px;">
          <div class="row">
            <div class="col-xs-12">
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
        </div>
    </div>

    <!-- navbar footer -->
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

    <script type="text/javascript" src="assets/js/jquery.uploadPreview.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
    <script>
    function readURL(){
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
  </body>
</html>
