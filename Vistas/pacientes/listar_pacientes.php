<h1 class="h2">Reportes Capital Por Cliente</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
			<a class="btn btn-sm btn-outline-secondary dropdown-toggle" href="imprimir.php?v=pdf"  role="button">PDF</a>&nbsp;&nbsp;|&nbsp;&nbsp;
          	<a class="btn btn-sm btn-outline-secondary dropdown-toggle" href="imprimir.php?v=imprimir" target="_blank" role="button">Imprimir</a>

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
					      <th scope="col">CAPITAL</th>
					      <th scope="col">FECHA</th>
					      <th scope="col">Opciones</th>
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