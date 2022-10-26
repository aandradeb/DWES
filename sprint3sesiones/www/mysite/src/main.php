<?php
    $db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>
<html>
	<head>
		<style>
			table {
				border: solid 1px #DDEEEE;
				border-collapse: collapse;
				border-spacing: 0;
				font: normal 13px Arial, sans-serif;
			}

			th {
				background-color: #DDEFEF;
				border: solid 1px #DDEEEE;
				color: #336B6B;
				padding: 10px;
				text-align: left;
				text-shadow: 1px 1px 1px #fff;
			}

			td {
				border: solid 1px #DDEEEE;
				color: #333;
				padding: 10px;
				text-shadow: 1px 1px 1px #fff;
			}

			img {
				width: 96px;
				transition: 0.3s ease-in-out;
			}
			
			img:hover{
				transform: scale(1.5);
			}

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

			h1 {
				display: inline-block;
			}
		</style>
	</head>
    <body>
		<h1>Conexión establecida</h1>
		<?php
      session_start();

      if (!empty($_SESSION['user_id'])) {
        echo "<button><a href='/logout.php'>Logout</a></button><br>";
        echo "<button><a href='/changePassword.php'>Cambiar contraseña</a></button>";
      }
		?>
		<table>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Imagen</th>
				<th>Desarrolladora</th>
				<th>Fecha lanzamiento</th>
			</tr>
		<?php
		// Lanzar una query
		$query = 'SELECT * FROM tJuegos';
		$result = mysqli_query($db, $query) or die('Query error');
		// Crear un id para cada img
		$id = 1;
		// Recorrer el resultado
		while ($row = mysqli_fetch_array($result)) {
			echo '<tr>';
			echo '<td>'.$row['id'].'</td>';
			echo '<td>'.$row['nombre'].'</td>';
			echo '<td><a href="/detail.php?juego_id='.$id.'"><img id=img'.$id.' src="'.$row[2].'"></a></td>';
			echo '<td>'.$row['desarrolladora'].'</td>';
			echo '<td>'.$row['fecha_lanzamiento'].'</td>';
			echo '</tr>';
			$id++;
		}
		mysqli_close($db);
		?>
		</table>
    </body>
</html>
