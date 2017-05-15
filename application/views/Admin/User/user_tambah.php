
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Tambah User
        <small>Preview</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <form action="<?php echo base_url('Admin_user/prosesTambah'); ?>" class="inner-login" method="POST" enctype="multipart/form-data">
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
                      <div class="row" style="margin-left:10px;">
                        <div class="col-xs-11">
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                              <input name="fullname" type="text" class="form-control" placeholder="Nama Lengkap" aria-describedby="basic-addon1">
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row"  style="margin-left:10px;">
                        <!-- username -->
                        <div class="col-xs-11">
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                              <input name="username" type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row"  style="margin-left:10px;">
                        <!-- province -->
                        <div class="col-xs-6">
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-map-marker"></span></span>
                              <select class="form-control" name="genre">
                                <option value="">Jenis Kelamin</option>
                                 <option value="0">Laki-Laki</option>
                                 <option value="1">Perempuan</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row"  style="margin-left:10px;">
                        <div class="col-xs-11">
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-map-marker"></span></span>
                              <textarea name="deskripsi_user" class="form-control" rows="2" cols="50" placeholder="Deskripsi user" aria-describedby="basic-addon1"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="row"  style="margin-left:10px;">
                        <div class="col-xs-11">
                          <div class="form-group" id="formgrupmarginbtm">
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar"></span></span>
                              <input name="dateofbirth" type="date" class="form-control" placeholder="Tanggal Lahir" aria-describedby="basic-addon1">
                            </div>
                          </div>
                          <span class="help-block" style="color: #FFC300;">*Tanggal Lahir</span>
                        </div>
                      </div>

                      <div class="row"  style="margin-left:10px;">
                        <div class="col-xs-11">
                          <div class="form-group" id="formgrupmarginbtm">
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar"></span></span>
                              <input name="rekening_user" class="form-control" placeholder="No. rekening user" aria-describedby="basic-addon1">
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row"  style="margin-left:10px;">
                        <div class="col-xs-11">
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

                      <div class="row"  style="margin-left:10px;">
                        <div class="col-xs-11">
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
                              <input name="password" type="password" class="form-control validate" placeholder="Password" aria-describedby="basic-addon1">
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row"  style="margin-left:10px;">
                        <div class="col-xs-11">
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
                              <input name="confirmpassword" type="password" class="form-control validate" placeholder="Konfirmasi Password" aria-describedby="basic-addon1">
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row"  style="margin-left:10px;">
                        <!-- province -->
                        <div class="col-xs-6">
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-map-marker"></span></span>
                              <select class="form-control" name="province" id="select_provinsi">
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
                        <div class="col-xs-6"  style="margin-left:1px;">
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

                      <div class="row"  style="margin-left:10px;">
                        <div class="col-xs-11">
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-map-marker"></span></span>
                              <textarea name="address" class="form-control" rows="2" cols="50" placeholder="Alamat" aria-describedby="basic-addon1"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row"  style="margin-left:10px;">
                        <div class="col-xs-11">
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
                              <input name="email" type="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row"  style="margin-left:10px;">
                        <div class="col-xs-11">
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-phone"></span></span>
                              <input name="handphone" type="text" class="form-control" placeholder="No Handphone" aria-describedby="basic-addon1">
                            </div>
                          </div>
                        </div>
                      </div>

                    <input name="submit" type="submit" class="btn btn-block btn-primary" value="ADD USER" />
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
          </div>
        </div>
      </div>
    </section>