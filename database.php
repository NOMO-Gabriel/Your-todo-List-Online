<?php

    $host = "localhost";
    $user="root";
    $pass ="";
    $dbname="todos";

    $conn = mysqli_connect($host ,$user ,$pass ,$dbname);

    if (!$conn) {
        die("La connexion à la base de données a échoué : " . mysqli_connect_error());
    }
    
?>