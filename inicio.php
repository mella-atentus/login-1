</!DOCTYPE html>
<html>
<link rel=”stylesheet” type=”text/css” href=”css.css”>
<head>
	<title>Cuneta usuario</title>
</head>
<body >
	<header>
<?php
session_start();
$usuario = $_SESSION['nombre'];
echo "Bienvenido :".$usuario;
require_once('css.css');
if (!isset($_SESSION['nombre'])) {
    header('Location: index.php');
    exit();
}?>
<form action='destruir_sesion.php'>
    <input type="submit" name="sesionDestroy" value="Cerrar sesion"/>
</form>
</header>
</body>
</html>