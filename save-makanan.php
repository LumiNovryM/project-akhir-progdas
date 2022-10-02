<?php
include 'connect.php';

if (isset($_POST['simpan'])){
    $id = $_POST['id']; 
    $nama = $_POST['nama']; 
    $harga = $_POST['harga'];
    $keterangan = $_POST['keterangan']; 

    $sql = "INSERT INTO makanan (id, nama, harga, keterangan) VALUES('$id', '$nama', '$harga', '$keterangan')";

    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: data-makanan.php');
    }else {
        header('Location: save-makanan.php?status=gagal'); 
    }
}
?>