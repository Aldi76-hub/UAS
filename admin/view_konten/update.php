<?php
    include('../../koneksi/config.php');
    $id = $_POST['id_konten'];
    $isi = $_POST['kontent'];
    // echo $id.$isi;
    $query = "UPDATE konten SET isi_konten = '$isi' WHERE id_konten = '$id'";

    if($connection->query($query)){
        header('Location: index.php');
    }else{
        'Eror';
    }
?>