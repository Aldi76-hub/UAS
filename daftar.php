<?php
include('koneksi/config.php');
$nama = $_POST['name'];
$email = $_POST['email'];
$pass = md5($_POST['password']);

$query = "INSERT INTO user_login (nama,email,password,status)
                VALUES ('$nama','$email','$pass','1')";
if($connection->query($query)){
        header('Location: login.php');
    }else{
        header("Location: index.php");
    }

?>