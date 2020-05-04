<?php
require_once("conexion.php");
$id = $_POST['idpersona'];
$sql="DELETE FROM persona WHERE idpersona='$id'";
$resp=1;
$cnx->query($sql) or $resp=0;

echo $resp;
?>