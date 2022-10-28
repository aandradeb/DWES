<html>
    <body>
        <?php
            include_once 'connectDB.php';

            session_start();
            $user_id_a_insertar = 'NULL';

            if (!empty($_SESSION['user_id'])) {
                $user_id_a_insertar = $_SESSION['user_id'];
            }

            $juego_id = $_POST['juego_id'];
            $fecha = $_POST['fecha'];
            $comentario = $_POST['new_comment'];
            $query = "INSERT INTO tComentarios(comentario, usuario_id, juego_id, fecha)
            VALUES ('".$comentario."', ".$user_id_a_insertar.",".$juego_id.", '".$fecha."')";
            mysqli_query($db, $query) or die('Error');
            echo "<p>Nuevo comentario ";
            echo mysqli_insert_id($db);
            echo " añadido</p>";
            echo "<a href='/src/php/detail.php?juego_id=".$juego_id."'>Volver</a>";
            mysqli_close($db);
        ?>
    </body>
</html>