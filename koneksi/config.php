<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "uas_web2026";

    $connection = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

    if($connection){
        // echo "TRUE";
    }else{
        echo "FALSE".mysqli_connect_error();
    }
?>