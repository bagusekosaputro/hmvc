<!DOCTYPE HTML>
<?php
	$this->load->view('headerfooter/header.php');
?>
<html>
<head>

<title>Halaman Admin</title>
</head>

<body>
	<?php echo form_open(base_url().'quiz/tambah_quiz'); ?>
		<h1>Form Admin</h1>
		<br/>
		<div class="control-group">
		<label for="nama">Judul</label>
		<input type="text" name="nama" id="nama" placeholder="Nama"/>
		
		<label for="email">Tanggal</label>
		<input type="text" name="email" id="email" placeholder="Email"/>
		
		<label>Pertanyaan</label>
		<input type="text" name="no_telpon" required value="" size="50" >
		
		<label>Tipe</label>
				<select name="tipe">
					<option value="pilihan ganda">Pilihan Ganda</option>
					<option value="isian">Isian</option>
				</select>
				
		<label for="username">Pilihan Jawaban>
		<input type="text" name="username" id="username" placeholder="Username"/>
     
		<label for="password">Jawaban Benar</label>
		<input type="password" name="password" id="password"/> 
		
		</div>
     
		<div class="form-actions">
			<button type="submit" class="btn btn-primary">Simpan</button>
			<a class="btn btn-danger" href="<?php echo base_url(); ?>quiz">Batal</a>
			<?php echo form_close() ?>
		</div>
</body>
</html>