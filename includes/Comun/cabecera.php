<div id="cabecera">
	<h1>Mi gran página web</h1>
	<div class="saludo">
	<?php
	if (isset($_SESSION["login"]) && ($_SESSION["login"]===true)) 
	{
		echo "Bienvenido, " . $_SESSION['nombre'] . ".<a href='logout.php'>(salir)</a>";
		
	} 
	else 
	{
		echo "Usuario desconocido. <a href='login.php'>Login</a>";
	}
	?>
	</div>
</div>

