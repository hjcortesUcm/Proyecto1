<?php
require_once __DIR__.'/includes/config.php';
?><!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Administrar</title>
</head>

<body>

<div id="contenedor">

<?php
	require("includes/comun/cabecera.php");
	require("includes/comun/sidebarIzq.php");
?>

	<div id="contenido">

	<?php
		if (isset($_SESSION['esAdmin']) && $_SESSION['esAdmin'] === true) 
		{
			echo "<h1>Consola de administración</h1>";
		    echo "<p>Aquí estarían todos los controles de administración</p>";
		} 
		else 
		{
			echo "<h1>Acceso denegado!</h1>";
			echo "<p>No tienes permisos suficientes para administrar la web.</p>";
		}
	?>
	</div>

<?php

	require("includes/comun/sidebarDer.php");
	require("includes/comun/pie.php");

?>


</div>

</body>
</html>