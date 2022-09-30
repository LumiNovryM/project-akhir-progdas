<?php
include 'connect.php';

$id = $_GET['id'];
$sql = "SELECT * FROM makanan WHERE id='$id'";
$query = mysqli_query($connect, $sql);
$mkn = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("data tidak ditemukan");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>

    <form action="edit-makanan.php" method="post">
        
        <label for="">Id</label>
        <input value="<?php echo $mkn ['id']?>" required="required" name="id">
        
        
        <label for="">Nama</label>
        <input value="<?php echo $mkn ['nama']?>" required="required" name="nama">
        
        <label for="">Harga</label>
        <input value="<?php echo $mkn ['harga']?>" required="required" name="harga">
        
        <label for="">Keterangan</label>
        <input value="<?php echo $mkn ['keterangan']?>" required="required" name="keterangan">
        
        <input type="submit" name="simpan" value="simpan">
        
    </form>

</body>
</html>

