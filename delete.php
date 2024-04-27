<?php

    include 'database.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM todos WHERE id=$id";
    $result = mysqli_query($conn , $sql);

    if ($result) {
        header("Location: index.php");
    } else {
        echo "Erreur lors de la suppression : " . mysqli_error($conn);
    }
    

?>