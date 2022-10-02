<?php
include 'connect.php';

if (isset($_POST ['simpan'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $keterangan = $_POST['keterangan'];


    $sql = "UPDATE makanan SET nama='$nama', harga='$harga', keterangan='$keterangan' WHERE id ='$id'";

    $query = mysqli_query ($connect, $sql);
    if ($query){
        header('Location: data-makanan.php');
    }else{
        header('Location: edit-makanan.php?status=gagal');
    }

}
?>