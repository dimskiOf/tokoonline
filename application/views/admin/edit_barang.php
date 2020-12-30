<div class="container-fluid">
	<h3><i class="fas fa-edit"> Update Data Barang </i></h3>

	<?php foreach ($barang as $b) : ?>
		<form method="post" action="<?php echo base_url().'admin/produk/update' ?>">
			
			<div class="form-group">
				
				<label>Nama Barang</label>
				<input type="hidden" name="id_barang" class="form-control" value="<?php echo $b->id_barang ?>">
				<input type="text" name="nama_barang" class="form-control" value="<?php echo $b->nama_barang ?>">
			</div>
			<div class="form-group">
				<label>Deskripsi Produk</label>
				<input type="text" name="keterangan" class="form-control" value="<?php echo $b->keterangan ?>">
			</div>
			<div class="form-group">
            <label>Kategori</label>
            <select name="kategori" class="form-control">
              <option value="Medical Safety">Medical Safety</option>
              <option value="Electrical">Electrical</option>
              <option value="cleaning Tool">Cleaning Tool</option>
              <option value="Industrial Safety">Industrial Safety</option>
              <option value="Equipment HORECA">Equipment HORECA</option>
              <option value="Equipment Cleaning">Equipment Cleaning</option>
              <option value="Equipment Tools">Equipment Tools</option>
              <option value="Equipment Electrical Lighting">Equpment Electrical & Lighting</option>
            </select>
          </div>
			<div class="form-group">
				<label>harga barang</label>
				<input type="text" name="harga" class="form-control" value="<?php echo $b->harga ?>">
			</div>
			<div class="form-group">
            <label>Stok Barang</label>
            <select name="stok" class="form-control" value="<?php echo $b->stok ?>">
              <option value="Tersedia">Tersedia</option>
              <option value="Tidak Tersedia">Tidak Tersedia</option>
            </select>
          </div>
			<div class="form-group">
				<label>Foto barang</label>
				<input type="file" name="foto_barang" class="form-control">
			</div>

			<button type="submit" class="btn btn-primary btn-sm mt-4">Simpan</button>

		</form>
	<?php endforeach; ?>
</div>