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
    <link rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.css" />
	<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
  </head>

  <script type="text/javascript">
				function init() {
			$("img[data-type=data]").each(function (i, e) {
				var _inputFile = $('<input/>')
					.attr('type', 'file')
					.attr('hidden', 'hidden')
					.attr('accept','image/*')
					.attr('onchange', 'readImage()')
                    .attr('class',  'form-control')
					.attr('data-image-placeholder', e.id)
                    .attr('name', e.id + "name")
					.attr('required','');
				$(e.parentElement).append(_inputFile);
				$(e).on("click", _inputFile, triggerClick);
			});
			$('input[name=jenisproduk]').on('change', function() {
    			$('input[name=jenisproduk]').not(this).prop('checked', false);  
			});
			$('input[name=kategoriproduk]').on('change', function() {
    			$('input[name=kategoriproduk]').not(this).prop('checked', false);  
			});
		}
		function triggerClick(e) {
			e.data.click();
		}

		Element.prototype.readImage = function () {
			var _inputFile = this;
			if (_inputFile && _inputFile.files && _inputFile.files[0]) {
				var _fileReader = new FileReader();
				_fileReader.onload = function (e) {
					var _imagePlaceholder = _inputFile.attributes.getNamedItem("data-image-placeholder").value;
					var _img = $("#" + _imagePlaceholder);
					_img.attr("src", e.target.result);
				};
				_fileReader.readAsDataURL(_inputFile.files[0]);
			}
		};

		(

		function (yourcode) {
			"use strict";
			yourcode(window.jQuery, window, document);
		}(

		function ($, window, document) {
			"use strict";
			// The $ is now locally scoped 
			$(function () {
				// The DOM is ready!
				init();
			});

			// The rest of your code goes here!
		}));
    </script>

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
    <?php foreach($transaksi as $row){ ?>
    <div class="col-md-4 col-md-offset-4 form-login">
        <div class="outter-form-register">
            <div class="row">
              <div class="col-xs-6">
                <img id="purchase-details" class="img-responsive center-block" style="" src="<?php echo base_url(); ?>assets/images/Product/<?php echo $row->foto_produk_depan; ?>">
              </div>
              <div class="col-xs-6">
                <div class="row">
                  <div class="col-xs-12">
                    <table>
                      <thead>
                        <td class="small" style="padding-right:5px;">No transaksi</td>
                        <td class="small">: <?php echo $row->id_transaksi ?></td>
                      </thead>
                      <thead >
                        <td class="small" style="padding-right:5px; padding-bottom:5px">Ukuran</td>
                        <td class="small" style="padding-bottom:5px;">: <?php echo $row->ukuran ?></td>
                      </thead>
                      <thead >
                        <td class="small" style="padding-right:5px; padding-bottom:5px">Total Harga</td>
                        <td class="small" style="padding-bottom:5px;">: Rp. <?php echo $row->total_harga ?></td>
                      </thead>
                    </table>
                      <h5>Kirim ke BRI rekening: </h5>
                      <h5>123213213u01u0398</h5>
                    
                  </div>
                  <!-- line separator -->
                  <div class="col-xs-12">
                    <div class="line-separator" id="separator" style="margin-bottom:3px;"></div>
                  </div>
                  <!-- line separator -->
                  <div class="col-xs-12">
                    <h5 class="text-center">Status</h5>
                    <div id="status" class="text-center">
                      <button type="submit" class="btn btn-danger" disable><?php echo $row->status_transaksi ?></button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
        </div>
    </div>
    <!-- middle detail begins -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
            <h4 style="text-align:center;"><strong><?php echo $row->nama_produk ?></strong></h4>
            <h5 class="small-font" style="margin-top:0px; text-align:center;">Oleh <?php echo $row->nama_user_produk ?></h5>
            <h5 class="small" style="color:blue; text-align:center;"><strong><?php echo $row->rating_produk ?></strong></h5>
        </div>
      </div>
    </div>

    <!-- bottom detail begins -->
    <div class="col-md-4 col-md-offset-4 form-login" style="margin-top:5px;">
        <div class="outter-form-register" style="border-radius:0px;">
          <div class="row">
            <div class="col-xs-12">
              <!--<form id="f" enctype="multipart/form-data" method="POST" action="<?=base_url()?>Sales_detail/updateTransaksi/<?=$row->id?>">
                  <table>
                  <tr>
                  <td width="29%" height="100" align="center" valign="middle">
                      <img class="product" width="200" height="250" />
                      <input type="file" class="uploads" name="images" id="upload-photo">
                      <label id="upload-photo-label" for="upload-photo">Browse</label>
                  </td>
                  </tr>
                  </table>
                  <button name="lanjut" type="submit" class="btn btn-block btn-custom-yellow"/> Konfirmasi
                  </button>
                  <input id="buttonproduk" class=" btn" type="button">Konfirmasi</input>
              </form>-->
              <?php if($row->status_transaksi == 1){
                echo '<div class="row" style="margin-bottom: 4px;">
                          <div class="col-xs-6 text-center">
                            <h5 class="small"><strong>Upload Bukti Pembayaran</strong></h5>
                          </div>
                      </div>
            <form action="<?php =base_url() ?>Sales_detail/updateTransaksi/<?php =$row->id?>" class="inner-login" method="POST" enctype="multipart/form-data">
			        <div class="row">
                <div class="col-xs-12 center-block">
                    <div class="form-group center-block">
					          <div class="input-group center-block">
						        <img class="center-block img-responsive" name="fotobukti" id="fotobukti" src="" data-type="data" /></div>
                    </div>
                </div>
			        </div>
                <input name="simpan" type="submit" class="btn btn-block btn-custom-yellow" value="Konfirmasi" />
            </form>';

              }else{
                echo "";
              } ?>
              

            </div>
          </div>
        </div>
    </div>
    <?php } ?>

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

    <!--<script type="text/javascript" src="assets/js/jquery.uploadPreview.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>-->

    <script src="<?php echo base_url('assets/bootstrap/js/dropzone.js');?>" type="text/jvascript"></script>
<script src="<?php echo base_url('assets/assets/js/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
<script src="//cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.min.js"></script>
    <script>
    //   Element.prototype.readImage = function () {
		// 	var _inputFile = this;
		// 	if (_inputFile && _inputFile.files && _inputFile.files[0]) {
		// 		var _fileReader = new FileReader();
		// 		_fileReader.onload = function (e) {
		// 			var _imagePlaceholder = _inputFile.attributes.getNamedItem("data-image-placeholder").value;
		// 			var _img = $("#" + _imagePlaceholder);
		// 			_img.attr("src", e.target.result);
		// 		};
		// 		_fileReader.readAsDataURL(_inputFile.files[0]);
		// 	}
		// };

		// (

		// function (yourcode) {
		// 	"use strict";
		// 	yourcode(window.jQuery, window, document);
		// }(

		// function ($, window, document) {
		// 	"use strict";
		// 	// The $ is now locally scoped 
		// 	$(function () {
		// 		// The DOM is ready!
		// 		init();
		// 	});

		// 	// The rest of your code goes here!
		// }));


    // function readURL(){
    //     var input = this;
    //     if (input.files && input.files[0]) {
    //         var reader = new FileReader();
    //         reader.onload = function (e) {
    //             $(input).prev().attr('src', e.target.result);
    //         }
    //         reader.readAsDataURL(input.files[0]);
    //     }
    // }

    // $(function () {
    //     $(".uploads").change(readURL)
    //     $("#f").submit(function(){
    //         // do ajax submit or just classic form submit
    //         alert("fake subminting")
    //         return false
    //     })
    // });
    </script>
  </body>
</html>
