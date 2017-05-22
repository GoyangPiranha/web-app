
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Edit User
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
            <form action="<?php echo base_url('Admin_user/prosesEdit'); ?>" class="inner-login" method="POST" enctype="multipart/form-data">
              <p style="color: red;">
                <?php 
                  if (empty($warning)) {
                    echo "";
                  }else{
                    echo "<div class='alert alert-danger text-center' role='alert'>$warning</div>";
                  } 
                ?>
              </p>
                  <input type="hidden" name="id_user" value="<?php echo $detail['id_user']?>" />

                    <!-- fullname -->
                      <div class="row" style="margin-left:10px;">
                        <div class="col-xs-11">
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                              <input value="<?php echo $detail['nama_user'] ?>" name="fullname" type="text" class="form-control" aria-describedby="basic-addon1">
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
                              <input value="<?php echo $detail['username_user'] ?>" name="username" type="text" class="form-control" aria-describedby="basic-addon1">
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
                                <?php 
                                  $jenis = $detail['jenis_kelamin_user'];
                                  if ($jenis == 0) { ?>
                                    <option value="0">Laki-Laki</option>
                                    <option value="1">Perempuan</option>
                                <?php } else{ ?>
                                    <option value="1">Perempuan</option>
                                    <option value="0">Laki-Laki</option>
                                  <?php } ?>"
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
                              <textarea value="<?php echo $detail['deskripsi_user'] ?>" name="deskripsi_user" class="form-control" rows="2" cols="50" placeholder="Deskripsi user" aria-describedby="basic-addon1"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="row"  style="margin-left:10px;">
                        <div class="col-xs-11">
                          <div class="form-group" id="formgrupmarginbtm">
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar"></span></span>
                              <input value="<?php echo $detail['tanggal_lahir_user'] ?>" name="dateofbirth" type="date" class="form-control" placeholder="Tanggal Lahir" aria-describedby="basic-addon1">
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
                              <input value="<?php echo $detail['rekening_user'] ?>" name="rekening_user" class="form-control" placeholder="No. rekening user" aria-describedby="basic-addon1">
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row"  style="margin-left:10px; margin-top:10px;">
                        <div class="col-xs-11">
                          <div class="form-group" id="formgrupmarginbtm">
                            <div class="input-group">
                              <label class="input-group-btn">
                                <span class="btn btn-custom-yellow"> <span class="glyphicon glyphicon-folder-open"></span></span>
                              </label>
                                <input value="<?php echo $detail['foto_profile_user'] ?>" name="userfile" type="file" class="form-control"  readonly>
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
                              <input value="<?php echo $detail['password_user'] ?>" name="password" type="password" class="form-control validate" placeholder="Password" aria-describedby="basic-addon1">
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
                                <option value="<?php echo $detail['id_provinsi'] ?>"><?php echo $detail['nama_provinsi'] ?></option>
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
                              <select class="form-control" name="city" id="select_kota">
                                <option value="<?php echo $detail['id_kota'] ?>"><?php echo $detail['nama_kota'] ?></option>
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
                              <textarea value="<?php echo $detail['alamat_user'] ?>" name="address" class="form-control" rows="2" cols="50" placeholder="<?php echo $detail['alamat_user'] ?>" aria-describedby="basic-addon1"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row"  style="margin-left:10px;">
                        <div class="col-xs-11">
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
                              <input value="<?php echo $detail['email_user'] ?>" name="email" type="email" class="form-control" placeholder="<?php echo $detail['email_user'] ?>" aria-describedby="basic-addon1">
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row"  style="margin-left:10px;">
                        <div class="col-xs-11">
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-phone"></span></span>
                              <input value="<?php echo $detail['contact_user'] ?>"  name="handphone" type="text" class="form-control" placeholder="<?php echo $detail['contact_user'] ?>" aria-describedby="basic-addon1">
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