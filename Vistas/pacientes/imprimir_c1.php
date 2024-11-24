<link href="https://getbootstrap.com/docs/4.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<page backtop="15mm" backbottom="15mm" backleft="15mm" backright="15mm" style="font-size: 12pt; font-family: arial; position: relative;">
    
    <div>
        <h1 class="h2">Reportes Capital Por Cliente</h1>
    </div>
    <div class="container-fluid">
          	<div class="row">
          		<div class="col-sm-12 table-responsive">
                    <table class="table table-hover ">
                        <thead class="bg-warning">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NOMBRE</th>
                                <th scope="col">INTERES</th>
                                <th scope="col">CAPITAL</th>
                                <th scope="col">FECHA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php echo $tabla;?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>TOTAL INTERESES: </td>
                                <td><?php echo $sum_intereses;?></td>
                                <td>TOTAL CAPITAL: </td>
                                <td><?php echo $sum_capital;?></td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center text-light ">
                <hr>
                    <h6 class="">Derechos Reservados &#9400 Copyright - Desarrollado por SoyBraulioDev - PrestaFacil Web</h6>
                <hr>
                </div>
            </div>
    </div>

    </page>
    <script>
              window.print();
    </script>