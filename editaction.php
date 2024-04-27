<?php
// Inclure la connexion à la base de données
include 'database.php';

// Nettoyez les valeurs reçues de POST
$id = mysqli_real_escape_string($conn, $_POST['id']);
$title = mysqli_real_escape_string($conn, $_POST['title']);

// Mettre à jour la tâche dans la base de données
$sql = "UPDATE todos SET title = '$title' WHERE id = $id";
$result = mysqli_query($conn, $sql);

// Vérifiez si la mise à jour a réussi
if ($result) {
    // Redirigez vers la page d'accueil
    header("Location: index.php");
    exit;
} else {
    // Affichez un message d'erreur en cas de problème
    echo "Erreur lors de la mise à jour de la tâche : " . mysqli_error($conn);
}
?>
