
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Edit Produk
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
            <form action="<?php echo base_url('Admin_produk/prosesTambah'); ?>" class="inner-login" method="POST" enctype="multipart/form-data">
              <h5 class="title-login text-center"><strong>Deskripsi design yang akan dijual</strong></h5>
              <p style="color: red;">
                <?php 
                  if (empty($warning)) {
                    echo "";
                  }else{?>
                    <div class='alert alert-danger text-center' role='alert'><?php echo $warning ?></div>;
                  <?php } 
                ?>
              </p>
              <div class="row" style="margin-bottom: 4px;">
                  <div class="col-xs-6 text-center">
                      <h5 class="small"><strong>Design Tampak Depan</strong></h5>
                  </div>
                  <div class="col-xs-6 text-center">
                      <h5 class="small"><strong>Design Tampak Belakang</strong></h5>
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-6">
                      <div class="form-login">
                          <div class="">
                              <img src="<?php echo $detail['foto_produk_depan']?>" value="<?php echo $detail['foto_produk_depan']?>" style="position:relative; background: white; height:150px; width: 180px; margin-bottom: 10px; margin-left: 10px; " id="uploadPreviewDepan" width="100" class="text-center" alt="Priview Gambar" />
                          </div>
                      </div>
                  </div>
                  <div class="col-xs-6">
                      <div class="form-login">
                          <div class="">
                              <img src="<?php echo $detail['foto_produk_belakang']?>" value="<?php echo $detail['foto_produk_belakang']?>" style="position:relative; background: white; height:150px; width: 180px; margin-bottom: 10px; margin-right: 10px;" id="uploadPreviewBelakang" width="100" class="text-center" alt="Preview Gambar" />
                          </div>
                      </div>
                  </div>
                  <input style="margin-bottom: 10px; margin-left: 10px;" class="col-xs-5" id="uploadImageDepan" type="file" name="gambar_depan" onchange="PreviewImageDepan();"/>
                  <input style="margin-bottom: 10px; margin-left: 30px;" class="col-xs-5" id="uploadImageBelakang" type="file" name="gambar_belakang" onchange="PreviewImageBelakang();"/>
              </div>

              <input type="hidden" name="id_" value="<?php echo $detail['id_produk']?>" />

                <!--nama dan deskripsi barang-->
              <div class="row">
                  <div  style="margin-left:10px;" class="col-xs-11">
                      <div class="form-group">
                          <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><span class="fa fa-reorder"></span></span>
                              <input value="<?php echo $detail['nama_produk'] ?>" name="nama_desain" type="text" class="form-control" aria-describedby="basic-addon1">
                          </div>
                      </div>
                  </div>
                  <div style="margin-left:10px;" class="col-xs-11">
                      <div class="form-group">
                          <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-list"></span></span>
                              <textarea value="<?php echo $detail['deskripsi'] ?>" name="deskripsi_desain" class="form-control" rows="5" cols="50" aria-describedby="basic-addon1"></textarea>
                          </div>
                      </div>
                  </div>
              </div>
              <!--end of nama dan deskripsi barang-->

              <!-- kategori dan  ukuran-->
              <div>
                  <div class="row" style="margin-left: 3px;">
                      <div class="col-xs-6">
                          <div class="row">
                              <div class="col-xs-11 text-center">
                                  <h5 class="small"><strong>Jenis Pakaian</strong></h5>
                              </div>
                              <div class="col-xs-11">
                                  <div class="line-separator" id="separator"></div>
                              </div>
                              <?php foreach ($query2 as $key) { ?>
                                <div class="col-xs-11">
                                    <div class="radio box-aggrement center-block">
                                        <?php if ($key['id'] == 0) { } else{ ?>
                                            <?php if ($detail['id_jenis_produk'] == $key['id']){ ?>
                                                <input type="radio" checked="1" name="jenis_pakaian" value="<?php echo $key['id'] ?>">
                                                <label class="small text-justify"><?php echo $key['jenis_produk'] ?></label>
                                            <?php } else{ ?>
                                                <input type="radio" name="jenis_pakaian" value="<?php echo $key['id'] ?>">
                                                <label class="small text-justify"><?php echo $key['jenis_produk'] ?></label>
                                        <?php }
                                        } ?>
                                    </div>
                                </div>
                              <?php } ?>
                          </div>
                      </div>
                      <div class="col-xs-6">
                          <div style="margin-left:3px; margin-bottom:10px;" class="row">
                              <div class="col-xs-11 text-center">
                                  <h5 class="small"><strong>Kategori</strong></h5>
                              </div>
                              <div class="col-xs-11">
                                  <div class="line-separator" id="separator"></div>
                              </div>
                              <?php foreach ($query3 as $key) { ?>
                                <div class="col-xs-11">
                                    <div class="radio box-aggrement center-block">
                                        <?php if ($key['id'] == 0) { } else{ ?>
                                            <?php if($detail['id_kategori_produk'] == $key['id']){ ?>
                                                <input type="radio" checked="1" id="agreement" name="kategori" value="<?php echo $key['id'] ?>">
                                                <label for="agreement" class="small text-justify"><?php echo $key['kategori_produk'] ?></label>
                                            <?php } else{ ?>
                                                <input type="radio" id="agreement" name="kategori" value="<?php echo $key['id'] ?>">
                                                <label for="agreement" class="small text-justify"><?php echo $key['kategori_produk'] ?></label>
                                            <?php }
                                        } ?>
                                    </div>
                                </div>
                              <?php } ?>
                          </div>
                      </div>
              </div>
              <input type="hidden" name="id_user" value="<?php echo $query1['id_user'] ?>" >
              <!--tags dan harga-->
              <div>
                  <div class="row" style="margin-left:3px;">
                      <div class="col-xs-11">
                          <div class="form-group">
                              <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1"><span class="fa fa-tags"></span></span>
                                  <input value="<?php echo $detail['tag_produk'] ?>" name="tags" type="text" class="form-control" data-role="tagsinput" placeholder="Tags, pisahkan dengan kata tanda ;" aria-describedby="basic-addon1">
                              </div>
                          </div>
                      </div>
                      <div class="col-xs-11">
                          <div class="form-group">
                              <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1"><span class="fa fa-money"></span></span>
                                  <input value="<?php echo $detail['harga_produk'] ?>" name="harga" type="text" class="form-control" placeholder="Harga Barang" aria-describedby="basic-addon1">
                              </div>
                          </div>
                      </div>
                      <div class="col-xs-11">
                          <div class="form-group">
                              <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1"><span class="fa fa-money"></span></span>
                                  <input value="<?php echo $detail['diskon_produk'] ?>" name="diskon" type="text" class="form-control" placeholder="diskon desain" aria-describedby="basic-addon1">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!--ends of tags dan harga-->

              <input name="submit" type="submit" class="btn btn-block btn-primary" value="EDIT PRODUK" />
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