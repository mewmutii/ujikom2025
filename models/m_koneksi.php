<?php

class Koneksi {
    // Properti kelas
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "ujikom_todolist";
    public $koneksi;

    // Konstruktor kelas
    public function __construct() {
        $this->koneksi = new mysqli($this->server, $this->username, $this->password, $this->db);

        // Mengecek koneksi
        if ($this->koneksi->connect_error) {
            die("Koneksi database gagal: " . $this->koneksi->connect_error);
        } else {
            //echo "Koneksi ke database " . $this->db . " berhasil";
        }
    }
    // public function tambah($judul, $deadline, $deskripsi, $status) {
    //     $conn = new koneksi();
    //     $sql = "INSERT INTO tb_to_do (judul, deadline, deskripsi, status) 
    //             VALUES ('$judul', '$deadline', '$deskripsi', '$status')";
    //     $query = mysqli_query ($conn->koneksi, $sql);

    //     if ($query) {
    //         echo "<script> alert('Data berhasil ditambahkan'); window.location='../views/dashboard.php'; </script>"; 
    //     } else {
    //         echo "<script> alert('Data tidak berhasil ditambahkan'); window.location='../views/tambahs.php'; </script>"; 
    //     }
    // }

    // function tampil_data_byid($id){
    //     $conn = new koneksi();

    //     $sql = "SELECT * FROM tb_to_do WHERE id = '$id'";

    //     $query = mysqli_query($conn->koneksi, $sql);

    //     if ($query->num_rows > 0) {
    //         // Pengulangan fetch $query
    //         while ($data = mysqli_fetch_object($query)) {
    //             $result[] = $data;
    //         }
    //         return $result;
    //     } else {
    //         echo "Data tidak ada";
    //     }
    // }
}

// Membuat objek koneksi
$koneksi = new Koneksi();

?>
