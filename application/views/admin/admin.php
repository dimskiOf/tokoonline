<div class="container-fluid">
	<h4 class="text-center"><i class="fas fa-edit "> List Administrator </i></h4>
	<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_admin"><i class="fas fa-plus"> Tambah Data Admin</i></button>
	<table class="table table-bordered mt-3 text-center">
		<tr>
			<th>NO</th>
			<th>Nama Admin</th>
			<th>Username Admin</th>
			<th>No Handphone</th>
			<th>Alamat</th>
			<th>Foto Admin</th>
			<th>Aksi</th>
		</tr>

		<?php 
		$no=1;
		foreach($admin as $a) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $a->nama_admin ?></td>
				<td><?php echo $a->username_admin ?></td>
				<td><?php echo $a->no_hp ?></td>
				<td><?php echo $a->alamat ?></td>
				<td><img class="img-profile rounded-circle" src="<?php echo base_url().'/uploads/'. $a->foto_admin ?>" width="100px" hight="100px"></td>
				<td><?php echo anchor('admin/admin/hapus/'. $a->id_admin,'<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div') ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>

<!-- tambah  -->
<!-- Modal tambah data baru -->
<div class="modal" tabindex="-1" id="tambah_admin" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="<?php echo base_url().'admin/admin/tambah_aksi' ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
      		<div class="form-group">
      			<label>Nama Admin</label>
      			<input type="text" name="nama_admin" class="form-control" required="" autofocus="">
      		</div>
      		<div class="form-group">
      			<label>Username</label>
      			<input type="text" name="username_admin" class="form-control" required="">
      		</div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required="">
          </div>
      		<div class="form-group">
      			<label>Nomor Handphone</label>
      			<input type="text" name="no_hp" class="form-control">
      		</div>
      		<div class="form-group">
      			<label>Alamat</label>
      			<input type="text" name="alamat" class="form-control">
      		</div>
      		<div class="form-group">
      			<label>Foto Admin</label>
      			<input type="file" name="foto_admin" class="form-control">
      		</div>

      	</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-info">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>