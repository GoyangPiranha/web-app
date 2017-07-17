<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/main.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/pace.css'); ?>">
    <title>Daftar Bank | Admin</title>
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
                    <li class="active"><a href="<?php echo base_url('Admin_bank');?>"><i class="fa fa-bank"></i><span>Kelola Bank</span></a></li>
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
                    <h1>Daftar Bank</h1>
                    <ul class="breadcrumb side">
                        <li><i class="fa fa-home fa-lg"></i></li>
                        <li class="active"><a href="#">Daftar Bank</a></li>
                    </ul>
                </div>
                <div><button class="btn btn-primary btn-flat" onclick="tambah_bank()"><span class="fa fa-lg fa-plus"></span> Tambah Bank</button></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover table-bordered" id="bank">
                                <thead>
                                    <tr>
                                        <th style="width:25px;">No</th>
                                        <th>Nama Pemilik</th>
                                        <th>Nomor Rekening</th>
                                        <th>Nama Bank</th>
                                        <th style="width:40px;">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($admin_bank as $index=> $row):?>
                                    <tr>
                                        <td class="text-center"><?php echo $index+1;?></td>
                                        <td><?php echo $row->nama_pemilik;?></td>
                                        <td><?php echo $row->no_rekening;?></td>
                                        <td><?php echo $row->nama_bank;?></td>
                                        <th class="text-center"><button onclick="hapus(<?php echo $row->id_rekening;?>)" class="btn btn-danger btn-flat" style="padding:5px 5px;" href="#"><i class="fa fa-sm fa-trash" ></i></button></th>
                                        <!--<button onclick="update_bank(<?php echo $row->id_rekening;?>)" class="btn btn-info btn-flat" style="padding:5px 5px;" href="#"><span class="fa fa-sm fa-pencil" ></span></button>-->
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
    <!--modal tambah bank-->
    <div class="modal fade" id="modal-bank" style="border-radius:0px;" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header" style="border-radius:0px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tambah Bank</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="#" id="form_bank" method="POST">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <input class="form-control" name="nama_pemilik" id="nama_pemilik" type="text" placeholder="Nama Pemilik">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <input class="form-control" name="no_rekening" id="no_rekening" type="text" placeholder="Nomor Rekening">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <select class="form-control" id="pilih_bank" name="pilih_bank">
                                    <option value="">Pilih Bank</option>
                                    <?php foreach($bank as $row):?>
                                    <option value="<?php echo $row->nama_bank;?>"><?php echo $row->nama_bank;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>  
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    <button type="button" onclick="simpan()" class="btn btn-success">Tambah</input>
                </div>
            </div>
        </div>
    </div>
    <!--end of modal tambah bank-->

    <!-- Javascripts-->
    <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/plugins/pace.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/main.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/plugins/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/plugins/dataTables.bootstrap.min.js');?>"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script type="text/javascript">
        var save_method;
        var table;
        $(document).ready( function () {
            table = $('#bank').DataTable();
        });

        function tambah_bank(){
            save_method = 'tambah'
            $('#form_bank')['0'].reset();
            $('#modal-bank').modal('show');
            $('.modal-title').text('Tambah Bank');
        }

        function update_bank(){
            save_method = 'update'
            $('#form_bank')['0'].reset();
            $('#modal-bank').modal('show');
            $('.modal-title').text('Update Bank');
        }

        function simpan(){  
            var url;
            url = "<?=base_url('');?>Admin_bank/add";
            console.log($('#form_bank').serialize())
            // // var data;
            // $.each($('#form_bank').serialize(),function(a, i){
            //     console.log(i,a);
            // });
            $.ajax({
                url : url,
                type: "POST",
                data: $('#form_bank').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    //if success close modal and reload ajax table
                    $('#modal-bank').modal('hide');
                    location.reload();// for reload a page
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }

        function hapus(id){
            if(confirm('Apakah anda yaking ingin menghapus data?')){
                // ajax delete data to database
                console.log(id)
                $.ajax({
                    url : "<?php echo site_url('Admin_bank/hapus');?>/" + id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        //if success reload ajax table
                        $('#modal-bank').modal('hide');
                        location.reload();
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Gagal menghapus data.');
                    }
                });
            }
        }
    </script>
</body>

</html>