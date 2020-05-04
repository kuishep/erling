<?php
class Persona {
    private $nombres;
    private $apellidos;
    private $email;
   
   
    function lista(pag) {
        global $cnx;
        $res = $cnx->query("SELECT * FROM persona");
        $cadena="";
        while($reg = $res->fetchObject()){
        	$cadena.="<tr>
        			<td>$idpersona</td>
        		  </tr>";
        }
        return $cadena;
    }
}