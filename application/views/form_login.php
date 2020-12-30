<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-7 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block text-center">
              </div>
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">CV. Rabadi Multiguna</h1>
                    <img src="<?php echo base_url('assets/user/images/logo.jpg') ?>" width="50%" class="mb-4">
                  </div>
                  <?php echo $this->session->flashdata('pesan') ?>
                  <form method="post" action="<?php echo base_url('auth/login') ?>" class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="username" placeholder="Masukan username anda">
                      <?php echo form_error('username','<div class="text-danger small ml-3">','</div>') ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" placeholder="Masukan katasandi anda">
                    <?php echo form_error('password','<div class="text-danger small ml-3">','</div>') ?>
                    </div>

                    <select name="authtype" id="user">
                      <option value="admin">Administrator</option>
                      <option value="user" selected="">Customer / Pelanggan</option>
                  </select>
                    <button type="submit" class=" btn btn-primary btn-user btn-block mt-3">Masuk boss..</button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="<?php echo base_url('daftar/index') ?>">Belum punya akun ? Registrasi Akun dulu bos</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>