<?php
require_once("conexion.php");
$sql="SELECT * FROM persona";
$result = $cnx->query($sql);
$cantreg = $result->rowCount();
$crxp=10;
$cantpag = ceil($cantreg/$crxp);
for($i=1;$i<=$cantpag;$i++){
	echo " <a href='#' class='btn btn-warning' onclick='listado($i)'> $i </a> ";
}
?>