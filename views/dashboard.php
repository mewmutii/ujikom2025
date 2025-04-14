<?php

include_once '../models/m_kegiatan.php'; 
include_once '../controllers/c_kegiatan.php'; // Ensure this is properly included

// Create an object of kegiatan class
// $kegiatan = new kegiatan();

// Fetch all activities
// $kegiatan = $kegiatan->tampil_data();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>DASHBOARD</title>
</head>
<body>
    <header>
        <h1><center>TO DO LIST</center></h1>
    </header>

    <table class="table table-bordered my-3">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Deadline</th>
                <th>Deskripsi</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        
        <tbody>
            <?php
            $no = 1;
            foreach ($pengguna as $data) :
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo ($data->judul); ?></td>
                    <td><?php echo date("t D F Y", strtotime($data->deadline)); ?></td>
                    <td><?php echo ($data->deskripsi); ?></td>
                    <td><?php echo ($data->status); ?></td>
                    <td>
                    <a href="ubah.php?id_to_do=<?= $data->id_to_do ?>" class="btn btn-primary">Edit</a>
                    <a onclick="return confirm('apakah anda yakin untuk menghapus data ini?')" a href="../controllers/c_kegiatan.php?id_to_do=<?= $data->id_to_do?>&aksi=hapus" class="btn btn-danger" >Hapus</a>
                </td>
                </tr>
        </tbody>
        <?php endforeach; ?>
    </table>

    <a href="tambah.php" class="btn btn-primary" role="button">Tambah Data</a>
</body>
</html>
