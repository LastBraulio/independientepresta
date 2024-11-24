<?php
/*include("db.php");

function crear_tabla_completa($query){

		$tabla="";
			if ($resultado = $mysqli->query($query)) {
			    while ($fila = $resultado->fetch_row()) {
			    	$tabla.= "<tr><td>".$fila[0]."</td><td>".$fila[1]."</td><td>".$fila[2]."</td><td>".$fila[3]."</td><td>".$fila[4]."</td><td>".$fila[5]."</td></tr>";
			    }
			    $resultado->close();
			}

        return $tabla;
}*/

function  obtener_db($dbs){
	if ($dbs==0) {
		$select="db_prestamos";
	} elseif($dbs==1) {
		$select="db_prestamos";
	}else{
		$select="prestamos";
	}
	return $select;
}


?>