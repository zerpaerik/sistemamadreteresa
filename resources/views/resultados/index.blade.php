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
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 

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
            <h1 class="m-0 text-dark">Resultados Por Hacer Servicio</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Resultados Por Hacer Servicio</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    @include('flash-message')
      <div class="container-fluid">
      <div class="card">
              <div class="card-header">
              <form method="get" action="resultados">					
                  <label for="exampleInputEmail1">Filtros de Busqueda</label>

                    <div class="row">
                  <div class="col-md-3">
                    <label for="exampleInputEmail1">Fecha Inicio</label>
                    <input type="date" class="form-control" value="{{$f1}}" name="inicio">
                  </div>

                  <div class="col-md-3">
                    <label for="exampleInputEmail1">Fecha Fin</label>
                    <input type="date" class="form-control" value="{{$f2}}" name="fin">
                  </div>
                  
                
                 
                  <div class="col-md-2" style="margin-top: 30px;">
                  <button type="submit" class="btn btn-primary">Buscar</button>

                  </div>
                  </form>
              
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>id</th>
                    <th>Fecha</th>
                    <th>Pac.</th>
                    <th>Origen</th>
                    <th>Det.</th>
                    <th>Informe.</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>

                  @foreach($resultados as $an)
                  <tr>
                  <td>{{$an->id}}</td>
                   <td>{{$an->created_at}}</td>
                    @if($an->monto > $an->abono)
                    <td style="background: yellow;" title="ESTE PACIENTE TIENE DEUDA PENDIENTE">{{$an->apellidos}} {{$an->nombres}}</td>
                    @else
                    <td>{{$an->apellidos}} {{$an->nombres}}</td>
                    @endif                  
                    <td>{{$an->lastname}} {{$an->name}}</td>
                    <td>{{$an->servicio}}</td>
                    <td>

                  

                      @if($an->informe) 

                      <a href="resultados-desoc-{{$an->id}}" class="btn btn-danger">Reversar</a>
	
                      <a href="/modelo-informe-{{$an->id}}-{{$an->informe}}" class="btn btn-primary" target="_blank">Descargar Modelo</a>

                      <a href="resultados-guardar-{{$an->id}}" class="btn btn-success">Adjuntar Informe</a>


                      @else



                        <form action="{{'resultados-asoc-' .$an->id}}" method="get">
                                    <select class="form-control" name="informe">
                                    <option value="">Seleccione</option>
                                    <option value="AB EST G I, HEPATOMEGALIA.docx">AB EST G I, HEPATOMEGALIA</option>
