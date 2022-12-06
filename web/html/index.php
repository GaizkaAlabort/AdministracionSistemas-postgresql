<?php
require 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PostgreSQL</title>
	
	<style>
		table, th, td{
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<form action="conexion.php" method="POST">
	<table>
		<thead>
		<tr>
			<th>ID</th>
			<th>fecha</th>
			<th>nombre</th>
		</tr>
		</thead>
		<tbody>
		<?php
		while($obj=pg_fetch_object($consulta)){
		?>
		
		<tr>
		<td><?php echo $obj->id;?></td>
		<td><?php echo $obj->fecha;?></td>
		<td><?php echo $obj->nombre;?></td>
		</tr>

		</tbody>
		<?php } ?>
	</table>
	</form>
</body>
</html>
