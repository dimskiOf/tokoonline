<div class="container-fluid">
	<h4 class="text-center"><i class="fas fa-edit"> List Patner </i></h4>
	<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah_patner"><i class="fas fa-plus"> Tambah List Patner</i></button>

	<table class="table table-bordered table-stripped mt-3 text-center">
		<tr>
			<th>No</th>
			<th>Foto Perusahaan</th>
			<th>Nama Perusahaan</th>
			<th>Keterangan</th>
			<th colspan="2">Aksi</th>
		</tr>
		<?php 
		$no=1;
		foreach($patner as $p) : ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><img src="<?php echo base_url().'/uploads/'. $p->logo ?>" width="100px" hight="100px"></td>
			<td><?php echo $p->nama_perusahaan ?></td>
			<td><?php echo $p->keterangan ?></td>
			<td><?php echo anchor('admin/patner/edit/'. $p->id_patner,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
			<td><?php echo anchor('admin/patner/hapus/'. $p->id_patner,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>

		<?php endforeach; ?>
		</tr>
	</table>
</div>

<!-- tambah  -->
<!-- Modal tambah data baru -->
<div class="modal" tabindex="-1" id="tambah_patner" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="<?php echo base_url().'admin/patner/tambah_aksi' ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label>Foto Perusahaan</label>
            <input type="file" name="logo" class="form-control">
          </div>
      		<div class="form-group">
      			<label>Nama perusahaan</label>
      			<input type="text" name="nama_perusahaan" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Keterangan</label>
      			<input type="text" name="keterangan" class="form-control">
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