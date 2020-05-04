<?php
require_once("conexion.php");
$p = $_POST['pag'];
$cant=10;
$inicio=($p-1)*$cant;
$sql="SELECT * FROM persona LIMIT $inicio,$cant";
$result = $cnx->query($sql);
while($reg = $result->fetchObject()){
	echo "<tr>
			<td>$reg->idpersona</td>
			<td>$reg->nombres</td>
			<td>$reg->apellidos</td>
			<td>$reg->email</td>
			<td>
				<button type='button' class='btn btn-info' onclick='editar($reg->idpersona)'>Editar</button>
				<button type='button' class='btn btn-danger' onclick='eliminar($reg->idpersona)'>Eliminar</button>
			</td>
		</tr>";
}
?>