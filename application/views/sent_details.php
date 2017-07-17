<!DOCTYPE html>
<html lang="en" style="margin-bottom: 65px;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Detail Pengiriman</title>

    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/style.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
</head>

<script type="text/javascript">
		function init() {
            // by default disable button
            $("#submittransaksi").prop('disabled',true);
            //check once box and uncheck othres checkbox
			$('input[type=checkbox]').on('change', function() {
                if($(this)["0"].id !="agreement"){
                    var temp = $("#agreement")["0"].checked;
                    $('input[type=checkbox]').not(this,("#agreement")).prop('checked', false);
                    $("#agreement")["0"].checked =temp;
                    //matematic total price
                    if ($(this)["0"].checked) {
                        $('#biayakirim').html('Rp. '+$("#"+$(this)["0"].id + "-lab")["0"].attributes[2].nodeValue);
                        $('#biayakirim').val( $("#"+$(this)["0"].id + "-lab")["0"].attributes[2].nodeValue);
                        $('#hargatotal').val( parseInt($('#hargabarang').val()) + parseInt($('#biayakonveksi').val()) + parseInt($('#biayakirim').val()));
                        // $('#hargatotal').html('Rp. ' + $('#hargatotal')["0"].attributes[2].nodeValue);
                    }
            //toogle status button (enable and disable)
                }else{
                    if($("#agreement")["0"].checked){
                        $("#submittransaksi").prop('disabled',false);                        
                    }else{
                        $("#submittransaksi").prop('disabled',true);
                    }
				}
			});
		}
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
            <a class="navbar-brand" href="javascript:window.history.go(-1);"><span class="glyphicon glyphicon-chevron-left"></span><span  id="registration">  Detail Pengiriman</span></a>
        </div>
    </div><!--/.container -->
