<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/src/css/main.css">
  <title>Main page</title>
</head>
<body>
  <div class="container-options">
    <button><a href='changePassword.php'>Cambiar contraseña</a></button>
    <button><a href='logout.php'>Logout</a></button>
  </div>
  <table class="table-games">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Imagen</th>
        <th>Desarrolladora</th>
        <th>Fecha lanzamiento</th>
      </tr>
    </thead>
    <tbody>
  <?php
    // If no used id saved go to login page
    session_start();

    if (empty($_SESSION['user_id'])) {
      header('Location: /index.html');
    }

    // Grab games information of the table 'tJuegos' and display them
    // within the table created in main.php for the user
    include_once 'connectDB.php';

    $query = 'SELECT * FROM tJuegos';
    $result = mysqli_query($db, $query) or die('Query error searching games info!');
    $id = 1;

    while ($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>{$row['id']}</td>";
      echo "<td>{$row['nombre']}</td>";
      echo "<td><a href='/src/php/detail.php?juego_id={$id}'><img id=$id src='{$row[2]}'></a></td>";
      echo "<td>{$row['desarrolladora']}</td>";
      echo "<td>{$row['fecha_lanzamiento']}</td>";
      echo "</tr>";
      $id++;
    }
    mysqli_close($db);
  ?>
  </tbody>
  </table>
</body>
</html>
