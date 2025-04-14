<?php
include_once '../models/m_kegiatan.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<style>
		body {
			font-family: Arial, sans-serif;
		}
		.form-container {
			width: 350px;
			margin: 50px auto;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(56, 38, 224, 0.1);
		}
		.form-group {
			margin-bottom: 20px;
		}
		.form-group label {
			display: block;
			margin-bottom: 10px;
		}
		.form-group input[type="text"], .form-group input[type="email"], .form-group input[type="password"] {
			width: 95%;
			height: 40px;
			margin-bottom: 20px;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}
		.form-group input[type="submit"] {
			width: 100%;
			height: 40px;
			background-color:rgb(55, 100, 158);
			color: #fff;
			padding: 10px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
		.form-group input[type="submit"]:hover {
			background-color:rgb(55, 100, 158);
		}
	</style>
</head>
<body>

	<div class="form-container">
		<h2><center>Tambah Data</center></h2>
		<form action="../controllers/c_kegiatan.php?aksi=tambah" method="post">
		<!-- //edit sama sama kaya databsenya -->
			<div class="form-group">
				<label for="judul">judul</label>
				<input type="text" id="judul" name="judul" required>
			</div>
			<div class="form-group">
				<label for="deadline">deadline:</label>
				<input type="date" id="deadline" name="deadline" required>
			</div>
			<div class="form-group">
				<label for="deksripsi">deskripsi:</label>
				<input type="text" id="deskripsi" name="deskripsi" required>
			</div>
			<div class="form-group">
				<label for="nama">status:</label>
				<select name="status" class="form-select" aria-label="Default select example">
				<option value="to do">to do</option>
  				<option value="in progress">in progress</option>
				  <option value="complete">complete</option>
				</select>
			<div class="form-group">
			</div>
			<!-- <input type="hidden" name="action" value="hapus"> -->
			<input type="hidden" name="dashboard" value="<?= $dashboard ?>">
			<!-- <button>hapus</button> -->
			<button type="submit" name="tambah" class="btn btn-primary">Submit</button>
		</form>
</div>
</body>
</html>