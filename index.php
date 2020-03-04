<?php
require_once('conexion.php'); $conexion=conectarbd();
require_once('css.css');

?>

<!DOCTYPE html>

<html lang="es">

    <head>

        <meta charset="utf-8"><!--son fundamentales pueda categorisar o posicionar en las busquedas-->

        <title>Login en sistema</title>

        <meta charset="iso-8559-1"/>

        <!--da una referencia a la busqueda-->
    </head>

    <body>

        <header>Ingreso</header>

         <form action="com-log.php" method="POST" id="formLogin">
            
            <label>User</label><br/>
            <input name="user" type="text" id="user" placeholder="Nombre" required /><br/>
            <label>Password</label><br/>
            <input name="password" type="password" id="password" placeholder="Cotraseña "required /><br/><br/>
            
            <input type="submit" name="Submit" value="Inicio" /> 

</form>

    </body>

    

</html>