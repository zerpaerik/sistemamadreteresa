<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MadreTeresa | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<!-- DataTables -->
<link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
  @include('layouts.navbar')
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    @include('layouts.sidebar')
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Guardar Informe</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Informe de Servicio</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Agregar</h3>
              </div>
              @include('flash-message')

              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="resultados_guardar" enctype="multipart/form-data">
					{{ csrf_field() }}                
                    <div class="card-body">
                    <div class="row">
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Adjunte el Informe</label>
                    <input type="file"  class="form-control" id="nombre" name="informe" placeholder="Nombre">
                  </div>

                  <input type="hidden" name="id" value="{{$resultados->id}}">
                 
                  </div>

                  @if($resultados->tipo_atencion == 3)
                  <div class="row">
            <label class="col-sm-6 alert"><i class="fa fa-tasks" aria-hidden="true" style="margin-top: 15px;"></i> Materiales Seleccionadas</label>
            <!-- sheepIt Form -->
            <div id="servicios" class="embed ">
            
                <!-- Form template-->
                <div id="servicios_template" class="template row">

                <label for="servicios_#index#_servicio" class="col-sm-3 control-label" style="margin-left: 20px;">Placas Disponibles</label>
                    <div class="col-sm-4">
                      <select id="servicios_#index#_servicio" name="id_servicio[servicios][#index#][servicio]" class="selectServ form-control">
                      <option value="1">Seleccionar</option>
                        @foreach($placas as $ot)
                          <option value="{{$ot->id}}">
                            {{$ot->nombre}} 
                          </option>
                        @endforeach
                      </select>
                    </div>

                    <label for="servicios_#index#_monto" class="col-sm-2 control-label">Cantidad</label>
                    <div class="col-sm-2">
                      <input id="servicios_#index#_montoHidden" name="monto_h[servicios][#index#][montoHidden]" class="text" type="hidden" value="">

                      <input id="servicios_#index#_monto" name="monto_s[servicios][#index#][monto]" type="number" class="number form-control monto" onchange="sumar();"  placeholder="Cantidad"  data-toggle="tooltip" data-placement="bottom" title="Precio">
                    </div>

                  
                    


                    <a id="servicios_remove_current" style="cursor: pointer;"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                </div>
                <!-- /Form template-->
                
                <!-- No forms template -->
                <div id="servicios_noforms_template" class="noItems col-sm-12 text-center">Ningún Material</div>
                <!-- /No forms template-->
                
                <!-- Controls -->
                <div id="servicios_controls" class="controls col-sm-11 col-sm-offset-1">
                    <div id="servicios_add" class="btn btn-default form add"><a><span><i class="fa fa-plus-circle"></i> Agregar Material</span></a></div>
                </div>
                <!-- /Controls -->
                
            </div>
            <!-- /sheepIt Form --> 
          </div>
                  
                  @endif
              
                  <br>
                  

                  

        
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

         
            <!-- /.card -->

           
           
               


           
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    

  <!-- /.content-wrapper -->
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script src="../../plugins/sheepit/jquery.sheepItPlugin.min.js"></script>

<!-- page script -->

<script language="javascript">

function disableEnterKey(e) 
{ 
  var key; 
  if(window.event) 
     key = window.event.keyCode; 
   else key = e.which; //firefox 
   return (key != 13); 
  }

</script>


<script type="text/javascript">
      $(document).ready(function(){
        $('#el2').on('change',function(){
          var link;
          if ($(this).val() == 1) {
            link = '/atenciones/personal/';

          }else if ($(this).val() == 2) {
            link = '/atenciones/profesionales/';
          } else {
		    link = '/atenciones/particular/';
		  }

          $.ajax({
                 type: "get",
                 url:  link,
                 success: function(a) {
                    $('#siniestro').html(a);
                 }
          });

        });
        

      });
       
    </script>



<script type="text/javascript">
  $(document).ready(function() {
    var total = 0;

    $(".monto, .montol, .montop").keyup(function(event) {
      sumar();
    });



var botonDisabled = true;

    // Main sheepIt form
    var phonesForm = $("#servicios").sheepIt({
        separator: '',
        allowRemoveCurrent: true,
        allowAdd: true,
        allowRemoveAll: true,
        allowRemoveLast: true,

        // Limits
        maxFormsCount: 10,
        minFormsCount: 1,
        iniFormsCount: 0,

        removeAllConfirmationMsg: 'Seguro que quieres eliminar todos?',
        afterRemoveCurrent: function(source, event){
          const $abono = document.getElementById('abono');
         // alert(abono.value);
        /*  let subtotal = 0;
          let subtotall = 0;
          const $resta = document.getElementById('resta');
          [ ...document.getElementsByClassName( "abono" ) ].forEach( function ( element ) {
            if(element.value !== '') {
              subtotal += parseFloat(element.value);
            }
          });
          [ ...document.getElementsByClassName( "monto" ) ].forEach( function ( element ) {
            if(element.value !== '') {
              subtotall += parseFloat(element.value);
            }
          });

         alert(subtotall);*/

          //alert(subtotal - resta.value);
         /* const $resta = document.getElementById('resta');
        //  console.log(subtotal);
          $resta.value = total.value - 0;
         // sumar_ab();*/

        }
    });

    var phonesForm = $("#ecografias").sheepIt({
        separator: '',
        allowRemoveCurrent: true,
        allowAdd: true,
        allowRemoveAll: true,
        allowRemoveLast: true,

        // Limits
        maxFormsCount: 10,
        minFormsCount: 1,
        iniFormsCount: 0,

        removeAllConfirmationMsg: 'Seguro que quieres eliminar todos?',
        afterRemoveCurrent: function(source, event){
        }
    });

    var phonesForm = $("#rayos").sheepIt({
        separator: '',
        allowRemoveCurrent: true,
        allowAdd: true,
        allowRemoveAll: true,
        allowRemoveLast: true,

        // Limits
        maxFormsCount: 10,
        minFormsCount: 1,
        iniFormsCount: 0,

        removeAllConfirmationMsg: 'Seguro que quieres eliminar todos?',
        afterRemoveCurrent: function(source, event){
        }
    });

    var phonesForm = $("#salud").sheepIt({
        separator: '',
        allowRemoveCurrent: true,
        allowAdd: true,
        allowRemoveAll: true,
        allowRemoveLast: true,

        // Limits
        maxFormsCount: 10,
        minFormsCount: 1,
        iniFormsCount: 0,

        removeAllConfirmationMsg: 'Seguro que quieres eliminar todos?',
        afterRemoveCurrent: function(source, event){

        }
    });

    
    var phonesForm = $("#analisis").sheepIt({
        separator: '',
        allowRemoveCurrent: true,
        allowAdd: true,
        allowRemoveAll: true,
        allowRemoveLast: true,

        // Limits
        maxFormsCount: 10,
        minFormsCount: 1,
        iniFormsCount: 0,

        removeAllConfirmationMsg: 'Seguro que quieres eliminar todos?',
        afterRemoveCurrent: function(source, event){
        }
    });

    var phonesForm = $("#paquetes").sheepIt({
        separator: '',
        allowRemoveCurrent: true,
        allowAdd: true,
        allowRemoveAll: true,
        allowRemoveLast: true,

        // Limits
        maxFormsCount: 10,
        minFormsCount: 1,
        iniFormsCount: 0,

        removeAllConfirmationMsg: 'Seguro que quieres eliminar todos?',
        afterRemoveCurrent: function(source, event){

        }
    });

  });





</script>




</body>
</html>