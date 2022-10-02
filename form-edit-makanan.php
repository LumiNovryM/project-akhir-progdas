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
  <!-- Favicon -->
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="ico/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="ico/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="ico/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="ico/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="ico/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="ico/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="ico/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="ico/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="ico/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="ico/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="ico/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="ico/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="ico/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="ico/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="ico/mstile-310x310.png" />
</head>
<body>
        <div class="container"> 
                <div class="sidebar">
                    <div class="logo">
                    <p><a href="dashboard.php"><span class="kuning">Makan</span><span class="abu-abu">Cuy</span></a></p>
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



