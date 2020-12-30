<div class="container-fluid">
	<h4 class="text-center"><i class="fas fa-edit"> List Customer </i></h4>

	<table class="table table-bordered text-center mt-4">
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Nama User</th>
			<th>Email</th>
			<th>No. Hp</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>

		<?php 
		$no=1;
		foreach($user as $u): ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $u->username ?></td>
				<td><?php echo $u->nama_user ?></td>
				<td><?php echo $u->email ?></td>
				<td><?php echo $u->no_hp ?></td>
				<td><?php echo $u->alamat_user ?></td>
				<td><?php echo anchor('admin/user/hapus/'. $u->user_id,'<div class="btn btn-danger btn sm"><i class="fas fa-trash"></i></div>') ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
