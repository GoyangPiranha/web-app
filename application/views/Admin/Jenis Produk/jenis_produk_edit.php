
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Edit Jenis Produk
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
            <form action="<?php echo base_url('Admin_jenis_produk/prosesEdit'); ?>" class="inner-login" method="POST" enctype="multipart/form-data">
              <h5 class="title-login text-center"><strong>Masukan jenis Produk Baru</strong></h5>
              <p style="color: red;">
                <?php 
                  if (empty($warning)) {
                    echo "";
                  }else{?>
                    <div class='alert alert-danger text-center' role='alert'><?php echo $warning ?></div>;
                  <?php } 
                ?>
              </p>
              <div>
                  <div class="row" style="margin-left:3px;">
                      <div class="col-xs-11">
                          <div class="form-group">
                              <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1"><span class="fa fa-tags"></span></span>
                                  <input value="<?php echo $detail['jenis_produk']; ?>" name="jenis_produk" type="text" class="form-control" data-role="tagsinput" placeholder="Jenis produk" aria-describedby="basic-addon1">
                              </div>
                          </div>
                      </div>
                    </div>
              </div>
              <input type="hidden" name="id" value="<?php echo $detail['id'] ?>" >

              <input name="submit" type="submit" class="btn btn-block btn-primary" value="EDIT JENIS PRODUK" />
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