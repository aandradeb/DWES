<?php
    include_once 'connectDB.php';

    // Get user credentials
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    // Find user email in database
    $query = "SELECT id, contrasena FROM tUsuarios WHERE email = '$user_email'";
    $result = mysqli_query($db, $query) or die('Query error searching user email!');

    // If user info is returned, check password and if it's ok
    // redirect to main.php page otherwise throw email error 
    if (mysqli_num_rows($result) > 0) {
        $only_row = mysqli_fetch_array($result);

        if ($only_row['contrasena'] == $user_password) {
            session_start();
            $_SESSION['user_id'] = $only_row['id'];
            header('Location: main.php');
        } else {
            echo '<p>Contraseña incorrecta</p>';
        }
    } else {
        echo '<p>Usuario no encontrado con ese email</p>';
    }
?>