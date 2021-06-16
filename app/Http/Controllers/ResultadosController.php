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
use Auth;
use Illuminate\Http\Request;
use DB;


class ResultadosController extends Controller
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
  

            $resultados = DB::table('resultados_servicios as a')
        ->select('a.id', 'a.id_atencion', 'a.id_servicio', 'b.usuario', 'a.created_at', 'a.estatus', 'b.id_paciente', 'b.id_origen', 's.nombre as servicio', 'pa.nombres', 'pa.apellidos', 'c.name', 'c.lastname')
        ->join('atenciones as b', 'b.id', 'a.id_atencion')
        ->join('users as c', 'c.id', 'b.id_origen')
        ->join('pacientes as pa', 'pa.id', 'b.id_paciente')
        ->join('servicios as s', 's.id', 'a.id_servicio')
        ->where('a.estatus', '=', 1)
        ->whereBetween('a.created_at', [$f1, $f2])
        //->where('a.monto', '!=', '0')
        ->get();
        } else {

            $f1 = date('Y-m-d');
            $f2 = date('Y-m-d');


            $resultados = DB::table('resultados_servicios as a')
            ->select('a.id', 'a.id_atencion', 'a.id_servicio', 'b.usuario', 'a.created_at', 'a.estatus', 'b.id_paciente', 'b.id_origen', 's.nombre as servicio', 'pa.nombres', 'pa.apellidos', 'c.name', 'c.lastname')
            ->join('atenciones as b', 'b.id', 'a.id_atencion')
            ->join('users as c', 'c.id', 'b.id_origen')
            ->join('pacientes as pa', 'pa.id', 'b.id_paciente')
            ->join('servicios as s', 's.id', 'a.id_servicio')
            ->where('a.estatus', '=', 1)
            ->where('a.created_at', '=', date('Y-m-d'))
            ->get();

            //->where('

        }


        return view('resultados.index', compact('resultados','f1','f2'));
        //
    }

    public function index1(Request $request)
    {

        if ($request->inicio) {
            $f1 = $request->inicio;
            $f2 = $request->fin;
  

            $resultados = DB::table('resultados_laboratorio as a')
        ->select('a.id', 'a.id_atencion', 'a.id_laboratorio', 'b.usuario', 'a.created_at', 'a.estatus', 'b.id_paciente', 'b.id_origen', 's.nombre as laboratorio', 'pa.nombres', 'pa.apellidos', 'c.name', 'c.lastname')
        ->join('atenciones as b', 'b.id', 'a.id_atencion')
        ->join('users as c', 'c.id', 'b.id_origen')
        ->join('pacientes as pa', 'pa.id', 'b.id_paciente')
        ->join('analisis as s', 's.id', 'a.id_laboratorio')
        ->where('a.estatus', '=', 1)
        ->whereBetween('a.created_at', [$f1, $f2])
        //->where('a.monto', '!=', '0')
        ->get();
        } else {

            $f1 = date('Y-m-d');
            $f2 = date('Y-m-d');


            $resultados = DB::table('resultados_laboratorio as a')
            ->select('a.id', 'a.id_atencion', 'a.id_laboratorio', 'b.usuario', 'a.created_at', 'a.estatus', 'b.id_paciente', 'b.id_origen', 's.nombre as laboratorio', 'pa.nombres', 'pa.apellidos', 'c.name', 'c.lastname')
            ->join('atenciones as b', 'b.id', 'a.id_atencion')
            ->join('users as c', 'c.id', 'b.id_origen')
            ->join('pacientes as pa', 'pa.id', 'b.id_paciente')
            ->join('analisis as s', 's.id', 'a.id_laboratorio')
            ->where('a.estatus', '=', 1)
            ->where('a.created_at', '=', date('Y-m-d'))
            ->get();

            //->where('

        }


        return view('resultados.index1', compact('resultados','f1','f2'));
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

        if(!is_null($request->pac)){
            $paciente = Pacientes::where('dni','=',$request->pac)->first();
            $res = 'SI';
            } else {
            $paciente = Pacientes::where('dni','=','LABORATORIO')->first();
            $res = 'NO';
            }

        return view('atenciones.create', compact('ecografias','rayos','otros','analisis','paciente','res'));
    }

    public function getServicio($id)
    {
        return Servicios::where('id','=',$id)->first();

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
            $lab->tipo_origen =  $request->origen;
            $lab->id_origen = $searchUsuarioID->id;
            $lab->id_paciente =  $request->paciente;
            $lab->tipo_atencion = 5;
            $lab->id_tipo = $request->esp_con;
            $lab->monto = $request->precio_con;
            $lab->abono = $request->precio_con;
            $lab->tipo_pago = $request->tipop_con;
            $lab->usuario = Auth::user()->id;
            $lab->save();

        }

        
        //GUARDANDO METODOS
        
        if(!is_null($request->precio_met)){
            $lab = new Atenciones();
            $lab->tipo_origen =  $request->origen;
            $lab->id_origen = $searchUsuarioID->id;
            $lab->id_paciente =  $request->paciente;
            $lab->tipo_atencion = 6;
           // $lab->id_tipo = $request->esp_con;
            $lab->monto = $request->precio_met;
            $lab->abono = $request->precio_met;
            $lab->tipo_pago = $request->tipop_met;
            $lab->usuario = Auth::user()->id;
            $lab->save();

        }

        //GUARDANDO SERVICIOS
        
        if (isset($request->id_servicio)) {
            foreach ($request->id_servicio['servicios'] as $key => $serv) {
              if (!is_null($serv['servicio'])) {

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
                $lab->save();
              } 
            }
          }





        //GUARDANDO ANALISIS


        if (isset($request->id_analisi)) {
            foreach ($request->id_analisi['analisis'] as $key => $laboratorio) {
              if (!is_null($laboratorio['analisi'])) {

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
                $lab->save();
              } 
            }
          }

          //GUARDANDO ECOGRAFIAS

          if (isset($request->id_ecografia)) {
            foreach ($request->id_ecografia['ecografias'] as $key => $eco) {
              if (!is_null($eco['ecografia'])) {

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
                $lab->save();
              } 
            }
          }

          //GUARDANDO RAYOS X

          if (isset($request->id_rayo)) {
            foreach ($request->id_rayo['rayos'] as $key => $ray) {
              if (!is_null($ray['rayo'])) {

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
                $lab->save();
              } 
            }
          }



        
    

        return redirect()->action('AtencionesController@index')
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

        $atencion = Atenciones::find($id);
        $atencion->estatus = 0;
        $atencion->eliminado_por= $searchUsuarioID->name.' '.$searchUsuarioID->lastname;
        $atencion->save();

        return redirect()->action('AtencionesController@index')
        ->with('success','Eliminado Exitosamente!');
        //
    }
}