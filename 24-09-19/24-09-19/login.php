<?php
require_once("conexion.php");
$usuario = $_POST['txtusuario'];
$passw 	= sha1($_POST['txtpassw']);

$sql = "SELECT * FROM usuario 
		WHERE usuario='$usuario' AND password='$passw'";

$rs = $cnx->query($sql) or die($sql);
$cantreg = $rs->rowCount();

if($cantreg==1) {
	session_start();
	$reg = $rs->fetchObject();
	$_SESSION['idusuario']=$reg->idusuario;
	$_SESSION['usuario']=$reg->usuario;
	header("location: persona.php");
}
else header("location: index.html");
?>