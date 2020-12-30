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
        <h3 class="text-center mb-3">Ganti Katasandi</h3><br>
       <label>Katasandi Lama</label>
       <input type="Password" name="Password" class="form-control" value="" placeholder=" Masukan Katasandi Lama"> <br>
       <label>Katasandi Baru</label>
       <input type="Password" name="Password_baru" class="form-control" value="" placeholder="Masukan Katasandi Baru"> <br>
       <button class="btn btn-info btn-sm"> Simpan Katasandi Baru</button>
    </div>
</div>
</section>