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
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
    
    <h1>Halaman Registrasi</h1>


    <form method="post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" id="username" name="username">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </li>
            <li>
                <label for="password2">Konfirmasi Password</label>
                <input type="password" id="password2" name="password2">
            </li>
            <li>
                <button type="submit" name="register">Register</button>
            </li>
        </ul>
    </form>

</body>
</html>