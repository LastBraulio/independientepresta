
  <?php session_start();
		if (isset($_SESSION['ID_SESSION'])) {
		# code...
		//$menus=$_SESSION['tipo_par'];
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
    $selectdb=$_SESSION['dbhost'];
    include("config/db.php");
    include("config/funciones_querys.php");
  	?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            
          </div>
          
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="card bg-dark text-white">
            <img src="dist/img/bono_marzo.jpg" height="500" class="card-img" alt="...">
            <div class="card-img-overlay">
              <h2 class="card-title">Bienvenido <?php echo $_SESSION['nickname'];?> - <?php echo $_SESSION['dbhost'];?></h2>
              <p class="card-text">PrestaFacil Web v1.0 es un Sistema de Control de Gestion de Prestamos Independiente  </p>
              <p class="card-text">Garantiza el Correcto Funcionamiento de tus prestamos independiente optimizando tus prestamos e intereses </p>
              <p class="card-text">id: <?php echo session_id();?> </p>
            </div>
          </div>
        </div>
      </div>
      <br><br>
      <div class="row">
        <div class="col-sm-3">
          <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Prestamos Aperturados </div>
            <div class="card-body">
              <h5 class="card-title">Cantidad de Prestamos Aperturados : <?php echo obtener_cantidad_clientes_prestamos($mysqli);?> </h5>
             
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card text-white bg-success  mb-3" style="max-width: 18rem;">
            <div class="card-header">Prestamos Cancelados</div>
            <div class="card-body">
              <h5 class="card-title">Cantidad de Prestamos Cancelados: <?php echo obtener_cantidad_clientes_prestamos_cancelado($mysqli);?></h5>
              
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Morosidad</div>
            <div class="card-body">
              <h5 class="card-title">Cantidad de Clientes Morosos: <?php echo obtener_cantidad_clientes_morosos($mysqli);?></h5>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card text-white bg-success  mb-3" style="max-width: 18rem;">
            <div class="card-header">Ayudantes</div>
            <div class="card-body">
              <h5 class="card-title">Cantidad de Ayudantes: <?php echo obtener_cantidad_clientes_morosos($mysqli);?></h5>
              
            </div>
          </div>
        </div>
      </div>

      <?php 
     /* @$view=$_GET["v"];

      switch ($view) {
      	case 'crear_paciente':
      		# code...
      		include("Vistas/crear_paciente.php"); 
      		break;
      	
      	default:
      		# code...
      		break;
      }*/

       ?>

     
    </main>
  </div>
</div>
<?php include("plantilla/footer.php"); ?>