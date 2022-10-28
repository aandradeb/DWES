<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/changePassword.css">
    <title>Change Password Page</title>
</head>
<body>
  <form id="form" method="post" action="changePassword.php">
    <h2>Cambiar contraseña</h2>
      <div>
          <label>Contraseña actual:</label>
          <input type="password" name="current_password" required>
      </div>
      <div>
          <label>Nueva Contraseña:</label>
          <input type="password" name="new_password" required>
      </div>
      <input type="submit" name="submit" value="Submit">
    </form>
  <button><a href="main.php">Ir a main.php</a></button>
  <?php
    include_once 'connectDB.php';
    
    if (!empty($_POST['current_password']) && !empty($_POST['new_password'])) {
      $current_password = $_POST['current_password'];
      $new_password = $_POST['new_password'];
      session_start();
      $query = "SELECT contrasena FROM tUsuarios WHERE id = {$_SESSION['user_id']}";
      $result = mysqli_query($db, $query) or die('Query error');
      $only_row = mysqli_fetch_array($result);

      if ($current_password == $only_row[0] && $current_password != $new_password) {
        $query2 = "UPDATE tUsuarios SET contrasena = '$new_password' WHERE id = {$_SESSION['user_id']}";
        mysqli_query($db, $query2) or die('Query error2');
        header('Location: newPasswordChanged.php');
      }
    }
  ?>
</body>
</html>