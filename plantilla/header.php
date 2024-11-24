<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.88.1">
    <title>PrestaFacil Web v1.0 - Gestion de Prestamos Independientes </title>

    <link rel="icon" href="dist/img/PrestaFacil.jpg">

    

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link href="dist/css/bootstrap4_6.min.css" rel="stylesheet" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

    <!-- Favicons -->
<meta name="theme-color" content="#563d7c">

 
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.6/examples/dashboard/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
    
    <!-- ofline css-->
    <link href="dist/css/dashboardv2.css" rel="stylesheet">
    <link href="dist/css/bootstrap-icons.css" rel="stylesheet">
    <link href="dist/css/jquery.dataTables.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="dist/css/dataTables.bootstrap4.min.css">
	  <link rel="stylesheet" type="text/css" href="dist/css/buttons.dataTables.min.css">

  </head>
  <body>
    
<nav class="navbar navbar-dark sticky-top <?php echo $color_menu; ?> flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">PrestaFacil Web v1.0</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">-->
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="seccion.php?cerrar=yes">ID: <?php echo $_SESSION['nombre'];?> - BD: <?php echo $_SESSION['dbhost'];?> <i class="bi bi-door-open"></i> Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">