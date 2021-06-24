<?php

namespace App\Http\Controllers;
use App\Equipos;
use App\Analisis;
use App\Clientes;
use App\Tiempo;
use App\Paquetes;
use App\Pacientes;
use App\Servicios;
use App\User;
use App\Atenciones;
use App\Consultas;
use App\Metodos;
use App\MetoPro;
use App\Comisiones;
use App\Cobrar;
use App\ResultadosServicios;
use App\ResultadosLaboratorio;

use Auth;
use Illuminate\Http\Request;
use DB;


class AtencionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

      if($request->inicio){
        $f1 = $request->inicio;

      

        $serv = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->where('a.estatus', '=', 1)
        ->where('a.tipo_atencion', '=', 1)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f1))])
        ->orderBy('a.id','DESC')
        ->where('a.sede', '=', $request->session()->get('sede'));
       // ->get(); 

        $eco = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->where('a.estatus', '=', 1)
        ->where('a.tipo_atencion', '=', 2)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f1))])
        ->orderBy('a.id','DESC')
        ->where('a.sede', '=', $request->session()->get('sede'));

        $cons = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->where('a.estatus', '=', 1)
        ->where('a.tipo_atencion', '=', 5)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f1))])
        ->orderBy('a.id','DESC')
        ->where('a.sede', '=', $request->session()->get('sede'));

        $meto = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->where('a.estatus', '=', 1)
        ->where('a.tipo_atencion', '=', 6)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f1))])
        ->orderBy('a.id','DESC')
        ->where('a.sede', '=', $request->session()->get('sede'));

        $ana = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('analisis as s','s.id','a.id_tipo')
        ->where('a.estatus', '=', 1)
        ->where('a.tipo_atencion', '=', 4)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f1))])
        ->orderBy('a.id','DESC')
        ->where('a.sede', '=', $request->session()->get('sede'));

        $paq = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('paquetes as s','s.id','a.id_tipo')
        ->where('a.estatus', '=', 1)
        ->where('a.tipo_atencion', '=', 7)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f1))])
        ->orderBy('a.id','DESC')
        ->where('a.sede', '=', $request->session()->get('sede'));


        $metodos = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('meto_pro as s','s.id','a.id_tipo')
        ->where('a.estatus', '=', 1)
        ->where('a.tipo_atencion', '=', 6)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f1))])
        ->orderBy('a.id','DESC')
        ->where('a.sede', '=', $request->session()->get('sede'));

        $consultas = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('tipo_con as s','s.id','a.id_tipo')
        ->where('a.estatus', '=', 1)
        ->where('a.tipo_atencion', '=', 5)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f1))])
        ->orderBy('a.id','DESC')
        ->where('a.sede', '=', $request->session()->get('sede'));
        //->get(); 

     

        $atenciones = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->where('a.estatus', '=', 1)
        ->where('a.tipo_atencion', '=', 3)
        ->where('a.monto', '!=', '0')
        ->where('a.sede', '=', $request->session()->get('sede'))
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f1))])
        ->orderBy('a.id','DESC')
        ->union($serv)
        ->union($eco)
        ->union($ana)
        ->union($metodos)
        ->union($paq)
        ->union($consultas)
        ->get(); 



      } else {

        $f1 = date('Y-m-d');

        $serv = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->where('a.estatus', '=', 1)
        ->where('a.tipo_atencion', '=', 1)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f1))])
        ->where('a.sede', '=', $request->session()->get('sede'))
        ->orderBy('a.id','desc');

     

        $eco = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->where('a.estatus', '=', 1)
        ->where('a.tipo_atencion', '=', 2)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f1))])
        ->where('a.sede', '=', $request->session()->get('sede'))
        ->orderBy('a.id','desc');


        $cons = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->where('a.estatus', '=', 1)
        ->where('a.tipo_atencion', '=', 5)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f1))])
        ->where('a.sede', '=', $request->session()->get('sede'))
        ->orderBy('a.id','desc');


        $meto = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->where('a.estatus', '=', 1)
        ->where('a.tipo_atencion', '=', 6)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f1))])
        ->where('a.sede', '=', $request->session()->get('sede'))   
        ->orderBy('a.id','desc');


        $ana = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('analisis as s','s.id','a.id_tipo')
        ->where('a.estatus', '=', 1)
        ->where('a.tipo_atencion', '=', 4)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f1))])
        ->where('a.sede', '=', $request->session()->get('sede'))
        ->orderBy('a.id','desc');


        $paq = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('paquetes as s','s.id','a.id_tipo')
        ->where('a.estatus', '=', 1)
        ->where('a.tipo_atencion', '=', 7)
        ->where('a.monto', '!=', '0')
        ->where('a.sede', '=', $request->session()->get('sede'))
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f1))])
        ->orderBy('a.id','desc');

        $metodos = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('meto_pro as s','s.id','a.id_tipo')
        ->where('a.estatus', '=', 1)
        ->where('a.tipo_atencion', '=', 6)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f1))])
        ->where('a.sede', '=', $request->session()->get('sede'))
        ->orderBy('a.id','desc');

        
        $consultas = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('tipo_con as s','s.id','a.id_tipo')
        ->where('a.estatus', '=', 1)
        ->where('a.tipo_atencion', '=', 5)
        ->where('a.monto', '!=', '0')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f1))])
        ->where('a.sede', '=', $request->session()->get('sede'))
        ->orderBy('a.id','desc');

        //->get(); 

     

        $atenciones = DB::table('atenciones as a')
        ->select('a.id','a.tipo_origen','a.id_origen','a.id_tipo','a.pagado','a.atendido','a.sede','a.usuario','a.created_at','a.estatus','a.id_paciente','a.tipo_atencion','a.monto','a.abono','a.tipo_pago','b.nombres','b.apellidos','b.dni','c.name as nameo','c.lastname as lasto','d.name as nameu','d.lastname as lastu','s.nombre as detalle')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('users as c','c.id','a.id_origen')
        ->join('users as d','d.id','a.usuario')
        ->join('servicios as s','s.id','a.id_tipo')
        ->where('a.estatus', '=', 1)
        ->where('a.tipo_atencion', '=', 3)
        ->where('a.monto', '!=', '0')
        ->where('a.sede', '=', $request->session()->get('sede'))
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f1))])
        ->union($serv)
        ->union($eco)
        ->union($ana)
        ->union($metodos)
        ->union($consultas)
        ->union($paq)
        ->orderBy('id','desc')
        ->get(); 

 





      }

        
        

        return view('atenciones.index', compact('atenciones','f1'));
        //
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $ecografias = Servicios::where('estatus','=',1)->where('tipo','=','ECOGRAFIA')->get();
        $rayos = Servicios::where('estatus','=',1)->where('tipo','=','RAYOS')->get();
        $otros = Servicios::where('estatus','=',1)->where('tipo','=','OTROS')->get();
        $analisis = Analisis::where('estatus','=',1)->get();
        $paquetes = Paquetes::where('estatus','=',1)->get();

        $met = MetoPro::where('estatus','=',1)->get();

        $personal = User::where('estatus','=',1)->where('tipo','=',1)->where('tipo_personal','=','Especialista')->get();


        if(!is_null($request->pac)){
            $paciente = Pacientes::where('dni','=',$request->pac)->first();
            $res = 'SI';
            } else {
            $paciente = Pacientes::where('dni','=','LABORATORIO')->first();
            $res = 'NO';
            }

        return view('atenciones.create', compact('paquetes','personal','ecografias','rayos','otros','analisis','paciente','res','met'));
    }

    public function getServicio($id)
    {
        return Servicios::where('id','=',$id)->first();

    }

    public function getPaquetes($id)
    {
        return Paquetes::where('id','=',$id)->first();

    }

    public function getAnalisis($id)
    {
        return Analisis::where('id','=',$id)->first();

    }

    public function personal(){
     
        $personal = User::where('estatus','=',1)->where('tipo','=',1)->get();

 
     return view('atenciones.personal', compact('personal'));
   }

   public function profesionales(){
     
    $profesionales = User::where('estatus','=',1)->where('tipo','=',2)->get();


 return view('atenciones.profesionales', compact('profesionales'));
}