<option value="AB EST G I, LITASIS VB AGUDO.docx">AB EST G I, LITASIS VB AGUDO</option>
<option value="AB EST G I, LITASIS VB NO AGUDO (CRONICO).docx">AB EST G I, LITASIS VB NO AGUDO (CRONICO)</option>
<option value="AB EST G I, POLIPO VB.docx">AB EST G I, POLIPO VB</option>
<option value="AB EST G I, POLIPOSIS VB.docx">AB EST G I, POLIPOSIS VB</option>
<option value="AB EST G I.docx">AB EST G I</option>
<option value="AB EST G II, HEPATOMEGALIA.docx">AB EST G II, HEPATOMEGALIA</option>
<option value="AB EST G II, LITIASIS VB AGUDO.docx">AB EST G II, LITIASIS VB AGUDO</option>
<option value="AB EST G II, LITIASIS VB NO AGUDO.docx">AB EST G II, LITIASIS VB NO AGUDO</option>
<option value="AB EST G II, POLIPO VB.docx">AB EST G II, POLIPO VB</option>
<option value="AB EST G II, POLIPOSIS VB.docx">AB EST G II, POLIPOSIS VB</option>
<option value="AB EST G II.docx">AB EST G II</option>
<option value="AB HEPATOMEGALIA NIÑO.docx">AB HEPATOMEGALIA NIÑO</option>
<option value="AB HIG QUISTE COMPLEJO.docx">AB HIG QUISTE COMPLEJO</option>
<option value="AB HIG QUISTES SIMPLES.docx">AB HIG QUISTES SIMPLES</option>
<option value="AB LITASIS VB AGUDO.docx">AB LITASIS VB AGUDO</option>
<option value="AB LITASIS VB NO AGUDO (CRONICO).docx">AB LITASIS VB NO AGUDO (CRONICO)</option>
<option value="AB POLIPO VB.docx">AB POLIPO VB</option>
<option value="AB POLIPOSIS VB.docx">AB POLIPOSIS VB</option>
<option value="AB STATUS POST COLECISTECTOMIA.docx">AB STATUS POST COLECISTECTOMIA</option>
<option value="AB SUPERIOR NRML niño.docx">AB SUPERIOR NRML niño</option>
<option value="AB SUPERIOR NRML.docx">AB SUPERIOR NRML</option>
<option value="COLPOSCOPIA POSITIVA.docx">COLPOSCOPIA POSITIVA</option>
<option value="COLPOSCOPIA NEGATIVA.docx">COLPOSCOPIA NEGATIVA</option>
<option value="GIN EPI.docx">GIN EPI</option>
<option value="GIN NRML.docx">GIN NRML</option>
<option value="GIN POLIFOL, EPI.docx">GIN POLIFOL, EPI</option>
<option value="GIN POLIFOL.docx">GIN POLIFOL</option>
<option value="GIN QT COMPLEJO ENDOMETRIOMA.docx">GIN QT COMPLEJO ENDOMETRIOMA</option>
<option value="GIN QT SIMPLE.docx">GIN QT SIMPLE</option>
<option value="GIN TV ADENOMIOSIS.docx">GIN TV ADENOMIOSIS</option>
<option value="GIN TV DIU NRML.docx">GIN TV DIU NRML</option>
<option value="GIN TV DOPPLER MIOMATOSIS FIGO.docx">GIN TV DOPPLER MIOMATOSIS FIGO</option>
<option value="GIN TV DOPPLER.docx">GIN TV DOPPLER</option>
<option value="GIN TV INVOLUTIVO.docx">GIN TV INVOLUTIVO</option>
<option value="GIN TV MIOMATOSIS INTRAMURAL.docx">GIN TV MIOMATOSIS INTRAMURAL</option>
<option value="GIN TV MIOMATOSIS POLIMIOMATOSO.docx">GIN TV MIOMATOSIS POLIMIOMATOSO</option>
<option value="GIN TV MIOMATOSIS SUBMUCOSO.docx">GIN TV MIOMATOSIS SUBMUCOSO</option>
<option value="GIN TV MIOMATOSIS SUBSEROSO.docx">GIN TV MIOMATOSIS SUBSEROSO</option>
<option value="GIN TV NRML.docx">GIN TV NRML</option>
<option value="GIN TV POLIFOL, EPI.docx">GIN TV POLIFOL, EPI</option>
<option value="GIN TV POLIFOL.docx">GIN TV POLIFOL</option>
<option value="GIN TV POLIPO ENDOMETRIAL.docx">GIN TV POLIPO ENDOMETRIAL</option>
<option value="GIN TV PRODUCTOS RETENIDOS (INCOMPLETO).docx">GIN TV PRODUCTOS RETENIDOS (INCOMPLETO)</option>
<option value="GIN TV QT COMPLEJO ENDOMETRIOMA.docx">GIN TV QT COMPLEJO ENDOMETRIOMA</option>
<option value="GIN TV QT SIMPLE.docx">GIN TV QT SIMPLE</option>
<option value="GIN TV TERATOMA, OV POLIFOL.docx">GIN TV TERATOMA, OV POLIFOL</option>
<option value="MAMAS ECTASIA DUCTAL BILAT.docx">MAMAS ECTASIA DUCTAL BILAT</option>
<option value="MAMAS LESION NODULAR BIRADS 3.docx">MAMAS LESION NODULAR BIRADS 3</option>
<option value="MAMAS MASTITIS, QUISTES SIMPLES.docx">MAMAS MASTITIS, QUISTES SIMPLES</option>
<option value="MAMAS NM INFLAMATORIO, BIRADS 5.docx">MAMAS NM INFLAMATORIO, BIRADS 5</option>
<option value="MAMAS NODULO INTRADUCTAL BIRADS 4a,QT SIMPLES.docx">MAMAS NODULO INTRADUCTAL BIRADS 4a,QT SIMPLES</option>
<option value="MAMAS NRML.docx">MAMAS NRML</option>
<option value="MAMAS QUISTES SIMPLES.docx">MAMAS QUISTES SIMPLES</option>
<option value="OB GENETICA TAMIZAJE BICORIAL.docx">OB GENETICA TAMIZAJE BICORIAL</option>
<option value="OB GENETICA TAMIZAJE MONOCORIAL.docx">OB GENETICA TAMIZAJE MONOCORIAL</option>
<option value="OB GENETICA TAMIZAJE.docx">OB GENETICA TAMIZAJE</option>
<option value="OB II - III BI - BI.docx">OB II - III BI - BI</option>
<option value="OB II - III CORDON NUCAL UNICO.docx">OB II - III CORDON NUCAL UNICO</option>
<option value="OB II - III MONO - BI.docx">OB II - III MONO - BI</option>
<option value="OB II - III.docx">OB II - III</option>
<option value="OBST 4D + DOPPLER II - III TRIMESTRE.docx">OBST 4D + DOPPLER II - III TRIMESTRE</option>
<option value="OBST 4D II - III BI - BI.docx">OBST 4D II - III BI - BI</option>
<option value="OBST 4D II - III MONO - BI.docx">OBST 4D II - III MONO - BI</option>
<option value="OBST 4D II - III TRIMESTRE.docx">OBST 4D II - III TRIMESTRE</option>
<option value="OBST 5D + DOPPLER II - III TRIMESTRE.docx">OBST 5D + DOPPLER II - III TRIMESTRE</option>
<option value="OBST 5D II - III BI - BI.docx">OBST 5D II - III BI - BI</option>
<option value="OBST 5D II - III MONO - BI.docx">OBST 5D II - III MONO - BI</option>
<option value="OBST 5D II - III TRIMESTRE.docx">OBST 5D II - III TRIMESTRE</option>
<option value="OBST DOPPLER OBST II - III BI - BI.docx">OBST DOPPLER OBST II - III BI - BI</option>
<option value="OBST DOPPLER OBST II - III MONO - BI.docx">OBST DOPPLER OBST II - III MONO - BI</option>
<option value="OBST DOPPLER OBST RCIU ESTADIO 1.docx">OBST DOPPLER OBST RCIU ESTADIO 1</option>
<option value="OBST DOPPLER OBSTETRICO II - III.docx">OBST DOPPLER OBSTETRICO II - III</option>
<option value="OBST GENETICA TARDIA GEMELAR  BICORIAL.docx">OBST GENETICA TARDIA GEMELAR  BICORIAL</option>
<option value="OBST GENETICA TARDIA GEMELAR MONO -BI.docx">OBST GENETICA TARDIA GEMELAR MONO -BI</option>
<option value="OBST GENETICA TARDIA.docx">OBST GENETICA TARDIA</option>
<option value="OBST I EMBRION 6 - 7 ss.docx">OBST I EMBRION 6 - 7 ss</option>
<option value="OBST I EMBRION 8 - 9 ss.docx">OBST I EMBRION 8 - 9 ss</option>
<option value="OBST I FETO 10 - 11 ss.docx">OBST I FETO 10 - 11 ss</option>
<option value="OBST I FETO 12 - 14 ss.docx">OBST I FETO 12 - 14 ss</option>
<option value="OBST I TV DETENIDO LCN.docx">OBST I TV DETENIDO LCN</option>
<option value="OBST I TV GEMELAR BI BI 8 - 9 ss.docx">OBST I TV GEMELAR BI BI 8 - 9 ss</option>
<option value="OBST I TV GEMELAR MONO BI 8 - 9 ss.docx">OBST I TV GEMELAR MONO BI 8 - 9 ss</option>
<option value="OBST I TV GEST TEMPR 5ss.docx">OBST I TV GEST TEMPR 5ss</option>
<option value="OBST I TV GEST TEMPR.docx">OBST I TV GEST TEMPR</option>
<option value="OBST I TV NO EVOLUTIVO (ANEMBR).docx">OBST I TV NO EVOLUTIVO (ANEMBR)</option>
<option value="OBST III PB.docx">OBST III PB</option>
<option value="OBST MORFOLOGICA BICORIAL.docx">OBST MORFOLOGICA BICORIAL</option>
<option value="OBST MORFOLOGICA MONO - BI.docx">OBST MORFOLOGICA MONO - BI</option>
<option value="OBST MORFOLOGICA.docx">OBST MORFOLOGICA</option>
<option value="PB ARTICULAR HOMBRO TENDINITIS SUPRAESP.docx">PB ARTICULAR HOMBRO TENDINITIS SUPRAESP</option>
<option value="PB ARTICULAR MUÑECA TEND QUERVAIN.docx">PB ARTICULAR MUÑECA TEND QUERVAIN</option>
<option value="PB ARTICULAR RODILLA DERRAME, MENISCOPATIA.docx">PB ARTICULAR RODILLA DERRAME, MENISCOPATIA</option>
<option value="PB ARTICULAR TOBILLO ESGUINCE G II.docx">PB ARTICULAR TOBILLO ESGUINCE G II</option>
<option value="PB CADERAS NRML.docx">PB CADERAS NRML</option>
<option value="PB CICATRIZ CESAREA NRML.docx">PB CICATRIZ CESAREA NRML</option>
<option value="PB HERNIA UMBILICAL NO REDUCIBLE.docx">PB HERNIA UMBILICAL NO REDUCIBLE</option>
<option value="PB INGLE HERNIA DIRECTA REDUCIBLE INCOERC.docx">PB INGLE HERNIA DIRECTA REDUCIBLE INCOERC</option>
<option value="PB INGLE HERNIA DIRECTA REDUCIBLE.docx">PB INGLE HERNIA DIRECTA REDUCIBLE</option>
<option value="PB TESTICULAR NRML.docx">PB TESTICULAR NRML</option>
<option value="PB TESTICULAR QT CAB EPID BILAT, VARICOCELE IZQ.docx">PB TESTICULAR QT CAB EPID BILAT, VARICOCELE IZQ</option>
<option value="PB TESTICULAR RETRACTIL BILAT.docx">PB TESTICULAR RETRACTIL BILAT</option>
<option value="PB TESTICULAR SEMINOMA.docx">PB TESTICULAR SEMINOMA</option>
<option value="PB TIROIDES DOPPLER BOCIO GRAVES BASED.docx">PB TIROIDES DOPPLER BOCIO GRAVES BASED</option>
<option value="PB TIROIDES DOPPLER NRML.docx">PB TIROIDES DOPPLER NRML</option>
<option value="PROSTATA CRECIMIENTO G I.docx">PROSTATA CRECIMIENTO G I</option>
<option value="PROSTATA CRECIMIENTO G II, ADENOMA.docx">PROSTATA CRECIMIENTO G II, ADENOMA</option>
<option value="PROSTATA CRECIMIENTO G III, ADENOMA, RET URIN.docx">PROSTATA CRECIMIENTO G III, ADENOMA, RET URIN</option>
<option value="PROSTATA NRML.docx">PROSTATA NRML</option>
<option value="PROSTATA QUISTE SIMPLE UTRICULO.docx">PROSTATA QUISTE SIMPLE UTRICULO</option>
<option value="PROSTATA REMANENTE.docx">PROSTATA REMANENTE</option>
<option value="PROSTATA SEC DE PROSTATITIS.docx">PROSTATA SEC DE PROSTATITIS</option>
<option value="RENAL DOBLE SISTEMA.docx">RENAL DOBLE SISTEMA</option>
<option value="RENAL HIDROURETERONEFROSIS UNI.docx">RENAL HIDROURETERONEFROSIS UNI</option>
<option value="RENAL HIDROURETERONEFROSIS, UROLITIASIS.docx">RENAL HIDROURETERONEFROSIS, UROLITIASIS</option>
<option value="RENAL NRML.docx">RENAL NRML</option>
<option value="RENAL POLIQUISTOSIS BILATERAL.docx">RENAL POLIQUISTOSIS BILATERAL</option>
<option value="RENAL QT SIMPLE UNI.docx">RENAL QT SIMPLE UNI</option>
<option value="RENAL UROLITIASIS BILATERAL.docx">RENAL UROLITIASIS BILATERAL</option>
<option value="RENAL UROLITIASIS UNI.docx">RENAL UROLITIASIS UNI</option>
<option value="RENAL VIAS URINARIAS HIDROURETERONEFROSIS.docx">RENAL VIAS URINARIAS HIDROURETERONEFROSIS</option>
<option value="RENAL VIAS URINARIAS QUISTES SIMPLES BILAT.docx">RENAL VIAS URINARIAS QUISTES SIMPLES BILAT</option>
<option value="RENAL VIAS URINARIAS UROLITIASIS BILAT.docx">RENAL VIAS URINARIAS UROLITIASIS BILAT</option>
<option value="RENAL Y VIAS URINARIAS.docx">RENAL Y VIAS URINARIAS</option>
                                  
                                    <option value="RX. ABDOMEN SIMPLE.docx">RX. ABDOMEN SIMPLE</option>
                                    <option value="RX. ANTEBRAZO NORMAL.docx">RX. ANTEBRAZO NORMAL</option>
                                    <option value="RX. ANTEBRAZO FX.docx">RX. ANTEBRAZO FX</option>
                                    <option value="RX. BRAZO NORMAL.docx">RX. BRAZO NORMAL</option>
                                    <option value="RX. CADERA NORMAL.docx">RX. CADERA NORMAL</option>
                                    <option value="RX. CALCANEO ESPOLON.docx">RX. CALCANEO ESPOLON</option>
                                    <option value="RX. CALCANEOS.docx">RX. CALCANEOS</option>
                                    <option value="RX. CAVUM HIPERTROFIA.docx">RX. CAVUM HIPERTROFIA</option>
                                    <option value="RX. CAVUM.docx">RX. CAVUM</option>
                                    <option value="RX. CLAVICULA NORMAL.docx">RX. CLAVICULA NORMAL</option>
                                    <option value="RX. CLAVICULA FX.docx">RX. CLAVICULA FX</option>
                                    <option value="RX. CODO.docx">RX. CODO</option>
                                    <option value="RX. COLUMNA CERV NORMAL.docx">RX. COLUMNA CERV NORMAL</option>
                                    <option value="RX. COLUMNA CERVICAL ESPOND.docx">RX. COLUMNA CERVICAL ESPOND</option>
                                    <option value="RX. COLUMNA DORSAL ESPOND, ESC.docx">RX. COLUMNA DORSAL ESPOND, ESC</option>
                                    <option value="RX. COLUMNA DORSAL NORMAL.docx">RX. COLUMNA DORSAL NORMAL</option>
                                    <option value="RX. COLUMNA DORSOLUMBAR ESPONDILOSIS, ESCOLIOSIS.docx">RX. COLUMNA DORSOLUMBAR ESPONDILOSIS, ESCOLIOSIS</option>
                                    <option value="RX. COLUMNA LUMB SACRA NORMAL.docx">RX. COLUMNA LUMB SACRA NORMAL</option>
                                    <option value="RX. COLUMNA LUMB SACRA PINZ L5 S1.docx">RX. COLUMNA LUMB SACRA PINZ L5 S1</option>
                                    <option value="RX. COLUMNA LUMBO SACRA ESPOND.docx">RX. COLUMNA LUMBO SACRA ESPOND</option>
                                    <option value="RX. COLUMNA SACRO COXIS NORMAL.docx">RX. COLUMNA SACRO COXIS NRML</option>
                                    <option value="RX. CRANEO.docx">RX. CRANEO</option>
                                    <option value="RX. FEMUR NORMAL.docx">RX. FEMUR NORMAL</option>
                                    <option value="RX. HOMBRO.docx">RX. HOMBRO</option>
                                    <option value="RX. HOMBRO TENDINITIS INICIAL.docx">RX. HOMBRO TENDINITIS INICIAL</option>
                                    <option value="RX. HPN.docx">RX. HPN</option>
                                    <option value="RX. HPN FX.docx">RX. HPN FX</option>
                                    <option value="RX. MANO EDAD OSEA NORMAL.docx">RX. MANO EDAD OSEA NRML</option>
                                    <option value="RX. MANO.docx">RX. MANO</option>
                                    <option value="RX. MUÑECA NORMAL.docx">RX. MUÑECA NORMAL</option>
                                    <option value="RX. PARRILLA COSTAL NORMAL.docx">RX. PARRILLA COSTAL NORMAL</option>
                                    <option value="RX. PARRILLA COSTAL FX.docx">RX. PARRILLA COSTAL FX</option>
                                    <option value="RX. PELVIS AP DISPLASIA NEGAT.docx">RX. PELVIS AP DISPLASIA NEGAT</option>
                                    <option value="RX. PELVIS AP NORMAL.docx">RX. PELVIS AP NORMAL</option>
                                    <option value="RX. PIE.docx">RX. PIE</option>
                                    <option value="RX. PIERNA NORMAL.docx">RX. PIERNA NORMAL</option>
                                    <option value="RX. RODILLA.docx">RX. RODILLA</option>
                                    <option value="RX. RODILLA GONARTROSIS.docx">RX. RODILLA</option>
                                    <option value="RX. SPN PROCESO ALERGICO.docx">RX. SPN PROCESO ALERGICO</option>
                                    <option value="RX. SPN RINOSINUSITIS.docx">RX. SPN RINOSINUSITIS</option>
                                    <option value="RX. SPN SINUSOPATIA.docx">RX. SPN SINUSOPATIA</option>
                                    <option value="RX. SPN.docx">RRX. SPN</option>
                                    <option value="RX. TOBILLO.docx">RX. TOBILLO</option>
                                    <option value="RX. TORAX ATELECTASIA.docx">RX. TORAX ATELECTASIA</option>
                                    <option value="RX. TORAX DERRAME PLEURAL.docx">RX. TORAX DERRAME PLEURAL</option>
                                    <option value="RX. TORAX FIBROSIS PULMONAR.docx">RX. TORAX FIBROSIS PULMONAR</option>
                                    <option value="RX. TORAX INFLAMT BRONQ.docx">RX. TORAX INFLAMT BRONQ</option>
                                    <option value="RX. TORAX NEUMOPATIA NIÑO.docx">RX. TORAX NEUMOPATIA NIÑO</option>
                                    <option value="RX. TORAX NORMAL NIÑO.docx">RX. TORAX NORMAL NIÑO</option>
                                    <option value="RX. TORAX NORMAL.docx">RX. TORAX NORMAL</option>
                                    <option value="RX. TORAX PEP.docx">RX. TORAX PEP</option>
                                    <option value="RX. TORAX SECUELAS DE PEP.docx">RX. TORAX SECUELAS DE PEP</option>



                                <td>

                                  <input type="hidden" name="id" value="{{$an->id}}">

                                  <input type="submit" class="btn btn-success" value="Asociar">
                                  <a class="btn btn-primary btn-sm" id="{{$an->id_atencion}}" onclick="viewh(this)">
                                    <i class="fas fa-eye">
                                    </i>
                                    Anotaciòn
                                </a>
                                  </td>

                              </tr>
                              </form>
                              @endif




                    </td>


                    <td>
                    @if(Auth::user()->rol == 1)
                   

                         

                        
                         </td>
                          @endif
                  </tr>
                  @endforeach
                 
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>id</th>
                    <th>Fecha</th>
                    <th>Pac.</th>
                    <th>Origen</th>
                    <th>Det.</th>
                    <th>Informe.</th>
                    <th>Acciones</th>
                  </tr>
                 
                  </tfoot>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  </div>

  
  <div class="modal fade" id="viewTicket">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            </div>
           
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
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

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script type="text/javascript">
		function viewh(e){
		    var id = $(e).attr('id');
		    
		    $.ajax({
		        type: "GET",
		        url: "/resultados/anotar/"+id,
		        success: function (data) {
		            $("#viewTicket .modal-body").html(data);
		            $('#viewTicket').modal('show');
		        },
		        error: function (data) {
		            console.log('Error:', data);
		        }
		    });
		}

	
	</script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
