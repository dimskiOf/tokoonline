     <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Beranda Admin </h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Daftar Pengunjung</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $user ?> <span> User</span></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Daftar Kategori</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $kategori ?><span> Kategori</span></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-archive fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Daftar Barang</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $barang ?> <span> Barang</span></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-box-open fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Patner Kami</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $patner ?> <span>Patner</span></div>
                    </div>
                    <div class="col-auto">
                      <i class="far fa-handshake fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
        <!-- /.container-fluid -->

  <div class="container-fluid mb-4">
  <div class="card">
  <div class="card-header">
    Detail Administrator
  </div>
    <div class="card-body">
        <div class="row">
          <div class="col-md-4">
            <img src="<?php echo base_url('assets/img/admin.jpg') ?>" class="card-img-top" style="width: 85%;">
          </div>
          <div class="col-md-8">
            <table class="table table-striped mb-5">
              <tr>
                <td>NIK ADMIN</td>
                <td><strong>12345678</strong></td>
              </tr>
              <tr>
                <td>Nama</td>
                <td><strong>CV. Rabadi Multiguna</strong></td>
              </tr>
              <tr>
                <td>Email</td>
                <td><strong>Administrator@gmail.com</strong></td>
              </tr>
              
              <tr>
                <td>Alamat Kantor</td>
                <td><strong>Komplek Serpong Garden, Cluster Green Studentia, Block C21/2 Jl. Raya Cisauk - Lapan Serpong.
                            Kota Tangerang Banten</strong></td>
              </tr>
              <tr>
                <td>No.Telfone Kantor</td>
                <td><strong>021-290-13013</strong></td>
              </tr>

              <tr>
                <td>Fax</td>
                <td><strong>021-295 14750</strong></td>
              </tr>
              <tr>
                <td>Role</td>
                <td><strong>1 (ADMIN)</strong></td>
              </tr>
            </table>
          
          </div>
    </div>
  </div>
</div>
</div>


      <!-- End of Main Content -->
