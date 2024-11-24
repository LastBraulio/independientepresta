
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
	  $selectdb=$_SESSION['dbhost'];
      @$view=$_GET["v"];

      switch ($view) {

      	case 'listar_pacientes':
      		# code...
			include("config/db.php");
			@$ids=$_POST['cedula'];
			$consulta = "select t1.id_prestamos_detalles as ID,t3.nombre, t1.intereses , t1.ingresos as Abono , t1.cap_actual as Capital , t1.fecha , t2.descripcion AS Estado 
			  from prestamos_detalles t1, tipo_pago t2, clientes t3 where t1.tipo_pago = t2.id_tipo_pago and t1.cedula = t3.cedula  and t2.id_tipo_pago <> 3 
			  and t1.cancelacion = 0 and t1.cedula = '".$ids."'";
			$tabla="";
  
			  if ($resultado = $mysqli->query($consulta)) {
  
				  while ($fila = $resultado->fetch_row()) {
					  $tabla.= "<tr><td>".$fila[0]."</td><td>".$fila[1]."</td><td>".$fila[2]."</td><td><i class=\"bi bi-arrow-down-circle-fill\"></i>  ".$fila[3]."</td><td><i class=\"bi bi-arrow-right-circle-fill\"></i>   ".$fila[4]."</td><td>".$fila[5]."</td><td>".$fila[6]."</td></tr>";
				  }
				  
				  $resultado->close();
			  }
      		include("Vistas/tareas/listar.php"); 
      		break;

      	case 'crear_paciente':
      		# code...
      		include("Vistas/tareas/crear.php"); 
      		break;

		case 'insert':
				# code...

				include("config/db.php");
 

				$idpaciente=$_POST['inputidpaciente'];
				$observacion=$_POST['inputobservar'];
				$tarea=$_POST['inputtarea'];
				$f_inicio=$_POST['inputfechainicio'];
				$f_final=$_POST['inputfechafinal'];

				//$consulta = "INSERT INTO paciente (cedula, fecha_de_nacimiento, nombre, apellido, edad, telefono_celular, correo_email, enfermedad_cronica,otras_enfermedades, fecha)
				//VALUES (?,?,?,?,?,?,?,?,?,?)";
				$consulta = "INSERT INTO tarea (idpaciente, observacion, tarea, fechainicio, fechafinal, fechadesistema)
				VALUES ('".$idpaciente."','".$observacion."','".$tarea."','".$f_inicio."',".$f_final.", CURDATE())";
				
				$sentencia = $mysqli->prepare($consulta);

				//$sentencia->bind_param("sss", $cedula, $fecha_de_nacimiento, $nombre,$apellido,$edad,$telefono_celular,$correo_email,$enfermedad_cronica,$otras_enfermedades,$fecha);

				$sentencia->execute();

				$sentencia->close();

				header("Location: tareas.php?v=listar_pacientes");

				echo "se guardo registro";

			break;

      	case 'editar':
      		# code...
      		include("Vistas/tareas/update.php"); 
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