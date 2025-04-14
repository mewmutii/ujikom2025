<?php

// include_once '../controllers/c_kegiatan.php';
include_once'../models/m_kegiatan.php';

$kegiatan = new kegiatan();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
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
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
		<h2><center>EDIT KEGIATAN</center></h2>
		<form action="../controllers/c_kegiatan.php?aksi=update"method="post">
        <?php foreach ($kegiatan->tampil_data_byid($_GET['id_to_do']) as $data) {
    ?>
		<!-- //edit sama sama kaya databsenya -->
         <input type="hidden" name="id_to_do" value="<?= $data->id_to_do ?>">
			<div class="form-group">
				<label for="nama">judul:</label>
				<input type="text" id="judul" name="judul" value="<?=$data->judul ?>" required>
			</div>
			<div class="form-group">
				<label for="email">Deadline:</label>
				<input type="date" id="deadline" name="deadline" value="<?=$data->deadline ?>" required>
			</div>
			<div class="form-group">
				<label for="deskripsi">Deskripsi:</label>
				<input type="text" id="deskripsi" name="deskripsi" value="<?=$data->deskripsi ?>" required>
			</div>
			<div class="form-group">
				<label for="status">status:</label>
				<select name="status" class="form-select" aria-label="Default select example">
                <option value="<?=
                $data->status ?>" selected><?=
                $data->status ?></option>
				<option value="to_do">to do</option>
  				<option value="in_progress">in progress</option>
                <option value="complete">complete</option>
				</select>
			</div>
			<div class="form-group">
		
			
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <?php } ?>
		</form>
</div>
</body>
</html>