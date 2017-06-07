<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/main.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/pace.css'); ?>">
    <title>Kelola Header | Admin</title>
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
                    <li class="active"><a href="<?php echo base_url('Admin_carousel');?>"><i class="fa fa-laptop"></i><span>Kelola Header</span></a></li>
                    <li><a href="<?php echo base_url('Admin_konveksi');?>"><i class="fa fa-laptop"></i><span>Kelola Konveksi</span></a></li>
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
                    <h1>Header Home</h1>
                    <ul class="breadcrumb side">
                        <li><i class="fa fa-home fa-lg"></i></li>
                        <li class="active"><a href="#">Header</a></li>
                    </ul>
                </div>
                <div><button class="btn btn-primary btn-flat" data-toggle="modal" data-target="#modal_carousel"><span class="fa fa-lg fa-plus"></span> Tambah Header</button></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-title"><h3>Preview Header</h3></div>
                        <div class="card-body">
                        <?php foreach($carousel as $index => $row):?>
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="carousel-item">
                                    <img src="<?php echo base_url();?>assets/images/Header/<?php echo $row->foto_carousel;?>" alt="1">
                                </div>
                            </div>
                            
                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-title">
                            <h4>List Header</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-bordered" id="konveksi">
                                <thead>
                                    <tr>
                                        <th style="width:30px;">No</th>
                                        <th>Nama File</th>
                                        <th>Foto</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($carousel as $index => $row):?>
                                    <tr>
                                        <td class="text-center"><?php echo $index+1;?></td>
                                        <td><?php echo $row->nama_carousel;?></td>
                                          <td><?php echo $row->foto_carousel;?></td>
                                        <td class="text-center"><button onclick="deleteCarousel(<?php echo $row->id_carousel;?>)" class="btn btn-danger btn-flat show-alert" style="padding:5px 5px;" href="#"><i class="fa fa-sm fa-trash" ></i></button></td>
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
    <div class="modal fade" id="modal_carousel" style="border-radius:0px;" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header" style="border-radius:0px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tambah Header</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="<?php echo base_url('');?>Admin_carousel/add_carousel" method="POST" enctype='multipart/form-data'>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <input class="form-control" name="nama_carousel" type="text" placeholder="Nama Header">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12"><strong>Pilih Header</strong></label>
                            <div class="col-lg-12">
                                <input type="file" name="userfile" class="form-control" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12 ">
                                <img class="center-block" id="show_header" style="max-width:120px;height:auto;"/>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                            <input type="submit" name="submit" class="btn btn-success" value="Tambah"></input>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <!--      end of modal tambah-->
    <!-- Javascripts-->

    <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/plugins/pace.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/main.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/plugins/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/plugins/dataTables.bootstrap.min.js');?>"></script>
    <script type="text/javascript">
        $('#konveksi').DataTable();

        // function tambahCarousel(){
        //     $('#form_carousel')['0'].reset();
        //     $('#modal_carousel').modal('show');
        //     $('.modal-title').text('Tambah Header');
        // }

        // function save(){
        //     url = "<?php echo base_url('Admin_carousel/add_carousel');?>";
        //     var nama_carousel = document.getElementById("nama_carousel").value;
        //     var file_header = document.getElementById("file_header").value;

        //     console.log(nama_carousel)
        //     console.log(file_header)
        //     $.ajax({
        //         url : url,
        //         type: "POST",
        //         data: "{nama_carousel, file_header}",
        //         dataType: "JSON",
        //         success: function(data)
        //         {
        //             //if success close modal and reload ajax table
        //             $('#modal_carousel').modal('hide');
        //             location.reload();// for reload a page
        //         },
        //         error: function (jqXHR, textStatus, errorThrown)
        //         {
        //             alert('Gagal menambahkan data.');
        //         }
        //     });
        // }

        function deleteCarousel(id){
            if(confirm('Apakah anda yakin ingin menghapus data?')){
                $.ajax({
                    url : "<?php echo site_url('Admin_carousel/delete');?>/" + id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data){
                        location.reload();
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Gagal menghapus data!');
                    }
                });
            }
        }
    </script>
</body>

</html>