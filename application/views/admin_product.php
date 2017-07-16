<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/main.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/pace.css'); ?>">
    <title>Semua Produk | Admin</title>
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
                    <li><a href="<?php echo base_url('Admin_konveksi');?>"><i class="fa fa-laptop"></i><span>Kelola Konveksi</span></a></li>
                    <li><a href="<?php echo base_url('Admin_bank');?>"><i class="fa fa-bank"></i><span>Kelola Bank</span></a></li>
                    <li><a href="<?php echo base_url('Admin_show_user');?>"><i class="fa fa-home"></i><span>Kelola Pengguna</span></a></li>
                    <!--<li><a href="#"><i class="fa fa-truck"></i><span>Kelola Kurir</span></a></li>-->
                    <li  class="active"><a href="<?php echo base_url('Admin_product');?>"><i class="fa fa-home"></i><span>Kelola Produk</span></a></li>
                    <li><a href="<?php echo base_url('Admin_transaction');?>"><i class="fa fa-home"></i><span>Kelola Transaksi</span></a></li>
                </ul>
            </section>
        </aside>
        <div class="content-wrapper">
            <div class="page-title">
                <div>
                    <h1>Daftar Produk</h1>
                    <ul class="breadcrumb side">
                        <li><i class="fa fa-home fa-lg"></i></li>
                        <li class="active"><a href="#">Daftar Produk</a></li>
                    </ul>
                </div>
                <div>
                    <!--<a class="btn btn-primary btn-flat" href="" data-toggle="modal" data-target="#tambah"><i class="fa fa-lg fa-plus"></i></a><a class="btn btn-info btn-flat" href="#"><i class="fa fa-lg fa-refresh"></i></a><a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a>-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover table-bordered" id="konveksi">
                                <thead>
                                    <tr>
                                        <th style="width:25px;">No</th>
                                        <th>Nama Produk</th>
                                        <th>Pemilik</th>
                                        <th>Kategori</th>
                                        <th>Gender</th>
                                        <th>Deskripsi</th>
                                        <th>Status</th>
                                        <th>Rating</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($produk as $index => $row):?>
                                    <tr>
                                        <td class="text-center"><?php echo $index+1;?></td>
                                        <td><?php echo $row->nama_produk;?></td>
                                        <td><?php echo $row->nama_user;?></td>
                                        <td><?php echo $row->kategori_produk;?></td>
                                        <td><?php echo $row->jenis_produk;?></td>
                                        <td><?php echo $row->deskripsi;?></td>
                                        <td><?php echo $row->status_produk;?></td>
                                        <td><?php echo $row->rating_produk;?></td>
                                        <th class="text-center"><button onclick="change_status(<?php echo $row->id_produk;?>)" class="btn btn-info btn-flat" style="padding:5px 5px;"><i class="fa fa-sm fa-pencil" ></i></button></th>
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

     <!--Ubah status produk modal-->
    <div class="modal fade" id="modal_status" style="border-radius:0px;" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header" style="border-radius:0px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Ubah Status Produk</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" id="form_status" action="">
                        <div class="form-group">
                            <div class="col-lg-12"><h5><strong>Status Sekarang:</strong></h5></div>
                            <div class="col-lg-12"><h4 class="text-center" id="status"><strong id="status_sekarang" style="color:green;"></strong></h4></div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12"><input type="hidden" id="id_produk" value=""></div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12"><strong>Upgrade User:</strong></label>
                            <div class="col-lg-12">
                                <select class="form-control" id="upgrade_list">
                                    <option value="1">Disimpan</option>
                                    <option value="2">Belum Diterima</option>
                                    <option value="3">Diterima</option>
                                </select>
                            </div>
                        </div>
                        
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" onclick="save()" name="submit" class="btn btn-success">Konfirmasi</button>
                </div>
            </div>
        </div>
    </div>
    <!--End of Ubah status produk modal-->
    <!-- Javascripts-->

    <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/plugins/pace.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/main.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/plugins/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/plugins/dataTables.bootstrap.min.js');?>"></script>
    <script type="text/javascript">
        $('#konveksi').DataTable();

        function change_status(id){
             $('#form_status')[0].reset();

             $.ajax({
                url : "<?php echo base_url('Admin_product/getProductById');?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                        var produk = jQuery.parseJSON(JSON.stringify(data));
                        console.log(produk);
                        $.each(produk, function(i, item){
                            $('#status_sekarang').text(item.status_produk);
                            // document.getElementById("upgrade_list").value = item.id_jenis_user;
                            // console.log(item.id_jenis_user);
                            $('#id_produk').val(item.id_produk);
                        });

                    $('#modal_status').modal('show'); // show bootstrap modal when complete loaded
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function save(){
            var id_produk = document.getElementById("id_produk").value;
            var id_status_produk = document.getElementById("upgrade_list").value;

            var data = {'id_produk' : id_produk, 'id_status_produk' : id_status_produk};
            console.log(data);
            $.ajax({
                url : "<?php echo base_url('Admin_product/changeStatus');?>",
                type: "POST",
                data : data,
                dataType: "JSON",
                success: function(data)
                {
                    $('#modal_status').modal('hide'); // show bootstrap modal when complete loaded
                    location.reload();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    console.log(data);
                    alert('Error get data from ajax');
                }
            });     
        }
    </script>
</body>

</html>