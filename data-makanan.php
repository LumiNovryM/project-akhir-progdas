<?php

    include 'connect.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Makanan</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/data-makanan.css">
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
                            <h4>Atur Datamu</h4>
                            <div class="overview">
                                <form action="">
                                <button><a href="add-makanan.html">Tambah Data Makanan</a></button>
                                </form>
                            </div>
                        </div>
                        <div class="tampil">
                            <table cellpadding="10" cellspacing="0">
                            <tr class="head" >
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                            <?php
                            $sql = "SELECT * FROM makanan ORDER BY id ASC";
                            $query = mysqli_query($connect,$sql);
                            if(isset($_GET['cari'])){
                                $query = mysqli_query($connect,"SELECT * FROM makanan WHERE nama LIKE '%".$_GET['cari']."%'");
                            }
                            while($mkn = mysqli_fetch_array($query)){
                            echo"
                            <tr>
                                <td>$mkn[id]</td>
                                <td>$mkn[nama]</td>
                                <td>$mkn[harga]</td>
                                <td>$mkn[keterangan]</td> 
                                <td>
                                    <div class='btn'>
                                        <a class='hapus' href='form-edit-makanan.php?id=".$mkn['id']."'  ><div class='pensil'><ion-icon name='pencil'></div></ion-icon></a>
                                        <a class='edit' href='delete-makanan.php?id=".$mkn['id']."'><div class='sampah'><ion-icon name='trash'></div></ion-icon></i></a>
                                    </div>
                                </td>
                            </tr>";
                            };

                            ?>
                        </div>
                    </div>
            </div>

   
                   

</body>
</html>