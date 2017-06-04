<!DOCTYPE html>
<html lang="en" style="margin-bottom: 65px;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Throw It!</title>

    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!--<link href="<?php echo base_url('assets/bootstrap/css/dropzone.css'); ?>" rel="stylesheet">-->
    <link href="<?php echo base_url('assets/bootstrap/css/style.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<body style="margin-top: 60px; background: #FFFFFF">
<!-- NAVBAR -->
<nav class="navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="javascript:window.history.go(-1);"><span class="glyphicon glyphicon-chevron-left"></span><span  id="registration">  Throw It!</span></a>
        </div>
    </div><!--/.container -->
</nav>

<div class="col-lg-12 col-lg-offset-0 bg-register">
    <img class="img-responsive" src="<?php echo base_url('assets/images/bg-shirt.png'); ?>" id="img-bg-regist">
</div>
<div class="col-md-4 col-md-offset-4 form-login">
    <div class="outter-form-register">
        <form action="<?php echo base_url('Throw_it/insert'); ?>" class="inner-login" method="POST" enctype="multipart/form-data">
            <h5 class="title-login"><strong>Deskripsi design yang akan dijual</strong></h5>
            <p style="color: red;">
                <?php
                if (empty($status)) {
                    echo "";
                }else{
                    echo "<div class='alert alert-success alert-dismissible text-center' role='alert'>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                              <span aria-hidden='true'>&times;</span>
                            </button>
                            $status
                          </div>";
                }
                ?>
            </p>
            <!-- fullname -->
            <div class="line-separator" id="separator"></div> <!--line separator-->
            <div class="row" style="margin-bottom: 4px;">
                <div class="col-xs-6 text-center">
                    <h5 class="small"><strong>Design Tampak Depan</strong></h5>
                </div>
            </div>
  
			<div class="row">
                <div class="col-xs-12 center-block">
                    <div class="form-group center-block">
					<div class="input-group center-block">
						<img class="center-block img-responsive" name="fotodepan" id="desaindepan" src="" data-type="data" /></div>
                    </div>
                </div>
			</div>
			<div class="row" style="margin-bottom: 4px;">
                <div class="col-xs-6 text-center">
                    <h5 class="small"><strong>Design Tampak Belakang</strong></h5>
                </div>
            </div>
  
			<div class="row">
                <div class="col-xs-12 center-block">
                    <div class="form-group center-block">
					<div class="input-group center-block">
						<img class="center-block img-responsive" name="fotobelakang" id="desainbelakang" src="" data-type="data" /></div>
                    </div>
                </div>
			</div>
            
            <div class="line-separator" id="separator"></div> <!--separator-->
            <!--nama dan deskripsi barang-->
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <div class="input-group ">
                            <span class="input-group-addon" id="basic-addon1"><span class="fa fa-reorder"></span></span>
                            <input name="namabarang" type="text" class="form-control" placeholder="Nama Barang" aria-describedby="basic-addon1" required>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-list"></span></span>
                            <textarea name="description" class="form-control" rows="2" cols="50" placeholder="Deskripsi Barang" aria-describedby="basic-addon1" required></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!--end of nama dan deskripsi barang-->

            <div class="line-separator" id="separator"></div>

            <!-- kategori dan  ukuran-->
            <div>
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <h5 class="small"><strong>Kategori</strong></h5>
                    </div>
                    <div class="col-xs-12">
                        <div class="line-separator" id="separator"></div>
                    </div>
                    <div class="col-xs-6">
                        <div class="row" style="padding-left: 15px;">
                            <div class="col-xs-12">
                                <div class="checkbox box-aggrement center-block">
                                    <input type="checkbox" id="male_cloth" name="jenisproduk" value=1>
                                    <label for="male_cloth" class="small text-justify">Pakaian Pria</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="checkbox box-aggrement center-block">
                                    <input type="checkbox" id="female_cloth" name="jenisproduk" value=2>
                                    <label for="female_cloth" class="small text-justify">Pakaian Wanita</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="checkbox box-aggrement center-block">
                                    <input type="checkbox" id="baju" name="kategoriproduk" value=1>
                                    <label for="baju" class="small text-justify">Baju</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="checkbox box-aggrement center-block">
                                    <input type="checkbox" name="kategoriproduk" id="jaket" value=2>
                                    <label for="jaket" class="small text-justify">Jaket</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="checkbox box-aggrement center-block">
                                    <input type="checkbox" id="topi" name="kategoriproduk" value=3>
                                    <label for="topi" class="small text-justify">Topi</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="checkbox box-aggrement center-block">
                                    <input type="checkbox" id="celana" name="kategoriproduk" value=4>
                                    <label for="celana" class="small text-justify">Celana</label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--end of kategori dan  ukuran-->

            <!--separator-->
            <div class="line-separator" id="separator"></div>

            <!--tags dan harga-->
            <div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><span class="fa fa-tags"></span></span>
                                <input name="tags" type="text" class="form-control" data-role="tagsinput" placeholder="Tags" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><span class="fa fa-money"></span></span>
                                <input name="harga" type="text" class="form-control" placeholder="Harga Barang" aria-describedby="basic-addon1" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--ends of tags dan harga-->
            <div class="row" style="margin-bottom: 5px;">
                <div class="col-xs-12">
                    <input name="simpan" type="submit" class="btn btn-block btn-custom-yellow" value="Simpan Desain" />
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <input name="jual" type="submit" class="btn btn-block btn-custom-yellow" value="Jual" />
                </div>
            </div>
        </form>
    </div>
</div>

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

<!--<script>
    $(document).ready(function() {
        $.uploadPreview({
            input_field: "#image-upload",
            preview_box: "#image-preview",
            label_field: "#image-label"
        });
    });
</script>-->
<!--<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.uploadPreview.min.js"></script>-->
<script src="<?php echo base_url('assets/bootstrap/js/dropzone.js');?>" type="text/jvascript"></script>
<script src="<?php echo base_url('assets/assets/js/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
<script src="//cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.min.js"></script>
</body>
</html>
