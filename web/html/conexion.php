<?php
$conexion=pg_connect("host=servidor-db dbname=accesos user=root password=root");
$query="SELECT * FROM entradas";
$consulta=pg_query($conexion,$query);

?>
