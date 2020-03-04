<?php 
session_start();
require_once('conexion.php');
$conexion = conectarbd();

$user = $_POST['user'];
$password = $_POST['password'];

$user = strtolower($user);

  
$result = pg_query($conexion, "SELECT nombre, clave FROM usuarios where nombre = '$user' and clave ='$password' ");


$log = pg_num_rows($result);
    
    if($log > 0){
        
        while($row = pg_fetch_array($result)){
            foreach ($row as $key => $val){
                $key = stripslashes( $val );
            }
 
             $_SESSION['nombre'] = $row['nombre'];
                
            header('Location: inicio.php');
        }
    }else{
    	header('Location: index.php');
    }
?>