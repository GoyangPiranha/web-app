<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Halaman Registrasi</title>

    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/style.css'); ?>" rel="stylesheet">
  </head>
  <body style="margin-top: 60px;">
    <!-- NAVBAR -->
    <nav class="navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url('login'); ?>"><span class="glyphicon glyphicon-chevron-left"></span><span  id="registration">  Registration</span></a>
          </div>
        </div><!--/.container -->
      </nav>
    <!-- NAVBAR -->
<!--    <div class="col-md-4 col-md-offset-4 form-login">-->
<!--            <img class="img-responsive img-register" src="--><?php //echo base_url('assets/images/bg-shirt.png'); ?><!--" alt="Flower">-->
<!--    </div>-->

    <div class="col-md-4 col-md-offset-4 form-login">
        <div class="outter-form-login">
            <form action="<?php echo base_url('Daftar/proses'); ?>" class="inner-login" method="POST" enctype="multipart/form-data">
            <h5 class="title-login"><strong>Registration</strong></h5>
            <p style="color: red;">
            <?php 
            if (empty($warning)) {
              echo "";
            }else{
              echo $warning;
              } 
            ?>
            </p>
            <!-- fullname -->
              <div class="row">
                <div class="col-xs-12">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                      <input name="fullname" type="text" class="form-control" placeholder="Nama Lengkap" aria-describedby="basic-addon1">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <!-- username -->
                <div class="col-xs-12">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                      <input name="username" type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                    </div>
                  </div>
                </div>
                <!-- dateofbirth -->

              </div>

              <div class="row">
                <div class="col-xs-12">
                  <div class="form-group" id="formgrupmarginbtm">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar"></span></span>
                      <input name="dateofbirth" type="date" class="form-control" placeholder="Tanggal Lahir" aria-describedby="basic-addon1">
                    </div>
                  </div>
                  <span class="help-block" style="color: #FFC300;">*Tanggal Lahir</span>
                </div>
              </div>

              <div class="row">
                <div class="col-xs-12">
                  <div class="form-group" id="formgrupmarginbtm">
                    <div class="input-group">
                      <label class="input-group-btn">
                        <span class="btn btn-custom-yellow"> <span class="glyphicon glyphicon-folder-open"></span></span>
                      </label>
                        <input name="userfile" type="file" class="form-control"  readonly>
                    </div>
                  </div>
                  <span class="help-block" style="color: #FFC300;">*Pilih Foto Profil</span>
                </div>
              </div>

              <div class="row">
                <div class="col-xs-12">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
                      <input name="password" type="password" class="form-control validate" placeholder="Password" aria-describedby="basic-addon1">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-xs-12">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
                      <input name="confirmpassword" type="password" class="form-control validate" placeholder="Konfirmasi Password" aria-describedby="basic-addon1">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <!-- province -->
                <div class="col-xs-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-map-marker"></span></span>
                      <select class="form-control" name="province">
                        <option>Propinsi</option>
                        <option>Jawa Timur</option>
                        <option>Jawa Barat</option>
                        <option>Jawa Tengah</option>
                        <option>Sumatera Barat</option>
                        <option>Sumatera Selatan</option>
                        <option>Kalimantan Timur</option>
                        <option>Maluku Utara</option>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- city -->
                <div class="col-xs-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-map-marker"></span></span>
                      <select class="form-control" name="city">
                        <option>Kota</option>
                        <option>Banyuwangi</option>
                        <option>Madiun</option>
                        <option>Malang</option>
                        <option>Surabaya</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-xs-12">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-map-marker"></span></span>
                      <!-- <input type="text" class="form-control" placeholder="Address" aria-describedby="basic-addon1"> -->
                      <textarea name="address" class="form-control" rows="2" cols="50" placeholder="Alamat" aria-describedby="basic-addon1"></textarea>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-xs-12">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
                      <input name="email" type="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-xs-12">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-phone"></span></span>
                      <input name="handphone" type="text" class="form-control" placeholder="No Handphone" aria-describedby="basic-addon1">
                    </div>
                  </div>
                </div>
              </div>

            <input name="submit" type="submit" class="btn btn-block btn-custom-green" value="REGISTER" />
                <div class="text-center forget">
                    <p>Back To <a href="<?php echo base_url('login'); ?>"><span id="register">Login</span></a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="<?php echo base_url('assets/assets/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
  </body>
</html>
