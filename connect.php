<?php

    // Ini Connect yaa temen temen

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "register";
    $connect = mysqli_connect($host,$user,$password,$database);


    // Kalau ini Function supaya data yang masuk ke database itu berubah menjadi strtolower / huruf kecil dan menghilangkan garis bawah juga

function register($data){
    global $connect;


    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($connect, $data["password"]);
    $password2 = mysqli_real_escape_string($connect, $data["password2"]);


    // Cek Kalau username udh ada di DB atau belum
    $result = mysqli_query($connect, "SELECT username FROM user WHERE username = '$username'");
    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('Username yang dipilih sudah tersedia')
              </script>";
        return false;
    }

    // Cek Informasi Password
    if( $password != $password2 ) {
        echo "<script>
                alert('Konfirmasi Password Tidak Sesuai');
              </script>";
        return false;
    }



    // Enkripsi Password dek biar gk Di hek Bjorka
    $password = password_hash($password, PASSWORD_DEFAULT);

    // User Baru Akan Ditambahkan ke DB
    mysqli_query($connect, "INSERT INTO user VALUES('', '$username', '$password')");

    return mysqli_affected_rows($connect);
}

?>