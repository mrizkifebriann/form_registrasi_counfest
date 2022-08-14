<?php
require 'functions.php';

if (isset($_POST['submit'])) {
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="icon" href="img/Logo Counfest.png">
	<title>Formulir Pendaftaran Counfest 2022</title>
</head>

<body>
	<div class="d-flex justify-content-center align-items-center">
		<img src="img/Logo Kopma Unila.png" class="" width="100px" height="100px" />
		<img src="img/Logo Counfest.png" width="150px" />
	</div>

	<div class="container glass px-4 pt-3">
		<h2 class="alert alert primary text-center nt-3">
			Formulir Pendaftaran Counfest 2022
		</h2>
		<form name="form-pendaftaran" action="confirm.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama Lengkap</label>
				<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required />
			</div>
			<br />

			<div class="form-group">
				<label>Alamat Lengkap</label>
				<input type="text" name="alamat" class="form-control" placeholder="Alamat" required />
			</div>
			<br />

			<div class="form-group">
				<label>Status</label>
				<select name="status" class="form-select" required>
					<option selected>-- Pilih Status --</option>
					<option value="Pelajar">Pelajar</option>
					<option value="Mahasiswa">Mahasiswa</option>
					<option value="Umum">Umum</option>
				</select>
			</div>
			<br />

			<div class="form-group">
				<label>Asal Instansi</label>
				<input type="text" name="instansi" class="form-control" placeholder="Asal Instansi" required />
			</div>
			<br />

			<div class="form-group">
				<label>Nomor Whatsapp</label>
				<input type="tel" name="whatsapp" class="form-control" placeholder="Nomor Whatsapp" required />
			</div>
			<br />

			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control" placeholder="example@email.com" required />
			</div>
			<br />

			<div class="form-group">
				<label>Jenis Lomba Yang Diikuti</label>
				<select name="cabang-lomba" class="form-select" required>
					<option selected>-- Pilih Cabang Perlombaan --</option>
					<option value="Lomba Cepat Tepat (LCT)">Lomba Cepat Tepat (LCT)</option>
					<option value="Business Plan Competition (BPC)">Business Plan Competition (BPC)</option>
					<option value="Solo Song">Solo Song</option>
					<option value="Essay">Essay</option>
					<option value="Desain Poster">Desain Poster</option>
					<option value="Pidato">Pidato</option>
					<option value="Mobile Legend Tournament">Mobile Legend Tournament</option>
				</select>
			</div>
			<br />

			<div class="form-group">
				<label>Jenis Peserta</label>
				<select name="peserta" class="form-select" required>
					<option selected>-- Jenis Peserta --</option>
					<option value="Individu">Individu</option>
					<option value="Tim">Tim</option>
				</select>
			</div>
			<br />

			<div class="form-group mb-3">
				<label>Bukti Pembayaran</label><br />
				<input type="file" name="bukti-bayar" class="form-control" />
				<div style="font-size: 14px; font-weight:300;">*Upload File Maksimal 1 MB</div>
			</div>

			<div class="row">
				<div class="col d-flex align-self-end">
					<input type="submit" class="btn btn-light w-25 ms-auto me-1 text-center" name="submit" value="SUBMIT" />
				</div>
			</div>
		</form>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<!-- <script>
		const scriptURL = 'https://script.google.com/macros/s/AKfycbxdYJWQ6BhabCHWRKHctQ1hlObKHcbb-oMZoFD6D7QP5nI1_zbA4Q33JwNvaTt5thjFwA/exec'
		const form = document.forms['form-pendaftaran']

		form.addEventListener('submit', e => {
			e.preventDefault()
			<?php

			?>
			fetch(scriptURL, {
					method: 'POST',
					body: new FormData(form)
				})
				.then(response => console.log('Success!', response))
				.catch(error => console.error('Error!', error.message))
		})
	</script> -->

</body>

</html>