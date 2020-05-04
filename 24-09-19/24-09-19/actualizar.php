<?php
require_once("conexion.php");
$id = $_POST['id'];
$nom = $_POST['jsnombres'];
$ape = $_POST['jsapellidos'];
$ema = $_POST['jsemail'];

$sql="UPDATE persona SET nombres='$nom', apellidos='$ape', email='$ema' WHERE idpersona='$id'";
$resp=1;
$cnx->query($sql) or $resp=0;
echo $resp;
?>