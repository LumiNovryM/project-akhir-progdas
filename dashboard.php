<?php

include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/dashboard.css">
    <!-- Icon -->
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
                    <button><a href="add-siswa.html">Tambah Data Makanan</a></button>
                    </form>
                   </div>
                </div>
            </div>
            
        </div>
           



        <script>
            var icon = document.getElementById("icon");

                icon.onclick = function(){
                    document.body.classList.toggle("dark-theme")
                    if(document.body.classList.contains("dark-theme")){
                        icon.src = "img/sun.png";
                    }else{
                        icon.src = "img/moon.png";
                    }
                }
        </script>

</body>
</html>