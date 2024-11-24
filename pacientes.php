
  	<?php session_start();
		if (isset($_SESSION['ID_SESSION'])) {
		# code...
		$menus=1;
		}else{
		//echo $_SESSION['ID_SESSION']; die();
		header("Location: index.php");
		die();
		} 

		if ($menus==1) {
			$color_menu="bg-success";
		  }else{
			$color_menu="bg-info";
		  }
	?>

  	<?php 
	include("plantilla/header.php");
  
  	include("config/menu.php"); 
  	?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        

      <?php 
      @$view=$_GET["v"];

      switch ($view) {

      	case 'listar_pacientes':
      		# code...
			$selectdb=$_SESSION['dbhost'];
			include("config/db.php");

			$consulta = "SELECT GG.cedula AS ID , GG.nombre , GG.ultimointerez AS INTERES , GG.ultimocapital AS CAPITAL , GG.ultimafecha AS FECHA  FROM (select t1.cedula , th.nombre , (select ta.id_prestamos_detalles  from prestamos_detalles ta where ta.cedula = t1.cedula  order by ta.id_prestamos_detalles desc limit 1) as ult_recibo , (select ta.cap_actual  from prestamos_detalles ta where ta.cedula = t1.cedula  order by ta.id_prestamos_detalles desc limit 1) as ultimocapital  , (select ta.intereses   from prestamos_detalles ta where ta.cedula = t1.cedula  order by ta.id_prestamos_detalles desc limit 1) as ultimointerez , (select ta.ingresos  from prestamos_detalles ta where ta.cedula = t1.cedula  order by ta.id_prestamos_detalles desc limit 1) as ult_abono  , (select ta.fecha   from prestamos_detalles ta where ta.cedula = t1.cedula  order by ta.id_prestamos_detalles desc limit 1) as ultimafecha from prestamos_detalles t1 , clientes th  WHERE t1.cedula = th.cedula group by t1.cedula order by t1.id_prestamos_detalles DESC) GG, prestamos kk WHERE GG.cedula = kk.cedula AND kk.cancelacion = 0";
			$tabla="";

			if ($resultado = $mysqli->query($consulta)) {

			    while ($fila = $resultado->fetch_row()) {
			    	$tabla.= "<tr><td>".$fila[0]."</td><td>".$fila[1]."</td><td>".$fila[2]."</td><td>".$fila[3]."</td><td>".$fila[4]."</td><td><a class='btn btn-primary' href='pacientes.php?v=ver&id=' role='button'><i class='bi bi-eye'></i></a></td></tr>";
			    }
				
			    $resultado->close();
			}
			//echo $tabla; exit;
      		include("Vistas/pacientes/listar_pacientes.php"); 
      		break;

      	case 'crear_paciente':
      		# code...
      		include("Vistas/pacientes/crear_paciente.php"); 
      		break;
		
		case 'insert':
				# code...

				include("config/db.php");


				$cedula=$_POST['inputcedula'];
				$fecha_de_nacimiento=$_POST['inputfechanac'];
				$nombre=$_POST['inputnombre'];
				$apellido=$_POST['inputapellido'];
				$edad=$_POST['inputedad'];
				$telefono_celular=$_POST['inputcelular'];
				$correo_email=$_POST['inputemail'];
				$enfermedad_cronica=$_POST['inputenfermedad'];
				$otras_enfermedades=$_POST['inputobservar'];
				$fecha=$_POST['inputfecha'];

				//$consulta = "INSERT INTO paciente (cedula, fecha_de_nacimiento, nombre, apellido, edad, telefono_celular, correo_email, enfermedad_cronica,otras_enfermedades, fecha)
				//VALUES (?,?,?,?,?,?,?,?,?,?)";
				$consulta = "INSERT INTO paciente (cedula, fecha_de_nacimiento, nombre, apellido, edad, telefono_celular, correo_email, enfermedad_cronica,otras_enfermedades, fecha)
				VALUES ('".$cedula."','".$fecha_de_nacimiento."','".$nombre."','".$apellido."',".$edad.",'".$telefono_celular."','".$correo_email."','".$enfermedad_cronica."','".$otras_enfermedades."','".$fecha."')";
				
				$sentencia = $mysqli->prepare($consulta);

				//$sentencia->bind_param("sss", $cedula, $fecha_de_nacimiento, $nombre,$apellido,$edad,$telefono_celular,$correo_email,$enfermedad_cronica,$otras_enfermedades,$fecha);

				$sentencia->execute();

				$sentencia->close();

				header("Location: pacientes.php?v=listar_pacientes");

				echo "se guardo registro";

			break;

      	case 'pdf':
      		# code...
			header_remove();
			header("Location: http://localhost/Web_prestaFacil/PrestaFacil/pdf/documentos/pruebapdf.php");
        	die();
      		//include("Vistas/pacientes/update_paciente.php"); 
      		break;


		case 'imprimir':
			# code...
			/*$selectdb=$_SESSION['dbhost'];
			include("config/db.php");

			$consulta = "SELECT GG.cedula AS ID , GG.nombre , GG.ultimointerez AS INTERES , GG.ultimocapital AS CAPITAL , GG.ultimafecha AS FECHA  FROM (select t1.cedula , th.nombre , (select ta.id_prestamos_detalles  from prestamos_detalles ta where ta.cedula = t1.cedula  order by ta.id_prestamos_detalles desc limit 1) as ult_recibo , (select ta.cap_actual  from prestamos_detalles ta where ta.cedula = t1.cedula  order by ta.id_prestamos_detalles desc limit 1) as ultimocapital  , (select ta.intereses   from prestamos_detalles ta where ta.cedula = t1.cedula  order by ta.id_prestamos_detalles desc limit 1) as ultimointerez , (select ta.ingresos  from prestamos_detalles ta where ta.cedula = t1.cedula  order by ta.id_prestamos_detalles desc limit 1) as ult_abono  , (select ta.fecha   from prestamos_detalles ta where ta.cedula = t1.cedula  order by ta.id_prestamos_detalles desc limit 1) as ultimafecha from prestamos_detalles t1 , clientes th  WHERE t1.cedula = th.cedula group by t1.cedula order by t1.id_prestamos_detalles DESC) GG, prestamos kk WHERE GG.cedula = kk.cedula AND kk.cancelacion = 0";
			$tabla="";

			if ($resultado = $mysqli->query($consulta)) {

			    while ($fila = $resultado->fetch_row()) {
			    	$tabla.= "<tr><td>".$fila[0]."</td><td>".$fila[1]."</td><td>".$fila[2]."</td><td>".$fila[3]."</td><td>".$fila[4]."</td><td></tr>";
					@$sum_intereses+=$fila[2];
					@$sum_capital+=$fila[3];
				}
				
			    $resultado->close();
			}
			$tot="SUMA INTERESES : ".$sum_intereses." SUMA CAPITAL: ".$sum_capital;
			$sum_intereses=0;
			$sum_capital=0;
			include("Vistas/pacientes/imprimir_c1.php"); */
			break;

      	default:
      		# code...
      		include("Vistas/error/error404.php"); 
      		break;
      }

       ?>

     
    </main>
  </div>
</div>
<?php include("plantilla/footer.php"); ?>