<h1 class="h2">Estado de Cuentas</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
			<form action="" method="post" class="form-inline">
				<div class="form-group mx-sm-3 mb-2">
					<label for="inputPassword2" class="sr-only">ID</label>
					<input type="text" class="form-control" id="cedula" name="cedula" placeholder="Ingrese su ID o Cedula">
				</div>
				<button type="submit" class="btn btn-primary mb-2">Buscar</button>
			</form>
        </div>
      </div>
<div class="container-fluid">
          	<div class="row">

			  <div class="col-sm-12 table-responsive">
	          		<table id="myTable" class="table table-hover ">
					  <thead class="bg-warning">
					    <tr>
					      <th scope="col">ID</th>
					      <th scope="col">NOMBRE</th>
					      <th scope="col">INTERES</th>
					      <th scope="col">ABONO</th>
					      <th scope="col">CAPITAL</th>
					      <th scope="col">FECHA</th>
						  <th scope="col">ESTADO</th>
					    </tr>
					  </thead>
					  <tbody>
						  <?php
						  echo $tabla;
						  ?>
					  </tbody>
					</table>
					<br><br>
				</div>

          	</div>
          	
          </div>