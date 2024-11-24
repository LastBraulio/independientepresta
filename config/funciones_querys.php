<?php 
//$selectdb=$_SESSION['dbhost'];

//include("db.php");

function obtener_cantidad_clientes_prestamos($mysqlis){
	$consulta = "SELECT COUNT(cl1.id_cliente) FROM clientes cl1, prestamos pr1 WHERE cl1.cedula=pr1.cedula";
	$rerun=0;

    //var_dump($mysqlis); exit;

	if ($resultado = $mysqlis->query($consulta)) {

		while ($fila = $resultado->fetch_row()) {

			$rerun= $fila[0];		
		}
		$resultado->close();
	}

	return $rerun;
}
function obtener_cantidad_clientes_prestamos_cancelado($mysqlis){
	$consulta = "SELECT COUNT(cl1.id_cliente) FROM clientes cl1, prestamos pr1 WHERE cl1.cedula=pr1.cedula AND pr1.cancelacion=1;";
	$rerun=0;
 
    //var_dump($mysqlis); exit;

	if ($resultado = $mysqlis->query($consulta)) {

		while ($fila = $resultado->fetch_row()) {

			$rerun= $fila[0];		
		}
		$resultado->close();
	}

	return $rerun;
}

function obtener_cantidad_clientes_morosos($mysqlis){
	$consulta = "SELECT COUNT(m1.cedula) FROM (select t1.cedula , t2.nombre , t1.ultimocapital as UltimoCapital, t1.ultimointerez as UltimoIntereses , t1.ultimafecha as Fecha
    , DATEDIFF(NOW(), t1.ultimafecha ) as DIAS_MOROSOS 
    from view_total2 t1, clientes t2 where t1.cedula = t2.cedula AND t1.ultimocapital <> 0 AND t1.ultimointerez <> 0 
    having DATEDIFF(NOW(), t1.ultimafecha ) > 15) m1 ";
	$rerun=0;
 
    //var_dump($mysqlis); exit;

	if ($resultado = $mysqlis->query($consulta)) {

		while ($fila = $resultado->fetch_row()) {

			$rerun= $fila[0];		
		}
		$resultado->close();
	}

	return $rerun;
}







?>