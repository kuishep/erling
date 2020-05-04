<?php
// PDO PHP Data Object
$driver = "mysql";
$servidor = "localhost";
$basedatos = "dbclase";
$usuario = "root";
$clave 	 = "";
$cadena = "$driver:host=$servidor;dbname=$basedatos";
$cnx = new PDO($cadena,$usuario,$clave);
?>