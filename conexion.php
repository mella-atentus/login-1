<?php


function conectarbd(){

	$host= "host=localhost";
	$port="port=5432";
	$dbname="dbname=test";
	$user="user=postgres";
	$password="password=root";

	$db =pg_connect("$host $port $dbname $user $password");
	if (!$db){
		echo "Erro".pg_last_error;
	}else{
		echo "Conexion exitosa php ";
		return $db;
	}
}?>