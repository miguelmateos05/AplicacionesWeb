<?php
function mostrarSaludo() {
	if (isset($_SESSION['login']) && ($_SESSION['login']===true)) {
		return "Bienvenido, {$_SESSION['nombre']} <a href='logout.php'>(salir)</a>";
		
	} else {
		return "Usuario desconocido. <a href='login.php'>Login</a> <a href='registro.php'>Registro</a>";
	}
}
?>
<header>
	<h1>Mi gran página web</h1>
	<div class="saludo"><?= mostrarSaludo(); ?></div>
</header>
