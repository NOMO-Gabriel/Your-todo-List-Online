<!doctype html>
<html lang="en">
<head>
    <!-- Meta tags et Bootstrap CSS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <title>Modifier la tâche</title>
</head>
<body>
    <h1 class="text-center my-4 py-4">Update Your Todo List App</h1>

    <?php
    include 'database.php';

    // Nettoyez l'ID de la tâche
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Obtenez la tâche à partir de l'ID
    $sql = "SELECT * FROM todos WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    // Vérifiez si la tâche existe
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $title = $row['title'];
    } else {
        echo "Tâche non trouvée.";
        exit;
    }
    ?>

    <div class="w-50 m-auto">
        <form action="editaction.php" method="post" autocomplete="off">
            <div class="form-group">
                <label for="title">Task:</label>
                <input type="text" name="title" id="title" value="<?php echo htmlspecialchars($title); ?>" class="form-control" required>
            </div>
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
            <button type="submit" class="btn btn-info">Enregistrer</button>
            <a href="index.php" class="btn btn-secondary">Annuler</a>
        </form>
    </div>

    <!-- Scripts JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>
