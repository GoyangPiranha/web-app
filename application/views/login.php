<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Halaman Login</title>

    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/style.css'); ?>" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Monofett' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Puritan' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <div class="col-md-4 col-md-offset-4 form-login">


        <div class="outter-logo">
          <img href="<?php base_url()?>" class="img-responsive center-block" id="img-custom-login" src="<?php echo base_url('assets/bootstrap/img/logo.png'); ?>" alt="logo">
          <h4 class="text-center" id="throw">Throw<span id="app">App</span></h4>
          <h5 class="text-center" id="youridea">your ideas</h5>
        </div>

        <div class="outter-form-login" id="login">
            <form action="<?php echo base_url('login/cekLogin'); ?>" class="inner-login" method="post">
            <p style="color: red; text-align: center">
            <?php 
            if (empty($warning)) {
              echo "";
            }else{
              echo "<div class='alert alert-danger text-center' role='alert'>$warning</div>";
              } 
            ?>
            </p>
            <h4 class="title-login" style="color: #444444" id="">Login</h4>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                    <input name="username" type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" required>
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
                    <input name="password" type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" required>
                  </div>
                </div>
                <input type="submit" class="btn btn-block btn-custom-green" value="LOGIN" />

                <div class="text-center forget">
                    <p id="no-account">Didn't have account yet? <a href="<?=base_url(); ?>Daftar"><span id="register">Register</span></a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
