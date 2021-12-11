<style>
	.row{
		width: 1024px;
		margin: 0 auto;
	}

	.col-12{
		width: 100%;
	}
	
	.col-6{
		width: 49%;
		float: left;
		padding: 8px 5px;
		font-size: 18px;
	}

	.text-center{
		text-align: center;
	}
	
	.text-right{
		text-align: right;
	}

	.title-header{
		font-size: 22px; 
		text-transform: uppercase; 
		padding: 12px 0;
	}
	table{
		width: 100%;
		text-align: center;
		margin: 10px 0;
	}
	
	tr th{
		font-size: 14px;
		text-transform: uppercase;
		padding: 8px 5px;
	}

	tr td{
		font-size: 14px;
		padding: 8px 5px;
	}
</style>

<div>
	<div class="text-center title-header col-12">
		<center><strong>DETALLE DE REPORTE INDIVIDUAL</strong> </center>
		<center><strong>DESDE: </strong>{{ $f1 }} <strong>HASTA: </strong>{{ $f2 }}</center>

	</div>
</div>
<div>
	<div class="col-6">
		Fecha de Impresión: {{ Carbon\Carbon::now()->format('d/m/Y') }}
	</div>
	<div class="col-6 text-right">
		Hora de Impresión: {{ Carbon\Carbon::now('America/Lima')->format('h:i a') }}
	</div> 
</div>

<div style="font-weight: bold; font-size: 14px">
		TOTAL:  {{$resultadost->monto }} Soles
</div>
<div style="font-weight: bold; font-size: 14px">
		ITEMS:  {{$resultadost->cantidad }}
</div>

<br>



<div style="background: #eaeaea;">
	<table>
		<tr>
		    <th style="padding: 0;width: 20%;text-overflow: ellipsis;">DETALLE</th>
			<th style="padding: 0;width: 40%;text-overflow: ellipsis;">PACIENTE</th>
			<th style="padding: 0;width: 10%;text-overflow: ellipsis;">MONTO</th>
            <th style="padding: 0;width: 10%;text-overflow: ellipsis;">ABONO</th>





		</tr>
		@foreach($resultados as $ingreso)
		<tr>
		    <td style="padding: 0;width: 20%;text-overflow: ellipsis;">{{$ingreso->servicio }}</td>
			<td style="padding: 0;width: 40%;text-overflow: ellipsis;">{{ $ingreso->apellidos }} {{ $ingreso->nombres }}</td>
			<td style="padding: 0;width: 5%;text-overflow: ellipsis;">{{ $ingreso->monto }}</td>
            <td style="padding: 0;width: 5%;text-overflow: ellipsis;">{{ $ingreso->abono }}</td>

		</tr>
		@endforeach
	</table>

	


</div>
<br>