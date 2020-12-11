<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a href="index.html">
        <div class="sidebar-brand-icon">
          <!--<i class="fas fa-laugh-wink"></i>-->
          <a class="brand" href="#"><img src="<?php echo base_url(); ?>/assets/img/logo.jpg" width="225"></a>
        </div>
        <!--<div class="sidebar-brand-text mx-10">CANTENG KONENG</div>-->
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('dashboard_pmb')?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>BATIK READY</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('dashboard_pmb/tampil_form_psn')?>">
          <i class="fas fa-fw fa-edit"></i>
          <span>BATIK PESANAN</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('dashboard_pmb/tampil_data_psn')?>">
          <i class="fas fa-fw fa-edit"></i>
          <span>DATA PESANAN</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="navbar">
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <?php
                  $keranjang = 'Keranjang Belanja: '.$this->cart->total_items(). ' items'
                  ?>

                  <?php echo anchor('dashboard_pmb/detail_keranjang', $keranjang) ?>
                </li>
              </ul>
              <div class="topbar-divider d-none d-sm-block"></div>

            <ul class="na navbar-nav navbar-right">
              <?php if($this->session->userdata('username')){ ?>
                <li><div class="mr-3 mt-2">Selamat Datang <?php echo $this->session->userdata('username') ?></div></li>
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="<?php echo base_url(); ?>/assets/img/user.png" class="nav-avatar" height="30" width="30"/>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="<?php echo base_url('dashboard_pmb/edit_profil'); ?>">Edit Profil</a>
                      <li class="divider"></li>
                      <a class="dropdown-item" href="<?php echo base_url('auth/logout'); ?>">Logout</a>
                  </div>
                </div>
                <!--<li class="ml-2"><?php echo anchor('auth/logout', 'Logout') ?></li>-->
              <?php }else{ ?>
              <li><?php echo anchor('auth','Login'); ?></li>
              <?php } ?>
            </ul>
            </div>

          </ul>

        </nav>
        <!-- End of Topbar -->