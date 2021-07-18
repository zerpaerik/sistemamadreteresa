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
		<center><strong>REPORTE DETALLADO</strong> </center>
		<center><strong>DESDE: </strong>- {{ $f1 }} <strong>DESDE: </strong>{{ $f2 }}</center>

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

<br>

<div style="font-weight: bold; font-size: 14px">
		INGRESOS
</div>

<div style="background: #eaeaea;">
	<table>
		<tr>
		   <th style="padding: 0;width: 5%;text-overflow: ellipsis;">FECHA</th>
			<th style="padding: 0;width: 5%;text-overflow: ellipsis;">TOTAL</th>
			<th style="padding: 0;width: 10%;text-overflow: ellipsis;">EFECTIVO</th>
			<th style="padding: 0;width: 5%;text-overflow: ellipsis;">TARJETA</th>
			<th style="padding: 0;width: 5%;text-overflow: ellipsis;">DEPÓSITO</th>
			<th style="padding: 0;width: 10%;text-overflow: ellipsis;">YAPE</th>




		</tr>
		@foreach($efectivo as $ingreso)
		<tr>
		    <td style="padding: 0;width: 5%;text-overflow: ellipsis;">{{ $ingreso->fecha }}</td>
			<td style="padding: 0;width: 5%;text-overflow: ellipsis;">{{ $ingreso->monto }}</td>
			<td style="padding: 0;width: 5%;text-overflow: ellipsis;">{{ $ingreso->efectivo }}</td>
			<td style="padding: 0;width: 5%;text-overflow: ellipsis;">{{ $ingreso->tarjeta }}</td>
			<td style="padding: 0;width: 5%;text-overflow: ellipsis;">{{ $ingreso->deposito }}</td>
			<td style="padding: 0;width: 5%;text-overflow: ellipsis;">{{ $ingreso->yape }}</td>
		</tr>
		@endforeach
	</table>


</div>
<br>

<div style="font-weight: bold; font-size: 14px">
		EGRESOS
</div>

<div style="background: #eaeaea;">
	<table>
		<tr>
			<th style="padding: 0;width: 5%;text-overflow: ellipsis;">FECHA</th>
			<th style="padding: 0;width: 5%;text-overflow: ellipsis;">DESCRIPCIÓN</th>
			<th style="padding: 0;width: 5%;text-overflow: ellipsis;">MONTO</th>
			<th style="padding: 0;width: 5%;text-overflow: ellipsis;">TIPO DE PAGO</th>
			<th style="padding: 0;width: 5%;text-overflow: ellipsis;">REGISTRADO POR</th>




		</tr>
		@foreach($egresos as $egreso)
		<tr>
			<td style="padding: 0;width: 5%;text-overflow: ellipsis;">{{ $egreso->created_at }}</td>
			<td style="padding: 0;width: 5%;text-overflow: ellipsis;">{{ $egreso->descripcion }}</td>
			<td style="padding: 0;width: 5%;text-overflow: ellipsis;">{{ $egreso->monto }}</td>
			<td style="padding: 0;width: 5%;text-overflow: ellipsis;">{{ $egreso->tipopago }}</td>
			<td style="padding: 0;width: 5%;text-overflow: ellipsis;">{{ $egreso->usuario }}</td>
			
		</tr>
		@endforeach
	</table>

	<strong>TOTAL EGRESOS:</strong>{{ $totalegreso->monto }}<br>


	
	
</div>




