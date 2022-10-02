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
    <!-- css -->
    <link rel="stylesheet" href="css/form-edit.makanan.css">
    <!-- Icons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
        <div class="container"> 
                <div class="sidebar">
                    <div class="logo">
                        <p><span class="kuning">Makan</span><span class="abu-abu">Cuy</span></p>
                    </div>
                    <div class="menu">
                        <ion-icon name="fast-food-outline" class="icon"></ion-icon>
                        <p><a href="data-makanan.php">Data Makanan</a></p>
                        <img src="img/moon.png" id="icon">
                    </div>
                </div>
                <div class="tabel">
                    <div class="header">
                        <h2>Dashboard</h2>
                        <div class="search">
                            <input type="text" placeholder="search...">
                        </div>

                    </div>
                    <div class="content">
                        <div class="header">
                            <h4>Edit Data Makanan</h4>
                            <div class="overview">
                            <form action="edit-makanan.php" method="post">
        
                                <label for="">Id</label>
                                <input value="<?php echo $mkn ['id']?>" required="required" name="id">
                                
                                
                                <label for="">Nama</label>
                                <input value="<?php echo $mkn ['nama']?>" required="required" name="nama">
                                
                                <label for="">Harga</label>
                                <input value="<?php echo $mkn ['harga']?>" required="required" name="harga">
                                
                                <label for="">Keterangan</label>
                                <input value="<?php echo $mkn ['keterangan']?>" required="required" name="keterangan">
                                
                                <input class="submit" type="submit" name="simpan" value="simpan">
        
                            </form>
                            </div>
                    </div>  
        </div>

<script src="js/edit.js"></script>

</body>
</html>



