
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link href="<?php echo base_url('assets/assets/materialize/css/materialize.min.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="<?php echo base_url('assets/assets/jquery-3.2.0.min.js'); ?>" type="script">
      <link href="<?php echo base_url('assets/assets/style.min.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection">
      <!-- Bootstrap-->
      <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection">
      <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection">
      <link href="<?php echo base_url('assets/bootstrap/css/bootstrap-theme.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection">
      <link href="<?php echo base_url('assets/bootstrap/css/bootstrap-theme.min.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script src="<?php echo base_url('assets/assets/js/jquery.min.js');?>"></script>

      <script type="text/javascript" src="<?php echo base_url('assets/assets/jquery-3.2.0.min.js'); ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/assets/materialize/js/materialize.min.js'); ?>"></script>

      <script type="text/javascript" src="<?php echo base_url('assets/assets/js/bootstrap.min.js'); ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/assets/js/bootstrap.js'); ?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/assets/js/npm.js'); ?>"></script>

      <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.js'); ?>"></script>
         <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/npm.js'); ?>"></script>


    </head>

    <body style="margin-top: 55px; margin-bottom: 40px;">

      <nav class="navbar navbar-fixed-top">
        <div class="nav-wrapper" style="background-color:#f2c939;">

        <div class="row" style="">

          <div class="col s3 m6" style="text-align: center;">
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

            <ul class="left hide-on-med-and-down">
            <li><a href="">Profile</a></li>
            <li><a href="">Account</a></li>
            <li><a href="">History</a></li>
            <li><a href="">Whistlist</a></li>
            <li><a href="">Redeem Code</a></li>
            <li><a href="<?php echo base_url('Home/logout'); ?>">Log Out</a></li>
            </ul>

            <ul class="side-nav" id="mobile-demo" style="width: 200px">
            <li>
              <div class="row" style="margin-bottom:10px;">
                <div class="col s6" style="text-align: center; padding-left: 15%; padding-top: 5%; padding-bottom: 3%;">
                <div style=" background: url(./assets/images/<?php if (empty($avatar)) {echo"profil.png";}else{echo$avatar;}?>) 50% 50% no-repeat; background-size: cover; overflow: hidden; width: 75px; height: 75px;" class="circle">
                </div>
                </div>
                <div class="col s6" style="text-align: left; line-height: 50%;">
                    <p style="color: black;  padding-left: 0; font-size: 110%;  padding-right: 5%; padding-top: 25px; line-height: 100%; "><?php echo $fullname;?></p>
                    <p style="color: orange; font-size: 80%; padding-top: 0;">Active Member</p>
                 
                </div>
              </div>
              
            </li>

            <li role="separator" class="divider" style="margin-top: 0;"></li>
            <li><a style="padding:0px;" href="">Account</a></li>
            <li role="separator" class="divider" style="margin-top: 0;"></li>
            <li><a style="padding:0px;" href="">History</a></li>
            <li role="separator" class="divider" style="margin-top: 0;"></li>
            <li><a style="padding:0px;" href="">Whistlist</a></li>
            <li role="separator" class="divider" style="margin-top: 0;"></li>
            <li><a style="padding:0px;" href="">Redeem Code</a></li>
            <li role="separator" class="divider" style="margin-top: 0;"></li>
            <li><a style="padding:0px;" href="<?php echo base_url('Home/logout'); ?>">Log Out</a></li>
            <li role="separator" class="divider" style="margin-top: 0;"></li>
            
          </ul>  
          </div>

          <div class="col s5 m4" style="text-align: center;">
            <form>
            <div class="row">
              <div class="col s2">
                <label for="search"><i class="material-icons">search</i></label>
              </div>
              <div class="col s10">
                <input id="search" type="search" placeholder="Search" style="font-size: medium;" />    
              </div>
              
            </div>
            </form>  
          </div>
          
          <div class="col s4 m2" style="text-align: center;">
            <a href="#" class="brand-logo right" style="padding-right:5%; font-size:150%; font-size:12px;">
            <?php 
            if (empty($username)) {
              echo "Hai";
            }else{
              echo $username;
              }?>
              </a>
          </div>
        </div>
        </div>
      </nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo base_url('assets/images/fashion1.jpg'); ?>" alt="Chania">
    </div>

    <div class="item">
      <img src="<?php echo base_url('assets/images/fashion2.jpg'); ?>" alt="Chania">
    </div>

    <div class="item">
      <img src="<?php echo base_url('assets/images/Fashion3.jpg'); ?>" alt="Flower">
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



      
  

