<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/main.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/pace.css'); ?>">
    <title>Transaksi | Admin</title>
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
                    <li><a href="<?php echo base_url('Admin_carousel');?>"><i class="fa fa-laptop"></i><span>Kelola Header</span></a></li>
                    <li><a href="<?php echo base_url('Admin_konveksi');?>"><i class="fa fa-laptop"></i><span>Kelola Konveksi</span></a></li>
                    <li><a href="<?php echo base_url('Admin_bank');?>"><i class="fa fa-bank"></i><span>Kelola Bank</span></a></li>
                    <li><a href="<?php echo base_url('Admin_show_user');?>"><i class="fa fa-home"></i><span>Kelola Pengguna</span></a></li>
                    <!--<li><a href="#"><i class="fa fa-truck"></i><span>Kelola Kurir</span></a></li>-->
                    <li><a href="<?php echo base_url('Admin_product');?>"><i class="fa fa-home"></i><span>Kelola Produk</span></a></li>
                    <li class="active"><a href="<?php echo base_url('Admin_transaction');?>"><i class="fa fa-home"></i><span>Kelola Transaksi</span></a></li>
                </ul>
            </section>
        </aside>
        <div class="content-wrapper">
            <div class="page-title">
                <div>
                    <h1>Daftar Transaksi</h1>
                    <ul class="breadcrumb side">
                        <li><i class="fa fa-home fa-lg"></i></li>
                        <li class="active"><a href="konveksi.html">Daftar Transaksi</a></li>
                    </ul>
                </div>
                <div><a class="btn btn-primary btn-flat" href="#"><i class="fa fa-lg fa-plus"></i></a><a class="btn btn-info btn-flat" href="courier.html"><i class="fa fa-lg fa-refresh"></i></a><a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover table-bordered" id="usertable">
                                <thead>
                                    <tr class="text-center">
                                        <th style="max-width:13px;">No</th>
                                        <th>Nama Produk</th>
                                        <th>Pembeli</th>
                                        <th>Tanggal Beli</th>
                                        <th>Status</th>
                                        <th>Total Harga</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($transaksi as $index => $row):?>
                                    <tr>
                                        <td><?php echo $index+1;?></td>
                                        <td><?php echo $row->nama_produk;?></td>
                                        <td><?php echo $row->nama_user;?></td>
                                        <td><?php echo $row->tanggal;?></td>
                                        <td><?php echo $row->status_transaksi;?></td>
                                        <td><?php echo $row->total_harga;?></td>
                                        <td class="text-center" style="min-width:40px;"><button onclick="detail(<?php echo $row->id;?>)" title="Detail" class="btn btn-success btn-flat" style="padding:5px 5px;" href="#"><i class="fa fa-sm fa-bars" ></i></button><button onclick="change_status(<?php echo $row->id;?>)" title="Ubah Status Pengiriman" data-toggle="modal" data-target="#ubah_status" class="btn btn-info btn-flat" style="padding:5px 5px;" href="#"><i class="fa fa-sm fa-pencil" ></i></button><a title="Hapus" class="btn btn-danger btn-flat show-alert" style="padding:5px 5px;" href="#"><i class="fa fa-sm fa-trash" ></i></a></td>
                                    <?php endforeach;?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--change transaction status modal-->
    <div class="modal fade" id="modal_detail" style="border-radius:0px;" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header" style="border-radius:0px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Detail Transaksi</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" id="form_view">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <label class="control-label" for="kategori">Kategori</label>
                                <input class="form-control" id="kategori" name="kategori" type="text" placeholder="Ukuran" readonly>
                            </div>
                        </div>
                       <div class="form-group">
                            <div class="col-lg-12">
                                <label class="control-label" for="ukuran">Ukuran</label>
                                <input class="form-control" id="ukuran" name="ukuran" type="text" placeholder="Ukuran" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <label class="control-label" for="jumlah">Jumlah</label>
                                <input class="form-control" id="jumlah" name="jumlah" type="text" placeholder="Jumlah" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <label class="control-label" for="konveksi">Konveksi</label>
                                <input class="form-control" id="konveksi" name="konveksi" type="text" placeholder="Konveksi" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <label class="control-label" for="jasa">Jasa Pengiriman</label>
                                <input class="form-control" id="jasa" name="jasa" type="text" placeholder="Jasa Pengiriman" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <label class="control-label" for="tujuan">Tujuan Pengiriman</label>
                                <textarea value="" name="tujuan" id="tujuan" class="form-control" rows="3" placeholder="Deskripsi konveksi" readonly></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    <!--<button type="button" name="submit" class="btn btn-success">Ubah</button>-->
                </div>
            </div>
        </div>
    </div>
    <!--End of change transaction status modal-->
        <!--change transaction status modal-->
    <div class="modal fade" id="modal_status" style="border-radius:0px;" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header" style="border-radius:0px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Status Transaksi</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" id="form_status" action="<?php echo base_url('Admin_transaction/ubah_status');?>" method="POST">
                        <div class="form-group">
                            <div class="col-lg-12"><h5><strong>Status Sekarang:</strong></h5></div>
                            <div class="col-lg-12"><h4 class="text-center"><strong style="color:green;" id="status_sekarang"></strong></h4></div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-12"><strong>Upgrade User:</strong></label>
                            <div class="col-lg-12">
                                <select class="form-control" id="upgrade_list">
                                    <?php foreach($status as $row):?>
                                    <option value="<?php echo $row->id;?>"><?php echo $row->status_transaksi;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <input type="button" name="submit" class="btn btn-success" value="Ubah"></input>
                    </form>
                </div>
                <div class="modal-footer">
                    
                </div>
            </div>
        </div>
    </div>
    <!--End of change transaction status modal-->
    <!-- Javascripts-->
    <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/plugins/pace.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/main.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/plugins/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/plugins/dataTables.bootstrap.min.js');?>"></script>
    <script type="text/javascript">
        $('#usertable').DataTable();

        function detail(id){
            $('#form_view')[0].reset();
            // console.log(id);
            $.ajax({
                url : "<?php echo base_url('Admin_transaction/detail');?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                        var transaksi = jQuery.parseJSON(JSON.stringify(data));
                        console.log(transaksi); 
                        var destination = document.getElementById("tujuan");
                        $.each(transaksi, function(i, item){
                            $('#kategori').val(item.kategori_produk);
                            $('#ukuran').val(item.ukuran);
                            $('#jumlah').val(item.jumlah_produk);
                            $('#konveksi').val(item.nama);
                            $('#jasa').val(item.jenis_pengiriman);
                            // $('#tujuan').val(item.tujuan_pengiriman);
                            destination.value = item.alamat;
                            // console.log(item.t);
                        });              

                    $('#modal_detail').modal('show'); // show bootstrap modal when complete loaded
                    // $('.modal-title').text('Edit Book'); // Set title to Bootstrap modal title
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function change_status(id){
             $('#form_status')[0].reset();

             $.ajax({
                url : "<?php echo base_url('Admin_transaction/detail');?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                        var transaksi = jQuery.parseJSON(JSON.stringify(data));
                        // console.log(transaksi); 
                        var destination = document.getElementById("tujuan");
                        $.each(transaksi, function(i, item){
                            $('#status_sekarang').text(item.status_transaksi);
                            // console.log(item.status_transaksi);
                        });              

                    $('#modal_status').modal('show'); // show bootstrap modal when complete loaded
                    // $('.modal-title').text('Edit Book'); // Set title to Bootstrap modal title
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });

            // $.ajax({
            //     url : "<?php echo base_url('Admin_transaction/showAllStatus');?>",
            //     type: "GET",
            //     dataType: "JSON",
            //     success: function(data)
            //     {
            //             var status = jQuery.parseJSON(JSON.stringify(data));
            //             console.log(status); 
                        
            //             var select = document.getElementById("upgrade_list");
            //             // var destination = document.getElementById("tujuan");
            //             $.each(status, function(i, item){
                            
            //                 for(index in item) {
            //                     select.options[select.options.length] = new Option(status[index], index);
            //                 }
            //             });              

            //         $('#modal_status').modal('show'); // show bootstrap modal when complete loaded
            //         // $('.modal-title').text('Edit Book'); // Set title to Bootstrap modal title
            //     },
            //     error: function (jqXHR, textStatus, errorThrown)
            //     {
            //         alert('Error get data from ajax');
            //     }
            // });
        }

        function save(){

        }
    </script>
</body>

</html>