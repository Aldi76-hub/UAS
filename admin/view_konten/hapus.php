<?php
    include('../../koneksi/config.php');
    $id = $_POST['konten_hapus'];
    $query = "DELETE FROM konten WHERE id_konten = '$id'";
    if($connection->query($query)){
        header('location: index.php');
    }
?>