<div class="container">
<!--      <div class="row" style="">-->
<!--        <div class="col s4 m2" style="background-color: yellow;">-->
<!--          <a href="sass.html">Sass</a></li>  -->
<!--        </div>-->
<!--        <div class="col s4 m2">-->
<!--          <a href="sass.html">Sass</a></li>  -->
<!--        </div>-->
<!--        <div class="col s4 m2">-->
<!--          <a href="sass.html">Sass</a></li>  -->
<!--        </div>-->
<!--        <div class="col s4 m2">-->
<!--          <a href="sass.html">Sass</a></li>  -->
<!--        </div>-->
<!--        <div class="col s4 m2">-->
<!--          <a href="sass.html">Sass</a></li>  -->
<!--        </div>-->
<!--        <div class="col s4 m2">-->
<!--          <a href="sass.html">Sass</a></li>  -->
<!--        </div>-->
<!--      </div>-->
      <br>

      <!-- <div class="row" style="">
        <div class="col s2" >
          <a href="" style="font-size: 100%; background-color: yellow; padding: 5px;">Design</a>
        </div>
        <div class="col s2" >
          <a href="" style="font-size: 100%; background-color: yellow; padding: 5px;">Design</a>
        </div>
        <div class="col s2" >
          <a href="" style="font-size: 100%; background-color: yellow; padding: 5px;">Account</a>
        </div>
        <div class="col s2" >
          <a href="" style="font-size: 100%; background-color: yellow; padding: 5px;">Help</a>
        </div>
        <div class="col s2" >
          <a href="" style="font-size: 100%; background-color: yellow; padding: 5px;">About</a>
        </div>
        <div class="col s2" >
          <a href="" style="font-size: 100%; background-color: yellow; padding: 5px;">About</a>
        </div>
      </div> -->

      <div class="row">
          <div class="col s6 m3">
              <div id="products" style="position: relative; height: 100%; width:100%;">
                  <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                          <a href="l#"><img src="<?php echo base_url('assets/images/sample1.png'); ?>" alt="product-img"></a>
                      </div>
                      <div class="card-content">
                          <a href="#" class="grey-text text-darken-4" style="font-size: 100%;">Sample Title Desain</a>
                          <p style="font-size: 80%;">Oleh Alvin</p>
                          <p style="font-size: 125%; color: green;">Rp.230.000,-</p>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col s6 m3">
              <div id="products" style="position: relative; height: 100%; width:100%;">
                  <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                          <a href="l#"><img src="<?php echo base_url('assets/images/sample2.png'); ?>" alt="product-img"></a>
                      </div>
                      <div class="card-content">
                          <a href="#" class="grey-text text-darken-4" style="font-size: 100%;">Sample Title Desain</a>
                          <p style="font-size: 80%;">Oleh Alvin</p>
                          <p style="font-size: 125%; color: green;">Rp.500.000,-</p>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col s6 m3">
              <div id="products" style="position: relative; height: 100%; width:100%;">
                  <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                          <a href="l#"><img src="<?php echo base_url('assets/images/sample3.png'); ?>" alt="product-img"></a>
                      </div>
                      <div class="card-content">
                          <a href="#" class="grey-text text-darken-4" style="font-size: 100%;">Sample Title Desain</a>
                          <p style="font-size: 80%;">Oleh Alvin</p>
                          <p style="font-size: 125%; color: green;">Rp.500.000,-</p>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col s6 m3">
              <div id="products" style="position: relative; height: 100%; width:100%;">
                  <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                          <a href="l#"><img src="<?php echo base_url('assets/images/sample4.png'); ?>" alt="product-img"></a>
                      </div>
                      <div class="card-content">
                          <a href="#" class="grey-text text-darken-4" style="font-size: 100%;">Sample Title Desain</a>
                          <p style="font-size: 80%;">Oleh Alvin</p>
                          <p style="font-size: 125%; color: green;">Rp.500.000,-</p>
                      </div>
                  </div>
              </div>
          </div>


          <div class="col s6 m3">
              <div id="products" style="position: relative; height: 100%; width:100%;">
                  <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                          <a href="l#"><img src="<?php echo base_url('assets/images/sample2.png'); ?>" alt="product-img"></a>
                      </div>
                      <div class="card-content">
                          <a href="#" class="grey-text text-darken-4" style="font-size: 100%;">Sample Title Desain</a>
                          <p style="font-size: 80%;">Oleh Alvin</p>
                          <p style="font-size: 125%; color: green;">Rp.500.000,-</p>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col s6 m3">
              <div id="products" style="position: relative; height: 100%; width:100%;">
                  <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                          <a href="l#"><img src="<?php echo base_url('assets/images/sample1.png'); ?>" alt="product-img"></a>
                      </div>
                      <div class="card-content">
                          <a href="#" class="grey-text text-darken-4" style="font-size: 100%;">Sample Title Desain</a>
                          <p style="font-size: 80%;">Oleh Alvin</p>
                          <p style="font-size: 125%; color: green;">Rp.500.000,-</p>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col s6 m3">
              <div id="products" style="position: relative; height: 100%; width:100%;">
                  <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                          <a href="l#"><img src="<?php echo base_url('assets/images/sample3.png'); ?>" alt="product-img"></a>
                      </div>
                      <div class="card-content">
                          <a href="#" class="grey-text text-darken-4" style="font-size: 100%;">Sample Title Desain</a>
                          <p style="font-size: 80%;">Oleh Alvin</p>
                          <p style="font-size: 125%; color: green;">Rp.500.000,-</p>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col s6 m3">
              <div id="products" style="position: relative; height: 100%; width:100%;">
                  <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                          <a href="l#"><img src="<?php echo base_url('assets/images/sample4.png'); ?>" alt="product-img"></a>
                      </div>
                      <div class="card-content">
                          <a href="#" class="grey-text text-darken-4" style="font-size: 100%;">Sample Title Desain</a>
                          <p style="font-size: 80%;">Oleh Alvin</p>
                          <p style="font-size: 125%; color: green;">Rp.500.000,-</p>
                      </div>
                  </div>
              </div>
          </div>

      </div>
  </div>

          

      <div class="navbar-fixed-bottom" style="background-color: orange;">
        <div class="row" style="margin: 0;"> 
          <div class="col s4" style="text-align: center;">
          <!-- <i class="medium material-icons" style="padding: 3%;">shopping_cart</i> -->
          <img src="<?php echo base_url('assets/images/cart.png'); ?>" style="padding: 5%;">
          </div>
          <div class="col s4" style="text-align: center;">
          <!-- <i class="medium material-icons" style="padding: 3%;">home</i> -->
          <img src="<?php echo base_url('assets/images/home1.png'); ?>" style="padding: 5%;">
          </div>
          <div class="col s4" style="text-align: center;">
          <!-- <i class="medium material-icons" style="padding: 3%;">perm_identity</i> -->
          <img src="<?php echo base_url('assets/images/profil2.png'); ?>" style="padding: 5%;">
          </div>    
        </div>
      </div>

    </body>

  </html>

<script type="text/javascript">
$(document).ready(function(){
     $("#myCarousel").carousel({
         interval : 10000
     });
});
$(".button-collapse").sideNav();
</script>
