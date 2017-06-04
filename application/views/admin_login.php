
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/main.css'); ?>">
    <title>Throwapp Admin Login</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body>
    <!--<section class="material-half-bg">
      <div class="cover"></div>
    </section>-->
    <section class="login-content">
      <!--<div class="logo">
        <h1>Vali</h1>
      </div>-->
      <div class="login-box">
        <form class="login-form" action="<?php echo base_url('Admin_login/cekAdminLogin'); ?>" method="post">
        <?php 
            if (empty($warning)) {
              echo "";
            }else{
              echo "<div class='alert alert-danger text-center' role='alert'>$warning</div>";
              } 
            ?>
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>ADMIN LOGIN</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control" name="username" type="text" placeholder="Username" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" name="password" type="password" placeholder="Password">
          </div>
          <!--<div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label class="semibold-text">
                  <input type="checkbox"><span class="label-text">Stay Signed in</span>
                </label>
              </div>
              <p class="semibold-text mb-0"><a data-toggle="flip">Forgot Password ?</a></p>
            </div>
          </div>-->
          <div class="form-group btn-container">
            <input type="submit" class="btn btn-default btn-block" value="LOGIN"></input>
          </div>
        </form>
        <form class="forget-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block">RESET<i class="fa fa-unlock fa-lg"></i></button>
          </div>
          <div class="form-group mt-20">
            <p class="semibold-text mb-0"><a data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>
      </div>
    </section>
  </body>
  <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/plugin/pace.min.js');?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/main.js');?>"></script>
</html>