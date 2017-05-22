
<body class="hold-transition skin-blue sidebar-mini">

                <!-- <form action="<?php echo site_url('gallery/cariData');?>" method = "post"> -->
                <!-- <input type="text" name = "keyword" /> 
                <input type="submit" value = "Search" />
                </form> -->
                
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Daftar Transaksi<td>
              <br><br>
                <a href="<?php echo base_url() ?>index.php/admin_transaksi/tambah" ?><button type="button" class="btn btn-block btn-primary"><span class="glyphicon glyphicon-plus"></span>Tambah produk </button></td></div></a>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
          <div align="right">
          </div>
                <thead>
                <tr>
                  <th>ID Transaksi</th>
                  <th>Pembeli (User)</th>
                  <th>Penjual (Konveksi)</th>
                  <th>Produk</th>
                  <th>Jumlah</th>
                  <th>Ukuran</th>
                  <th>Jenis Pengiriman</th>
                  <th>Harga</th>
                  <th>EDIT</th>
                  <th>HAPUS</th>
                </tr>
                </thead>
                  
                <tbody>
                <?php $kk = 0; foreach ($query as $list) { ?>
                  <tr>
                    <td><?php echo $list['id_transaksi'] ?></td>
                    <td><?php echo $list['username_user'] ?></td>
                    <td><?php echo $list['nama_konveksi']; ?></td>
                    <td><?php echo $list['nama_produk']; ?></td>
                    <td><?php echo $list['jumlah_produk']; ?></td>
                    <td><?php echo $list['ukuran']; ?></td>
                    <td><?php echo $list['jenis_pengiriman']; ?></td>
                    <td><?php echo $list['total_harga']; ?></td>
                    <td><a href="<?php echo base_url() ?>Admin_transaksi/edit/<?php echo $list['id'] ?>"><button type="button" class="btn btn-block btn-primary">Edit</button></a></td>
                    <td><a href="<?php echo base_url() ?>Admin_transaksi/delete/<?php echo $list['id'] ?>"><button type="button" class="btn btn-block btn-primary">Delete</button></a></td>
                  </tr>
                <?php } ?>
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>

</div>

