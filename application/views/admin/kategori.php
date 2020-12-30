<div class="container-fluid">
	<h4 class="text-center"><i class="fas fa-edit"> List Kategori Produk</i></h4>
	<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah_kategori"><i class="fas fa-plus"></i> Tambah Data</button>

	<table class="table table-bordered mt-3">
		<tr>
			<th>No</th>
			<th>Nama Kategori</th>
			<th colspan="2">Aksi</th>
		</tr>

		<?php 
		$no=1;
		foreach($kategori as $k) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $k->nama_kategori ?></td>
				<td><?php echo anchor('admin/kategori/edit/'.$k->id_kategori,'<div class="btn btn-info btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
				<td><?php echo anchor('admin/kategori/hapus/'.$k->id_kategori,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>

<!-- Modal tambah data baru -->
<div class="modal" tabindex="-1" id="tambah_kategori" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="<?php echo base_url().'admin/kategori/tambah_aksi' ?>" method="post" enctype="multipart/form-data">
      		<div class="form-group">
      			<label>Nama Kategori</label>
      			<input type="text" name="nama_kategori" class="form-control">
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