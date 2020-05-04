<?php
require_once("conexion.php");
$nom = $_POST['jsnombres'];
$ape = $_POST['jsapellidos'];
$ema = $_POST['jsemail'];

$sql="INSERT INTO persona (nombres, apellidos, email)
VALUES ('$nom','$ape','$ema')";
$resp=1;
$cnx->query($sql) or $resp=0;
echo $resp;
?>