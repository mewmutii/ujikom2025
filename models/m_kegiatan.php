<?php

include_once 'm_koneksi.php';

class kegiatan {
    private $koneksi;

    public function __construct() {
        $this->koneksi = new Koneksi();
    }

    // Display all activities
    public function tampil_data() {
        $conn = new koneksi();
       $data = mysqli_query($conn->koneksi, "SELECT * FROM tb_to_do ORDER BY id_to_do desc ");
			 $hasil = [];
		while ($d = mysqli_fetch_object($data)) {
			$hasil[] = $d;
		}
		return $hasil;
         // Return activities as associative array
    }

  public function tampil_data_byid($id){
    $conn = new koneksi();
       $data = mysqli_query($conn->koneksi, "SELECT * FROM tb_to_do where id_to_do = '$id'");
			 $hasil = [];
		while ($d = mysqli_fetch_object($data)) {
			$hasil[] = $d;
		}
		return $hasil;
  }
    public function tambah($judul, $deadline, $deskripsi, $status) {
        $conn = new koneksi();
        $sql = "INSERT INTO tb_to_do 
                VALUES (NULL, '$judul', '$deadline', '$deskripsi', '$status')";
        $query = mysqli_query ($conn->koneksi, $sql);
        
        if ($query) {
            echo "<script> alert('Data berhasil ditambahkan'); window.location='../views/dashboard.php'; </script>"; 
        } else {
            echo "<script> alert('Data tidak berhasil ditambahkan'); window.location='../views/tambah.php'; </script>"; 
        }
    }
    public function hapus($id) {
        $conn = new koneksi();

        $query = "DELETE FROM tb_to_do WHERE id_to_do = $id";

        mysqli_query($conn->koneksi, $query);

        header("location:../views/dashboard.php");
    }
    function ubah($id, $judul, $deadline, $deskripsi, $status) {

        $conn = new koneksi();

        $sql = "UPDATE tb_to_do SET judul = '$judul' , deadline = '$deadline' , deskripsi = '$deskripsi'  , status = '$status' WHERE id_to_do = '$id'";

        $query = mysqli_query($conn->koneksi, $sql);

        if ($query) {
            echo "<script> alert('Data berhasil di ubah'); window.location='../views/dashboard.php'; </script>"; 
        } else {
            echo "<script> alert('Data tidak berhasil di ubah'); window.location='../views/create.php'; </script>"; 
        }
    }
}
?>
