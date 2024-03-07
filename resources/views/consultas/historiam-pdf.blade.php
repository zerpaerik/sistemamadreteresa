<html lang="en">
<style type="text/css">

.divTable{
	display: table;
	width: 100%;
	border-collapse: collapse;
}
.divTableRow {
	display: table-row;
}
.divTableHeading {
	display: table-header-group;
}
.divTableCell, {
	border: 1px solid #000;
	display: table-cell;
	padding: 3px 10px;
	font-weight: bold; font-size: 12px;
}
.divTableHeading {
	display: table-header-group;
	font-weight: bold;
}
.divTableFoot {
	display: table-footer-group;
	font-weight: bold;
}
.divTableBody {
	display: table-row-group;
}

.divTableCell1, {
	border: 1px solid #000;
	display: table-cell;
	padding: 3px 10px;
	font-weight: bold; font-size: 12px;
}

.divTableHead {
	border: 1px solid #000;
	display: table-cell;
	padding: 3px 10px;
	font-weight: bold; font-size: 12px;
	background-color: lightblue;
}

.div1 {
	display: inline-block; text-align: right;
}

table {
	width: 100%;
	border-collapse: collapse;
	text-align: center;
}

.td {
	width: 100%;
	border-collapse: collapse;
	border: 1px solid #000
}

</style>
<head>
	<title>Historia Clínica</title>
	<link rel="stylesheet" type="text/css" href="css/pdf.css">

