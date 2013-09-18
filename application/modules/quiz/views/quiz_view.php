<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">

<title>Halaman Admin</title>
</head>

<body>
	<table class="table table-bordered table-hover">
	<tr>
		<td>ID</td>
		<td>Nama Admin</td>
		<td>Email</td>
		<td>No Telepon</td>
		<td>Username</td>
		<td>Password</td>
		<td>Aksi</td>
	</tr>
	<tr>
		<?php foreach ($data as $row):?>
		<td><?php echo $row->id_admin; ?></td>
		<td><?php echo $row->nama_admin; ?></td>
		<td><?php echo $row->email; ?></td>
		<td><?php echo $row->no_telepon; ?></td>
		<td><?php echo $row->username; ?></td>
		<td><?php echo $row->password ?></td>
		<td><a class="btn btn-primary" href="<?php echo site_url('admin/edit_admin/'.$row->id_admin);?>" title="Edit">
				<i class="icon-edit icon-white"></i></a>
				<a class="btn btn-danger" href="<?php echo site_url('admin/hapus_admin/'.$row->id_admin);?>" title="Hapus" 
				onclick="return confirm('Anda Yakin ?');"><i class="icon-remove icon-white"></i></a>	
		</td>
	</tr>
		<?php endforeach; ?>
	</table>
	<a class="btn btn-link" href="<?php echo site_url('admin/tambah_view')?>">Tambah</button>
</body>
</html>