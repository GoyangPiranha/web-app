
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
              <h3 class="box-title">Daftar Kategori Produk<td>
              <br><br>
                <a href="<?php echo base_url() ?>index.php/admin_kategori_produk/tambah" ?><button type="button" class="btn btn-block btn-primary"><span class="glyphicon glyphicon-plus"></span>Tambah produk </button></td></div></a>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
          <div align="right">
          </div>
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Kategori Produk</th>
                  <th>Edit Kategori Produk</th>
                  <th>Hapus Kategori Produk</th>
                </tr>
                </thead>
                  
                <tbody>
                <?php $kk = 0; foreach ($query as $list) { ?>
                  <tr>
                    <td><?php echo $kk++; ?></td>
                    <td><?php echo $list['kategori_produk']; ?></a></td>
                    <?php if($list['id'] == 0){ ?>
                      <td><a href="<?php echo base_url() ?>Admin_kategori_produk/edit/<?php echo $list['id'] ?>"><button disabled="1" type="button" class="btn btn-block btn-primary">Edit</button></a></td>
                      <td><a href="<?php echo base_url() ?>Admin_kategori_produk/delete/<?php echo $list['id'] ?>"><button disabled="1" type="button" class="btn btn-block btn-primary">Delete</button></a></td>
                    <?php } else{ ?>
                      <td><a href="<?php echo base_url() ?>Admin_kategori_produk/edit/<?php echo $list['id'] ?>"><button type="button" class="btn btn-block btn-primary">Edit</button></a></td>
                      <td><a href="<?php echo base_url() ?>Admin_kategori_produk/delete/<?php echo $list['id'] ?>"><button type="button" class="btn btn-block btn-primary">Delete</button></a></td>
                    <?php } ?>
                  </tr>
                <?php } ?>
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>

</div>