</head>
	<body>

		<div>
			<div align="left" style="width: 50%;">
				<img src="/var/www/html/sistemamadreteresa/public/image.png"  style="width: 20%;"/>
			</div>

		</div>
		<div class="text-center title-header col-12">
			<center><strong>HISTORIA CLINICA MEDICINA</strong> </center>
		</div>
		<br>
		
		<div class="row">
			
			<div class="divTable">
				<div class="divTableBody">
					<div class="divTableRow">
						<div class="divTableCell divTableHead">DATOS DEL PACIENTE</div>
					</div>
				</div>
			</div>
			<div class="divTable">
				<div class="divTableBody">
					<div class="divTableRow">
						<div class="divTableCell" style="width: 30%">Apellidos y Nombres</div>
						<div class="divTableCell" style="width: 70%">{{$paciente->apellidos}} {{$paciente->nombres}}</div>
					</div>
				</div>
			</div>
			<div class="divTable">
				<div class="divTableBody">
					<div class="divTableRow">
						<div class="divTableCell" style="width: 30%">Fecha de Nacimiento</div>
						<div class="divTableCell" style="width: 20%">{{$paciente->fechanac}};</div>
						<div class="divTableCell" style="width: 10%">Edad</div>
						<div class="divTableCell" style="width: 10%">{{$edad}}</div>
						<div class="divTableCell" style="width: 10%">DNI</div>
						<div class="divTableCell" style="width: 20%">{{$paciente->dni}}</div>
					</div>
				</div>
			</div>
			<div class="divTable">
				<div class="divTableBody">
					<div class="divTableRow">
						<div class="divTableCell" style="width: 30%">Domicilio actual</div>
						<div class="divTableCell" style="width: 70%">{{$paciente->direccion}}</div>
					</div>
				</div>
			</div>
			
		
		
	
			<div class="divTable">
				<div class="divTableBody">
					<div class="divTableRow">
						<div class="divTableCell divTableHead"> ANTECEDENTES</div>
					</div>
				</div>
			</div>
			<div class="divTable">
				<div class="divTableBody">
					<div class="divTableRow">
						<div class="divTableCell" style="width: 10%">PERSONALES</div>
						<div class="divTableCell" style="width: 90%">{{$historias_base->ant_pers}}</div>
					</div>
					<div class="divTableRow">
						<div class="divTableCell" style="width: 10%">FAMILIARES</div>
						<div class="divTableCell" style="width: 90%">{{$historias_base->ant_fam}}</div>
						
					</div>
                    <div class="divTableRow">
						<div class="divTableCell" style="width: 10%">QUIRURGICOS</div>
						<div class="divTableCell" style="width: 90%">{{$historias_base->ant_qui}}</div>
						
					</div>
				</div>
			</div>

			<div class="divTable">
				<div class="divTableBody">
					<div class="divTableRow">
						<div class="divTableCell" style="width: 10%">TTO HABITUAL</div>
						<div class="divTableCell" style="width: 90%">{{$historias_base->tto_hab}}</div>
					</div>
					<div class="divTableRow">
						<div class="divTableCell" style="width: 10%">HOSPITALIZACIONES PREVIAS</div>
						<div class="divTableCell" style="width: 90%">{{$historias_base->hosp_prev}}</div>
						
					</div>
                    <div class="divTableRow">
						<div class="divTableCell" style="width: 10%">ALERGIAS</div>
						<div class="divTableCell" style="width: 90%">{{$historias_base->alerg}}</div>
						
					</div>
				</div>
			</div>

           
			<div class="divTable">
				<div class="divTableBody">
					<div class="divTableRow">
						<div class="divTableCell divTableHead"> HISTORIA</div>
					</div>
				</div>
			</div>


			<div class="divTable">
				<div class="divTableBody">
					<div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">Enf Actual</div>
						<div class="divTableCell" style="width: 60%">{{$hist->enf_act}}</div>
						
                    
					</div>
				</div>
				<div class="divTableBody">
					<div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">Tratamiento Actual</div>
						<div class="divTableCell" style="width: 60%">{{$hist->tto_act}}</div>
						
                    
					</div>
				</div>
				<div class="divTableBody">
					<div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">Anamnesis</div>
						<div class="divTableCell" style="width: 60%">{{$hist->anam}}</div>
						
                    
					</div>
				</div>
			</div>

			<div class="divTable">
				<div class="divTableBody">
					<div class="divTableRow">
						<div class="divTableCell divTableHead"> EXPLORACIÒN FÌSICA</div>
					</div>
				</div>
			</div>


			<div class="divTable">
				<div class="divTableBody">
					<div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">Peso</div>
						<div class="divTableCell" style="width: 10%">{{$hist->peso}}</div>
						<div class="divTableCell" style="width: 10%">Talla</div>
						<div class="divTableCell" style="width: 10%">{{$hist->talla}}</div>
                        <div class="divTableCell" style="width: 10%">Mamas</div>
						<div class="divTableCell" style="width: 10%">{{$hist->mamas}}</div>
                    
					</div>
              

					<div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">PA</div>
						<div class="divTableCell" style="width: 10%">{{$hist->pa}}</div>
						<div class="divTableCell" style="width: 10%">T</div>
						<div class="divTableCell" style="width: 10%">{{$hist->t}}</div>
						<div class="divTableCell" style="width: 10%">FC</div>
						<div class="divTableCell" style="width: 10%">{{$hist->fc}}</div>
                       
					</div>


					<div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">FR</div>
						<div class="divTableCell" style="width: 10%">{{$hist->fr}}</div>
						<div class="divTableCell" style="width: 10%">SAT 02</div>
						<div class="divTableCell" style="width: 10%">{{$hist->sat}}</div>
						<div class="divTableCell" style="width: 10%">GLASSGOW</div>
						<div class="divTableCell" style="width: 10%">{{$hist->glass}}</div>
                       
					</div>

					<div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">Piel</div>
						<div class="divTableCell" style="width: 10%">{{$hist->piel}}</div>
						<div class="divTableCell" style="width: 10%">CardioPulmonar</div>
						<div class="divTableCell" style="width: 10%">{{$hist->cardio}}</div>
						<div class="divTableCell" style="width: 10%"></div>
						<div class="divTableCell" style="width: 10%"></div>
                       
					</div>

				
					
				</div>
			</div>

			


			<div class="divTable">
				<div class="divTableBody">
					<div class="divTableRow">
						<div class="divTableCell divTableHead"> DIAGNÒSTICO</div>
					</div>
				</div>
			</div>


			<div class="divTable">
				<div class="divTableBody">
					<div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">Presunción Diagnóstica</div>
						<div class="divTableCell" style="width: 10%">{{$hist->diag1}}</div>
						<div class="divTableCell" style="width: 10%">CIE X</div>
						<div class="divTableCell" style="width: 10%">{{$hist->cie1}}</div>
                        <div class="divTableCell" style="width: 10%">Presunción Diagnóstica</div>
						<div class="divTableCell" style="width: 10%">{{$hist->diag2}}</div>
                    
					</div>
                    <div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">CIE X</div>
						<div class="divTableCell" style="width: 10%">{{$hist->cie2}}</div>
						<div class="divTableCell" style="width: 10%"></div>
						<div class="divTableCell" style="width: 10%"></div>
						<div class="divTableCell" style="width: 10%"></div>
						<div class="divTableCell" style="width: 10%"></div>

                       
					</div>

					<div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">Tratamiento</div>
						<div class="divTableCell" style="width: 50%">{{$hist->trata}}</div>
					
                       
					</div>

					<div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">Observaciones</div>
						<div class="divTableCell" style="width: 50%">{{$hist->obser}}</div>
					
                       
					</div>


				
					

				

					
				</div>
			</div>





		


			
           


         
		

			<div>
			@if($hist->usuario == 38)
			<div align="right" style="margin-top:20px;">
				<img src="/var/www/html/sistemamadreteresa/public/firma_kimber.jpeg"  style="width: 30%;"/>
			</div>
			@elseif($hist->usuario == 303)
			<div align="right" style="margin-top:20px;">
				<img src="/var/www/html/sistemamadreteresa/public/firma_margarita.jpeg"  style="width: 30%;"/>
			</div>
			@elseif($hist->usuario == 249)
			<div align="right" style="margin-top:20px;">
				<img src="/var/www/html/sistemamadreteresa/public/firma_rebeca.jpeg"  style="width: 30%;"/>
			</div>
			@elseif($hist->usuario == 389)
			<div align="right" style="margin-top:20px;">
				<img src="/var/www/html/sistemamadreteresa/public/firma_karelia.jpeg"  style="width: 30%;"/>
			</div>
			@elseif($hist->usuario == 42)
			<div align="right" style="margin-top:20px;">
				<img src="/var/www/html/sistemamadreteresa/public/firma_melissa.jpeg"  style="width: 30%;"/>
			</div>
			@elseif($hist->usuario == 364)
			<div align="right" style="margin-top:20px;">
				<img src="/var/www/html/sistemamadreteresa/public/firma_saida.jpeg"  style="width: 30%;"/>
			</div>
			@elseif($hist->usuario == 287)
			<div align="right" style="margin-top:20px;">
				<img src="/var/www/html/sistemamadreteresa/public/firma_yris.jpeg"  style="width: 30%;"/>
			</div>
			@elseif($hist->usuario == 385)
			<div align="right" style="margin-top:20px;">
				<img src="/var/www/html/sistemamadreteresa/public/firma_wendy.jpeg"  style="width: 30%;"/>
			</div>
			@elseif($hist->usuario == 29)
			<div align="right" style="margin-top:20px;">
				<img src="/var/www/html/sistemamadreteresa/public/firma_jeny.jpeg"  style="width: 30%;"/>
			</div>
			@elseif($hist->usuario == 32)
			<div align="right" style="margin-top:20px;">
				<img src="/var/www/html/sistemamadreteresa/public/firma_janet.jpeg"  style="width: 30%;"/>
			</div>
			@elseif($hist->usuario == 371)
			<div align="right" style="margin-top:20px;">
				<img src="/var/www/html/sistemamadreteresa/public/firma_vanessa.jpeg"  style="width: 30%;"/>
			</div>
			@else
			@endif

		</div>
          
            
         
           
		</div>
	</body>
</html>

