
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
              <h3 class="box-title">Daftar User<td>
              <br><br>
                <a href="<?php echo base_url() ?>index.php/admin_user/tambah" ?><button type="button" class="btn btn-block btn-primary"><span class="glyphicon glyphicon-plus"></span>Tambah user </button></td></div></a>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
          <div align="right">
    </div>
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Jenis Kelamin</th>
                  <th>Tanggal Lahir</th>
                  <th>No. Rekening</th>
                  <th>Jumlah Pelanggan</th>
                  <th>Premium User</th>
                  <th>Edit</th>
                   <th>Delete</th>
                </tr>
                </thead>
                  
                <tbody>
                <?php foreach($user as $list) { ?>
                <tr>
                  <td><?php echo $list['nama_user']; ?></a></td>
                  <td><?php echo $list['username_user']; ?></a></td>
                  <td><?php echo $list['password_user']; ?></a></td>
                  <td><?php 
                    if($list['jenis_kelamin_user'] == 0){
                      $jenis_kelamin = "Laki-Laki";
                    } else{
                      $jenis_kelamin = "Perempuan";
                    }
                    echo $jenis_kelamin ?></a></td>
                  <td><?php echo $list['tanggal_lahir_user']; ?></a></td>
                  <td><?php echo $list['rekening_user']; ?></a></td>
                  <td><?php echo $list['jumlah_pelangan_user']; ?></a></td>
                  <td><?php
                    if ($list['jenis_user'] == 1) {
                      $jenis = "Belum daftar";
                    } elseif($list['jenis_user'] == 0){ // 0 maka terdaftar user
                      $jenis = "Sudah premium";
                    }
                    echo $jenis ?></a></td>
                  <td><a href="<?php echo base_url() ?>Admin_user/edit/<?php echo $list['id_user'] ?>"><button type="button" class="btn btn-block btn-primary">Edit</button></a></td>
                  <td><a href="<?php echo base_url() ?>Admin_user/delete/<?php echo $list['id_user'] ?>"><button type="button" class="btn btn-block btn-primary">Delete</button></a></td>
                </tr>
    <?php } ?>
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>

</div>

