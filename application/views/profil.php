<!DOCTYPE html>
<html lang="en" style="margin-bottom: 65px">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_SESSION['FULLNAME'];?> Profil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  user-scalable=no"/>
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/style.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('./assets/style.css'); ?>">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</head>
<body style="margin-top: 6px; margin-bottom: 60px; background: white;">
<div>
    <nav class="navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url('login'); ?>"><span class="glyphicon glyphicon-chevron-left"></span><span  id="registration">Profil</span></a>
        </div>
    </div><!--/.container -->
</nav>
</div>

    <div class="fb-profile">
        <?php foreach($user_data as $row):?>
        <img align="left" class="fb-image-lg" src="<?=base_url();?>assets/images/<?php if($_SESSION['BACKGROUND']==""){echo "default.jpg";}elseif(isset($_SESSION['BACKGROUND'])) {echo $_SESSION['BACKGROUND'];} else{echo "f1.jpg";}?>" alt="Profile image example"/>
        <img align="left" class="fb-image-profile thumbnail-profile" src="<?=base_url();?>assets/images/Profil/<?php if (isset($_SESSION['AVATAR'])) {echo $_SESSION['AVATAR'];}else{echo"default_profile.jpg";}?>" alt="Profile image example"/>

    </div>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h4 class="text-center" style="margin-top: -15px;"><strong><?php echo $_SESSION['FULLNAME'];?></strong></h4>
            <h5 class="text-center">Akun Reguler</h5>
            <h5 class="text-center">Nomor ID: <?php echo $row->id_user?> </h5>
        </div>

        <!-- separator -->
        <div class="col-xs-12"><div class="line-separator" id="separator"></div></div>
        <!-- end of separator -->

        <div class="col-xs-12">
            <table class="table">
                <thead class="text-center">
                    <td class="table-custom col-xs-6">0 Pelanggan</td>
                    <td class="table-custom col-xs-6">0 Ratings</td>
                </thead>
            </table>
        </div>
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-6">
                    <div class="row" >
                        <div class="col-xs-12">
                        <!-- alamat -->
                            <div class="row">
                                <div class="col-xs-1" style="color: #FFC300;"><span class="fa fa-home profile-view"></span></div>
                                <div class="col-xs-11"><h5 class="profile-view"><?php echo $row->alamat_user?></h5></div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-1" style="color: #FFC300;"><span class="fa fa-envelope profile-view"></span></div>
                                <div class="col-xs-11"><h5 style="margin-bottom: 2px;" class="profile-view"><?php echo $row->email_user;?></h5></div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <div class="dropdown">
                              <button class="btn btn-custom-yellow dropdown-toggle align-right" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Kirim Pesan
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="#">Line</a></li>
                                <li><a href="#">Whatsapp</a></li>
                                <li><a href="#">BBM</a></li>
                              </ul>
                             </div>
                        </div>
                        <div class="col-xs-12 text-center">
                            <h5 class="small" style="padding-right: 12px;">Last login [null] hours ago</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- separator -->
        <div class="col-xs-12"><div class="line-separator" id="separator"></div></div>
        <!-- end of separator -->
        <!-- deskripsi -->
        <div class="col-xs-12">
            <h5><strong>Deskripsi:</strong></h5>
            <p><?php echo $row->deskripsi_user;?></p>
        </div>
        <!-- separator -->
        <div class="col-xs-12"><div class="line-separator" id="separator"></div></div>
        <!-- end of separator -->

        <!-- produk -->
        <div class="col-xs-12">
          <h4 style="padding-left: 15px;"><strong>Produk Anda</strong></h4>
        </div>
        <!-- separator -->
        <!-- <div class="col-xs-12"><div class="line-separator" id="separator"></div></div> -->
        <!-- end of separator -->
        <div class="container">
          <div class="col-xs-6 col-md-4" id="produk">
              <div class="thumbnail">
                  <img src="<?php echo base_url('assets/images/sample1.png'); ?>" alt="" class="img-responsive">
                  <div class="caption">
                      <h5 id="produkname"><a href="#">First Product</a></h5>
                      <p id="produkcaption">oleh Alvin Store</p>
                      <p id="produkrating">Mostly Positive(123 review)</p>
                      <h5 id="produkprice">$24.99</h5>
                  </div>
                  <div class="row">
                      <div class="col-xs-6">
                          <button type="button" class="btn btn-info btn-product center-block">Jual</button>
                      </div>
                      <div class="col-xs-6">
                          <button type="button" class="btn btn-success btn-product center-block">Simpan</button>
                      </div>
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
                  <div class="row">
                      <div class="col-xs-6">
                          <button type="button" class="btn btn-info btn-product center-block">Jual</button>
                      </div>
                      <div class="col-xs-6">
                          <button type="button" class="btn btn-success btn-product center-block">Simpan</button>
                      </div>
                  </div>
              </div>
          </div>
        </div>


    </div>
</div>
<?php endforeach;?>





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
<script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
</html>
<script>

function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

</script>
