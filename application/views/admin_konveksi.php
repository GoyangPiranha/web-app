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
                        <!--<li class="dropdown notification-menu"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o fa-lg"></i></a>
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
                        </li>-->
                        <!-- User Menu-->
                        <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                            <ul class="dropdown-menu settings-menu">
                                <li><a href="<?php echo base_url('Admin_index/logout'); ?>"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
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
                    <li><a href="<?php echo base_url('Admin_carousel');?>"><i class="fa fa-laptop"></i><span>Kelola Header</span></a></li>
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
                    <button class="btn btn-primary btn-flat" onclick="tambah_data()"><span class="fa fa-lg fa-plus"></span> Tambah Konveksi</button>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover table-bordered" id="konveksi">
                                <thead>
                                    <tr>
                                        <th style="width:30px;">No</th>
                                        <th>Nama Konveksi</th>
                                        <th>Baju</th>
                                        <th>Jaket</th>
                                        <th>Topi</th>
                                        <th>Celana</th>
                                        <th>Deskripsi</th>
                                        <!--<th>Gambar</th>-->
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($konveksi as $index => $row):?>
                                    <tr>
                                        <td class="text-center"><?php echo $index+1;?></td>
                                        <td><?php echo $row->nama;?></td>
                                        <td><?php echo $row->harga_baju;?></td>
                                        <td><?php echo $row->harga_jaket;?></td>
                                        <td><?php echo $row->harga_topi;?></td>
                                        <td><?php echo $row->harga_celana;?></td>
                                        <td><?php echo $row->deskripsi;?></td>
                                        <!--<td><?php echo $row->logo;?></td>-->
                                        <td class="text-center"><button onclick="updateKonveksi(<?php echo $row->id;?>)" class="btn btn-info btn-flat" style="padding:5px 5px;"><i class="fa fa-sm fa-pencil" ></i></button><a class="btn btn-danger btn-flat show-alert" style="padding:5px 5px;" href="#"><i class="fa fa-sm fa-trash" ></i></a></td>
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

    <!--modal tambah-->
    <div class="modal fade" id="modal_baru" style="border-radius:0px;" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header" style="border-radius:0px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tambah Konveksi</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" id="form" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <input class="form-control" name="nama_konveksi" id="nama_konveksi" type="text" placeholder="Nama Konveksi">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <label class="control-label" for="kategori_baju">Kategori Baju</label>
                                        <input class="form-control" id="kategori_baju" name="harga_kategori_baju" type="text" placeholder="Harga">
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="control-label" for="kategori_jaket">Kategori Jaket</label>
                                        <input class="form-control" id="kategori_jaket" name="harga_kategori_jaket" type="text" placeholder="Harga">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <label class="control-label" for="kategori_topi">Kategori Topi</label>
                                        <input class="form-control" id="kategori_topi" name="harga_kategori_topi" type="text" placeholder="Harga">
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="control-label" for="kategori_celana">Kategori Celana</label>
                                        <input class="form-control" id="kategori_celana" name="harga_kategori_celana" type="text" placeholder="Harga">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea value="" id="deskripsi_konveksi" name="deskripsi_konveksi" class="form-control" rows="3" placeholder="Deskripsi konveksi"></textarea>
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

    <!--modal tambah-->
    <div class="modal fade" id="modal_update" style="border-radius:0px;" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header" style="border-radius:0px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tambah Konveksi</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" id="form_update" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <input class="form-control" name="nama_konveksi" id="update_nama_konveksi" type="text" placeholder="Nama Konveksi">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <label class="control-label" for="update_kategori_baju">Kategori Baju</label>
                                        <input class="form-control" id="update_kategori_baju" name="harga_kategori_baju" type="text" placeholder="Harga">
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="control-label" for="update_kategori_jaket">Kategori Jaket</label>
                                        <input class="form-control" id="update_kategori_jaket" name="harga_kategori_jaket" type="text" placeholder="Harga">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <label class="control-label" for="update_kategori_topi">Kategori Topi</label>
                                        <input class="form-control" id="update_kategori_topi" name="harga_kategori_topi" type="text" placeholder="Harga">
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="control-label" for="update_kategori_celana">Kategori Celana</label>
                                        <input class="form-control" id="update_kategori_celana" name="harga_kategori_celana" type="text" placeholder="Harga">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea value="" name="update_deskripsi_konveksi" class="form-control" rows="3" placeholder="Deskripsi konveksi"></textarea>
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

        var save_method;

        function updateKonveksi(id){
            $('#form_update')[0].reset();
            console.log(id);
            $.ajax({
                url : "<?php echo base_url('Admin_konveksi/getById');?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    var konveksi = jQuery.parseJSON(JSON.stringify(data));
                    var deskripsi = document.getElementById("update_deskripsi_konveksi");
                    $.each(konveksi, function(i, item){
                        console.log(item.harga_baju);
                        console.log(item.harga_jaket);
                        console.log(item.harga_topi);
                        console.log(item.deskripsi);
                        $('#update_nama_konveksi').val(item.nama);
                        $('#update_kategori_baju').val(item.harga_baju);
                        $('#update_kategori_jaket').val(item.harga_jaket);
                        $('#update_kategori_topi').val(item.harga_topi);
                        $('#update_kategori_celana').val(item.harga_celana);
                        // $('#update_deskripsi_konveksi').val(item.deskripsi);
                        // $('#jasa').val(item.jenis_pengiriman);
                        // deskripsi.value = item.deskripsi;
                    });              

                    $('#modal_update').modal('show'); // show bootstrap modal when complete loaded
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function tambah_data(){
            save_method = 'tambah';
            $('#form')[0].reset();
            $('#modal_baru').modal('show');


        }

        function update_data(){
            save_method='update';
            $('#form_update')['0'].reset();

            $.ajax({
                url : "<?php echo base_url('Admin_konveksi/ajax_edit/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data){
                    
                }
            });
            
        }
    </script>
</body>

</html>