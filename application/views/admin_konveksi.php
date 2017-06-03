<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/main.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/pace.css'); ?>">
    <title>Konveksi | Admin</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
</head>

<body class="sidebar-mini fixed">
    <div class="wrapper">
        <!-- Navbar-->
        <header class="main-header hidden-print"><a class="logo" href="index.html">ThrowApp</a>
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
                <!-- Navbar Right Menu-->
                <div class="navbar-custom-menu">
                    <ul class="top-nav">
                        <!--Notification Menu-->
                        <li class="dropdown notification-menu"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o fa-lg"></i></a>
                            <ul class="dropdown-menu">
                                <li class="not-head">You have 4 new notifications.</li>
                                <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Lisa sent you a mail</span><span class="text-muted block">2min ago</span></div></a></li>
                                <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Server Not Working</span><span class="text-muted block">2min ago</span></div></a></li>
                                <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Transaction xyz complete</span><span class="text-muted block">2min ago</span></div></a></li>
                                <li class="not-footer"><a href="#">See all notifications.</a></li>
                            </ul>
                        </li>
                        <!-- User Menu-->
                        <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                            <ul class="dropdown-menu settings-menu">
                                <li><a href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Side-Nav-->
        <aside class="main-sidebar hidden-print">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left image"><img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image"></div>
                    <div class="pull-left info">
                        <p>Admin</p>
                        <p class="designation">Full Admin</p>
                    </div>
                </div>
                <!-- Sidebar Menu-->
                <ul class="sidebar-menu">
                    <li><a href="<?php echo base_url('Admin_index');?>"><i class="fa fa-home"></i><span>Beranda</span></a></li>
                    <li class="active"><a href="<?php echo base_url('Admin_konveksi');?>"><i class="fa fa-laptop"></i><span>Kelola Konveksi</span></a></li>
                    <li><a href="<?php echo base_url('Admin_bank');?>"><i class="fa fa-bank"></i><span>Kelola Bank</span></a></li>
                    <li><a href="<?php echo base_url('Admin_show_user');?>"><i class="fa fa-home"></i><span>Kelola Pengguna</span></a></li>
                    <!--<li><a href="#"><i class="fa fa-truck"></i><span>Kelola Kurir</span></a></li>-->
                    <li><a href="<?php echo base_url('Admin_product');?>"><i class="fa fa-home"></i><span>Kelola Produk</span></a></li>
                    <li><a href="<?php echo base_url('Admin_transaction');?>"><i class="fa fa-home"></i><span>Kelola Transaksi</span></a></li>
                </ul>
            </section>
        </aside>
        <div class="content-wrapper">
            <div class="page-title">
                <div>
                    <h1>Daftar Konveksi</h1>
                    <ul class="breadcrumb side">
                        <li><i class="fa fa-home fa-lg"></i></li>
                        <li class="active"><a href="konveksi.html">Daftar Konveksi</a></li>
                    </ul>
                </div>
                <div>
                    <a class="btn btn-primary btn-flat" href="" data-toggle="modal" data-target="#tambah"><span class="fa fa-lg fa-plus"></span> Tambah Konveksi</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
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
                            <table class="table table-hover table-bordered" id="konveksi">
                                <thead>
                                    <tr>
                                        <th style="width:30px;">No</th>
                                        <th>Nama Konveksi</th>
                                        <th>Harga</th>
                                        <th>Deskripsi</th>
                                        <th>Logo</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($konveksi as $row):?>
                                    <tr>
                                        <td class="text-center"><?php echo $row->id;?></td>
                                        <td><?php echo $row->nama;?></td>
                                        <td><?php echo $row->harga;?></td>
                                        <td><?php echo $row->deskripsi;?></td>
                                        <td>logo</td>
                                        <th class="text-center"><a data-toggle="modal" data-target="#update_konveksi" class="btn btn-info btn-flat" style="padding:5px 5px;" href="#"><i class="fa fa-sm fa-pencil" ></i></a><a class="btn btn-danger btn-flat show-alert" style="padding:5px 5px;" href="#"><i class="fa fa-sm fa-trash" ></i></a></th>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--      modal tambah-->
    <div class="modal fade" id="tambah" style="border-radius:0px;" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header" style="border-radius:0px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tambah Konveksi</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="<?= base_url('Admin_konveksi/add');?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <input class="form-control" name="nama_konveksi" id="nama_konveksi" type="text" placeholder="Nama Konveksi">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <input class="form-control" name="harga_konveksi" type="text" placeholder="Harga Konveksi">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea value="" name="deskripsi_konveksi" class="form-control" rows="3" placeholder="Deskripsi konveksi"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12"><strong>Logo Konveksi</strong></label>
                            <div class="col-lg-12">
                                <input class="form-control" accept="image/*" type="file" name="logo_konveksi" id="logo_konveksi">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12 ">
                                <img class="center-block" id="show_logo" style="max-width:120px;height:auto;" />
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                            <input type="submit" name="Tambah" class="btn btn-success"></input>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <!--end of modal tambah-->
    <!--modal update-->
    <div class="modal fade" id="update_konveksi" style="border-radius:0px;" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header" style="border-radius:0px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Update Konveksi</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <input class="form-control" name="nama_konveksi" type="text" placeholder="Nama Konveksi">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <input class="form-control" name="harga_konveksi" type="text" placeholder="Harga Konveksi">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea class="form-control" rows="3" placeholder="Deskripsi konveksi" name="deskripsi_konveksi"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12"><strong>Logo Konveksi</strong></label>
                            <div class="col-lg-12">
                                <input class="form-control" type="file" name="logo_konveksi_update" id="logo_konveksi_update">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12 ">
                                <img class="center-block" id="show_logo_update" style="max-width:120px;height:auto;" />
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    <button type="button" name="submit" class="btn btn-success">Update</button>
                </div>
            </div>
        </div>
    </div>
    <!--end of modal update-->
    <!-- Javascripts-->
    <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/plugins/pace.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/plugins/sweetalert.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/main.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/plugins/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/plugins/dataTables.bootstrap.min.js');?>"></script>
    <script type="text/javascript">
        $('#konveksi').DataTable();
        document.getElementById("logo_konveksi").onchange = function() {
            var reader = new FileReader();

            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                document.getElementById("show_logo").src = e.target.result;
            };

            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        };

        document.getElementById("logo_konveksi_update").onchange = function() {
            var reader = new FileReader();

            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                document.getElementById("show_logo_update").src = e.target.result;
            };

            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        };
        document.querySelector('.show-alert').onclick = function() {
            swal({
                title: "Apakah anda yakin?",
                text: "Data yang dihapus tidak dapat dikembalikan lagi!",
                type: "error",
                showCancelButton: true,
                confirmButtonClass: 'btn btn-danger',
                confirmButtonText: 'Ya!'
            });
        };
    </script>
</body>

</html>