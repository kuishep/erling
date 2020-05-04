<?php
require_once("conexion.php");
$id = $_POST['id'];

$sql="SELECT * FROM persona WHERE idpersona='$id'";
$res = $cnx->query($sql);
$reg = $res->fetchObject();
echo json_encode($reg);
?>