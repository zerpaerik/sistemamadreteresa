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
			<center><strong>HISTORIA CLINICA PEDIATRICA</strong> </center>
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
						<div class="divTableCell divTableHead"> ANTECEDENTES FAMILIARES</div>
					</div>
				</div>
			</div>
			<div class="divTable">
				<div class="divTableBody">
					<div class="divTableRow">
						<div class="divTableCell" style="width: 10%">MATERNOS</div>
						<div class="divTableCell" style="width: 90%">{{$historias_base->fam_mat}}</div>
					</div>
					<div class="divTableRow">
						<div class="divTableCell" style="width: 10%">PATERNOS</div>
						<div class="divTableCell" style="width: 90%">{{$historias_base->fam_pad}}</div>
						
					</div>
                    <div class="divTableRow">
						<div class="divTableCell" style="width: 10%">HERMANOS</div>
						<div class="divTableCell" style="width: 90%">{{$historias_base->fam_her}}</div>
						
					</div>
				</div>
			</div>

            <div class="divTable">
				<div class="divTableBody">
					<div class="divTableRow">
						<div class="divTableCell divTableHead"> ANTECEDENTES PERSONALES NO PATALÒGICAS</div>
					</div>
				</div>
			</div>
			<div class="divTable">
				<div class="divTableBody">
					<div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">Emb Numero</div>
						<div class="divTableCell" style="width: 10%">{{$historias_base->emb_num}}</div>
						<div class="divTableCell" style="width: 10%">Normal</div>
						<div class="divTableCell" style="width: 10%">{{$historias_base->emb_normal}}</div>
                        <div class="divTableCell" style="width: 10%">Causa</div>
						<div class="divTableCell" style="width: 10%">{{$historias_base->causa_emb}}</div>
                    
					</div>
                    <div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">Gestaciòn</div>
						<div class="divTableCell" style="width: 10%">{{$historias_base->sem_hest}}</div>
						<div class="divTableCell" style="width: 10%">Parto Eutocito</div>
						<div class="divTableCell" style="width: 10%">{{$historias_base->part_aut}}</div>
                        <div class="divTableCell" style="width: 10%">Causa</div>
						<div class="divTableCell" style="width: 10%">{{$historias_base->causa_eut}}</div>
                    
					</div>

                    <div class="divTableRow">
                        <div class="divTableCell" style="width: 20%">Rupt Prem Membranas</div>
						<div class="divTableCell" style="width: 10%">{{$historias_base->rupt_mem}}</div>
						
                        <div class="divTableCell" style="width: 20%">Causa</div>
						<div class="divTableCell" style="width: 10%">{{$historias_base->causa_rupt}}</div>
                    
					</div>

					<div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">Peso</div>
						<div class="divTableCell" style="width: 10%">{{$historias_base->peso}}</div>
						<div class="divTableCell" style="width: 10%">Talla</div>
						<div class="divTableCell" style="width: 10%">{{$historias_base->talla}}</div>
                        <div class="divTableCell" style="width: 10%">PC</div>
						<div class="divTableCell" style="width: 10%">{{$historias_base->pc}}</div>
                    
					</div>
					<div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">PA</div>
						<div class="divTableCell" style="width: 10%">{{$historias_base->pa}}</div>
						<div class="divTableCell" style="width: 10%">Apgar</div>
						<div class="divTableCell" style="width: 10%">{{$historias_base->apgar}}</div>
                        <div class="divTableCell" style="width: 10%">Apnea Neonatal</div>
						<div class="divTableCell" style="width: 10%">{{$historias_base->apnea}}</div>
                    
					</div>
					<div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">Ictericia</div>
						<div class="divTableCell" style="width: 10%">{{$historias_base->ictericia}}</div>
						<div class="divTableCell" style="width: 10%">Hemorragia</div>
						<div class="divTableCell" style="width: 10%">{{$historias_base->hemo}}</div>
                        <div class="divTableCell" style="width: 10%">Convulsiones</div>
						<div class="divTableCell" style="width: 10%">{{$historias_base->convul}}</div>
                    
					</div>
					
				</div>
			</div>




				<div class="divTable">
				<div class="divTableBody">
					<div class="divTableRow">
						<div class="divTableCell divTableHead"> ANTECEDENTES PATOLOGICOS</div>
					</div>
				</div>
				</div>


			<div class="divTable">
				<div class="divTableBody">
					<div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">Infecciones</div>
						<div class="divTableCell" style="width: 10%">{{$historias_base->infecciones}}</div>
						<div class="divTableCell" style="width: 10%">Traumatismos</div>
						<div class="divTableCell" style="width: 10%">{{$historias_base->trauma}}</div>
                        <div class="divTableCell" style="width: 10%">Quirurgicos</div>
						<div class="divTableCell" style="width: 10%">{{$historias_base->quirur}}</div>
                    
					</div>
                    <div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">Hospitalizaciones</div>
						<div class="divTableCell" style="width: 10%">{{$historias_base->hospi}}</div>
						<div class="divTableCell" style="width: 10%">Alergias</div>
						<div class="divTableCell" style="width: 10%">{{$historias_base->alerg}}</div>
                        <div class="divTableCell" style="width: 10%">Transfusiones</div>
						<div class="divTableCell" style="width: 10%">{{$historias_base->transfusiones}}</div>
                    
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
                        <div class="divTableCell" style="width: 10%">Lactancia materna</div>
						<div class="divTableCell" style="width: 10%">{{$hist->lact}}</div>
						<div class="divTableCell" style="width: 10%">Duraciòn</div>
						<div class="divTableCell" style="width: 10%">{{$hist->dur_lact}}</div>
                        <div class="divTableCell" style="width: 10%">Ablantaciòn</div>
						<div class="divTableCell" style="width: 10%">{{$hist->ablac}}</div>
                    
					</div>
                    <div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">Destete</div>
						<div class="divTableCell" style="width: 10%">{{$hist->dest}}</div>
						<div class="divTableCell" style="width: 10%">Alimentaciòn actual</div>
						<div class="divTableCell" style="width: 10%">{{$hist->alim}}</div>
						<div class="divTableCell" style="width: 10%"></div>
						<div class="divTableCell" style="width: 10%"></div>

                       
					</div>

				
					
				</div>
			</div>

			<div class="divTable">
				<div class="divTableBody">
					<div class="divTableRow">
						<div class="divTableCell divTableHead"> INMUNIZACIONES</div>
					</div>
				</div>
			</div>


			<div class="divTable">
				<div class="divTableBody">
					<div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">Poliomelitis</div>
						<div class="divTableCell" style="width: 10%">{{$hist->polio}}</div>
						<div class="divTableCell" style="width: 10%">Rotavirus</div>
						<div class="divTableCell" style="width: 10%">{{$hist->rota}}</div>
                        <div class="divTableCell" style="width: 10%">DPT</div>
						<div class="divTableCell" style="width: 10%">{{$hist->dpt}}</div>
                    
					</div>
                    <div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">Influenz</div>
						<div class="divTableCell" style="width: 10%">{{$hist->influ}}</div>
						<div class="divTableCell" style="width: 10%">H Influe TipoB</div>
						<div class="divTableCell" style="width: 10%">{{$hist->hinflu}}</div>
						<div class="divTableCell" style="width: 10%">Sarampion</div>
						<div class="divTableCell" style="width: 10%">{{$hist->saram}}</div>
                       
					</div>

					<div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">Hepatitis B</div>
						<div class="divTableCell" style="width: 10%">{{$hist->hb}}</div>
						<div class="divTableCell" style="width: 10%">Rubeola</div>
						<div class="divTableCell" style="width: 10%">{{$hist->rube}}</div>
						<div class="divTableCell" style="width: 10%">Neumococo</div>
						<div class="divTableCell" style="width: 10%">{{$hist->neumoco}}</div>
                       
					</div>


					<div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">Parotiditis</div>
						<div class="divTableCell" style="width: 10%">{{$hist->paro}}</div>
						<div class="divTableCell" style="width: 10%">BCG</div>
						<div class="divTableCell" style="width: 10%">{{$hist->bcg}}</div>
						<div class="divTableCell" style="width: 10%">Varicela</div>
						<div class="divTableCell" style="width: 10%">{{$hist->vari}}</div>
                       
					</div>

					<div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">Toxoide Tetànico</div>
						<div class="divTableCell" style="width: 10%">{{$hist->tox}}</div>
						<div class="divTableCell" style="width: 10%">Hepatitis A</div>
						<div class="divTableCell" style="width: 10%">{{$hist->ha}}</div>
						<div class="divTableCell" style="width: 10%">DT</div>
						<div class="divTableCell" style="width: 10%">{{$hist->dt}}</div>
                       
					</div>


					<div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">VPH</div>
						<div class="divTableCell" style="width: 10%">{{$hist->vph}}</div>
						<div class="divTableCell" style="width: 10%">Gamma Globulina</div>
						<div class="divTableCell" style="width: 10%">{{$hist->gamma}}</div>
						<div class="divTableCell" style="width: 10%"></div>
						<div class="divTableCell" style="width: 10%"></div>
                       
					</div>


				
					
				</div>
			</div>

			<div class="divTable">
				<div class="divTableBody">
					<div class="divTableRow">
						<div class="divTableCell divTableHead"> DESARROLLO PSICOMOTOR</div>
					</div>
				</div>
			</div>


			<div class="divTable">
				<div class="divTableBody">
					<div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">Siguio objetos</div>
						<div class="divTableCell" style="width: 10%">{{$hist->siguio}}</div>
						<div class="divTableCell" style="width: 10%">Sostuvo la Cabeza</div>
						<div class="divTableCell" style="width: 10%">{{$hist->sost}}</div>
                        <div class="divTableCell" style="width: 10%">Se sento solo</div>
						<div class="divTableCell" style="width: 10%">{{$hist->sento}}</div>
                    
					</div>
                    <div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">Primeras Palabras</div>
						<div class="divTableCell" style="width: 10%">{{$hist->prim_pal}}</div>
						<div class="divTableCell" style="width: 10%">Sonrio</div>
						<div class="divTableCell" style="width: 10%">{{$hist->sonrio}}</div>
						<div class="divTableCell" style="width: 10%">Camino</div>
						<div class="divTableCell" style="width: 10%">{{$hist->camino}}</div>
                       
					</div>

					<div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">Contro de esfinteres</div>
						<div class="divTableCell" style="width: 10%">{{$hist->esfint}}</div>
						<div class="divTableCell" style="width: 10%">Alteraciòn del lenguaje</div>
						<div class="divTableCell" style="width: 10%">{{$hist->alt_leng}}</div>
						<div class="divTableCell" style="width: 10%">Cuales?</div>
						<div class="divTableCell" style="width: 10%">{{$hist->cual_alt}}</div>
                       
					</div>


					<div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">Datos anorma desarrollo</div>
						<div class="divTableCell" style="width: 10%">{{$hist->datos}}</div>
						<div class="divTableCell" style="width: 10%"></div>
						<div class="divTableCell" style="width: 10%"></div>
						<div class="divTableCell" style="width: 10%"></div>
						<div class="divTableCell" style="width: 10%"></div>
                       
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
                        <div class="divTableCell" style="width: 10%">P Cefàlico</div>
						<div class="divTableCell" style="width: 10%">{{$hist->pcefa}}</div>
                    
					</div>
                    <div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">P Brazo</div>
						<div class="divTableCell" style="width: 10%">{{$hist->pbra}}</div>
						<div class="divTableCell" style="width: 10%">P Pierna</div>
						<div class="divTableCell" style="width: 10%">{{$hist->ppier}}</div>
						<div class="divTableCell" style="width: 10%">IMC</div>
						<div class="divTableCell" style="width: 10%">{{$hist->imc}}</div>
                       
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
						<div class="divTableCell" style="width: 10%">{{$hist->glas}}</div>
                       
					</div>

					<div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">Piel</div>
						<div class="divTableCell" style="width: 10%">{{$hist->piel}}</div>
						<div class="divTableCell" style="width: 10%">Cabeza</div>
						<div class="divTableCell" style="width: 10%">{{$hist->cabeza}}</div>
						<div class="divTableCell" style="width: 10%">Ojos</div>
						<div class="divTableCell" style="width: 10%">{{$hist->ojos}}</div>
                       
					</div>

					<div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">Oidos</div>
						<div class="divTableCell" style="width: 10%">{{$hist->oidos}}</div>
						<div class="divTableCell" style="width: 10%">Nariz</div>
						<div class="divTableCell" style="width: 10%">{{$hist->nariz}}</div>
						<div class="divTableCell" style="width: 10%">Boca</div>
						<div class="divTableCell" style="width: 10%">{{$hist->boca}}</div>
                       
					</div>

					<div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">Cuello</div>
						<div class="divTableCell" style="width: 10%">{{$hist->cuello}}</div>
						<div class="divTableCell" style="width: 10%">Toral</div>
						<div class="divTableCell" style="width: 10%">{{$hist->toral}}</div>
						<div class="divTableCell" style="width: 10%">Mamas</div>
						<div class="divTableCell" style="width: 10%">{{$hist->mamas}}</div>
                       
					</div>

					<div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">Abdomen</div>
						<div class="divTableCell" style="width: 10%">{{$hist->abdomen}}</div>
						<div class="divTableCell" style="width: 10%">Genitales</div>
						<div class="divTableCell" style="width: 10%">{{$hist->gen}}</div>
						<div class="divTableCell" style="width: 10%">Ano y Recto</div>
						<div class="divTableCell" style="width: 10%">{{$hist->ano}}</div>
                       
					</div>

					<div class="divTableRow">
                        <div class="divTableCell" style="width: 10%">Extremidades</div>
						<div class="divTableCell" style="width: 10%">{{$hist->extrem}}</div>
						<div class="divTableCell" style="width: 10%">Columna Vertebral</div>
						<div class="divTableCell" style="width: 10%">{{$hist->column}}</div>
						<div class="divTableCell" style="width: 10%">Neurològico</div>
						<div class="divTableCell" style="width: 10%">{{$hist->neuro}}</div>
                       
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

