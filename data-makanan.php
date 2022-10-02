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
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pooper.js/1.16.0/umd/pooper.min.js"></script>
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
                            <form action="">
                                <input type="text" placeholder="search..." id="search" name="cari">
                            </form>
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
                            <thead>
                                <tr class="head" >
                                    <th>Id</th>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
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


            <script src="js/dashboard.js"></script>
        

</body>
</html>