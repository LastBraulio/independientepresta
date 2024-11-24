<?php

if(isset($_GET['cerrar'])) {

  //Vaciamos y destruimos las variables de sesión
  //$_SESSION['iduser'] = NULL;
  //$_SESSION['nombreuser'] = NULL;
  $_SESSION=array();
  unset($_SESSION);
  //unset($_SESSION['nombreuser']);
  session_destroy();

  //Redireccionamos a la pagina index.php
  header('Location: index.php');
}

?>