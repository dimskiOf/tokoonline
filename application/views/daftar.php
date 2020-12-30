<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg col-sm-8 my-5 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Form Pendaftaran Akun</h1>
                    <img src="<?php echo base_url('assets/user/images/logo.jpg') ?>" width="30%" class="mb-4">
              </div>
              <form method="post" action="<?php echo base_url('daftar/index') ?>" class="user">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="username" placeholder="Masukan Username Anda">
                  <?php echo form_error('username','<div class="text-danger small ml-2 ">','</div>') ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="nama_user" placeholder="Masukan Nama Lengkap Anda">
                  <?php echo form_error('nama','<div class="text-danger small ml-2 ">','</div>') ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="email" placeholder="Masukan Email Anda">
                  <?php echo form_error('email','<div class="text-danger small ml-2 ">','</div>') ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="no_hp" placeholder="Masukan Nomor Handphone Anda">
                  <?php echo form_error('no_hp','<div class="text-danger small ml-2 ">','</div>') ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="alamat_user" placeholder="Masukan Alamat Lengkap Anda">
                  <?php echo form_error('alamat','<div class="text-danger small ml-2 ">','</div>') ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" name="password1" placeholder="Masukan Katasandi">
                    <?php echo form_error('password1','<div class="text-danger small ml-2 ">','</div>') ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user mb-4" name="password2" placeholder="Ulangi katasandi anda">
                    <?php echo form_error('password2','<div class="text-danger small ml-2 ">','</div>') ?>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">Daftar</button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?php echo base_url('auth/login') ?>">Sudah punya akun ? Login bos..</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>