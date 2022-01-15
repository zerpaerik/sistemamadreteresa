<?php

namespace App\Http\Controllers;
use App\Equipos;
use App\Analisis;
use App\Clientes;
use App\Tiempo;
use App\Paquetes;
use App\Pacientes;
use App\Servicios;
use App\PlacasUsadas;
use App\PlacasMalogradas;
use App\User;
use App\Atenciones;
use App\Atec;
use App\Consultas;
use App\Metodos;
use App\MetoPro;
use App\Comisiones;
use App\Cobrar;
use App\Debitos;
use App\DebitosB;
use App\HistorialCobros;
use App\Creditos;
use App\CreditosB;
use App\Sesiones;
use App\ResultadosServicios;
use App\ResultadosLaboratorio;

use Auth;
use Illuminate\Http\Request;
use DB;


class CreditosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function creditosb(Request $request)
    {

      if($request->inicio){
        $f1 = $request->inicio;
        $f2 = $request->fin;

      

        $serv = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 0)
        ->where('a.tipo_atencion', '=', 1)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->orderBy('a.id','DESC')
        ->where('a.sede', '=', $request->session()->get('sede'));
       // ->get(); 

        $eco = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen', 'a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 0)
        ->where('a.tipo_atencion', '=', 2)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->orderBy('a.id','DESC')
        ->where('a.sede', '=', $request->session()->get('sede'));

        $cons = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 0)
        ->where('a.tipo_atencion', '=', 5)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->orderBy('a.id','DESC')
        ->where('a.sede', '=', $request->session()->get('sede'));

        $meto = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 0)
        ->where('a.tipo_atencion', '=', 6)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->orderBy('a.id','DESC')
        ->where('a.sede', '=', $request->session()->get('sede'));

        $salud = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 0)
        ->where('a.tipo_atencion', '=', 8)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->orderBy('a.id','DESC')
        ->where('a.sede', '=', $request->session()->get('sede'));

        $ana = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('analisis as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 0)
        ->where('a.tipo_atencion', '=', 4)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->orderBy('a.id','DESC')
        ->where('a.sede', '=', $request->session()->get('sede'));

        $paq = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('paquetes as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 0)
        ->where('a.tipo_atencion', '=', 7)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->orderBy('a.id','DESC')
        ->where('a.sede', '=', $request->session()->get('sede'));


        $metodos = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('meto_pro as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 0)
        ->where('a.tipo_atencion', '=', 6)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->orderBy('a.id','DESC')
        ->where('a.sede', '=', $request->session()->get('sede'));

        $consultas = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('tipo_con as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 0)
        ->where('a.tipo_atencion', '=', 5)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->orderBy('a.id','DESC')
        ->where('a.sede', '=', $request->session()->get('sede'));
        //->get(); 

     

        $atenciones = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 0)
        ->where('a.tipo_atencion', '=', 3)
        ->where('a.monto', '!=', '0')
        ->where('a.sede', '=', $request->session()->get('sede'))
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->orderBy('a.id','DESC')
        ->union($serv)
        ->union($eco)
        ->union($ana)
        ->union($metodos)
        ->union($salud)
        ->union($paq)
        ->union($consultas)
        ->get(); 

        $total = CreditosB::where('migrado', 0)
        ->where('sede','=',$request->session()->get('sede'))
        ->whereBetween('created_at',[date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->select(DB::raw('COUNT(*) as cantidad, SUM(monto) as monto'))
        ->first();




      } else {

        $f1 = date('Y-m-d');
        $f2 = date('Y-m-d');

        $serv = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 0)
        ->where('a.tipo_atencion', '=', 1)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->where('a.sede', '=', $request->session()->get('sede'))
        ->orderBy('a.id','desc');

     

        $eco = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 0)
        ->where('a.tipo_atencion', '=', 2)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->where('a.sede', '=', $request->session()->get('sede'))
        ->orderBy('a.id','desc');


        $cons = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 0)
        ->where('a.tipo_atencion', '=', 5)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->where('a.sede', '=', $request->session()->get('sede'))
        ->orderBy('a.id','desc');


        $meto = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 0)
        ->where('a.tipo_atencion', '=', 6)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->where('a.sede', '=', $request->session()->get('sede'))   
        ->orderBy('a.id','desc');

        $salud = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 0)
        ->where('a.tipo_atencion', '=', 8)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->where('a.sede', '=', $request->session()->get('sede'))   
        ->orderBy('a.id','desc');


        $ana = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('analisis as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 0)
        ->where('a.tipo_atencion', '=', 4)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->where('a.sede', '=', $request->session()->get('sede'))
        ->orderBy('a.id','desc');


        $paq = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('paquetes as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 0)
        ->where('a.tipo_atencion', '=', 7)
        ->where('a.monto', '!=', '0')
        ->where('a.sede', '=', $request->session()->get('sede'))
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->orderBy('a.id','desc');

        $metodos = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('meto_pro as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 0)
        ->where('a.tipo_atencion', '=', 6)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->where('a.sede', '=', $request->session()->get('sede'))
        ->orderBy('a.id','desc');

        
        $consultas = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('tipo_con as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 0)
        ->where('a.tipo_atencion', '=', 5)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->where('a.sede', '=', $request->session()->get('sede'))
        ->orderBy('a.id','desc');

        //->get(); 

     

        $atenciones = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 0)
        ->where('a.tipo_atencion', '=', 3)
        ->where('a.monto', '!=', '0')
        ->where('a.sede', '=', $request->session()->get('sede'))
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->union($serv)
        ->union($eco)
        ->union($ana)
        ->union($metodos)
        ->union($salud)
        ->union($consultas)
        ->union($paq)
        ->orderBy('id','desc')
        ->get(); 


        $total = CreditosB::where('migrado', 0)
        ->where('sede','=',$request->session()->get('sede'))
        ->whereBetween('created_at',[date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->select(DB::raw('COUNT(*) as cantidad, SUM(monto) as monto'))
        ->first();

 





      }


     

        
        

        return view('creditos.indexb', compact('atenciones','f1','f2','total'));
        //
    }

    public function creditosc(Request $request)
    {

      if($request->inicio){
        $f1 = $request->inicio;
        $f2 = $request->fin;

      

        $serv = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 1)
        ->where('a.tipo_atencion', '=', 1)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->orderBy('a.id','DESC')
        ->where('a.sede', '=', $request->session()->get('sede'));
       // ->get(); 

        $eco = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen', 'a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 1)
        ->where('a.tipo_atencion', '=', 2)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->orderBy('a.id','DESC')
        ->where('a.sede', '=', $request->session()->get('sede'));

        $cons = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 1)
        ->where('a.tipo_atencion', '=', 5)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->orderBy('a.id','DESC')
        ->where('a.sede', '=', $request->session()->get('sede'));

        $meto = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 1)
        ->where('a.tipo_atencion', '=', 6)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->orderBy('a.id','DESC')
        ->where('a.sede', '=', $request->session()->get('sede'));

        $salud = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 1)
        ->where('a.tipo_atencion', '=', 8)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->orderBy('a.id','DESC')
        ->where('a.sede', '=', $request->session()->get('sede'));

        $ana = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('analisis as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 1)
        ->where('a.tipo_atencion', '=', 4)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->orderBy('a.id','DESC')
        ->where('a.sede', '=', $request->session()->get('sede'));

        $paq = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('paquetes as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 1)
        ->where('a.tipo_atencion', '=', 7)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->orderBy('a.id','DESC')
        ->where('a.sede', '=', $request->session()->get('sede'));


        $metodos = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('meto_pro as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 1)
        ->where('a.tipo_atencion', '=', 6)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->orderBy('a.id','DESC')
        ->where('a.sede', '=', $request->session()->get('sede'));

        $consultas = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('tipo_con as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 1)
        ->where('a.tipo_atencion', '=', 5)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->orderBy('a.id','DESC')
        ->where('a.sede', '=', $request->session()->get('sede'));
        //->get(); 

     

        $atenciones = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 1)
        ->where('a.tipo_atencion', '=', 3)
        ->where('a.monto', '!=', '0')
        ->where('a.sede', '=', $request->session()->get('sede'))
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->orderBy('a.id','DESC')
        ->union($serv)
        ->union($eco)
        ->union($ana)
        ->union($metodos)
        ->union($salud)
        ->union($paq)
        ->union($consultas)
        ->get(); 

        
        $total = CreditosB::where('migrado', 1)
        ->where('sede','=',$request->session()->get('sede'))
        ->whereBetween('created_at',[date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->select(DB::raw('COUNT(*) as cantidad, SUM(monto) as monto'))
        ->first();




      } else {

        $f1 = date('Y-m-d');
        $f2 = date('Y-m-d');

        $serv = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 1)
        ->where('a.tipo_atencion', '=', 1)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->where('a.sede', '=', $request->session()->get('sede'))
        ->orderBy('a.id','desc');

     

        $eco = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 1)
        ->where('a.tipo_atencion', '=', 2)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->where('a.sede', '=', $request->session()->get('sede'))
        ->orderBy('a.id','desc');


        $cons = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 1)
        ->where('a.tipo_atencion', '=', 5)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->where('a.sede', '=', $request->session()->get('sede'))
        ->orderBy('a.id','desc');


        $meto = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 1)
        ->where('a.tipo_atencion', '=', 6)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->where('a.sede', '=', $request->session()->get('sede'))   
        ->orderBy('a.id','desc');

        $salud = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 1)
        ->where('a.tipo_atencion', '=', 8)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->where('a.sede', '=', $request->session()->get('sede'))   
        ->orderBy('a.id','desc');


        $ana = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('analisis as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 1)
        ->where('a.tipo_atencion', '=', 4)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->where('a.sede', '=', $request->session()->get('sede'))
        ->orderBy('a.id','desc');


        $paq = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('paquetes as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 1)
        ->where('a.tipo_atencion', '=', 7)
        ->where('a.monto', '!=', '0')
        ->where('a.sede', '=', $request->session()->get('sede'))
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->orderBy('a.id','desc');

        $metodos = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('meto_pro as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 1)
        ->where('a.tipo_atencion', '=', 6)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->where('a.sede', '=', $request->session()->get('sede'))
        ->orderBy('a.id','desc');

        
        $consultas = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('tipo_con as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 1)
        ->where('a.tipo_atencion', '=', 5)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->where('a.sede', '=', $request->session()->get('sede'))
        ->orderBy('a.id','desc');

        //->get(); 

     

        $atenciones = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.eliminado_por','a.id_atec','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle','cred.migrado','cred.id as credito')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->join('creditosb as cred','cred.id_atencion','a.id')
        ->where('cred.migrado', '=', 1)
        ->where('a.tipo_atencion', '=', 3)
        ->where('a.monto', '!=', '0')
        ->where('a.sede', '=', $request->session()->get('sede'))
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->union($serv)
        ->union($eco)
        ->union($ana)
        ->union($metodos)
        ->union($salud)
        ->union($consultas)
        ->union($paq)
        ->orderBy('id','desc')
        ->get(); 

         
        $total = CreditosB::where('migrado', 1)
        ->where('sede','=',$request->session()->get('sede'))
        ->whereBetween('created_at',[date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->select(DB::raw('COUNT(*) as cantidad, SUM(monto) as monto'))
        ->first();

 





      }


     

        
        

        return view('creditos.indexc', compact('atenciones','f1','f2','total'));
        //
    }


    public function procesar($id)
    {

     

      $con = CreditosB::where('id','=',$id)->first();
      $con->migrado = 1;
      $con->save();


      return back();

      
    }

    public function reversar($id)
    {

     

      $con = CreditosB::where('id','=',$id)->first();
      $con->migrado = 0;
      $con->save();


      return back();

      
    }


    public function gastosb(Request $request)
    {

        if($request->inicio){
            $f1 = $request->inicio;
            $f2 = $request->fin;


        $gastos = DB::table('debitosb as a')
        ->select('a.id','a.descripcion','a.monto','a.recibido','a.usuario','a.sede','a.tipo','a.migrado','a.created_at','b.name')
        ->join('users as b','b.id','a.usuario')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->where('a.migrado','=',0)
        ->where('a.sede','=',$request->session()->get('sede'))
        ->get(); 

        


        $deb = DebitosB::whereBetween('created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->where('sede','=',$request->session()->get('sede'))
        ->where('migrado','=',0)
        ->select(DB::raw('COUNT(*) as cantidad, SUM(monto) as monto'))
        ->first();

        if ($deb->cantidad == 0) {
        $deb->monto = 0;
        }
            


        } else {
            $f1 =date('Y-m-d');
            $f2 = date('Y-m-d');

            $gastos = DB::table('debitosb as a')
            ->select('a.id','a.descripcion','a.monto','a.recibido','a.sede','a.usuario','a.sede','a.tipo','a.created_at','a.migrado','b.name')
            ->join('users as b','b.id','a.usuario')
            ->where('a.sede','=',$request->session()->get('sede'))
            ->where('a.migrado','=',0)
            ->whereDate('a.created_at', date('Y-m-d 00:00:00', strtotime($f1)))
            ->get(); 

          
            
        $deb = DebitosB::whereDate('created_at', date('Y-m-d 00:00:00', strtotime($f1)))
        ->where('sede','=',$request->session()->get('sede'))
        ->where('migrado','=',0)
        ->select(DB::raw('COUNT(*) as cantidad, SUM(monto) as monto'))
        ->first();

        if ($deb->cantidad == 0) {
        $deb->monto = 0;
        }
            
        }

        return view('creditos.gastosb', compact('gastos','f1','f2','deb'));
        //
    }

    public function gastosc(Request $request)
    {

        if($request->inicio){
            $f1 = $request->inicio;
            $f2 = $request->fin;


        $gastos = DB::table('debitosb as a')
        ->select('a.id','a.descripcion','a.monto','a.tipo_deb','a.recibido','a.usuario','a.eliminadoc','a.sede','a.tipo','a.migrado','a.created_at','b.name')
        ->join('users as b','b.id','a.usuario')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->where('a.migrado','=',1)
        ->where('a.eliminadoc','=',0)
        ->where('a.sede','=',$request->session()->get('sede'))
        ->get(); 

        


        $deb = DebitosB::whereBetween('created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->where('sede','=',$request->session()->get('sede'))
        ->where('migrado','=',1)
        ->where('eliminadoc','=',0)
        ->select(DB::raw('COUNT(*) as cantidad, SUM(monto) as monto'))
        ->first();

        if ($deb->cantidad == 0) {
        $deb->monto = 0;
        }
            


        } else {
            $f1 =date('Y-m-d');
            $f2 = date('Y-m-d');

            $gastos = DB::table('debitosb as a')
            ->select('a.id','a.descripcion','a.monto','a.recibido','a.tipo_deb','a.eliminadoc','a.sede','a.usuario','a.sede','a.tipo','a.created_at','a.migrado','b.name')
            ->join('users as b','b.id','a.usuario')
            ->where('a.sede','=',$request->session()->get('sede'))
            ->where('a.migrado','=',1)
            ->where('a.eliminadoc','=',0)
            ->whereDate('a.created_at', date('Y-m-d 00:00:00', strtotime($f1)))
            ->get(); 

          
            
        $deb = DebitosB::whereDate('created_at', date('Y-m-d 00:00:00', strtotime($f1)))
        ->where('sede','=',$request->session()->get('sede'))
        ->where('migrado','=',1)
        ->where('eliminadoc','=',0)
        ->select(DB::raw('COUNT(*) as cantidad, SUM(monto) as monto'))
        ->first();

        if ($deb->cantidad == 0) {
        $deb->monto = 0;
        }
            
        }

        return view('creditos.gastosc', compact('gastos','f1','f2','deb'));
        //
    }

    public function procesarg($id)
    {


     
     
      $con = DebitosB::where('id','=',$id)->first();
      $con->migrado = 1;
      $con->save();

      $credb = CreditosB::where('id_egreso','=',$id)->first();
      $credb->migrado = 1;
      $credb->save();


      return back();

      
    }

    public function reversarg($id)
    {

     

      $con = DebitosB::where('id','=',$id)->first();
      $con->migrado = 0;
      $con->save();

      $credb = CreditosB::where('id_egreso','=',$id)->first();
      $credb->migrado = 0;
      $credb->save();


      return back();

      
    }

    public function deleteg($id)
    {

     

      $con = Debitos::where('id','=',$id)->first();
      $con->eliminadoc = 1;
      $con->save();

      return back();

      
    }


  
}