public function particular(){

return view('atenciones.particular');
}

    public function datapac($id){

       

        $pacientes = DB::table('pacientes as a')
       ->select('a.id','a.dni','a.nombres','a.apellidos','a.direccion','a.telefono','a.fechanac')
       ->where('a.dni','=',$id)
       ->first();

       dd($pacientes);

          // $edad = Carbon::parse($pacientes->fechanac)->age;

       //return $pacientes;

           return view('solicitudes.pacientes',compact('pacientes'));


    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $searchUsuarioID = DB::table('users')
        ->select('*')
        ->where('id','=', $request->origen_usuario)
        ->first();  

       // dd($request->precio_con);

        //GUARDANDO CONSULTAS
        
        if(!is_null($request->precio_con)){
            $lab = new Atenciones();
            $lab->tipo_origen =  3;
            $lab->id_origen = 1;
            $lab->id_paciente =  $request->paciente;
            $lab->tipo_atencion = 5;
            $lab->id_tipo = $request->tipo_con;
            $lab->monto = $request->precio_con;
            $lab->abono = $request->precio_con;
            $lab->tipo_pago = $request->tipop_con;
            $lab->usuario = Auth::user()->id;
            $lab->sede = $request->session()->get('sede');
            $lab->save();


            if($request->precio_con > $request->precio_con){

            }

            $con = new Consultas();
            $con->id_paciente =  $request->paciente;
            $con->id_atencion =  $lab->id;
            $con->id_especialista =  $request->esp_con;
            $con->tipo =  $request->tipo_con;
            $con->monto = $request->precio_con;
            $con->usuario = Auth::user()->id;
            $con->sede = $request->session()->get('sede');
            $con->save();

        }

        
        //GUARDANDO METODOS
        
        if(!is_null($request->precio_met)){
            $lab = new Atenciones();
            $lab->tipo_origen =  $request->origen;
            $lab->id_origen = $searchUsuarioID->id;
            $lab->id_paciente =  $request->paciente;
            $lab->tipo_atencion = 6;
            $lab->id_tipo = $request->metodo;
            $lab->monto = $request->precio_met;
            $lab->abono = $request->precio_met;
            $lab->tipo_pago = $request->tipop_met;
            $lab->usuario = Auth::user()->id;
            $lab->sede = $request->session()->get('sede');
            $lab->save();

            $met = new Metodos();
            $met->id_paciente =  $request->paciente;
            $met->id_atencion =  $lab->id;
            $met->id_producto =  $request->metodo;
            $met->monto = $request->precio_met;
            $met->usuario = Auth::user()->id;
            $met->sede = $request->session()->get('sede');
            $met->save();

        }

        //GUARDANDO SERVICIOS
        
        if (isset($request->id_servicio)) {
            foreach ($request->id_servicio['servicios'] as $key => $serv) {
              if (!is_null($serv['servicio'])) {

                $servicio = Servicios::where('id','=',$serv['servicio'])->first();

                //TIPO ATENCION SERVICIOS= 1
                $lab = new Atenciones();
                $lab->tipo_origen =  $request->origen;
                $lab->id_origen = $searchUsuarioID->id;
                $lab->id_paciente =  $request->paciente;
                $lab->tipo_atencion = 1;
                $lab->id_tipo = $serv['servicio'];
                $lab->monto = (float)$request->monto_s['servicios'][$key]['monto'];
                $lab->abono = (float)$request->monto_abol['servicios'][$key]['abono'];
                $lab->tipo_pago = $request->id_pago['servicios'][$key]['tipop'];
                $lab->usuario = Auth::user()->id;
                $lab->sede = $request->session()->get('sede');
                $lab->save();

              /*  $rs = new ResultadosServicios();
                $rs->id_atencion =  $lab->id;
                $rs->id_servicio = $serv['servicio'];
                $rs->save();*/

                if($request->monto_s['servicios'][$key]['monto'] > $request->monto_abol['servicios'][$key]['abono']){

                  $cb = new Cobrar();
                  $cb->id_atencion =  $lab->id;
                  $cb->detalle =  $servicio->nombre;
                  $cb->resta =(float)$request->monto_s['servicios'][$key]['monto'] - (float)$request->monto_abol['servicios'][$key]['abono'];
                  $cb->save();
              
                }



                if($request->origen == 1){
                  $com = new Comisiones();
                  $com->id_atencion =  $lab->id;
                  $com->porcentaje = $servicio->porcentaje;
                  $com->detalle =  $servicio->nombre;
                  $com->monto = (float)$request->monto_s['servicios'][$key]['monto'] * $servicio->porcentaje / 100;
                  $com->estatus = 1;
                  $com->usuario = Auth::user()->id;
                  $com->save();

                } elseif($request->origen == 2) {
                  $com = new Comisiones();
                  $com->id_atencion =  $lab->id;
                  $com->porcentaje = $servicio->porcentaje1;
                  $com->detalle =  $servicio->nombre;
                  $com->monto = (float)$request->monto_s['servicios'][$key]['monto'] * $servicio->porcentaje1 / 100;
                  $com->estatus = 1;
                  $com->usuario = Auth::user()->id;
                  $com->save();

                } else {

                  $com = new Comisiones();
                  $com->id_atencion =  $lab->id;
                  $com->porcentaje = $servicio->porcentaje2;
                  $com->detalle =  $servicio->nombre;
                  $com->monto = (float)$request->monto_s['servicios'][$key]['monto'] * $servicio->porcentaje2 / 100;
                  $com->estatus = 1;
                  $com->usuario = Auth::user()->id;
                  $com->save();

                }



              } 
            }
          }





        //GUARDANDO ANALISIS


        if (isset($request->id_analisi)) {
            foreach ($request->id_analisi['analisis'] as $key => $laboratorio) {
              if (!is_null($laboratorio['analisi'])) {


                $analisis = Analisis::where('id','=',$laboratorio['analisi'])->first();


                //TIPO ATENCION LABORATORIO= 4
                $lab = new Atenciones();
                $lab->tipo_origen =  $request->origen;
                $lab->id_origen = $searchUsuarioID->id;
                $lab->id_paciente =  $request->paciente;
                $lab->tipo_atencion = 4;
                $lab->id_tipo = $laboratorio['analisi'];
                $lab->monto = (float)$request->monto_s['analisis'][$key]['monto'];
                $lab->abono = (float)$request->monto_abol['analisis'][$key]['abono'];
                $lab->tipo_pago = $request->id_pago['analisis'][$key]['tipop'];
                $lab->usuario = Auth::user()->id;
                $lab->sede = $request->session()->get('sede');
                $lab->save();

                $rs = new ResultadosLaboratorio();
                $rs->id_atencion =  $lab->id;
                $rs->id_laboratorio =$laboratorio['analisi'];
                $rs->save();


                if($request->monto_s['analisis'][$key]['monto'] > $request->monto_abol['analisis'][$key]['abono']){

                  $cb = new Cobrar();
                  $cb->id_atencion =  $lab->id;
                  $cb->detalle =  $analisis->nombre;
                  $cb->resta =(float)$request->monto_s['analisis'][$key]['monto'] - (float)$request->monto_abol['analisis'][$key]['abono'];
                  $cb->save();
              
                }



                if($request->origen == 2){
                  $com = new Comisiones();
                  $com->id_atencion =  $lab->id;
                  $com->detalle =  $analisis->nombre;
                  $com->porcentaje = $analisis->porcentaje;
                  $com->monto = (float)$request->monto_s['analisis'][$key]['monto'] * $analisis->porcentaje / 100;
                  $com->estatus = 1;
                  $com->usuario = Auth::user()->id;
                  $com->save();

                } 




              } 
            }
          }

            //GUARDANDO PAQUETES


        if (isset($request->id_paquete)) {
          foreach ($request->id_paquete['paquetes_'] as $key => $paq) {
            if (!is_null($paq['paquete'])) {


              $paquetes = Paquetes::where('id','=',$paq['paquete'])->first();

              //TIPO ATENCION PAQUETE= 7
              $lab = new Atenciones();
              $lab->tipo_origen =  $request->origen;
              $lab->id_origen = $searchUsuarioID->id;
              $lab->id_paciente =  $request->paciente;
              $lab->tipo_atencion = 7;
              $lab->id_tipo = $paq['paquete'];
              $lab->monto = (float)$request->monto_s['paquetes'][$key]['monto'];
              $lab->abono = (float)$request->monto_abol['paquetes'][$key]['abono'];
              $lab->tipo_pago = $request->id_pago['paquetes'][$key]['tipop'];
              $lab->usuario = Auth::user()->id;
              $lab->sede = $request->session()->get('sede');
              $lab->save();


              
              if($request->monto_s['paquetes'][$key]['monto'] > $request->monto_abol['paquetes'][$key]['abono']){

                $cb = new Cobrar();
                $cb->id_atencion =  $lab->id;
                $cb->detalle =  $paquetes->nombre;
                $cb->resta =(float)$request->monto_s['paquetes'][$key]['monto'] - (float)$request->monto_abol['paquetes'][$key]['abono'];
                $cb->save();
            
              }


              if($request->origen == 1){
                $com = new Comisiones();
                $com->id_atencion =  $lab->id;
                $com->detalle =  $paquetes->nombre;
                $com->porcentaje = $paquetes->porcentaje;
                $com->monto = (float)$request->monto_s['paquetes'][$key]['monto'] * $paquetes->porcentaje / 100;
                $com->estatus = 1;
                $com->usuario = Auth::user()->id;
                $com->save();
              } 


              // VERIFICANDO SERVICIOS DE PAQUETE PARA GUARDAR SUS RESULTADPS

              $searchServPaq = DB::table('paquetes_s')
              ->select('*')
              ->where('paquete','=', $paq['paquete'])
              ->get();

              //

              foreach ($searchServPaq as $serv) {
                $id_servicio = $serv->servicio;
          
                $servdetalle =  DB::table('servicios')
                ->select('*')
                ->where('id','=',$id_servicio)
                ->first();
                
                if(! is_null($id_servicio)){

                  if($servdetalle->tipo != 'OTROS'){
                      $rs = new ResultadosServicios();
                      $rs->id_atencion =  $lab->id;
                      $rs->id_servicio = $id_servicio;
                      $rs->save();
                  }
                    
                    }
                }



              // VERIFICANDO LABORATORIOS DE PAQUETE PARA GUARDAR SUS RESULTADPS


              $searchLabPaq = DB::table('paquetes_l')
              ->select('*')
              ->where('paquete','=', $paq['paquete'])
              ->get();


              foreach ($searchLabPaq as $labp) {
                $id_laboratorio = $labp->laboratorio;
                if(!is_null($id_laboratorio)){
                  $rs = new ResultadosLaboratorio();
                  $rs->id_atencion =  $lab->id;
                  $rs->id_laboratorio =$id_laboratorio;
                  $rs->save();
  
                 }
            }

            // VERIFICANDO CANTIDAD DE CONSULTAS EN PAQUETE

            $searchConsPaq = DB::table('paquetes_c')
            ->select('*')
            ->where('paquete','=', $paq['paquete'])
            ->get();
    
          if(count($searchConsPaq) > 0){
    
    
              foreach ($searchConsPaq as $cons) {
                $cantidad=$cons->cantidad;
                 }
    
    
    
             $contador=0;

             
            while ($contador < $cantidad) {
                $con = new Consultas();
                $con->id_paciente =  $request->paciente;
                $con->id_especialista =  $searchUsuarioID->id;
                $con->id_atencion =  $lab->id;
                $con->tipo =  1;
                $con->monto = 0;
                $con->usuario = Auth::user()->id;
                $con->sede = $request->session()->get('sede');
                $con->save();
 
               $contador++;
             } 
    
           }



            //

            // VERIFICANDO CANTIDAD DE CONTROLES EN PAQUETE

            $searchConsPaq = DB::table('paquetes_co')
            ->select('*')
            ->where('paquete','=', $paq['paquete'])
            ->get();
    
          if(count($searchConsPaq) > 0){
    
    
              foreach ($searchConsPaq as $cons) {
                $cantidad=$cons->cantidad;
                 }
    
    
    
             $contador=0;

             
            while ($contador < $cantidad) {
                $con = new Consultas();
                $con->id_paciente =  $request->paciente;
                $con->id_especialista =  $searchUsuarioID->id;
                $con->id_atencion =  $lab->id;
                $con->tipo =  2;
                $con->monto = 0;
                $con->usuario = Auth::user()->id;
                $con->sede = $request->session()->get('sede');
                $con->save();
 
               $contador++;
             } 
    
           }








            } 
          }
        }

          //GUARDANDO ECOGRAFIAS

          if (isset($request->id_ecografia)) {
            foreach ($request->id_ecografia['ecografias'] as $key => $eco) {
              if (!is_null($eco['ecografia'])) {

                $servicio = Servicios::where('id','=',$eco['ecografia'])->first();

                //TIPO ATENCION ECOGRAFIA= 2
                $lab = new Atenciones();
                $lab->tipo_origen =  $request->origen;
                $lab->id_origen = $searchUsuarioID->id;
                $lab->id_paciente =  $request->paciente;
                $lab->tipo_atencion = 2;
                $lab->id_tipo = $eco['ecografia'];
                $lab->monto = (float)$request->monto_s['ecografias'][$key]['monto'];
                $lab->abono = (float)$request->monto_abol['ecografias'][$key]['abono'];
                $lab->tipo_pago = $request->id_pago['ecografias'][$key]['tipop'];
                $lab->usuario = Auth::user()->id;
                $lab->sede = $request->session()->get('sede');
                $lab->save();

                $rs = new ResultadosServicios();
                $rs->id_atencion =  $lab->id;
                $rs->id_servicio = $eco['ecografia'];
                $rs->save();

                   
              if($request->monto_s['ecografias'][$key]['monto'] > $request->monto_abol['ecografias'][$key]['abono']){

                $cb = new Cobrar();
                $cb->id_atencion =  $lab->id;
                $cb->detalle =  $servicio->nombre;
                $cb->resta =(float)$request->monto_s['ecografias'][$key]['monto'] - (float)$request->monto_abol['ecografias'][$key]['abono'];
                $cb->save();
            
              }


                if($request->origen == 1){
                  $com = new Comisiones();
                  $com->id_atencion =  $lab->id;
                  $com->detalle =  $servicio->nombre;
                  $com->porcentaje = $servicio->porcentaje;
                  $com->monto = (float)$request->monto_s['ecografias'][$key]['monto'] * $servicio->porcentaje / 100;
                  $com->estatus = 1;
                  $com->usuario = Auth::user()->id;
                  $com->save();

                } elseif($request->origen == 2) {
                  $com = new Comisiones();
                  $com->id_atencion =  $lab->id;
                  $com->detalle =  $servicio->nombre;
                  $com->porcentaje = $servicio->porcentaje1;
                  $com->monto = (float)$request->monto_s['ecografias'][$key]['monto'] * $servicio->porcentaje1 / 100;
                  $com->estatus = 1;
                  $com->usuario = Auth::user()->id;
                  $com->save();

                } else {

                  $com = new Comisiones();
                  $com->id_atencion =  $lab->id;
                  $com->detalle =  $servicio->nombre;
                  $com->porcentaje = $servicio->porcentaje2;
                  $com->monto = (float)$request->monto_s['ecografias'][$key]['monto'] * $servicio->porcentaje2 / 100;
                  $com->estatus = 1;
                  $com->usuario = Auth::user()->id;
                  $com->save();

                }



              } 
            }
          }

          //GUARDANDO RAYOS X

          if (isset($request->id_rayo)) {
            foreach ($request->id_rayo['rayos'] as $key => $ray) {
              if (!is_null($ray['rayo'])) {

                $servicio = Servicios::where('id','=',$ray['rayo'])->first();


                //TIPO ATENCION RAYOS= 3
                $lab = new Atenciones();
                $lab->tipo_origen =  $request->origen;
                $lab->id_origen = $searchUsuarioID->id;
                $lab->id_paciente =  $request->paciente;
                $lab->tipo_atencion = 3;
                $lab->id_tipo = $ray['rayo'];
                $lab->monto = (float)$request->monto_s['rayos'][$key]['monto'];
                $lab->abono = (float)$request->monto_abol['rayos'][$key]['abono'];
                $lab->tipo_pago = $request->id_pago['rayos'][$key]['tipop'];
                $lab->usuario = Auth::user()->id;
                $lab->sede =$request->session()->get('sede');
                $lab->save();

                $rs = new ResultadosServicios();
                $rs->id_atencion =  $lab->id;
                $rs->id_servicio =$ray['rayo'];
                $rs->save();

                if($request->monto_s['rayos'][$key]['monto'] > $request->monto_abol['rayos'][$key]['abono']){

                  $cb = new Cobrar();
                  $cb->id_atencion =  $lab->id;
                  $cb->detalle =  $servicio->nombre;
                  $cb->resta =(float)$request->monto_s['rayos'][$key]['monto'] - (float)$request->monto_abol['rayos'][$key]['abono'];
                  $cb->save();
              
                }

                if($request->origen == 1){
                  $lab = new Comisiones();
                  $lab->id_atencion =  $lab->id;
                  $lab->porcentaje = $servicio->porcentaje;
                  $lab->detalle =  $servicio->nombre;
                  $lab->monto = (float)$request->monto_s['rayos'][$key]['monto'] * $servicio->porcentaje / 100;
                  $lab->estatus = 1;
                  $lab->usuario = Auth::user()->id;
                  $lab->save();

                } elseif($request->origen == 2) {
                  $lab = new Comisiones();
                  $lab->id_atencion =  $lab->id;
                  $lab->porcentaje = $servicio->porcentaje1;
                  $lab->detalle =  $servicio->nombre;
                  $lab->monto = (float)$request->monto_s['rayos'][$key]['monto'] * $servicio->porcentaje1 / 100;
                  $lab->estatus = 1;
                  $lab->usuario = Auth::user()->id;
                  $lab->save();

                } else {

                  $lab = new Comisiones();
                  $lab->id_atencion =  $lab->id;
                  $lab->porcentaje = $servicio->porcentaje2;
                  $lab->detalle =  $servicio->nombre;
                  $lab->monto = (float)$request->monto_s['rayos'][$key]['monto'] * $servicio->porcentaje2 / 100;
                  $lab->estatus = 1;
                  $lab->usuario = Auth::user()->id;
                  $lab->save();

                }


              } 
            }
          }


        return redirect()->route('atenciones.index')
        ->with('success','Creado Exitosamente!');

        //return redirect()->action('AnalisisController@index', ["created" => true, "analisis" => Analisis::all()]);

    }

    public function ver($id)
    {
	  
        $req = DB::table('requerimientos as a')
        ->select('a.id','a.asunto','a.prioridad','a.categoria','a.descripcion','a.estatus','a.estado','a.empresa','b.nombre as empresa')
        ->join('clientes as b','b.id','a.empresa')
        ->where('a.empresa', '=', Auth::user()->empresa)
        ->where('a.estatus', '=', 1)
        ->where('a.id', '=', $id)
        ->first(); 

        //$equipos = ActivosRequerimientos::

        $equipos = DB::table('activos_requerimientos as a')
        ->select('a.id','a.activo','a.ticket','b.nombre','b.modelo','b.serial')
        ->join('equipos as b','b.id','a.activo')
        ->where('ticket','=',$id)
        ->get();


	  
      return view('requerimientos.ver', compact('req','equipos'));
    }	  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Analisis  $Clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $atencion = Atenciones::where('id','=',1)->first();

        return view('atenciones.edit', compact('atencion')); //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clientes  $Clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {


       

      $p = Atenciones::find($request->id);
      $p->monto =$request->monto;
      $p->abono =$request->abono;
      $p->tipo_pago =$request->tipo_pago;
    
      $res = $p->update();
    
    
    return redirect()->action('AtencionesController@index')
    ->with('success','Modificado Exitosamente!');

        //
    }

 
    public function delete($id)
    {

        $searchUsuarioID = DB::table('users')
        ->select('*')
        ->where('id','=', Auth::user()->id)
        ->first();  

        $aten = Atenciones::where('id','=',$id)->first();

        if($aten->tipo_atencion == 5){
          $con = Consultas::where('id_atencion','=',$id)->first();
          $con->estatus = 0;
          $con->save();

        } elseif($aten->tipo_atencion == 6){
          $con = Metodos::where('id_atencion','=',$id)->first();
          $con->estatus = 0;
          $con->save();
        
        } elseif($aten->tipo_atencion == 7){

          $consultas = Consultas::where('id_atencion','=',$id)->get();
          $res = ResultadosServicios::where('id_atencion','=',$id)->get();
          $rel = ResultadosLaboratorio::where('id_atencion','=',$id)->get();



          foreach ($consultas as $con) {
            $id_consulta = $con->id;
            if(!is_null($id_consulta)){
              $con = Consultas::where('id','=',$id_consulta)->first();
              $con->estatus = 0;
              $con->save();
             }
           }

           foreach ($res as $rs) {
            $id_rs = $rs->id;
            if(!is_null($id_rs)){
              $rsf = ResultadosServicios::where('id','=',$id_rs)->first();
              $rsf->estatus = 0;
              $rsf->save();
             }
           }

           foreach ($rel as $rl) {
            $id_rl = $rl->id;
            if(!is_null($id_rs)){
              $rsf = ResultadosLaboratorio::where('id','=',$id_rl)->first();
              $rsf->estatus = 0;
              $rsf->save();
             }
           }

         

        } else {

        }


        $atencion = Atenciones::find($id);
        $atencion->estatus = 0;
        $atencion->eliminado_por= $searchUsuarioID->name.' '.$searchUsuarioID->lastname;
        $atencion->save();

        $com = Comisiones::where('id_atencion','=',$id)->first();
        $com->estatus = 0;
        $com->save();

        $cb = Cobrar::where('id_atencion','=',$id)->first();
        $cb->estatus = 0;
        $cb->save();
/*
        $rs = ResultadosServicios::where('id_atencion','=',$id)->first();
        $rs->estatus = 0;
        $rs->delete();

        $rl = ResultadosLaboratorio::where('id_atencion','=',$id)->first();
        $rl->estatus = 0;
        $rl->save();*/

        return redirect()->action('AtencionesController@index')
        ->with('success','Eliminado Exitosamente!');
        //
    }
}

