<?php
        $title =$_POST["title"];

        include 'database.php';
        
        $sql ="INSERT INTO todos(title) VALUES ('$title') ";
        
        $result = mysqli_query($conn ,$sql);
        
        if ($result) {
            header("Location: index.php");
        } else {
            echo "Erreur lors de l'insertion : " . mysqli_error($conn);
        }
        
?>