</nav>
<!--<div class="col-lg-12 col-lg-offset-0 bg-register">-->
<!--    <img class="img-responsive" src="--><?php //echo base_url('assets/images/bg-shirt.png'); ?><!--" id="img-bg-regist">-->
<!--</div>-->
<div class="col-md-4 col-md-offset-4 form-login">
    <div class="outter-form-register">
        <?php foreach($harga as $row){ ?>
        <form action="<?=base_url()?>Sent_details/process/<?=$row->id_produk?>/<?=$row->id?>" class="inner-login" method="POST" enctype="multipart/form-data">
        <?php } ?>    
            <h5 class="title-login"><strong>Tujuan Pengiriman</strong></h5>
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
                                 <option value="<?php echo $row->province_id;?>"><?php echo $row->province;?></option>
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
                            <select class="form-control" name="select_kota" id="select_kota" disabled="">
                                <option value="">Pilih Kota</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-globe"></span></span>
                            <input name="kodepos" type="text" class="form-control" placeholder="Kode Pos" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-phone"></span></span>
                            <input name="nomorhp" type="text" class="form-control" placeholder="Nomor Handphone" aria-describedby="basic-addon1">
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
                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-map-marker"></span></span>
                            <textarea name="alamat" class="form-control" rows="2" cols="50" placeholder="Alamat" aria-describedby="basic-addon1"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-map-marker"></span></span>
                            <select class="form-control" name="select_ukuran" id="select_ukuran">
                                <option value="">Pilih Ukuran</option>
                                <?php foreach ($ukuran as $row):?>
                                <option value="<?php echo $row->id;?>"><?php echo $row->ukuran;?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="row">
                <div class="col-xs-12 form-login">
                    <div class="outter-form-sent">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="row">
                                   <div class="col-xs-4">
                                       <div class="col-xs-12">
                                           <img id="img-no-bg" src="<?php echo base_url('assets/images/jne-logo.png'); ?>" alt="" class="img-responsive img-kurir align-left">
                                       </div>
                                   </div>
                                   
                                   <div class="col-xs-8">
                                       <div class="col-xs-12">
                                       
                                           <div class="col-xs-12">
                                               <div class="checkbox box-sent">

                                                   <input type="checkbox" class="logis" id="OKE" value="OKE" name="logistik">
                                                   <label for="OKE" id="OKE-lab" value="0"><strong class="small">JNE OKE : Rp.</strong><strong class="small" id="OKE-cost"> 0,00 </strong></label>
                                               </div>
                                           </div>
                                           <div class="col-xs-12">
                                               <div class="checkbox box-sent">
                                                   <input type="checkbox" class="logis" id="REG" value="REG" name="logistik">
                                                   <label for="REG" id="REG-lab" value="0"><strong class="small">JNE Reguler : Rp.</strong><strong class="small" id="REG-cost"> 0,00 </strong></label>
                                               </div>
                                           </div>
                                           <div class="col-xs-12">
                                               <div class="checkbox box-sent">
                                                   <input type="checkbox" class="logis" id="YES" value="YES" name="logistik">
                                                   <label for="YES" id="YES-lab" value="0"><strong class="small">JNE Express  : Rp.</strong><strong class="small" id="YES-cost"> 0,00 </strong></label>
                                               </div>
                                           </div>

                                       </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="row row-top-border">
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="col-xs-12"></div>
                                        <div class="col-xs-12">
                                            <img id="img-no-bg" src="<?php echo base_url('assets/images/pos-logo.png'); ?>" alt="" class="img-responsive img-kurir align-left">
                                        </div>
                                        <div class="col-xs-12"></div>
                                    </div>
                                    <div class="col-xs-8">
                                        <div class="col-xs-12">
                                            <div class="col-xs-12">
                                                <div class="checkbox box-sent">
                                                    <input type="checkbox" id="poskilat" value="poskilat" name="logistik">
                                                    <label for="poskilat" id="poskilat-lab" value="0"><strong class="small">Pos Kilat Khusus : Rp.</strong><strong class="small" id="poskilat-cost"> 0,00 </strong></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="row">
                <div class="col-xs-12 form-login">
                    <div class="outter-form-sent">
                        <div class="row">
                            <div class="col-xs-5 text-right">
                                <h5 class="small">Harga barang :</h5>
                            </div>
                            <?php foreach($harga as $row){ ?> 
                            <div class="col-xs-7 text-right">
                                Rp. <input type="text" style="border-color:transparent;" class="small text-right" name="hargabarang" id="hargabarang" value="<?php echo $row->harga_produk ?>" readonly></input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-5 text-right">
                                <h5 class="small">Biaya kirim :</h5>
                            </div>
                            <div class="col-xs-7 text-right">
                                Rp. <input type="text" style="border-color:transparent;" class="small text-right" name="biayakirim" id="biayakirim" value="0" readonly></input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-5 text-right">
                                <h5 class="small">Biaya konveksi :</h5>
                            </div>                            
                            <div class="col-xs-7 text-right">
                                Rp. <input type="text" style="border-color:transparent;" class="small text-right" name="biayakonveksi" id="biayakonveksi" value="<?php echo $row->harga ?>" readonly></input>
                            </div>
                                                      
                        </div>
                        <div class="line-separator"></div>
                        <div class="row">
                            <div class="col-xs-5 text-right">
                                <h5 class="small"><strong>Total :</strong></h5>
                            </div>
                            <div class="col-xs-7 text-right">
                                Rp. <input type="text" style="border-color:transparent;" class="small text-right" name="hargatotal" id="hargatotal" value="0" readonly></input>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="alert alert-warning" role="alert">
                        <div class="checkbox box-aggrement center-block">
                            <input type="checkbox" id="agreement">
                            <label for="agreement" class="small text-justify">Saya bersedia pesanan ini diganti dengan barang yang sama oleh Throwapp apabila pesanan ini ditolak/tidak ditanggapi oleh penjual.</label>
                        </div>
                    </div>
                </div>
            </div>
             
             <!--<button type="button" class="btn btn-block btn-custom-yellow"><a href="<?=base_url('');?>Payment_method">Lanjut</a></button>-->
             <input name="lanjut" type="submit" class="btn btn-block btn-custom-yellow" value="Lanjut" id="submittransaksi" /> 
             <?php } ?>  
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
              url : "<?php echo base_url()?>Sent_details/getKota",
              type : 'POST',
              data :  {'id_provinsi' : id_provinsi},
              dataType: 'json',
              success : function(data){
				$('#select_kota').val('null');
				$('#select_kota').empty();
                $('#select_kota').append(data);
              },
              error: function(){
                  alert('terjadi  error');
              }
            });
          }
        });
      });

	   $(document).ready(function(){
        $('#select_kota').on('change', function(){
          var id_kota = $(this).val();
          if (id_kota != 'null'){
			  console.log(id_kota);
			($('#OKE-cost').html("-"));				  
			($('#YES-cost').html("-"));
			($('#REG-cost').html("-"));				  
			($('#poskilat-cost').html("-"));				  
            $('#select_kota').prop('disabled', false);
            $.ajax({
              url : "<?php echo base_url()?>Sent_details/getHarga",
              type : 'POST',
              data :  {'id_kota' : id_kota},
              dataType: 'json',
              success : function(data){
				  "Paket Kilat Khusus"
				  $.each(data, function(i,r){
					$.each(r[0].costs, function( index, values ) {
						if (values.description == "Paket Kilat Khusus") {
							if($('#poskilat-lab').length){
								$('#poskilat-lab').attr('value',values.cost[0].value);
								$('#poskilat-cost').html(values.cost[0].value + '('+ values.cost[0].etd+' Hari)');
							}
						}else if (values.description=="Ongkos Kirim Ekonomis"){
							if($('#OKE-lab').length){
								$('#OKE-lab').attr('value',values.cost[0].value);
								$('#OKE-cost').html(values.cost[0].value + '('+ values.cost[0].etd+' Hari)');
							}
						}else if (values.description=="Layanan Reguler"){
							if($('#REG-lab').length){
								$('#REG-lab').attr('value',values.cost[0].value);
								$('#REG-cost').html(values.cost[0].value + '('+ values.cost[0].etd+' Hari)');
							}
						}else if (values.description=="Yakin Esok Sampai"){
							if($('#YES-lab').length){
								$('#YES-lab').attr('value',values.cost[0].value);
								$('#YES-cost').html(values.cost[0].value + '('+ values.cost[0].etd+' Hari)');
							}
						}							
						
					});
				  });
              },
              error: function(){
                  alert('terjadi  error');
              }
            });
          }
        });
      });
      // end of one function

    //   function sum() {
    //   var hargaBarang = document.getElementById('hargabarang').value;
    //   var biayaKirim = document.getElementById('biayakirim').value;
    //   var biayaKonveksi = document.getElementById('biayakonveksi').value;      
    //   var result = parseInt(hargabarang) + parseInt(biayaKirim) + parseInt(biayaKonveksi);
    //   if (!isNaN(result)) {
    //      document.getElementById('hargatotal').value = result;
    //   }
    //   }


    </script>
</body>
</html>
