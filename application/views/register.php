<!DOCTYPE html>
<html lang="en" style="margin-bottom: 10px">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Halaman Registrasi</title>

    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/style.css'); ?>" rel="stylesheet">
  </head>
  <body style="margin-top: 60px; background: #FFFFFF">
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
    <div class="col-lg-12 col-lg-offset-0 bg-register">
        <img class="img-responsive" src="<?php echo base_url('assets/images/bg-shirt.png'); ?>" id="img-bg-regist">
    </div>
    <div class="col-md-4 col-md-offset-4 form-login">
        <div class="outter-form-register">
            <form action="<?php echo base_url('Daftar/proses'); ?>" class="inner-login" method="POST" enctype="multipart/form-data">
            <h5 class="title-login"><strong>Registration</strong></h5>
            <p style="color: red;">
            <?php 
            if (empty($warning)) {
              echo "";
            }else{
                echo "<div class='alert alert-danger text-center' role='alert'>$warning</div>";
              } 
            ?>
            </p>
            <!-- fullname -->
              <div class="row">
                <div class="col-xs-12">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                      <input name="fullname" type="text" class="form-control" placeholder="Nama Lengkap" aria-describedby="basic-addon1" required>
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
                      <input name="username" type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" required>
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
                      <input name="dateofbirth" type="date" class="form-control" placeholder="Tanggal Lahir" aria-describedby="basic-addon1" required>
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
                        <input name="userfile" type="file" accept="image/*" class="form-control"  readonly  required>
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
                      <input name="password" type="password" class="form-control validate" placeholder="Password" aria-describedby="basic-addon1" required>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-xs-12">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
                      <input name="confirmpassword" type="password" class="form-control validate" placeholder="Konfirmasi Password" aria-describedby="basic-addon1" required>
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
                      <select class="form-control" name="provinsi" id="select_provinsi">
                        <option value="">Pilih Provinsi</option>
                        <?php
                          foreach ($provinsi as $row):
                         ?>
                         <option value="<?php echo $row->id_provinsi;?>"><?php echo $row->nama_provinsi;?></option>
                         <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- city -->
                <div class="col-xs-6">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-map-marker"></span></span>
                      <select class="form-control" name="city" id="select_kota" disabled="">
                        <option value="">Pilih Kota</option>
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
                      <textarea name="address" class="form-control" rows="2" cols="50" placeholder="Alamat" aria-describedby="basic-addon1" required></textarea>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-xs-12">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
                      <input name="email" type="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1" required>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-xs-12">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-phone"></span></span>
                      <input name="handphone" type="text" class="form-control" placeholder="No Handphone" aria-describedby="basic-addon1" required>
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

    <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
    <script type="text/javascript">
    // script untuk load kota berdasarkan provinsi yg dipilih
      $(document).ready(function(){
        $('#select_provinsi').on('change', function(){
          var id_provinsi = $(this).val();
          if (id_provinsi ==''){
            $('#select_kota').prop('disabled', true);
          }
          else{
            $('#select_kota').prop('disabled', false);
            $.ajax({
              url : "<?php echo base_url()?>Daftar/getKota",
              type : 'POST',
              data :  {'id_provinsi' : id_provinsi},
              dataType: 'json',
              success : function(data){
                $('#select_kota').html(data);
              },
              error: function(){
                alert('terjadi error error');
              }
            });
          }
        });
      });
      // end of one function
    </script>
  </body>
</html>
