    <br><br><br><br>
    <div class="container-fluid <?php echo $color_menu; ?> mx-auto fixed-bottom">
      <div class="row">
        <div class="col-sm-12 text-center text-light ">
          <hr>
          <h6 class="">Derechos Reservados &#9400 Copyright - Desarrollado por SoyBraulioDev </h6>
          <hr>
        </div>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="https://getbootstrap.com/docs/4.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

      
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
        <script src="dist/js/dashboard.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

         <!-- Complemento para Exportar Datos -->
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
      <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
      <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
      <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js "></script>
      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

      <!-- offline javascripts-->
      <script src="dist/js/jquery.slim.min.js"></script>


      <script src="dist/js/feather.min.js"></script>
      <script src="dist/js/jquery.dataTables.min.js"></script>
      <script src="dist/js/dataTables.buttons.min.js"></script>
      <script src="dist/js/buttons.flash.min.js"></script>
      <script src="dist/js/jszip.min.js"></script>
      <script src="dist/js/pdfmake.min.js"></script>
      <script src="dist/js/vfs_fonts.js"></script>
      <script src="dist/js/buttons.html5.min.js"></script>
      <script src="dist/js/buttons.print.min.js"></script>

      <script src="dist/js/gijgo.min.js"></script>
      <link href="dist/css/gijgo.min.css" rel="stylesheet" type="text/css" />


    <script>
    $(document).ready( function () {
        $('#myTable').DataTable({
          
          dom: 'lBfrtip',
          buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
          ]
        });
    } );
    
    </script>
  </body>
</html>