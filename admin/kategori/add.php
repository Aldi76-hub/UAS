<?php
    include('../../koneksi/config.php');
    // echo $_POST['judul'];
    $kategori = $_POST['kategori'];
    $kode_warna = $_POST['kode_warna'];
    $judul = $_POST['judul'];
    $gambar = $_POST['gambar'];
    $level = $_POST['level'];
    $query = "INSERT INTO kategori (gambar,nama_kategori,judul,kode_warna,lvl) 
                     VALUES ('$gambar','$kategori','$judul','$kode_warna','$level')";
    if($connection->query($query)){
        header('Location: ../view_konten/index.php');
    }else{
        header("Location: tambah_kategori.php");
    }
?>