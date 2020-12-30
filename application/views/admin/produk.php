<div class="container-fluid">
	<h4 class="text-center"><i class="fas fa-edit"> List Produk / Barang </i></h4>
	<button class="btn btn-sm btn-primary"data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus"> Tambah data</i></button>
	<table class="table table-bordered mt-4">
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Deskripsi Produk</th>
			<th>Kategori</th>
			<th>Harga</th>
			<th>Stok</th>
			<th>Foto</th>
			<th colspan="3">Aksi</th>

			<?php 
			$no = 1;
			foreach($barang as $p) : ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $p->nama_barang ?></td>
					<td><?php echo $p->keterangan ?></td>
					<td><?php echo $p->kategori ?></td>
					<td><?php echo $p->harga ?></td>
					<td><?php echo $p->stok ?></td>
					<td><img src="<?php echo base_url().'/uploads/'. $p->foto_barang ?>" width="100px" hight="100px"></td>
					<td><?php echo anchor('admin/produk/detail'. $p->id_barang,'<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>') ?></td>
					<td><?php echo anchor('admin/produk/edit/'. $p->id_barang,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
					<td><?php echo anchor('admin/produk/hapus/'. $p->id_barang,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
				</tr>

		<?php endforeach; ?>

		</tr>
	</table>
</div>

<!-- tambah  -->
<!-- Modal tambah data baru -->
<div class="modal" tabindex="-1" id="tambah_barang" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="<?php echo base_url().'admin/produk/tambah_aksi' ?>" method="post" enctype="multipart/form-data">
      		<div class="form-group">
      			<label>Nama barang</label>
      			<input type="text" name="nama_barang" class="form-control">
      		</div>
      		<div class="form-group">
      			<label>Deskripsi Produk</label>
      			<input type="text" name="keterangan" class="form-control">
      		</div>
          <div class="form-group">
            <label>Kategori</label>
            <select name="kategori" class="form-control">
              <option value="Medical Safety">Medical Safety</option>
              <option value="Electrical">Electrical</option>
              <option value="cleaning_tool">Cleaning Tool</option>
              <option value="industrial Safety">Industrial Safety</option>
              <option value="equipment_horeca">Equipment HORECA</option>
              <option value="equipment_cleaning">Equipment Cleaning</option>
              <option value="equipment_tool">Equipment Tools</option>
              <option value="equipment_electrical_lighting">Equpment Electrical & Lighting</option>
            </select>
          </div>
      		<div class="form-group">
      			<label>Harga</label>
      			<input type="text" name="harga" class="form-control">
      		</div>
          <div class="form-group">
            <label>Stok Barang</label>
            <select name="stok" class="form-control">
              <option class="button " value="Tersedia">Tersedia</option>
              <option value="Tidak Tersedia">Tidak Tersedia</option>
            </select>
          </div>
      		<div class="form-group">
      			<label>Foto Barang</label>
      			<input type="file" name="foto_barang" class="form-control">
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