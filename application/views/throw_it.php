<!DOCTYPE html>
<html lang="en" style="margin-bottom: 65px;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Halaman Registrasi</title>

    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/style.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.css" />

</head>
<body style="margin-top: 60px; background: #FFFFFF">
<!-- NAVBAR -->
<nav class="navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url('login'); ?>"><span class="glyphicon glyphicon-chevron-left"></span><span  id="registration">  Throw It!</span></a>
        </div>
    </div><!--/.container -->
</nav>
<!-- NAVBAR -->
<!--    <div class="col-md-4 col-md-offset-4 form-login">-->
<!--            <img class="img-responsive img-register" src="--><?php //echo base_url('assets/images/bg-shirt.png'); ?><!--" alt="Flower">-->
<!--    </div>-->
<div class="col-lg-12 col-lg-offset-0 bg-register">
    <img class="img-responsive" src="<?php echo base_url('assets/images/bg-shirt.png'); ?>" id="img-bg-regist">
</div>
<div class="col-md-4 col-md-offset-4 form-login">
    <div class="outter-form-register">
        <form action="<?php echo base_url('Daftar/proses'); ?>" class="inner-login" method="POST" enctype="multipart/form-data">
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
                        <div class="outter-form-throwit">

                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-login">
                        <div class="outter-form-throwit">

                        </div>
                    </div>
                </div>
            </div>

            <div class="line-separator" id="separator"></div> <!--separator-->

            <!--nama dan deskripsi barang-->
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><span class="fa fa-reorder"></span></span>
                            <input name="namabarang" type="text" class="form-control" placeholder="Nama Barang" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-list"></span></span>
                            <textarea name="description" class="form-control" rows="2" cols="50" placeholder="Deskripsi Barang" aria-describedby="basic-addon1"></textarea>
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
                            <div class="col-xs-12">
                                <div class="checkbox box-aggrement center-block">
                                    <input type="checkbox" id="agreement">
                                    <label for="agreement" class="small text-justify">Pakaian Pria</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="checkbox box-aggrement center-block">
                                    <input type="checkbox" id="agreement">
                                    <label for="agreement" class="small text-justify">Pakaian Wanita</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="line-separator" id="separator"></div>
                            </div>
                            <div class="col-xs-12">
                                <div class="checkbox box-aggrement center-block">
                                    <input type="checkbox" id="baju">
                                    <label for="baju" class="small text-justify">Baju</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="checkbox box-aggrement center-block">
                                    <input type="checkbox" id="jaket">
                                    <label for="jaket" class="small text-justify">Jaket</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="checkbox box-aggrement center-block">
                                    <input type="checkbox" id="topi">
                                    <label for="topi" class="small text-justify">Topi</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="checkbox box-aggrement center-block">
                                    <input type="checkbox" id="celana">
                                    <label for="celana" class="small text-justify">Celana</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6">
                        <div class="row">
                            <div class="col-xs-12 text-center">
                                <h5 class="small"><strong>Ukuran</strong></h5>
                            </div>
                            <div class="col-xs-12">
                                <div class="line-separator" id="separator"></div>
                            </div>
                            <div class="col-xs-12">
                                <div class="checkbox box-aggrement center-block">
                                    <input type="checkbox" id="size_xs">
                                    <label for="size_xs" class="small text-justify">XS</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="checkbox box-aggrement center-block">
                                    <input type="checkbox" id="size_s">
                                    <label for="size_s" class="small text-justify">S</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="checkbox box-aggrement center-block">
                                    <input type="checkbox" id="size_m">
                                    <label for="size_m" class="small text-justify">M</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="checkbox box-aggrement center-block">
                                    <input type="checkbox" id="size_l">
                                    <label for="size_l" class="small text-justify">L</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="checkbox box-aggrement center-block">
                                    <input type="checkbox" id="size_xl">
                                    <label for="size_xl" class="small text-justify">XL</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="checkbox box-aggrement center-block">
                                    <input type="checkbox" id="size_xxl">
                                    <label for="size_xxl" class="small text-justify">XXL</label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="checkbox box-aggrement center-block">
                                    <input type="checkbox" id="size_xxxl">
                                    <label for="size_xxxl" class="small text-justify">XXXL</label>
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
                                <input name="harga" type="text" class="form-control" placeholder="Harga Barang" aria-describedby="basic-addon1">
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

<script>
    $(document).ready(function () {
        $('#bootstrapTagsInputForm')
            .find('[name="cities"]')
            // Revalidate the cities field when it is changed
            .change(function (e) {
                $('#bootstrapTagsInputForm').formValidation('revalidateField', 'cities');
            })
            .end()
            .find('[name="countries"]')
            // Revalidate the countries field when it is changed
            .change(function (e) {
                $('#bootstrapTagsInputForm').formValidation('revalidateField', 'countries');
            })
            .end()
            .formValidation({
                framework: 'bootstrap',
                excluded: ':disabled',
                icon: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    cities: {
                        validators: {
                            notEmpty: {
                                message: 'Please enter at least one city you like the most.'
                            }
                        }
                    },
                    countries: {
                        validators: {
                            callback: {
                                message: 'Please enter 2-4 countries you like most.',
                                callback: function (value, validator, $field) {
                                    // Get the entered elements
                                    var options = validator.getFieldElements('countries').tagsinput('items');
                                    return (options !== null && options.length >= 2 && options.length <= 4);
                                }
                            }
                        }
                    }
                }
            });
    });
</script>
<script src="<?php echo base_url('assets/assets/js/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
<script src="//cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.min.js"></script>
</body>
</html>
