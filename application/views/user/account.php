<section>
  <div class="container" style="margin-bottom: 20px;">
    <div class="card ">
      <div class="card-header text-center">
        <ul class="nav nav-pills card-header-pills">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('user/account') ?>">Profile user</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('user/pesananuser') ?>">Pesanan Saya</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('user/gantipassword') ?>" >Ganti Password</a>
          </li>
        </ul>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <table class="table table-bordered table-striped">
              <tr>
                <td>Username</td>
                <td><strong>12345678</strong></td>
              </tr>
              <tr>
                <td>Nama Pembeli</td>
                <td><strong><?php echo $this->session->userdata('nama') ?></strong></td>
              </tr>
              <tr>
                <td>Email</td>
                <td><strong><?php echo $this->session->userdata('username') ?></strong></td>
              </tr>
              <tr>
                <td>No.Telfone</td>
                <td><strong>021-290-13013</strong></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td><strong><?php echo $alamat_user['alamat_user']; ?></strong></td>
              </tr>
              <tr>
                <td>Role</td>
                <td><strong>Customer / Pembeli</strong></td>
              </tr>
            </table>
             <a class="btn btn-primary btn-2x" href="">Simpan Perubahan</a>
          </div>
    </div>
</div>
</section>