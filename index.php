<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>My toDo List unsing php!</title>
  </head>
  <body>
            <h1 class="text-center my-4 py-4">Welcome To Todo List App</h1>



            <div class="w-50 m-auto">
                  <form action="data.php" method="post" autocomplete="off">
                      <label for="title">Task :</label>
                      <input type="text" name="title" id="title"  Required placeholder="Enter a new Task here "><br><br>
                      <button class="btn btn-info">add to ToDo</button>
                  </form> 
            </div><br>
            <hr class="bg-dark w-50 m-auto">
            <div class="w-50 m-auto">
                  <h1>Your Lists </h1>
                  <table class="table table-secondary table-hover">
                              <thead>
                                <tr>
                                  <th scope="col">S.no</th>
                                  <th scope="col">Tasks</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php 
                                                      include 'database.php';
                                                      $sql = "SELECT * FROM todos";
                                                      $result = mysqli_query($conn, $sql);

                                                      if ($result) {
                                                          while ($row = mysqli_fetch_assoc($result)) {
                                                              $id = $row['id'];
                                                              $title = $row['Title'];
                                                              
                                                              // Afficher chaque tâche sous forme de ligne dans la table
                                                              echo "<tr>";
                                                              echo "<td>$id</td>";
                                                              echo "<td>$title</td>";
                                                              echo "<td>";
                                                              echo "<a href='edit.php?id=$id' class='btn btn-success btn-sm'>Edit</a>";
                                                              echo "<a href='delete.php?id=$id' class='btn btn-danger btn-sm'>Delete</a>";
                                                              echo "</td>";
                                                              echo "</tr>";
                                                          }
                                                      } else {
                                                          echo "Aucune tâche trouvée.";
                                                      }
                                ?>
                              </tbody>
                  </table>
            </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>