<?php
    echo 'u';
    include('../../koneksi/config.php');
    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $tgl = date('l, F j, Y');
    echo $judul.$kategori.$tgl;
    $cek = "-";
    $query = "INSERT INTO konten (judul,tanggal,isi_konten,id_kategori) 
                    VALUES ('$judul','$tgl','$cek','$kategori')";
    if($connection->query($query)){
        header('Location: index.php');
    }else{
        header("Location: index.php");
    }

?>