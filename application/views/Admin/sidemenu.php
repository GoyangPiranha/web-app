<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel --> 
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata("nama"); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
          <a href="<?php echo base_url() ?>admin_home">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        </li>
        <li >
          <a href="<?php echo base_url()?>index.php/admin_user">
            <i class="fa fa-dashboard"></i> <span>Pengguna</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        </li>
        <li >
          <a href="<?php echo base_url()?>index.php/admin_produk">
            <i class="fa fa-dashboard"></i> <span>Produk</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        </li>
        <li >
          <a href="<?php echo base_url()?>index.php/">
            <i class="fa fa-dashboard"></i> <span>Transaksi</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        </li>
        <li >
          <a href="<?php echo base_url()?>index.php/">
            <i class="fa fa-dashboard"></i> <span>Konveksi</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        </li>
        <li >
          <a href="<?php echo base_url()?>index.php/">
            <i class="fa fa-dashboard"></i> <span>Bank</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        </li>
        <li >
          <a href="<?php echo base_url()?>index.php/">
            <i class="fa fa-dashboard"></i> <span>Bank</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        </li>
        <li >
          <a href="<?php echo base_url()?>index.php/">
            <i class="fa fa-dashboard"></i> <span>Rekening</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        </li>
        <li >
          <a href="<?php echo base_url()?>index.php/">
            <i class="fa fa-dashboard"></i> <span>Jasa Pengiriman</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        </li>
        <li >
          <a href="<?php echo base_url()?>index.php/">
            <i class="fa fa-dashboard"></i> <span>Jenis Pengiriman</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        </li>
        <li >
          <a href="<?php echo base_url()?>index.php/">
            <i class="fa fa-dashboard"></i> <span>Provinsi</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        </li>
        <li >
          <a href="<?php echo base_url()?>index.php/">
            <i class="fa fa-dashboard"></i> <span>Kota</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url() ?>home/logout">
            <i class="fa fa-dashboard"></i> <span>Logout</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

