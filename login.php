<?php 

		if (empty($_POST['email'])) {
            $erros = "Email field was empty.";
        } elseif (empty($_POST['password'])) {
            $errors = "Password field was empty.";
        } elseif (!empty($_POST['email']) && !empty($_POST['password'])) {

            include("config/funcion.php");
            $selectdb=obtener_db($_POST['inputdb']);

        	include("config/db.php");

        	// consultaar siusuario existe por bd
            $email=$_POST['email'];
            $pass=$_POST['password'];

            /*$consulta = "SELECT par.id_participante, CONCAT(par.nombre,' ',par.apellido) AS nombre, par.nickname,par.tipo_participante FROM login lo, par_participantes par
            WHERE lo.cedula=par.cedula AND lo.email='".$email."' AND lo.password=".$pass." ";*/

            $consulta = "select logi.nombre,logi.cedula  from login_up logi where logi.cedula = '".$email. "' and logi.identificador = sha1('".$pass."');";

            //echo $consulta." - ".$_POST['inputdb']." - ".$selectdb; exit;

            if ($resultado = $mysqli->query($consulta)) {

			    while ($fila = $resultado->fetch_row()) {
                    session_start();
                    define( 'MAX_SESSION_TIEMPO', 3600 * 1 );
                    //$_SESSION['id']=$fila[0];
                    $_SESSION['nombre']=$fila[1];
                    $_SESSION['nickname']=$fila[0];
                    $_SESSION['dbhost']=$selectdb;
                    //$_SESSION['tipo_par']=$fila[3];
                    $_SESSION['ID_SESSION']=session_id();
			    	
			    }
				
			    $resultado->close();
			}else{
                
                header("Location: index.php");
        	    die();
            }

            //
            //echo $consulta; die();
        	header("Location: dashboard.php");
        	die();
        }


 ?>