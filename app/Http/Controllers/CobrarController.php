<?php

namespace App\Http\Controllers;
use App\Equipos;
use App\Analisis;
use App\Clientes;
use App\Tiempo;
use App\Material;
use App\Pacientes;
use App\Servicios;
use App\User;
use App\Atenciones;
use App\Cobrar;
use App\HistorialCobros;
use Auth;
use Illuminate\Http\Request;
use DB;


class CobrarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

      if ($request->inicio) {
        $f1 = $request->inicio;
        $f2 = $request->fin;

        $cobrar = DB::table('cuentas_cobrar as a')
        ->select('a.id', 'a.estatus', 'a.id_atencion','a.detalle','a.created_at','a.resta', 'at.id_paciente','at.usuario',  'at.tipo_atencion', 'at.sede', 'at.tipo_origen', 'at.id_origen', 'at.monto as total', 'b.nombres', 'b.apellidos', 'c.name as nameo', 'c.lastname as lasto', 'd.name as nameu', 'd.lastname as lastu', 'se.nombre as sedename')
        ->join('atenciones as at', 'at.id', 'a.id_atencion')
        ->join('pacientes as b', 'b.id', 'at.id_paciente')
        ->join('users as c', 'c.id', 'at.id_origen')
        ->join('users as d', 'd.id', 'at.usuario')
        ->join('sedes as se', 'se.id', 'at.sede')
        ->whereBetween('a.created_at', [$f1, $f2])
        ->where('a.estatus', '=', 1)
        ->where('a.resta', '!=', 0)
        ->get();


    } else {

        $f1 = date('Y-m-d');
        $f2 = date('Y-m-d');



        $cobrar = DB::table('cuentas_cobrar as a')
        ->select('a.id', 'a.estatus', 'a.id_atencion','a.detalle','a.created_at','a.resta', 'at.id_paciente','at.usuario',  'at.tipo_atencion', 'at.sede', 'at.tipo_origen', 'at.id_origen', 'at.monto as total', 'b.nombres', 'b.apellidos', 'c.name as nameo', 'c.lastname as lasto', 'd.name as nameu', 'd.lastname as lastu', 'se.nombre as sedename')
        ->join('atenciones as at', 'at.id', 'a.id_atencion')
        ->join('pacientes as b', 'b.id', 'at.id_paciente')
        ->join('users as c', 'c.id', 'at.id_origen')
        ->join('users as d', 'd.id', 'at.usuario')
        ->join('sedes as se', 'se.id', 'at.sede')
        ->whereBetween('a.created_at', [$f1, $f2])
        ->where('a.estatus', '=', 1)
        ->where('a.resta', '!=', 0)
        ->get();

    }

      return view('cuentascobrar.index', compact('cobrar','f1','f2'));
       
    }


    public function historial(Request $request)
    {

      if ($request->inicio) {
        $f1 = $request->inicio;
        $f2 = $request->fin;

        $historial = DB::table('historial_cobros as a')
        ->select('a.id', 'a.id_cobro', 'a.tipopago','a.monto','a.created_at','a.sede', 'co.id_atencion','co.resta','at.id_paciente','at.usuario',  'at.tipo_atencion', 'at.sede', 'at.tipo_origen', 'at.id_origen', 'at.monto as total', 'b.nombres', 'b.apellidos', 'c.name as nameo', 'c.lastname as lasto', 'd.name as nameu', 'd.lastname as lastu', 'se.nombre as sedename','sec.nombre as sedec')
        ->join('cobros as co', 'co.id', 'a.id_cobro')
        ->join('atenciones as at', 'at.id', 'co.id_atencion')
        ->join('pacientes as b', 'b.id', 'at.id_paciente')
        ->join('users as c', 'c.id', 'at.id_origen')
        ->join('users as d', 'd.id', 'at.usuario')
        ->join('sedes as se', 'se.id', 'at.sede')
        ->join('sedes as sec', 'se.id', 'a.sede')
        ->whereBetween('a.created_at', [$f1, $f2])
        ->get();


    } else {

        $f1 = date('Y-m-d');
        $f2 = date('Y-m-d');


        $historial = DB::table('historial_cobros as a')
        ->select('a.id', 'a.id_cobro', 'a.tipopago','a.monto','a.created_at','a.sede', 'co.id_atencion','co.resta','at.id_paciente','at.usuario',  'at.tipo_atencion', 'at.sede', 'at.tipo_origen', 'at.id_origen', 'at.monto as total', 'b.nombres', 'b.apellidos', 'c.name as nameo', 'c.lastname as lasto', 'd.name as nameu', 'd.lastname as lastu', 'se.nombre as sedename','sec.nombre as sedec')
        ->join('cuentas_cobrar as co', 'co.id', 'a.id_cobro')
        ->join('atenciones as at', 'at.id', 'co.id_atencion')
        ->join('pacientes as b', 'b.id', 'at.id_paciente')
        ->join('users as c', 'c.id', 'at.id_origen')
        ->join('users as d', 'd.id', 'at.usuario')
        ->join('sedes as se', 'se.id', 'at.sede')
        ->join('sedes as sec', 'se.id', 'a.sede')
        ->whereBetween('a.created_at', [$f1, $f2])
        ->get();


    }

      return view('cuentascobrar.historial', compact('historial','f1','f2'));
       
    }

    public function ticket($id)
    {


        $ticket = DB::table('historial_cobros as a')
        ->select('a.id', 'a.id_cobro', 'a.tipopago','a.monto','a.created_at','a.sede', 'co.id_atencion','co.resta','at.id_paciente','at.usuario',  'at.tipo_atencion', 'at.sede', 'at.tipo_origen', 'at.id_origen', 'at.monto as total', 'b.nombres', 'b.apellidos', 'c.name as nameo', 'c.lastname as lasto', 'd.name as nameu', 'd.lastname as lastu', 'se.nombre as sedename')
        ->join('cuentas_cobrar as co', 'co.id', 'a.id_cobro')
        ->join('atenciones as at', 'at.id', 'co.id_atencion')
        ->join('pacientes as b', 'b.id', 'at.id_paciente')
        ->join('users as c', 'c.id', 'at.id_origen')
        ->join('users as d', 'd.id', 'at.usuario')
        ->join('sedes as se', 'se.id', 'at.sede')
        ->where('a.id','=', $id)
        ->first();

      



        $view = \View::make('cuentascobrar.ticket', compact('ticket'));
        $pdf = \App::make('dompdf.wrapper');
        //$pdf->setPaper('A5', 'landscape');
        //$pdf->setPaper(array(0,0,600.00,360.00));
        $pdf->setPaper(array(0,0,800.00,3000.00));
        $pdf->loadHTML($view);
     
       
        return $pdf->stream('ticket-pedido'.'.pdf'); 
       }



    


    public function cobrar($id)
    {

        
        $cobrar = DB::table('cuentas_cobrar as a')
        ->select('a.id','a.id_atencion','a.resta','u.monto')
        ->join('atenciones as u','u.id','a.id_atencion')
        ->where('a.id','=',$id)
        ->first(); 


        return view('cuentascobrar.cobrar', compact('cobrar'));
    }

    public function procesar(Request $request)
    {

      $conh = Cobrar::where('id','=',$request->id)->first();
      $atencio = Atenciones::where('id','=',$conh->id_atencion)->first();

      $at = Atenciones::where('id','=',$conh->id_atencion)->first();
      $at->abono = $atencio->abono + $request->pagar;
      $at->resta = $atencio->resta - $request->pagar;
      $at->save();

      $con = Cobrar::where('id','=',$request->id)->first();
      $con->resta = $conh->resta - $request->pagar;
      $con->save();

      $cb = new HistorialCobros();
      $cb->id_cobro =  $request->id;
      $cb->monto = $request->pagar;
      $cb->tipopago = $request->tipopago;
      $cb->sede = $request->session()->get('sede');
      $cb->save();

      return back();

      
    }

   


}