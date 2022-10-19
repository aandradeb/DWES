<?php
    $db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>
<html>
	<head>
		<style>
			img {
				width: 96px;
			}
			table, th, td {
				border: 1px solid black;
				border-collapse: collapse;
			}
		</style>
	</head>
    <body>
		<h1>Conexión establecida</h1>
		<table>
			<tr>
				<th>Juego</th>
				<th>Imagen</th>
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
