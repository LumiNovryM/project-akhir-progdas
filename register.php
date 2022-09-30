<?php

include 'connect.php';

if(isset($_POST["register"])) {
    if(register($_POST) > 0 ) {
        echo "<script>
                alert('User Baru Berhasil Ditambahkan')
              </script>";
        header("Location: login.php");
    }else{
        echo mysqli_error($connect);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/register.css">
    <!-- ICONS -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
    

            <img src="img/moon.png" id="icon">



   <div class="parent">
            <div class="card">

            <p class="title">Register</p>

            <form method="post">

            <div class="input">
                <label for="username" class="form_label">Username</label>
                <input type="text" id="username" name="username" class="form_input">
            </div>
                

            <div class="input">
                <label for="password" class="form_label">Password</label>
                <input type="password" id="password" name="password" class="form_input">
            </div>
                

            <div class="input">
                <label for="password2" class="form_labelspec">Confirm Password</label>
                <input type="password" id="password2" name="password2" class="form_input">
            </div>


                <button type="submit" name="register" class="button">Register</button>

            </form>
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