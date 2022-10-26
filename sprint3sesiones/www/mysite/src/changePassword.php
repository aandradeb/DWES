<?php
    $db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar contraseña</title>
    <style>
			button {
				position: absolute;
				right: 10px;
				padding: 10px;
				font-size: 18px;
				margin-top: 2px;
				border: none;
				color: white;
				background-color: #DDEFEF;
				color: #336B6B;
			}

			button a {
				color: #336B6B;
			} 

			button a:visited {
				color: #336B6B;
			}

			a {
				text-decoration: none;
			}
    </style>
</head>
<body>
  <form id="form" method="post" action="changePassword.php">
    <h2>Cambiar contraseña</h2>
      <div>
          <label>Contraseña actual:</label>
          <input type="password" name="currentPassword">
      </div>
      <div>
          <label>Nueva Contraseña:</label>
          <input type="password" name="newPassword">
      </div>
      <input type="submit" name="submit" value="Submit">
    </form>
    <?php 
    $currentPassword = $_POST['currentPassword'];
    $newPassword = $_POST['newPassword'];
    
    if (!empty($currentPassword) && !empty($newPassword)) {
      session_start();
      $query = "SELECT contrasena FROM tUsuarios WHERE id = {$_SESSION['user_id']}";
      $result = mysqli_query($db, $query) or die('Query error');
      $only_row = mysqli_fetch_array($result);

      if ($currentPassword == $only_row[0] && $currentPassword != $newPassword) {
        $query2 = "UPDATE tUsuarios SET contrasena = '$newPassword' WHERE id = {$_SESSION['user_id']}";
        mysqli_query($db, $query2) or die('Query error2');
        header('Location: newPassword.html');
      }
    }
  ?>
  <button><a href="main.php">Ir a main.php</a></button>
</body>
</html>