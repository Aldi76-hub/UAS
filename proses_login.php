<?php
    session_start();
    include('koneksi/config.php');

    $email = $_POST['email'];
    $pass = md5($_POST['password']);

    $data = mysqli_query($connection,"SELECT * FROM user_login WHERE email = '$email' AND password = '$pass'");
    
    $cek = mysqli_num_rows($data);

    if($email == 'admin@admin' && $_POST['password'] == '1234'){
        $_SESSION['nama'] = '@admin';
        header('location: admin/view_konten/index.php');
    }else{
        // echo '2';
        if($cek > 0){
            echo '3';
            $_SESSION['nama'] = $email;
            header('location:index.php');
        }else{
            echo '4';
            header('location:login.php');
        }
    }

?>