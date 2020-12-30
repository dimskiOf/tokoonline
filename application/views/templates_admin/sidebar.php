<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('admin/dashboard') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-store"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Rabadi Multiguna</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>">
          <i class="fas fa-house-damage"></i>
          <span>Beranda</span></a>
      </li>
      
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/admin') ?>">
          <i class="fas fa-user-tie"></i>
          <span>Daftar Adminstrator</span></a>
          
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/user') ?>">
          <i class="fas fa-users"></i>
          <span>Daftar Pengunjung</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/kategori') ?>">
          <i class="fas fa-archive"></i>
          <span>Daftar Kategori Produk</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/produk') ?>">
          <i class="fas fa-box-open"></i>
          <span>Daftar Produk</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/patner') ?>">
          <i class="fas fa-hands-helping"></i>
          <span>Patner</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/transaksi') ?>">
          <i class="fas fa-money-check-alt"></i>
          <span>Transaksi</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('auth/logout') ?>">
          <i class="fas fa-file-contract"></i>
          <span>Keluar</span></a>
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
          <!-- Name CV -->
          <div class="container ml">
            <h4>CV. Rabadi Multi Guna</h4>
          </div>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('nama'); ?></span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
