<head>
    <style type="text/css">
      {
        margin: 0;
        padding: 0;
      }
      .table-main{
       margin-left:-40px;
       margin-right:-56px;
      }
      .cl{
        margin: 0;
        padding: 0;

      }
      .truncate {
        width: 1px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
      }
      @page {
        header: page-header;
        footer: page-footer;
      }
      footer {
        border:solid red;
      }
    </style>

    <meta charset="utf-8">

  </head>

    <body style="width:100%; position:fixed: top: 1px; ">

    <br><br>


    <div  style="font-size: 15px; text-align: center;margin-bottom:-60px;margin-top: -30px;">
    @if(Session::get('sedeName') == 'PROCERES')
    <div class="" style="font-size: 35px; text-align: center;margin-bottom: 15px;">
		<img src="/var/www/html/mt/sistemamadreteresa/public/image.png"  style="width: 40%; color: black;"/>
	</div>

		<p><strong>Consultorio Medico Salud y Vida SAC</strong></p>
		<p style="margin-top: -20px;"><strong>RUC: 20613417118</strong></p>
        <p style="margin-top: -10px;"><strong>Dirección: Calle los Eneldos 151 Urb San Hilarion - SJL</strong></p>
		<p style="margin-top: -20px;"><strong>WhatsApp: 978 216 135</strong></p>
   @elseif(Session::get('sedeName') == 'CANTO REY')
   <div class="" style="font-size: 35px; text-align: center;margin-bottom: 15px;">
		<img src="/var/www/html/mt/sistemamadreteresa/public/image.png"  style="width: 40%; color: black;"/>
	</div>
   <p><strong>MADRE TERESA SAC-{{Session::get('sedeName')}}</strong></p>
		<p style="margin-top: -20px;"><strong>RUC: 20600971116</strong></p>
        <p style="margin-top: -10px;"><strong>Dirección: Av Wiesse 3331 2do piso  SJL</strong></p>
		<p style="margin-top: -20px;"><strong>Teléfono:  01 2534502</strong></p>
		<p style="margin-top: -20px;"><strong>WhatsApp: 978 216 135</strong></p>
        @elseif(Session::get('sedeName') == 'VIDA FELIZ')
        <div class="" style="font-size: 35px; text-align: center;margin-bottom: 15px;">
		<img src="/var/www/html/mt/sistemamadreteresa/public/image.png"  style="width: 40%; color: black;"/>
	</div>
   <p><strong>Madre Teresa Salud SAC</strong></p>
		<p style="margin-top: -20px;"><strong>RUC: 20613410717</strong></p>
        <p style="margin-top: -10px;"><strong>Dirección: Av Próceres de la independencia 1795
2do piso SJL</strong></p>
		<p style="margin-top: -20px;"><strong>Teléfono:  01 4596494</strong></p>
		<p style="margin-top: -20px;"><strong>WhatsApp: 978 216 135</strong></p>
    @elseif(Session::get('sedeName') == 'LABORATORIO VIDA')
    <div class="" style="font-size: 35px; text-align: center;margin-bottom: 15px;">
		<img src="/var/www/html/mt/sistemamadreteresa/public/image.png"  style="width: 40%; color: black;"/>
	</div>
   <p><strong>VIDA FELIZ SAC- MADRE TERESA</strong></p>
		<p style="margin-top: -20px;"><strong>RUC: 20602415539</strong></p>
        <p style="margin-top: -10px;"><strong>Dirección: Av Próceres de la independencia 1795
2do piso SJL</strong></p>
		<p style="margin-top: -20px;"><strong>Teléfono:  01 4596494</strong></p>
		<p style="margin-top: -20px;"><strong>WhatsApp: 978 216 315</strong></p>
    @elseif(Session::get('sedeName') == 'INDEPENDENCIA')
    <div class="" style="font-size: 35px; text-align: center;margin-bottom: 15px;">
		<img src="/var/www/html/mt/sistemamadreteresa/public/image.png"  style="width: 40%; color: black;"/>
	</div>
   <p><strong>SYSMEDIC PERU SAC -INDEPENDENCIA</strong></p>
		<p style="margin-top: -20px;"><strong>RUC: 20606283980</strong></p>
        <p style="margin-top: -10px;"><strong>Dirección: AV.CHINCHAYSUYO 323 TAHUANTINSUYO</strong></p>
		<p style="margin-top: -20px;"><strong>Teléfono: 01 5265711</strong></p>
		<p style="margin-top: -20px;"><strong>WhatsApp: 940 309 507</strong></p>
    @elseif(Session::get('sedeName') == 'ZARATE')
    <div class="" style="font-size: 35px; text-align: center;margin-bottom: 15px;">
		<img src="/var/www/html/mt/sistemamadreteresa/public/image.png"  style="width: 40%; color: black;"/>
	</div>
    <p><strong>SYSMEDIC PERU SAC</strong></p>
    <p style="margin-top: -20px;"><strong>RUC: 20606283980</strong></p>
        <p style="margin-top: -10px;"><strong>Dirección:  Av. gran chimu 745 Zarate SJL</strong></p>
		<p style="margin-top: -20px;"><strong>Teléfono:   01 7820512</strong></p>
		<p style="margin-top: -20px;"><strong>WhatsApp: 924 520 026</strong></p>

    @else
   <p><strong>SALUD ECOSMED</strong></p>
        <p style="margin-top: -10px;"><strong>Dirección: AV.PROCERES 7832 URB PRO</strong></p>
		<p style="margin-top: -20px;"><strong>Teléfono: 955020438</strong></p>
		<p style="margin-top: -20px;"><strong>WhatsApp: 955020438</strong></p>
	
    @endif
		
		



    <p style="margin-top: -20px;"><strong>________________________________________________________</strong>  </p>
    <p style="margin-top: -15px;font-size: 14px;text-align: center;"><strong>NÚMERO DE RECIBO ELECTRÓNICO:0000{{ $header->id_atec}}</strong></p>
    <p style="margin-top: -30px;"><strong>________________________________________________________</strong>  </p>

    <p style="margin-left: -80px;font-size: 14px;"><strong>FECHA:</strong> {{$header->created_at}} </p>


	

	</div>
    <br><br>
    <div  style="font-size: 15px; text-align: left;margin-bottom:-20px;margin-top: 20px;">
	<p style="margin-left: -40px;"><strong>PACIENTE:</strong> {{ $header->apellidos}},{{ $header->nombres}}</p>
    <p style="margin-left: -40px;margin-top: -10px;"><strong>DNI:</strong> {{ $header->dni}}</p>
    <p style="margin-left: -40px;margin-top: -10px;margin-bottom: 30px;"><strong>EDAD:</strong> {{ $edad}}</p>

	
	</div>

  
  <table width="100%" class="table-main">
      <thead>
        <tr>
          <th style="font-size: 15px"><center>Detalle.<center></th>
        </tr>
      </thead>
      <tbody>
      @foreach($ticket as $at)
          <tr>
            <td style="font-size: 15px; line-height: 30px;" align="center">{{ $at->detalle}}</td>
          </tr>
      @endforeach
      </tbody>
    </table>

 



    </body>
