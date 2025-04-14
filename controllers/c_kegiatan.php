<?php

include_once '../models/m_kegiatan.php';

$kegiatan = new kegiatan();

try{
    // klao ada ! berarti ga kosong, berguna untuk mengeck ada/tidask ada aksi yang akan di gunakan
    if(!empty ($_GET ['aksi'])){


        if($_GET['aksi'] != 'hapus'){
            $judul = $_POST['judul'];
            $deadline = $_POST['deadline'];
            $deskripsi = $_POST['deskripsi']; 
            $status = $_POST['status'];
    
            if ($_GET ['aksi'] == 'tambah'){
                $kegiatan->tambah( $judul , $deadline , $deskripsi , $status);
            }elseif ($_GET ['aksi']  == 'update'){
                $id = $_POST['id_to_do'];
                    $kegiatan->ubah($id , $judul , $deadline , $deskripsi , $status);            
        }
    }else{
        $id = $_GET['id_to_do'];

        // memanggil fungsi hapus 
        $kegiatan->hapus($id);
    }

    }else {
       
        $pengguna = $kegiatan->tampil_data();

    }
} catch (exception $e){
    echo $e -> getMessage();
}
                                        
// di ganti pengguna agar gampang saat mengubah data


?>