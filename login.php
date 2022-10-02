<?php

include 'connect.php';

    if(isset($_POST["login"])) {

        $username = $_POST["username"];
        $password = $_POST["password"];


        $result = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username'");

        // Cek Username
        if( mysqli_num_rows($result) === 1 ) {


            // Cek Password
            $row = mysqli_fetch_assoc($result);
            if( password_verify($password, $row["password"]) ) {
                header("Location: dashboard.php");
            }

        }

        $error = true;

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/login.css">
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
    

    <div class="card">

        <p class="title">Login</p>

        <?php if( isset($error) ) : ?>


            <p style="font-size: 15px;color: red; text-align: center;">Username & Password Salah</p>

        <?php endif; ?>

        <form action="" method="post">

      
            <div class="input">
                <label for="username" class="form_label">Username</label>
                <input type="text" name="username" id="username" class="form_input">
            </div>

            <div class="input">
                <label for="password" class="form_label">Password</label>
                <input type="password" name="password" id="password" class="form_input">
            </div>

           

            <button type="submit" name="login" class="button">Login</button>

            
        </form>
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