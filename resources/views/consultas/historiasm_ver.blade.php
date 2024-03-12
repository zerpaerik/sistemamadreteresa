<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Historia Clínica | Admin</title>
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
            <h1 class="m-0 text-dark">Historia de Paciente</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Historia</li>
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
              <!-- /.card-header -->
              <!-- form start -->


              <div class="card-body">
              <label for="exampleInputEmail1" style="margin-left:25px;margin-top: 10px;">DATOS DE PACIENTE</label>

              <div class="row" style="margin-left:20px;margin-top: 10px;">
                     <div class="col-md-3">
                    <label for="exampleInputEmail1">NOMBRES Y APELLIDOS</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" disabled id="nombre" value="{{$paciente->apellidos.' '.$paciente->nombres}} " name="gestas" placeholder="">
                   </div>

                   <div class="col-md-3">
                    <label for="exampleInputEmail1">DNI:</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" disabled id="nombre" value="{{$paciente->dni}} " name="gestas" placeholder="">
                   </div>

                   <div class="col-md-3">
                    <label for="exampleInputEmail1">FECHA DE NACIMIENTO:</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" disabled id="nombre" value="{{$paciente->fechanac}} " name="gestas" placeholder="">
                   </div>
                  
                   <div class="col-md-3">
                    <label for="exampleInputEmail1">TELÉFONO:</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" disabled id="nombre" value="{{$paciente->telefono}} " name="gestas" placeholder="">
                   </div>
                  
                  
                  
                    </div>

                    <div class="row" style="margin-left:20px;margin-top: 10px;">
                   

                   <div class="col-md-3">
                    <label for="exampleInputEmail1">ATENDIDO POR:</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" disabled id="nombre" value="{{$hist->name.' '.$hist->lastname}} " name="gestas" placeholder="">
                   </div>
                  
                  
                    </div>
                  
              
                    
                   <label for="exampleInputEmail1" style="margin-left:25px;margin-top: 20px;">HISTORIAL BASE</label>
                   
            <div class="row" style="margin-left:20px;margin-top: 10px;">
                     <div class="col-md-4">
                    <label for="exampleInputEmail1">Antecedentes Personales</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="ant_per" placeholder="" disabled value="{{$historias_base->ant_pers}}">
                   </div>
                   <div class="col-md-4">
                    <label for="exampleInputEmail1">Antecedentes Familiares</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="ant_fam" placeholder="" disabled value="{{$historias_base->ant_fam}}">
                   </div>
                   <div class="col-md-4">
                    <label for="exampleInputEmail1">Antecedentes Quirurgicos</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="ant_qui" placeholder="" disabled value="{{$historias_base->ant_qui}}">
                   </div>
                    </div>

                    <div class="row" style="margin-left:20px;margin-top: 10px;">
                     <div class="col-md-4">
                    <label for="exampleInputEmail1">Tratamiento Habitual</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="tto_hab" placeholder="" disabled value="{{$historias_base->tto_hab}}">
                   </div>
                   <div class="col-md-4">
                    <label for="exampleInputEmail1">Hospitalizaciones Previas</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="hosp" placeholder="" disabled value="{{$historias_base->hosp_prev}}">
                   </div>
                   <div class="col-md-4">
                    <label for="exampleInputEmail1">Alergias</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="alerg" placeholder="" disabled value="{{$historias_base->alerg}}">
                   </div>
                    </div>

                
                    </div>

                    <div class="card-body" style="margin-left:20px;margin-top: 10px;">
                    <label for="exampleInputEmail1">Fecha: {{$hist->created_at }}</label>

                    <div class="row">
                     <div class="col-md-12">
                    <label for="exampleInputEmail1">Enfermedad Actual</label>
                    <textarea class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" rows="2"  name="enf_act" placeholder="Enfermedad Actual" disabled>{{$hist->enf_act}}</textarea>

                   </div>
                   </div>
                   <br>


                   <div class="row">
                     <div class="col-md-12">
                    <label for="exampleInputEmail1">Tratamiento Actual</label>
                    <textarea class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" rows="2"  name="tto_act" placeholder="Trat Actual" disabled> {{$hist->tto_act}}</textarea>

                   </div>
                   </div>

                   <br>

                    <div class="row">
                     <div class="col-md-2">
                    <label for="exampleInputEmail1">PA</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="pa" placeholder="" disabled value="{{$hist->pa}}">
                  
                  </div>
                  <div class="col-md-2">
                    <label for="exampleInputEmail1">FC</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="fc" placeholder="" disabled value="{{$hist->fc}}">
                   </div>
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">FR</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="fr" placeholder="" disabled value="{{$hist->fr}}">
                   </div>
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">T</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="t" placeholder="" disabled value="{{$hist->t}}">
                   </div>
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">Peso</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="peso" placeholder="" disabled value="{{$hist->peso}}">
                   </div>
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">Talla</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="talla" placeholder="" disabled value="{{$hist->talla}}">
                   </div>
                  
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">SAT 02</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="sat" placeholder="" disabled value="{{$hist->sat}}">
                   </div>
                  
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">Glassgow</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="glass" placeholder="" disabled value="{{$hist->glass}}">
                   </div>

                   <div class="col-md-2">
                    <label for="exampleInputEmail1">Piel</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="piel" placeholder="" disabled value="{{$hist->piel}}">
                   </div>

                   <div class="col-md-2">
                    <label for="exampleInputEmail1">Mamas</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="mamas" placeholder="" disabled value="{{$hist->mamas}}">
                   </div>

                   <div class="col-md-2">
                    <label for="exampleInputEmail1">CardioPulmonar</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="cardio" placeholder="" disabled value="{{$hist->cardio}}">
                   </div>

                   <div class="col-md-2">
                    <label for="exampleInputEmail1">Abdomen</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="abdo" placeholder="" disabled value="{{$hist->abdo}}">
                   </div>

                   <div class="col-md-2">
                    <label for="exampleInputEmail1">Genitales</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="gen" placeholder="" disabled value="{{$hist->gen}}">
                   </div>

                   <div class="col-md-2">
                    <label for="exampleInputEmail1">Extremidades</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="extrem" placeholder="" disabled value="{{$hist->extrem}}">
                   </div>
    
                    </div>
    
                    <br>
                    <div class="row">
                     <div class="col-md-6">
                    <label for="exampleInputEmail1">Presunción Diagnóstica</label>
                    <textarea class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" rows="2"  name="pre_diag" placeholder="Presunción Diagnóstica" disabled>{{$hist->diag1}}</textarea>

                   </div>
                   <div class="col-md-6">
                    <label for="exampleInputEmail1">CIE X</label>
                    <textarea class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" rows="2"  name="pre_diag" placeholder="Presunción Diagnóstica" disabled>{{$hist->cie1}}</textarea>
          
                    </div>
                
                    </div>
                    <br>
                    <div class="row">
                     <div class="col-md-6">
                    <label for="exampleInputEmail1">Presunción Diagnóstica</label>
                    <textarea class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" rows="2"  name="diag_fin" placeholder="Diagnóstico Final" disables>{{$hist->diag1}}</textarea>

                   </div>
                   <div class="col-md-6">
                    <label for="exampleInputEmail1">CIE X</label>
                    <textarea class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" rows="2"  name="pre_diag" placeholder="Presunción Diagnóstica" disabled>{{$hist->cie2}}</textarea>
        
                    </div>
                    </div>
                    <br>
                
              
                   <div class="row">
                     <div class="col-md-12">
                    <label for="exampleInputEmail1">Plan de Tratamiento</label>
                    <textarea class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" rows="3"  name="trata" placeholder="Plan de Tratamiento" disabled>{{$hist->trata}}</textarea>

                  </div>
                    </div>
                    <br>
                   <div class="row">
                     <div class="col-md-12">
                    <label for="exampleInputEmail1">Observaciones</label>
                    <textarea class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" rows="3"  name="observ" disabled>{{$hist->obser}}</textarea>
                   </div>
                    </div>


   
                  
                   
            
                   
                <!-- /.card-body -->

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
<!-- page script -->

</body>
</html>