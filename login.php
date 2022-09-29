<?php
// Cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    // Cek Username & Password
    if( $_POST["username"] == "admin" && $_POST["password"] == "adminpplg1" ) {
    // Jika benar, redirect ke halaman admin
        header("Location: dashboard.php");
    }else{ 
    // Else, tampilkan pesan kesalahan
        $error = true;


    }

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--===== CSS =====-->
        <link rel="stylesheet" href="css/style.css">

        <title>Login</title>
    </head>
    <body>
        <div class="l-form">
            <form action="" class="form">
                <h1 class="form__title">Sign In</h1>

                <div class="form__div">
                    <input type="text" class="form__input" placeholder=" " name="username">
                    <label for="" class="form__label">Username</label>
                </div>

                <div class="form__div">
                    <input type="password" class="form__input" placeholder=" " name="password">
                    <label for="" class="form__label">Password</label>
                </div>

                <input type="submit" class="form__button" value="Sign In">
            </form>
        </div>
    </body>
</html>