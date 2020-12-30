<section>
  <div class="container mb-10" style="margin-bottom: 20px;">
    <div class="card ">
      <div class="card-header ">
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
      <div class="card-body text-center">
        <h3 class="mb-3">List Pesanan</h3><br>
       <table class="table table-bordered " id="datatransaksi">
        <thead>
        <tr style="text-align: center; ">
          <th>No</th>
          <th>No. Invoice</th>
          <th>Tanggal Pesanan</th>
          <th>Total Pembayaran</th>
          <th>Status</th>
          <th colspan="3">Opsi</th>
        </tr>
        </thead>
        <tbody></tbody>
       
         
       </table>
    </div>
</div>
</section>