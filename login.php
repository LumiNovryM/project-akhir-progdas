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

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
    
    <h1>Halaman Login</h1>


    <form action="" method="post">

        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>

    </form>

</body>
</html>