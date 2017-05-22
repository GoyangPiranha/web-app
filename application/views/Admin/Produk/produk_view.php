
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
              <h3 class="box-title">Daftar Produk<td>
              <br><br>
                <a href="<?php echo base_url() ?>index.php/admin_produk/tambah" ?><button type="button" class="btn btn-block btn-primary"><span class="glyphicon glyphicon-plus"></span>Tambah produk </button></td></div></a>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
          <div align="right">
          </div>
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Harga</th>
                  <th>Tags</th>
                  <th>Jenis</th>
                  <th>Kategori</th>
                  <th>Diskon</th>
                  <th>Pemilik</th>
                  <th>Status</th>
                  <th>Edit</th>
                   <th>Delete</th>
                </tr>
                </thead>
                  
                <tbody>
                <?php foreach ($query as $list) { ?>
                  <tr>
                    <td><?php echo $list['nama_produk']; ?></a></td>
                    <td><?php echo $list['harga_produk']; ?></a></td>
                    <td><?php echo $list['tag_produk']; ?></a></td>
                    <td><?php echo $list['jenis_produk']; ?></a></td>
                    <td><?php echo $list['kategori_produk']; ?></a></td>
                    <td><?php echo $list['diskon_produk']; ?></a></td>
                    <td><?php echo $list['nama_user']; ?></a></td>
                    <td><?php echo $list['status_produk']; ?></a></td>
                    <td><a href="<?php echo base_url() ?>Admin_produk/edit/<?php echo $list['id_produk'] ?>"><button type="button" class="btn btn-block btn-primary">Edit</button></a></td>
                    <td><a href="<?php echo base_url() ?>Admin_produk/delete/<?php echo $list['id_produk'] ?>"><button type="button" class="btn btn-block btn-primary">Delete</button></a></td>
                  </tr>
                <?php } ?>
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>

</div>

