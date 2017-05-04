<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Edit Profil</title>
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/style.css'); ?>" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo base_url('./assets/style.css'); ?>">

  </head>
  <body style="margin-top: 22px; background: white">
    <!-- NAVBAR -->
    <nav class="navbar-default navbar-fixed-top" >
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" style="color:white;" href="<?php echo base_url(''); ?>"><span class="glyphicon glyphicon-chevron-left"></span><span  id="registration">  Edit Profil</span></a>
          </div>
        </div><!--/.container -->
      </nav>
    <!-- NAVBAR -->
    <div class="custom-container">
        <div class="col-md-4 col-md-offset-4 form-login">
            <div class="outter-form-global">
                <form action="<?php echo base_url('Daftar/proses'); ?>" class="inner-login" method="POST" enctype="multipart/form-data">
                    <h5 class="title-login"><strong>Perbarui identitasmu</strong></h5>
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
                    <div id="accordion" role="tablist" aria-multiselectable="true">
                        <!--Ubah Nama-->
                        <div class="card list-view-column">
                            <div class="card-header" role="tab" id="bri">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#ubahnama" aria-expanded="true" aria-controls="collapseOne">
                                        <div class="radio radio-primary">
                                            <strong>Ubah Nama</strong>
                                        </div>
                                    </a>
                                </h5>
                            </div>
                            <div id="ubahnama" class="collapse" role="tabpanel" aria-labelledby="bri">
                                <div class="card-block">
                                    <div class="row" id="row-payment">
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <div class="input-group center-block">
                                                    <input name="fullname" type="text" class="form-control" placeholder="Full Name" aria-describedby="basic-addon1" id="edit-profil-input">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End of ubah Nama-->
                        <!--Ubah Password-->
                        <div class="card list-view-column">
                            <div class="card-header" role="tab" id="bri">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#ubahusername" aria-expanded="true" aria-controls="collapseOne">
                                        <div class="radio radio-primary">
                                            <strong>Ubah Password</strong>
                                        </div>
                                    </a>
                                </h5>
                            </div>
                            <div id="ubahusername" class="collapse" role="tabpanel" aria-labelledby="bri">
                                <div class="card-block">
                                    <div class="row" id="row-payment">
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <div class="input-group center-block">
                                                    <input name="password" type="password" class="form-control" placeholder="Password Lama" aria-describedby="basic-addon1" id="edit-profil-input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group" id="inputfield">
                                                <div class="input-group center-block">
                                                    <input name="password" type="password" class="form-control" placeholder="Password Baru" aria-describedby="basic-addon1" id="edit-profil-input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group" id="inputfield">
                                                <div class="input-group center-block">
                                                    <input name="password" type="password" class="form-control" placeholder="Konfirmasi Password Baru" aria-describedby="basic-addon1" id="edit-profil-input">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End of ubah password-->
                        <!--Ubah Email-->
                        <div class="card list-view-column">
                            <div class="card-header" role="tab" id="bri">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#ubahemail" aria-expanded="true" aria-controls="collapseOne">
                                        <div class="radio radio-primary">
                                            <strong>Ubah Email</strong>
                                        </div>
                                    </a>
                                </h5>
                            </div>
                            <div id="ubahemail" class="collapse" role="tabpanel" aria-labelledby="bri">
                                <div class="card-block">
                                    <div class="row" id="row-payment">
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <div class="input-group center-block">
                                                    <input name="email" type="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1" id="edit-profil-input">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End of ubah contact-->
                        <!--Ubah Contact-->
                        <div class="card list-view-column">
                            <div class="card-header" role="tab" id="bri">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#ubahcontact" aria-expanded="true" aria-controls="collapseOne">
                                        <div class="radio radio-primary">
                                            <strong>Ubah Contact</strong>
                                        </div>
                                    </a>
                                </h5>
                            </div>
                            <div id="ubahcontact" class="collapse" role="tabpanel" aria-labelledby="bri">
                                <div class="card-block">
                                    <div class="row" id="row-payment">
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <div class="input-group center-block">
                                                    <input name="email" type="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1" id="edit-profil-input">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End of ubah Email-->
                        <!--Ubah Deskripsi-->
                        <div class="card list-view-column">
                            <div class="card-header" role="tab" id="bri">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#ubahdeskripsi" aria-expanded="true" aria-controls="collapseOne">
                                        <div class="radio radio-primary">
                                            <strong>Ubah Deskripsi</strong>
                                        </div>
                                    </a>
                                </h5>
                            </div>
                            <div id="ubahdeskripsi" class="collapse" role="tabpanel" aria-labelledby="bri">
                                <div class="card-block">
                                    <div class="row" id="row-payment">
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <div class="input-group center-block">
                                                    <textarea name="address" class="form-control" rows="2" cols="50" placeholder="Deskripsi" aria-describedby="basic-addon1" id="edit-profil-input"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End of ubah deskripsi-->
                        <!--tambah dan lihat Rekening-->
                        <div class="card list-view-column">
                            <div class="card-header" role="tab" id="bri">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#rekening" aria-expanded="true" aria-controls="collapseOne">
                                        <div class="radio radio-primary">
                                            <strong>Rekening</strong>
                                        </div>
                                    </a>
                                </h5>
                            </div>
                            <div id="rekening" class="collapse" role="tabpanel" aria-labelledby="bri">
                                <div class="card-block">
                                    <div class="row" id="row-payment">
                                        <div class="col-xs-4">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <button class="btn btn-custom-yellow" type="button" data-toggle="modal" data-target="#lihatrekening">Lihat </button>
                                                    <div class="modal fade" id="lihatrekening" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle"><strong>Rekening Anda</strong></h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                        <tr>
                                                                            <td class="text-center"><strong>No</strong></td>
                                                                            <td class="text-center"><strong>Bank</strong></td>
                                                                            <td class="text-center"><strong>Rekening</strong></td>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td class="text-center">1</td>
                                                                            <td class="text-center">BRI</td>
                                                                            <td class="text-center">123456678</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center">2</td>
                                                                            <td class="text-center">BRI</td>
                                                                            <td class="text-center">123456678</td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-custom-yellow" data-dismiss="modal">Tutup</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4 center-block">
                                            <div class="form-group">
                                                <div class="input-group center-block">
                                                    <button class="btn btn-custom-yellow" type="button" data-toggle="modal" data-target="#tambahrekening">Tambah</button>
                                                    <div class="modal fade" id="tambahrekening" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle"><strong>Tambah Rekening</strong></h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form>
                                                                        <div class="row" id="row-payment">
                                                                            <div class="col-xs-12">
                                                                                <div class="form-group" id="inputfield">
                                                                                    <div class="input-group center-block">
                                                                                        <input name="fullname" type="text" class="form-control" placeholder="Nama Bank" aria-describedby="basic-addon1" id="edit-profil-input">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-12">
                                                                                <div class="form-group" id="inputfield">
                                                                                    <div class="input-group center-block">
                                                                                        <input name="fullname" type="text" class="form-control" placeholder="Nama Pemilik" aria-describedby="basic-addon1" id="edit-profil-input">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-12">
                                                                                <div class="form-group" id="inputfield">
                                                                                    <div class="input-group center-block">
                                                                                        <input name="fullname" type="text" class="form-control" placeholder="Nomor Rekening" aria-describedby="basic-addon1" id="edit-profil-input">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-custom-yellow" data-dismiss="modal">Tutup</button>
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
                        </div>
                        <!--End of tambah rekening-->
                        <!--tambah dan lihat Rekening-->
                        <div class="card list-view-column">
                            <div class="card-header" role="tab" id="bri">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#" aria-expanded="true" aria-controls="collapseOne">
                                        <div class="radio radio-primary">
                                            <strong>Akun Premium</strong>
                                        </div>
                                    </a>
                                </h5>
                            </div>
                        </div>
                        <!--End of tambah rekening-->
                        <div class="row">
                            <div class="col-xs-10">
                                <input name="submit" type="submit" class="btn btn-custom-yellow" value="Simpan" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!--    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>-->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>-->

    <script src="<?=base_url();?>assets/bootstrap/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?=base_url();?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

  </body>

</html>
