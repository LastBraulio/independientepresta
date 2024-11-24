<?php
	
    //$mysqli  =  mysqli_connect("127.0.0.1", "root", "", "db_prestamos");
	$mysqli  =  mysqli_connect("127.0.0.1", "root", "", $selectdb);
	if (!$mysqli ) {
	    die('No pudo conectarse: ' . mysql_error());
	}
?>