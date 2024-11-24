<!--<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRR6CU1O218PL4tiOU4frIkNUPmi1mntavS5Q&usqp=CAU">

    <title>ACCESO AL SISTEMA -ASISTENCIA PARA EL ADULTO MAYOR </title>


	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="login.php" method="post">
      <img class="mb-4" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRR6CU1O218PL4tiOU4frIkNUPmi1mntavS5Q&usqp=CAU" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Inicie Seccion</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2021-2022</p>
    </form>
  </body>
</html>-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="dist/img/PrestaFacil.jpg">

    <title>Login -PrestaFacil Web v1.0.0</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
	<link rel="stylesheet" href="dist/css/bootstrap.min.css" >
   
    <style type="text/css">
    	html,
		body {
		  height: 100%;
		}
		
		body {
		  display: -ms-flexbox;
		  display: -webkit-box;
		  display: flex;
		  -ms-flex-align: center;
		  -ms-flex-pack: center;
		  -webkit-box-align: center;
		  align-items: center;
		  -webkit-box-pack: center;
		  justify-content: center;
		  padding-top: 40px;
		  padding-bottom: 40px;
		  background-color: #f5f5f5;
		  background-image: url(dist/img/2018_02_22_12.02.24fp-banner-800x600-hipotecario.jpg);
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
		
		.form-signin {
		  width: 100%;
		  max-width: 330px;
		  padding: 15px;
		  margin: 0 auto;
		  box-shadow: 10px 10px 15px 10px gray;
		}
		.text-secondary {
	    text-shadow: -2px 0 white, 0 2px white, 2px 0 white, 0 -2px white;
	    }
		.form-signin .checkbox {
		  font-weight: 400;
		}
		.form-signin .form-control {
		  position: relative;
		  box-sizing: border-box;
		  height: auto;
		  padding: 10px;
		  font-size: 16px;
		}
		.form-signin .form-control:focus {
		  z-index: 2;
		}
		.form-signin input[type="email"] {
		  margin-bottom: -1px;
		  border-bottom-right-radius: 0;
		  border-bottom-left-radius: 0;
		}
		.form-signin input[type="password"] {
		  margin-bottom: 10px;
		  border-top-left-radius: 0;
		  border-top-right-radius: 0;
		}
    </style>
  </head>

  <body class="text-center">
    <form class="form-signin" action="login.php" method="post">
      <img class="mb-4" src="dist/img/PrestaFacil.jpg" alt="" width="150" height="200">
      <h1 class="h3 mb-3 font-weight-bold text-secondary">PrestaFacil Web V 1.0</h1>
      <h1 class="h6 mb-3 font-weight-bold text-secondary">Sistema Gestion de Prestamos Independiente</h1>

      <label for="inputEmail" class="sr-only">ID</label>
      <input type="text" id="inputEmail" class="form-control" name="email" placeholder="ID Personal" required autofocus>
      <br>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>

      <select  name="inputdb" class="form-control form-control-lg">
        <option value="0" selected>Seleccione BD</option>
        <option value="1">Actual BD</option>
		<option value="2">Backup Febrero 2022</option>
      </select>
	  <br>
      <button class="btn btn-lg btn-success btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-secondary">&copy; 2021-2022</p>
    </form>
  </body>
</html>