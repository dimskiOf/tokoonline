<div class="container-fluid">
	<h3><i class="fas fa-edit"></i> Edit data Kategori</h3>

	<?php foreach ($kategori as $k) : ?>
	<form method="post" action="<?php echo base_url().'admin/kategori/update' ?>">
		<div class="form-group mt-3">
			<label>Nama Kategori</label>
			<input type="text" name="nama_kategori" class="form-control" value="<?php echo $k->nama_kategori ?>">
		</div>
		<div class="form-group">
			<label>Keterangan Kategori</label>
			<input type="hidden" name="id_kategori" class="form-control" value="<?php echo $k->id_kategori ?>">
			<input type="text" name="Keterangan" class="form-control" value="<?php echo $k->keterangan ?>">
		</div>
		<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
		</form> 
	<?php endforeach; ?>
</div>