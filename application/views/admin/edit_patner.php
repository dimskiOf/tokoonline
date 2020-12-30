<div class="container-fluid">
	<h3><i class="fas fa-edit"> Update List Patner </i></h3>

	<?php foreach ($patner as $p) : ?>
		<form method="post" action="<?php echo base_url().'admin/patner/update' ?>">
			<div class="form-group">
				<label>Logo Perusahaan</label>
				<input type="file" name="logo" class="form-control">
			</div>
			<div class="form-group">
				<label>Nama Perusahaan</label>
				<input type="text" name="nama_perusahaan" class="form-control" value="<?php echo $p->nama_perusahaan ?>">
				<input type="hidden" name="id_patner" class="form-control" value="<?php echo $p->id_patner?>">

			</div>
			<div class="form-group">
				<label>keterangan</label>
				<input type="text" name="keterangan" class="form-control" value="<?php echo $p->keterangan ?>">
			</div>
			<button type="submit" class="btn btn-primary btn-sm mt-4">Simpan</button>

		</form>
	<?php endforeach; ?>
</div>