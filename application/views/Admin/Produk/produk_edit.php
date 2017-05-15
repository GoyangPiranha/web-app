
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
<div class="col-md-4 col-md-offset-4 form-login">
    <div class="outter-form-register">
        <form action="<?php echo base_url('throw_it/simpan_desain'); ?>" class="inner-login" method="POST" enctype="multipart/form-data">
            <h5 class="title-login"><strong>Deskripsi design yang akan dijual</strong></h5>
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
            <div class="line-separator" id="separator"></div> <!--line separator-->
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
                            <img style="position:relative; background: white; height:150px; width: 190px; margin-bottom: 10px; " id="uploadPreviewDepan" width="100" alt="Priview Gambar" />
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-login">
                        <div class="">
                            <img  style="position:relative; background: white; height:150px; width: 190px; margin-bottom: 10px;" id="uploadPreviewBelakang" width="100"alt="Preview Gambar" />
                        </div>
                    </div>
                </div>
                <input style="margin-bottom: 10px;" class="col-xs-6" id="uploadImageDepan" type="file" name="gambar_depan" onchange="PreviewImageDepan();"/>
                <input style="margin-bottom: 10px;" class="col-xs-6" id="uploadImageBelakang" type="file" name="gambar_belakang" onchange="PreviewImageBelakang();"/>
            </div>
            <!-- <div style="margin-bottom: 10px;"></div> -->
            <div class="line-separator" id="separator"></div> <!--separator-->

            <!--nama dan deskripsi barang-->
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><span class="fa fa-reorder"></span></span>
                            <input name="nama_desain" type="text" class="form-control" placeholder="Nama Desain" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-list"></span></span>
                            <textarea name="deskripsi_desain" class="form-control" rows="5" cols="50" placeholder="Deskripsi Desain" aria-describedby="basic-addon1"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!--end of nama dan deskripsi barang-->

            <div class="line-separator" id="separator"></div>

            <!-- kategori dan  ukuran-->
            <div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <h5 class="small"><strong>Kategori</strong></h5>
                            </div>
                            <div class="col-xs-12">
                                <div class="line-separator" id="separator"></div>
                            </div>
                            <div class="col-xs-12 ">
                                <div class="radio box-aggrement center-block">
                                    <input type="radio" id="agreement" name="kategori" value="pakaian pria">
                                    <label for="agreement" class="small text-justify">Pakaian Pria</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="radio box-aggrement center-block">
                                    <input type="radio" id="agreement" name="kategori" value="pakain wanita">
                                    <label for="agreement" class="small text-justify">Pakaian Wanita</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <h5 class="small"><strong>Jenis Pakaian</strong></h5>
                            </div>
                            <div class="col-xs-12">
                                <div class="line-separator" id="separator"></div>
                            </div>
                            <div class="col-xs-12">
                                <div class="radio box-aggrement center-block">
                                    <input type="radio" id="baju" name="jenis_pakaian" value="baju">
                                    <label for="baju" class="small text-justify">Baju</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="radio box-aggrement center-block">
                                    <input type="radio" id="jaket" name="jenis_pakaian" value="jaket">
                                    <label for="jaket" class="small text-justify">Jaket</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="radio box-aggrement center-block">
                                    <input type="radio" id="topi" name="jenis_pakaian" value="topi">
                                    <label for="topi" class="small text-justify">Topi</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="radio box-aggrement center-block">
                                    <input type="radio" id="celana" name="jenis_pakaian" value="celana">
                                    <label for="celana" class="small text-justify">Celana</label>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <input type="hidden" name="username" value="<?php echo $username ?>" >
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
                                <input name="tags" type="text" class="form-control" data-role="tagsinput" placeholder="Tags, pisahkan dengan kata tanda ;" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><span class="fa fa-money"></span></span>
                                <input name="harga" type="text" class="form-control" placeholder="Harga Barang" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><span class="fa fa-money"></span></span>
                                <input name="diskon" type="text" class="form-control" placeholder="diskon desain" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--ends of tags dan harga-->
            <div class="row" style="margin-bottom: 5px;">
                <div class="col-xs-12">
                    <input type="submit" name="submit" class="btn btn-block btn-custom-yellow" value="Simpan Desain" />
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <input type="submit" name="submit" class="btn btn-block btn-custom-yellow" value="Jual" disabled="Isi seluruh data" />
                </div>
            </div>
            <div>
                <div class="col-xs-12">
                    <p id="message"></p>
                </div>
            </div>
        </form>
    </div>
</div>

<nav class="navbar navbar-default navbar-fixed-bottom" style="background: #606062; border-color: #606062 ;">
    <div class="row" style="margin: 0;">
        <div class="col-xs-4" style="text-align: center;">
            <a><img id="footimg" src="<?php echo base_url('assets/images/shopping-cart.png'); ?>"></a>
        </div>
        <div class="col-xs-4" style="text-align: center;">
            <a><img id="footimg" src="<?php echo base_url('assets/images/home.png'); ?>"></a>
        </div>
        <div class="col-xs-4" style="text-align: center;">
            <a><img id="footimg" src="<?php echo base_url('assets/images/user.png'); ?>"></a>
        </div>
    </div>
</nav>

<script type="text/javascript">
  function PreviewImageDepan() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("uploadImageDepan").files[0]);

    oFReader.onload = function(oFREvent) {
      document.getElementById("uploadPreviewDepan").src = oFREvent.target.result;
    };
  };

 function PreviewImageBelakang() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("uploadImageBelakang").files[0]);

    oFReader.onload = function(oFREvent) {
      document.getElementById("uploadPreviewBelakang").src = oFREvent.target.result;
    };
  };
</script>
          </div>
        </div>
      </div>
    </section>