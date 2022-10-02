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