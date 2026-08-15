<?php
    include('../../koneksi/config.php');
    $id = $_POST['id_konten'];
    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    // echo $_POST['id_konten'];
    $query = "UPDATE konten 
                SET judul = '$judul',
                    id_kategori = '$kategori' 
                WHERE id_konten = '$id'";
    if($connection->query($query)){
        header('location: index.php');
    }
?>