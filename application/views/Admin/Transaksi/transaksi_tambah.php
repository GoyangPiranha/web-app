
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Tambah Transaksi
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
            <form action="<?php echo base_url('Admin_kategori_produk/prosesTambah'); ?>" class="inner-login" method="POST" enctype="multipart/form-data">
              <p style="color: red;">
                <?php 
                  if (empty($warning)) {
                    echo "";
                  }else{?>
                    <div class='alert alert-danger text-center' role='alert'><?php echo $warning ?></div>;
                  <?php } 
                ?>
              </p>
              <div class="col-xs-11">
                <div style="margin-left:3px; margin-bottom:20px;" class="row">
                  <div class="col-xs-11">
                    <h5 class="small"><strong>User</strong></h5>
                  </div>
                    <select class="form-control" name="user">
                      <option value="">Pilih User</option>
                        <?php
                          foreach ($user as $row):
                        ?>
                          <option value="<?php echo $row->id_user;?>"><?php echo $row->username_user;?></option>
                        <?php endforeach; ?>
                    </select>
                  </div>
                </div>

                <div style="margin-left:20px;" class="row">
                    <div class="row">
                        <div class="col-xs-11">
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-phone"></span></span>
                              <input name="jumlah_produk" type="text" class="form-control" placeholder="jumlah produk" aria-describedby="basic-addon1">
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
              <div class="col-xs-11">
                <div style="margin-left:3px; margin-bottom:10px;" class="row">
                  <div class="col-xs-11">
                    <h5 class="small"><strong>Produk</strong></h5>
                  </div>
                    <select class="form-control" name="user">
                      <option value="">Pilih Produk</option>
                        <?php
                          foreach ($produk as $row):
                        ?>
                          <option value="<?php echo $row->id_produk;?>"><?php echo $row->nama_produk;?></option>
                        <?php endforeach; ?>
                    </select>
                  </div>
              </div>
              <div class="col-xs-11">
                <div style="margin-left:3px; margin-bottom:10px;" class="row">
                  <div class="col-xs-11">
                    <h5 class="small"><strong>Jenis Konveksi</strong></h5>
                  </div>
                    <select class="form-control" name="user">
                      <option value="">Jenis Konveksi</option>
                        <?php
                          foreach ($jenis_konveksi as $row):
                        ?>
                          <option value="<?php echo $row->id_jenis_konveksi;?>"><?php echo $row->jenis_konveksi;?></option>
                        <?php endforeach; ?>
                    </select>
                  </div>
              </div>

              <input name="submit" type="submit" class="btn btn-block btn-primary" value="ADD TRANSAKSI" />
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