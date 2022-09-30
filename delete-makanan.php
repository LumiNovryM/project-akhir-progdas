<?php
// includde adalah untuk menyambungkan file koneksi ke database
include 'connect.php';
// get adalah nama url yang ada di kolom pencarian
$id = $_GET['id'];

$sql = "DELETE FROM makanan WHERE id='$id'";
$query = mysqli_query ($connect, $sql);

if ($query){
    header('Location: dashboard.php');
    }else{
    header('Location: delete-makanan.php?status=gagal');
    }

?>