<?php
$nombres = array("Carlos","Roberto","Luis","Martha","Isabel","Kelly","Ronald","Alberto","Juan","Jaime","Humberto","Roy","Lucas","Mario");
$apellidos = array("Llanos","Luna","Peralta","Pita","Flores","Sosa","Cubas","Zapata","Gonzales","Tapia","Hurtado","Quiroz","Villegas");
$servidores = array("hotmail.com","gmail.com","yahoo.es","yahoo.com","outlook.com","usat.edu.pe","hotmail.es","mail.com");

for($i=1;$i<=90;$i++){
	$n1 = $nombres[rand(0,count($nombres)-1)];
	$n2 = $nombres[rand(0,count($nombres)-1)];
	$nombre=$n1." ".$n2;
	
	$ape1 = $apellidos[rand(0,count($apellidos)-1)];
	$ape2 = $apellidos[rand(0,count($apellidos)-1)];
	$apellido = $ape1." ".$ape2;

	$mail = $servidores[rand(0,count($servidores)-1)];
	$usuario = substr($n1,0,1).$ape1.rand(0,99)."@".$mail;

	echo "INSERT INTO persona (nombres,apellidos,email) VALUES('$nombre','$apellido','$usuario');<br>";
}
?>