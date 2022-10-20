<?php
    $db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>
<html>
    <body>
        <?php
            if (!isset($_GET['juego_id'])) {
                die('No se ha especificado ningun juego!');
            }
            $juego_id = $_GET['juego_id'];
            $query = 'SELECT * FROM tJuegos WHERE id='.$juego_id;
            $result = mysqli_query($db, $query) or die('Query error');
            $only_row = mysqli_fetch_array($result);
            echo '<h1>'.$only_row['nombre'].'</h1>';
            echo '<h2>'.$only_row['desarrolladora'].'</h2>';
            echo '<h3>'.$only_row['fecha_lanzamiento'].'</h3>';
            echo '<img style="max-width: 20%;" src="'.$only_row['url_imagen'].'" alt=juego>';
        ?>
        <h3>Comentarios:</h3>
        <ul>
        <?php
            $query2 = 'SELECT * FROM tComentarios c join tUsuarios u on u.id=c.usuario_id where c.juego_id='.$juego_id;
            $result2 = mysqli_query($db, $query2) or die('Query error');
            while ($row = mysqli_fetch_array($result2)) {
                echo '<li>'.$row['comentario'].' - '.$row['fecha'].' - '.$row['nombre'].'</li>';
            }
            mysqli_close($db);
        ?>
        </ul>

        <p>Deja un nuevo comentario:</p>
        <form action="/comment.php" method="post">
            <textarea rows="4" cols="50" name="new_comment"></textarea><br>
            <input type="hidden" name="juego_id" value="<?php echo $juego_id; ?>">
            <input type="hidden" name="fecha" value="<?php echo date('y-m-d', time()); ?>">
            <input type="submit" value="Comentar">
        </form>
        <a href="/logout.php">Logout</a>
    </body>
</html>