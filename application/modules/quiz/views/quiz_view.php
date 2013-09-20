<!DOCTYPE HTML>
<?php $this->load->view('headerfooter/header');?>
<html>
<head>
	<meta charset="UTF-8">

<title>Halaman Admin</title>
</head>

<body>
	<table class="table table-bordered table-hover">
	<tr>
		
		<td>Judul Quiz</td>
		<td>Tanggal</td>
		<td>Pertanyaan</td>
		<td>Pilihan Jawaban</td>
		<td>Jawaban Benar</td>
		<td>Tipe Pertanyaan</td>
		<td>Aksi</td>
	</tr>
	<tr>
		<?php foreach ($data as $row):?>
		<td><?php echo $row->judul; ?></td>
		<td><?php echo $row->tanggal; ?></td>
		<td><?php echo $row->pertanyaan; ?></td>
		<td><?php echo $row->pilihan_jawaban; ?></td>
		<td><?php echo $row->jawaban_benar; ?></td>
		<td><?php echo $row->tipe_pertanyaan?></td>
	</tr>
		<?php endforeach; ?>
	</table>
	<?php echo anchor('quiz/tambah_quiz', 'Tambah') ;?>
</body>
</html>