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
    <link rel="stylesheet" href="css/login.css">
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
    

    

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

</body>
</html>