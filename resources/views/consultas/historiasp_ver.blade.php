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
              <label for="exampleInputEmail1" style="margin-left:28px;" >DATOS DE PACIENTE</label>

              <div class="row" style="margin-left:20px;">
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

                    <div class="row" style="margin-left:20px;">
                   

                   <div class="col-md-3">
                    <label for="exampleInputEmail1">ATENDIDO POR:</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" disabled id="nombre" value="{{$hist->name.' '.$hist->lastname}} " name="gestas" placeholder="">
                   </div>
                  
                  
                    </div>
                  
              
                    

                   <label for="exampleInputEmail1" style="margin-left:20px;margin-top: 10px;">ANTECEDENTES FAMILIARES</label>
                    <div class="row" style="margin-left:20px;margin-top: 10px;">
                    <div class="col-md-4">
                    <label for="exampleInputEmail1">Maternos</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="ant_mat" placeholder="" disabled value="{{$historias_base->fam_mat}}">
                    </div>
                    <div class="col-md-4">
                    <label for="exampleInputEmail1">Paternos</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="ant_pad" placeholder="" disabled value="{{$historias_base->fam_pad}}">
                    </div>
                    <div class="col-md-4">
                    <label for="exampleInputEmail1">Hermanos</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="ant_her" placeholder="" disabled value="{{$historias_base->fam_her}}">
                    </div>
                    </div>

                    <label for="exampleInputEmail1" style="margin-left:20px;margin-top: 10px;">ANTECEDENTES PERSONALES NO PATOLÒGICOS</label>
                    <div class="row" style="margin-left:20px;margin-top: 10px;">
                    <div class="col-md-4">
                    <label for="exampleInputEmail1">Embarazo Nùmero</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="emb_num" placeholder="" disabled value="{{$historias_base->emb_num}}">
                    </div>
                    <div class="col-md-4">
                    <label for="exampleInputEmail1">Normal</label>
                    <select class="form-control" name="emb_normal">
                    <option value="SI">SI</option>
                    <option value="NO">NO</option>
                    </select>
                    </div>
                    <div class="col-md-4">
                    <label for="exampleInputEmail1">Causa</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="causa_emb" placeholder="" disabled value="{{$historias_base->causa_emb}}">
                    </div>
                    </div>

                    <div class="row" style="margin-left:20px;margin-top: 10px;">
                    <div class="col-md-4">
                    <label for="exampleInputEmail1">Gestaciòn</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="gest_sem" placeholder="" disabled value="{{$historias_base->sem_gest}}">SEM
                    </div>
                    <div class="col-md-4">
                    <label for="exampleInputEmail1">Parto Eutòcito</label>
                    <select class="form-control" name="part_eut">
                    <option value="SI">SI</option>
                    <option value="NO">NO</option>
                    </select>
                    </div>
                    <div class="col-md-4">
                    <label for="exampleInputEmail1">Causa</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="causa_eut" placeholder="" disabled value="{{$historias_base->causa_eut}}">
                    </div>
                    </div>

                    <div class="row" style="margin-left:20px;margin-top: 10px;">
                    <div class="col-md-4">
                    <label for="exampleInputEmail1">Ruptuta Prematura de Membranas</label>
                    <select class="form-control" name="rupt_mem">
                    <option value="SI">SI</option>
                    <option value="NO">NO</option>
                    </select>                   
                    </div>

                    <div class="col-md-4">
                    <label for="exampleInputEmail1">Causa</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="causa_rupt" placeholder="" disabled value="{{$historias_base->causa_rupt}}">
                    </div>
                    </div>

                    <div class="row" style="margin-left:20px;margin-top: 10px;">
                    <div class="col-md-2">
                    <label for="exampleInputEmail1">Peso</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="peso" placeholder="" disabled value="{{$historias_base->peso}}">GR
                    </div>
                    <div class="col-md-2">
                    <label for="exampleInputEmail1">Talla</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="talla" placeholder="" disabled value="{{$historias_base->talla}}">CM

                    </div>
                    <div class="col-md-2">
                    <label for="exampleInputEmail1">PC</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="pc" placeholder="" disabled value="{{$historias_base->pc}}">
                    </div>
                    <div class="col-md-2">
                    <label for="exampleInputEmail1">PA</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="pa" placeholder="" disabled value="{{$historias_base->pa}}">
                    </div>
                    <div class="col-md-2">
                    <label for="exampleInputEmail1">Apgar</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="apgar" placeholder="" disabled value="{{$historias_base->apgar}}">
                    </div>
                    </div>

                    <div class="row" style="margin-left:20px;margin-top: 10px;">
                    <div class="col-md-2">
                    <label for="exampleInputEmail1">Apnea Neonatal</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="apnea" placeholder="" disabled value="{{$historias_base->apnea}}">
                    </div>
                    <div class="col-md-2">
                    <label for="exampleInputEmail1">Ictericia</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="icte" placeholder="" disabled value="{{$historias_base->ictericia}}">

                    </div>
                    <div class="col-md-2">
                    <label for="exampleInputEmail1">Hemorragia</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="hemo" placeholder="" disabled value="{{$historias_base->hemo}}"> 
                    </div>
                    <div class="col-md-2">
                    <label for="exampleInputEmail1">Convulsiones</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="conv" placeholder="" disabled value="{{$historias_base->convul}}">
                    </div>
                    <div class="col-md-2">
                    <label for="exampleInputEmail1">Otros</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="otros" placeholder="" disabled value="{{$historias_base->otros}}">
                    </div>
                    </div>


                    <label for="exampleInputEmail1" style="margin-left:20px;margin-top: 10px;">ANTECEDENTES PATOLÒGICOS</label>
                    <div class="row" style="margin-left:20px;margin-top: 10px;">
                    <div class="col-md-3">
                    <label for="exampleInputEmail1">Infecciones</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="infecciones" placeholder="" disabled value="{{$historias_base->infecciones}}">
                    </div>
                    <div class="col-md-3">
                    <label for="exampleInputEmail1">Traumatismos</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="trauma" placeholder="" disabled value="{{$historias_base->trauma}}">
                    </div>
                    <div class="col-md-3">
                    <label for="exampleInputEmail1">Quirurgicos</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="quirur" placeholder="" disabled value="{{$historias_base->quirur}}">
                    </div>
                    <div class="col-md-3">
                    <label for="exampleInputEmail1">Hospitalizaciones</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="hospi" placeholder="" disabled value="{{$historias_base->hospi}}">
                    </div>

                    </div>
                    <div class="row" style="margin-left:20px;margin-top: 10px;">
                    <div class="col-md-3">
                    <label for="exampleInputEmail1">Alergias</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="alerg" placeholder="" disabled value="{{$historias_base->alerg}}">
                    </div>
                    <div class="col-md-3">
                    <label for="exampleInputEmail1">Transfusiones</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="transf" placeholder="" disabled value="{{$historias_base->transfusionez}}">
                    </div>
                    <div class="col-md-3">
                    <label for="exampleInputEmail1">Otros</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="otros1" placeholder="" disabled value="{{$historias_base->otros_pat}}">
                    </div>


                    </div>



                   <div class="card-body">
                    <label for="exampleInputEmail1">Fecha: {{$hist->created_at }}</label>

                    <div class="row">
                     <div class="col-md-2">
                    <label for="exampleInputEmail1">Lactancia materna</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="dur_lact" placeholder="" disabled value="{{$hist->lact}}">
                  
                  </div>
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">Duraciòn</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="dur_lact" placeholder="" disabled value="{{$hist->trata}}">
                   </div>
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">Ablantaciòn</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="ablac" placeholder="" disabled value="{{$hist->ablac}}">
                   </div>
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">Destete</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="dest" placeholder="" disabled value="{{$hist->dest}}">
                   </div>
                   <div class="col-md-3">
                    <label for="exampleInputEmail1">Alimentaciòn Actual</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="alim" placeholder="" disabled value="{{$hist->alim}}">
                   </div>
    
                    </div>
                    <br>
                   <label for="exampleInputEmail1">Inmunizaciones</label>
                   <div class="row">
                     <div class="col-md-2">
                    <label for="exampleInputEmail1">Poliomelitis</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="alim" placeholder="" disabled value="{{$hist->polio}}">

                   
                   </div>
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">Rotavirus</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="alim" placeholder="" disabled value="{{$hist->rota}}">

                   </div>
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">DPT</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="alim" placeholder="" disabled value="{{$hist->dpt}}">

                   </div>
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">Influenz</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="alim" placeholder="" disabled value="{{$hist->influ}}">

                   </div>
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">H Influe TipoB</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="alim" placeholder="" disabled value="{{$hist->hinflu}}">

                   </div>
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">Sarampion</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="alim" placeholder="" disabled value="{{$hist->saram}}">

                   </div>
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">Hepatitis B</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="alim" placeholder="" disabled value="{{$hist->hb}}">

                   </div>
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">Rubeola</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="alim" placeholder="" disabled value="{{$hist->rube}}">

                   </div>
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">Neumococo</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="alim" placeholder="" disabled value="{{$hist->neumoco}}">

                   </div>
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">Parotiditis</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="alim" placeholder="" disabled value="{{$hist->paro}}">

                   </div>
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">BCG</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="alim" placeholder="" disabled value="{{$hist->bcg}}">

                   </div>
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">Varicela</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="alim" placeholder="" disabled value="{{$hist->vari}}">

                   </div>
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">Toxoide Tetànico</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="alim" placeholder="" disabled value="{{$hist->tox}}">

                   </div>
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">Hepatitis A</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="alim" placeholder="" disabled value="{{$hist->ha}}">

                   </div>
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">DT</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="alim" placeholder="" disabled value="{{$hist->dt}}">

                   </div>
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">VPH</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="alim" placeholder="" disabled value="{{$hist->vph}}">

                   </div>
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">Gamma Globulina</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="alim" placeholder="" disabled value="{{$hist->gamma}}">

                   </div>
                    </div>
                    <br>


                    <label for="exampleInputEmail1">Desarrollo Psicomotor</label>
                   <div class="row">
                  
                   <div class="col-md-3">
                    <label for="exampleInputEmail1">Siguio objetos</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="siguio" placeholder="" disabled value="{{$hist->siguio}}">
                   </div>
                   <div class="col-md-3">
                    <label for="exampleInputEmail1">Sostuvo la Cabeza</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="sos_cab" placeholder="" disabled value="{{$hist->sost}}">
                   </div>
                   <div class="col-md-3">
                    <label for="exampleInputEmail1">Se sento solo</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="sento" placeholder="" disabled value="{{$hist->sento}}">
                   </div>
                   <div class="col-md-3">
                    <label for="exampleInputEmail1">Primeras Palabras</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="prim_pal" placeholder="" disabled value="{{$hist->prim_pal}}">
                   </div>
                   <div class="col-md-3">
                    <label for="exampleInputEmail1">Sonrio</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="sonrio" placeholder="" disabled value="{{$hist->sonrio}}">
                   </div>

                   <div class="col-md-3">
                    <label for="exampleInputEmail1">Camino</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="camino" placeholder="" disabled value="{{$hist->camino}}">
                   </div>

                   <div class="col-md-3">
                    <label for="exampleInputEmail1">Contro de esfinteres</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="esfint" placeholder="" disabled value="{{$hist->esfint}}">
                   </div>

                   <div class="col-md-3">
                    <label for="exampleInputEmail1">Alteraciòn del lenguaje</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="esfint" placeholder="" disabled value="{{$hist->alt_leng}}">
       
                </div>
                <div class="col-md-3">
                    <label for="exampleInputEmail1">Cuales?</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="cual_alt" placeholder="" disabled value="{{$hist->cual_alt}}">
                   </div>

                   <div class="col-md-3">
                    <label for="exampleInputEmail1">Datos anorma desarrollo</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="datos_anorm" placeholder="" disabled value="{{$hist->datos}}">
                   </div>
                    </div>
                    <br>
                   <label for="exampleInputEmail1">Exploraciòn Fìsica</label>
                   <div class="row">
                     <div class="col-md-2">
                    <label for="exampleInputEmail1">Peso</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="peso" placeholder="" disabled value="{{$hist->peso}}">
                   </div>
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">Talla</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="talla" placeholder="" disabled value="{{$hist->talla}}">
                   </div>
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">P Cefàlico</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="pcefa" placeholder="" disabled value="{{$hist->pcefa}}">
                   </div>
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">P Brazo</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="pbrazo" placeholder="" disabled value="{{$hist->pbra}}">
                   </div>
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">P Pierna</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="ppier" placeholder="" disabled value="{{$hist->ppier}}">
                   </div>
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">IMC</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="imc" placeholder="" disabled value="{{$hist->imc}}">
                   </div>
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">PA</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="pa" placeholder="" disabled value="{{$hist->pa}}">
                   </div>
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">T</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="t" placeholder="" disabled value="{{$hist->t}}">
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
                    <label for="exampleInputEmail1">SAT 02</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="sat" placeholder="" disabled value="{{$hist->sat}}">
                   </div>
                   <div class="col-md-2">
                    <label for="exampleInputEmail1">GLASSGOW</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="glass" placeholder="" disabled value="{{$hist->glas}}">
                   </div>
                   <div class="col-md-6">
                    <label for="exampleInputEmail1">Piel</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="piel" placeholder="" disabled value="{{$hist->piel}}">
                   </div>
                   <div class="col-md-6">
                    <label for="exampleInputEmail1">Cabeza</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="cabe" placeholder="" disabled value="{{$hist->cabeza}}">
                   </div>
                   <div class="col-md-6">
                    <label for="exampleInputEmail1">Ojos</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="ojos" placeholder="" disabled value="{{$hist->ojos}}">
                   </div>

                   <div class="col-md-6">
                    <label for="exampleInputEmail1">Oidos</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="oidos" placeholder="" disabled value="{{$hist->oidos}}">
                   </div>

                   <div class="col-md-6">
                    <label for="exampleInputEmail1">Nariz</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="nariz" placeholder="" disabled value="{{$hist->nariz}}">
                   </div>
                   <div class="col-md-6">
                    <label for="exampleInputEmail1">Boca/Faringe</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="boca" placeholder="" disabled value="{{$hist->boca}}">
                   </div>
                   <div class="col-md-6">
                    <label for="exampleInputEmail1">Cuello</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="cuello" placeholder="" disabled value="{{$hist->cuello}}">
                   </div>
                   <div class="col-md-6">
                    <label for="exampleInputEmail1">Toral</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="toral" placeholder=""disabled value="{{$hist->toral}}">
                   </div>
                   <div class="col-md-6">
                    <label for="exampleInputEmail1">Mamas</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="mamas" placeholder="" disabled value="{{$hist->mamas}}">
                   </div>
                   <div class="col-md-6">
                    <label for="exampleInputEmail1">Cardiopulmonar</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="cardio" placeholder="" disabled value="{{$hist->cardio}}">
                   </div>
                   <div class="col-md-6">
                    <label for="exampleInputEmail1">Abdomen</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="abdo" placeholder="" disabled value="{{$hist->abdomen}}">
                   </div>
                   <div class="col-md-6">
                    <label for="exampleInputEmail1">Genitales</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="geni" placeholder="" disabled value="{{$hist->gen}}">
                   </div>
                   <div class="col-md-6">
                    <label for="exampleInputEmail1">Ano y Recto</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="ano" placeholder="" disabled value="{{$hist->ano}}">
                   </div>
                   <div class="col-md-6">
                    <label for="exampleInputEmail1">Extremidades</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="extrem" placeholder="" disabled value="{{$hist->extrem}}">
                   </div>
                   <div class="col-md-6">
                    <label for="exampleInputEmail1">Columna Vertebral</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="column" placeholder="" disabled value="{{$hist->column}}">
                   </div>
                   <div class="col-md-6">
                    <label for="exampleInputEmail1">Neurològico</label>
                    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="neuro" placeholder="" disabled value="{{$hist->neuro}}">
                   </div>
    
                    </div>
                    <br>
                  
                    <br>
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