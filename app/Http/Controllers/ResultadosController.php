<?php

namespace App\Http\Controllers;
use App\Equipos;
use App\Analisis;
use App\Clientes;
use App\Tiempo;
use App\Material;
use App\Pacientes;
use App\Anotaciones;
use App\Servicios;
use App\User;
use App\Atenciones;
use App\Placas;
use App\PlacasUsadas;
use App\PlacasMalogradas;
use App\Comisiones;
use App\ResultadosServicios;
use App\ResultadosLaboratorio;
use Auth;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;
use PhpOffice\PhpWord\Style\Font;
use HTMLtoOpenXML;
use Carbon\Carbon;
use File;
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
        ->select('a.id', 'a.id_atencion', 'a.id_servicio', 'a.informe','b.usuario', 'a.created_at', 'a.estatus','b.resta','b.monto','b.abono', 'b.id_paciente','b.estatus','b.sede', 'b.id_origen', 's.nombre as servicio', 'pa.nombres', 'pa.apellidos', 'c.name', 'c.lastname')
        ->join('atenciones as b', 'b.id', 'a.id_atencion')
        ->join('users as c', 'c.id', 'b.id_origen')
        ->join('pacientes as pa', 'pa.id', 'b.id_paciente')
        ->join('servicios as s', 's.id', 'a.id_servicio')
        ->where('b.estatus', '=', 1)
       // ->where('b.resta', '=', 0)
        ->where('a.estatus', '=', 1)
        ->where('b.sede', '=', $request->session()->get('sede'))
        ->whereBetween('a.created_at', [$f1, $f2])
        ->orderBy('a.id','DESC')
        //->where('a.monto', '!=', '0')
        ->get();
        } else {

            $f1 = date('Y-m-d');
            $f2 = date('Y-m-d');


            $resultados = DB::table('resultados_servicios as a')
            ->select('a.id', 'a.id_atencion', 'a.id_servicio','a.informe', 'b.usuario','b.resta', 'a.created_at', 'a.estatus', 'b.estatus','b.monto','b.abono','b.sede','b.id_paciente', 'b.id_origen', 's.nombre as servicio', 'pa.nombres', 'pa.apellidos', 'c.name', 'c.lastname')
            ->join('atenciones as b', 'b.id', 'a.id_atencion')
            ->join('users as c', 'c.id', 'b.id_origen')
            ->join('pacientes as pa', 'pa.id', 'b.id_paciente')
            ->join('servicios as s', 's.id', 'a.id_servicio')
            ->where('b.estatus', '=', 1)
            ->where('a.estatus', '=', 1)
            //->where('b.resta', '=', 0)
            ->where('b.sede', '=', $request->session()->get('sede'))
            ->where('a.created_at', '=', date('Y-m-d'))
            ->orderBy('a.id','DESC')
            ->get();

            //->where('

        }

       // $file_path = public_path().'/modelos_informes/';
        //$files = File::allFiles($file_path);

     ///   dd($files);

        return view('resultados.index', compact('resultados','f1','f2'));
        //
    }

    public function index1(Request $request)
    {

        if ($request->inicio) {
            $f1 = $request->inicio;
            $f2 = $request->fin;
  

            $resultados = DB::table('resultados_laboratorio as a')
        ->select('a.id', 'a.id_atencion', 'a.id_laboratorio', 'a.informe','b.usuario','b.resta', 'a.created_at', 'a.estatus','b.sede','b.monto','b.abono', 'b.estatus','b.id_paciente', 'b.id_origen', 's.nombre as laboratorio', 'pa.nombres', 'pa.apellidos', 'c.name', 'c.lastname')
        ->join('atenciones as b', 'b.id', 'a.id_atencion')
        ->join('users as c', 'c.id', 'b.id_origen')
        ->join('pacientes as pa', 'pa.id', 'b.id_paciente')
        ->join('analisis as s', 's.id', 'a.id_laboratorio')
        ->where('b.estatus', '=', 1)
        ->where('a.estatus', '=', 1)
       // ->where('b.resta', '=', 0)
        ->where('b.sede', '=', $request->session()->get('sede'))
        ->whereBetween('a.created_at', [$f1, $f2])
        ->orderBy('a.id','DESC')
        ->get();
        } else {

            $f1 = date('Y-m-d');
            $f2 = date('Y-m-d');


            $resultados = DB::table('resultados_laboratorio as a')
            ->select('a.id', 'a.id_atencion', 'a.id_laboratorio','a.informe','b.resta', 'b.usuario', 'a.created_at', 'a.estatus','b.sede','b.monto','b.abono','b.estatus', 'b.id_paciente', 'b.id_origen', 's.nombre as laboratorio', 'pa.nombres', 'pa.apellidos', 'c.name', 'c.lastname')
            ->join('atenciones as b', 'b.id', 'a.id_atencion')
            ->join('users as c', 'c.id', 'b.id_origen')
            ->join('pacientes as pa', 'pa.id', 'b.id_paciente')
            ->join('analisis as s', 's.id', 'a.id_laboratorio')
            ->where('b.estatus', '=', 1)
            ->where('a.estatus', '=', 1)
           // ->where('b.resta', '=', 0)
            ->where('b.sede', '=', $request->session()->get('sede'))
            ->where('a.created_at', '=', date('Y-m-d'))
            ->orderBy('a.id','DESC')
            ->get();

            //->where('

        }


        return view('resultados.index1', compact('resultados','f1','f2'));
        //
    }

    public function indexg(Request $request)
    {

      

        if ($request->id_paciente != null) {
            $resultados = DB::table('resultados_servicios as a')
        ->select('a.id', 'a.id_atencion', 'a.id_servicio', 'a.fec_entrega','a.por_entrega','a.entregado','a.informe', 'a.informe_guarda', 'b.estatus', 'b.usuario', 'a.created_at', 'a.estatus', 'b.sede','b.id_paciente', 'b.id_origen', 's.nombre as servicio', 'pa.nombres', 'pa.apellidos', 'c.name', 'c.lastname')
        ->join('atenciones as b', 'b.id', 'a.id_atencion')
        ->join('users as c', 'c.id', 'b.id_origen')
        ->join('pacientes as pa', 'pa.id', 'b.id_paciente')
        ->join('servicios as s', 's.id', 'a.id_servicio')
        ->where('b.estatus', '=', 1)
        ->where('a.estatus', '=', 3)
        ->where('b.sede', '=', $request->session()->get('sede'))
        ->where('b.id_paciente', '=', $request->id_paciente)
        ->get();
        } else {
          $resultados = DB::table('resultados_servicios as a')
          ->select('a.id', 'a.id_atencion', 'a.id_servicio','a.entregado','a.fec_entrega','a.por_entrega', 'a.informe', 'a.informe_guarda', 'b.estatus', 'b.usuario', 'a.created_at', 'a.estatus','b.sede', 'b.id_paciente', 'b.id_origen', 's.nombre as servicio', 'pa.nombres', 'pa.apellidos', 'c.name', 'c.lastname')
          ->join('atenciones as b', 'b.id', 'a.id_atencion')
          ->join('users as c', 'c.id', 'b.id_origen')
          ->join('pacientes as pa', 'pa.id', 'b.id_paciente')
          ->join('servicios as s', 's.id', 'a.id_servicio')
          ->where('b.estatus', '=', 1)
          ->where('a.estatus', '=', 999)
          ->where('b.sede', '=', $request->session()->get('sede'))
          ->where('a.created_at', '=', date('Y-m-d'))
          ->get();

        }


        
    if(!is_null($request->filtro)){
      $pacientes =Pacientes::where("estatus", '=', 1)->where('apellidos','like','%'.$request->filtro.'%')->orderby('apellidos','asc')->get();
      }else{
      $pacientes =Pacientes::where("estatus", '=', 9)->orderby('nombres','asc')->get();
      }


        return view('resultados.indexg', compact('resultados','pacientes'));
        //
    }

    public function indexg1(Request $request)
    {

        if ($request->id_paciente) {
          

            $resultados = DB::table('resultados_laboratorio as a')
        ->select('a.id', 'a.id_atencion', 'a.id_laboratorio', 'a.fec_entrega','a.por_entrega','a.entregado','a.informe','a.informe_guarda','b.estatus as sta_ate','b.sede','b.usuario', 'a.created_at', 'a.estatus', 'b.id_paciente', 'b.id_origen', 's.nombre as laboratorio', 'pa.nombres', 'pa.apellidos', 'c.name', 'c.lastname')
        ->join('atenciones as b', 'b.id', 'a.id_atencion')
        ->join('users as c', 'c.id', 'b.id_origen')
        ->join('pacientes as pa', 'pa.id', 'b.id_paciente')
        ->join('analisis as s', 's.id', 'a.id_laboratorio')
        ->where('a.estatus', '=', 3)
        ->where('b.sede', '=', $request->session()->get('sede'))
        ->where('b.id_paciente', '=', $request->id_paciente)
        ->get();
        } else {

       

            $resultados = DB::table('resultados_laboratorio as a')
            ->select('a.id', 'a.id_atencion', 'a.id_laboratorio','a.entregado','a.fec_entrega','a.por_entrega','a.informe', 'a.informe_guarda','b.estatus as sta_ate','b.sede','b.usuario', 'a.created_at', 'a.estatus', 'b.id_paciente', 'b.id_origen', 's.nombre as laboratorio', 'pa.nombres', 'pa.apellidos', 'c.name', 'c.lastname')
            ->join('atenciones as b', 'b.id', 'a.id_atencion')
            ->join('users as c', 'c.id', 'b.id_origen')
            ->join('pacientes as pa', 'pa.id', 'b.id_paciente')
            ->join('analisis as s', 's.id', 'a.id_laboratorio')
            ->where('a.estatus', '=', 999)
            ->where('b.sede', '=', $request->session()->get('sede'))
            ->where('a.created_at', '=', date('Y-m-d'))
            ->get();

            //->where('

        }

        if(!is_null($request->filtro)){
          $pacientes =Pacientes::where("estatus", '=', 1)->where('apellidos','like','%'.$request->filtro.'%')->orderby('apellidos','asc')->get();
          }else{
          $pacientes =Pacientes::where("estatus", '=', 9)->orderby('nombres','asc')->get();
          }
    


        return view('resultados.indexgl', compact('resultados','pacientes'));
        //
    }







    public function asociar(Request $request){




      $rs = ResultadosServicios::where('id','=',$request->id)->first();
      $rs->informe = $request->informe;
      $rs->save();

       

    return back();


    }

    public function reversarg(Request $request){

      $data = ResultadosServicios::where('id','=',$request->id)->first();
      $at = Atenciones::where('id','=',$data->id_atencion)->first();
      $at->atendido_por =  "";
      $at->save();




      $rs = ResultadosServicios::where('id','=',$request->id)->first();
      $rs->estatus = 1;
      $rs->usuario_informe = null;
      $rs->informe_guarda = '';
      $rs->save();

       

    return back();


    }

    public function entregar($id){

      $rs = ResultadosServicios::where('id','=',$id)->first();
      $rs->entregado = 1;
      $rs->fec_entrega = now();
      $rs->por_entrega= Auth::user()->name." ".Auth::user()->lastname;
      $rs->save();
       
    return back();


    }

    public function entregarl($id){


      $rs = ResultadosLaboratorio::where('id','=',$id)->first();
      $rs->entregado = 1;
      $rs->fec_entrega = now();;
      $rs->por_entrega= Auth::user()->name." ".Auth::user()->lastname;
      $rs->save();

       
    return back();


    }

    public function reversargl(Request $request){

      $data = ResultadosLaboratorio::where('id','=',$request->id)->first();
      $at = Atenciones::where('id','=',$data->id_atencion)->first();
      $at->atendido_por =  "";
      $at->save();


      $rl = ResultadosLaboratorio::where('id','=',$request->id)->first();
      $rl->estatus = 1;
      $rl->usuario_informe = null;
      $rl->informe_guarda = '';
      $rl->save();


    return back();


    }

    public function asociarl(Request $request){



      $rl = ResultadosLaboratorio::where('id','=',$request->id)->first();
      $rl->informe = $request->informe;
      $rl->save();


    return back();


    }

    
    public function desoc(Request $request){




      $rs = ResultadosServicios::where('id','=',$request->id)->first();
      $rs->informe = '';
      $rs->save();

       

    return back();


    }

    public function desocl(Request $request){




      $rs = ResultadosLaboratorio::where('id','=',$request->id)->first();
      $rs->informe = '';
      $rs->save();

       

    return back();


    }

    public function asociar1(Request $request){

      //dd($request->all());

      $rs = ResultadosLaboratorio::where('id','=',$request->$id)->first();
      $rs->informe = $request->informe;
      $rs->save();

       
    return back();


    }

    
    public function guardar_informe($id)
    {

        $resultados = DB::table('resultados_servicios as a')
        ->select('a.id', 'a.id_atencion', 'a.id_servicio', 'a.informe','b.usuario', 'a.created_at', 'a.estatus', 'b.id_paciente', 'b.id_origen','b.tipo_atencion', 's.nombre as servicio', 'pa.fechanac','pa.nombres', 'pa.apellidos','pa.dni', 'c.name', 'c.lastname')
        ->join('atenciones as b', 'b.id', 'a.id_atencion')
        ->join('users as c', 'c.id', 'b.id_origen')
        ->join('pacientes as pa', 'pa.id', 'b.id_paciente')
        ->join('servicios as s', 's.id', 'a.id_servicio')
        //->where('a.estatus', '=', 1)
        ->where('a.id',  '=', $id)
        //->where('a.monto', '!=', '0')
        ->first();

        $placas = Placas::all();

        return view('resultados.guardar', compact('resultados','placas'));

      
    }

    
    public function guardar_informel($id)
    {

        $resultados = DB::table('resultados_laboratorio as a')
        ->select('a.id', 'a.id_atencion', 'a.id_laboratorio', 'a.informe','b.usuario', 'a.created_at', 'a.estatus', 'b.id_paciente', 'b.id_origen', 's.nombre as servicio', 'pa.fechanac','pa.nombres', 'pa.apellidos','pa.dni', 'c.name', 'c.lastname')
        ->join('atenciones as b', 'b.id', 'a.id_atencion')
        ->join('users as c', 'c.id', 'b.id_origen')
        ->join('pacientes as pa', 'pa.id', 'b.id_paciente')
        ->join('analisis as s', 's.id', 'a.id_laboratorio')
        //->where('a.estatus', '=', 1)
        ->where('a.id',  '=', $id)
        //->where('a.monto', '!=', '0')
        ->first();


        return view('resultados.guardarl', compact('resultados'));

      
    }




    public function guardar(Request $request){


      //dd($request->id_servicio);

      
      $usuario = DB::table('users')
      ->select('*')
      ->where('id','=', Auth::user()->id)
      ->first();  

      $res = ResultadosServicios::where('id','=',$request->id)->first();


      $servicio = Servicios::where('id','=',$res->id_servicio)->first();



      $atenc = Atenciones::where('id','=',$res->id_atencion)->first();

      $rs = ResultadosServicios::where('id','=',$request->id)->first();
      $img = $request->file('informe');
      $nombre_imagen=$img->getClientOriginalName();
      $rs->estatus=3;
      $rs->usuario_informe= Auth::user()->id;
      $rs->informe_guarda= $nombre_imagen;
      if ($rs->save()) {
          \Storage::disk('public')->put($nombre_imagen, \File::get($img));
      }
      \DB::commit();

      

      if ($usuario->tipo_personal == 'Tecnólogo' && $servicio->porcentaje2 > 0 && $atenc->tipo_atencion != 7) {
          $com = new Comisiones();
          $com->id_atencion =  $res->id_atencion;
          $com->detalle =  $servicio->nombre;
          $com->porcentaje = $servicio->porcentaje2;
          $com->id_responsable = Auth::user()->id;
          $com->monto = $atenc->monto * $servicio->porcentaje2 / 100;
          $com->id_origen = 1;
          $com->estatus = 1;
          $com->tecnologo = 1;
          $com->usuario = Auth::user()->id;
          $com->save();
      }

      if($usuario->tipo_personal == 'Tecnólogo' && $servicio->porcentaje2 > 0 && $atenc->tipo_atencion == 7){
        $com = new Comisiones();
        $com->id_atencion =  $res->id_atencion;
        $com->detalle =  $servicio->nombre;
        $com->porcentaje = $servicio->porcentaje2;
        $com->id_responsable = Auth::user()->id;
        $com->monto = $servicio->precio * $servicio->porcentaje2 / 100;
        $com->id_origen = 1;
        $com->estatus = 1;
        $com->tecnologo = 1;
        $com->usuario = Auth::user()->id;
        $com->save();
      }



        $at = Atenciones::where('id','=',$res->id_atencion)->first();
        $img = $request->file('informe');
        $nombre_imagen=$img->getClientOriginalName();
        $at->informe =  $nombre_imagen;
        $at->atendido =  2;
        $at->atendido_por =  $usuario->lastname.' '.$usuario->name;
        $at->save();


        //guardado de placas usadas

        if ($request->id_servicio != null) {
          foreach ($request->id_servicio['servicios'] as $key => $serv) {
              if (!is_null($serv['servicio'])) {
                  $servicio = Placas::where('id', '=', $serv['servicio'])->first();
                  //TIPO ATENCION SERVICIOS= 1
                  $plac_u = new PlacasUsadas();
                  $plac_u->paciente =  $atenc->id_paciente;
                  $plac_u->placa = $servicio->id;
                  $plac_u->cantidad = (float)$request->monto_s['servicios'][$key]['monto'];
                  $plac_u->usuario = Auth::user()->id;
                  $plac_u->resultado = $request->id;
                  $plac_u->atencion =  $atenc->id;
                  $plac_u->save();

              }
          }
      }


      if ($request->id_ecografia != null) {
        foreach ($request->id_ecografia['ecografias'] as $key => $eco) {
            if (!is_null($eco['ecografia'])) {
              $placa_m = Placas::where('id', '=', $eco['ecografia'])->first();

              $plac_m = new PlacasMalogradas();
              $plac_m->paciente =  $atenc->id_paciente;
              $plac_m->placa = $placa_m->id;
              $plac_m->cantidad = (float)$request->monto_s['ecografias'][$key]['monto'];
              $plac_m->usuario = Auth::user()->id;
              $plac_m->resultado = $request->id;
              $plac_m->atencion =  $atenc->id;
              $plac_m->save();


                
                }
            }
        }
    





      


        return redirect()->route('resultados.index')
        ->with('success','Creado Exitosamente!');
           
      }

      public function guardarl(Request $request){

        $res = ResultadosLaboratorio::where('id','=',$request->id)->first();

        $atenc = Atenciones::where('id','=',$res->id_atencion)->first();

        $usuario = DB::table('users')
        ->select('*')
        ->where('id','=', Auth::user()->id)
        ->first();  

        
        $at = Atenciones::where('id','=',$res->id_atencion)->first();
        $img = $request->file('informe');
        $nombre_imagen=$img->getClientOriginalName();
        $at->informe =  $nombre_imagen;
        $at->atendido =  2;
        $at->atendido_por =  $usuario->lastname.' '.$usuario->name;
        $at->save();


        $rs = ResultadosLaboratorio::where('id','=',$request->id)->first();
        $img = $request->file('informe');
        $nombre_imagen=$img->getClientOriginalName();
        $rs->estatus=3;
        $rs->usuario_informe=Auth::user()->id;
        $rs->informe_guarda=$nombre_imagen;
        if ($rs->save()) {
            \Storage::disk('public')->put($nombre_imagen, \File::get($img));
        }
        \DB::commit();


        return redirect()->route('resultados.index1')
        ->with('success','Creado Exitosamente!');
           
      }



    public function materiales(Request $request){


        if ($request->inicio != null && $request->fin != null && $request->placa == null) {

          

          $f1 = $request->inicio;
          $f2 = $request->fin;

          $materiales = DB::table('placas_usadas as a')
          ->select('a.id', 'a.placa', 'a.atencion','a.cantidad','a.paciente','a.usuario','a.created_at', 'b.nombres', 'b.apellidos', 'c.name as nameo', 'c.lastname as lasto', 'p.nombre as placa','at.id_tipo','sr.nombre as servicio')
          ->join('pacientes as b', 'b.id', 'a.paciente')
          ->join('users as c', 'c.id', 'a.usuario')
          ->join('placas as p', 'p.id', 'a.placa')
          ->join('atenciones as at', 'at.id', 'a.atencion')
          ->join('servicios as sr', 'sr.id', 'at.id_tipo')
          ->whereBetween('a.created_at', [$f1, $f2])
          ->orderBy('a.id','DESC')
          ->get();

          $totales = PlacasUsadas::whereBetween('created_at', [$f1,$f2])
          ->select(DB::raw('COUNT(*) as item, SUM(cantidad) as cantidad'))
          ->first();
  


        } elseif ($request->inicio != null && $request->fin != null && $request->placa != null) {
          $f1 = $request->inicio;
          $f2 = $request->fin;

          $materiales = DB::table('placas_usadas as a')
          ->select('a.id', 'a.placa', 'a.atencion','a.cantidad','a.paciente','a.usuario','a.created_at', 'b.nombres', 'b.apellidos', 'c.name as nameo', 'c.lastname as lasto', 'p.nombre as placa','at.id_tipo','sr.nombre as servicio')
          ->join('pacientes as b', 'b.id', 'a.paciente')
          ->join('users as c', 'c.id', 'a.usuario')
          ->join('placas as p', 'p.id', 'a.placa')
          ->join('atenciones as at', 'at.id', 'a.atencion')
          ->join('servicios as sr', 'sr.id', 'at.id_tipo')
          ->whereBetween('a.created_at', [$f1, $f2])
          ->where('a.placa','=',$request->placa)
          ->orderBy('a.id','DESC')
          ->get();

          $totales = PlacasUsadas::whereBetween('created_at', [$f1,$f2])
          ->where('placa','=',$request->placa)
          ->select(DB::raw('COUNT(*) as item, SUM(cantidad) as cantidad'))
          ->first();


        } else {

          $f1 = date('Y-m-d');
          $f2 = date('Y-m-d');


          
          $materiales = DB::table('placas_usadas as a')
          ->select('a.id', 'a.placa', 'a.atencion','a.cantidad','a.paciente','a.usuario','a.created_at', 'b.nombres', 'b.apellidos', 'c.name as nameo', 'c.lastname as lasto', 'p.nombre as placa','at.id_tipo','sr.nombre as servicio')
          ->join('pacientes as b', 'b.id', 'a.paciente')
          ->join('users as c', 'c.id', 'a.usuario')
          ->join('placas as p', 'p.id', 'a.placa')
          ->join('atenciones as at', 'at.id', 'a.atencion')
          ->join('servicios as sr', 'sr.id', 'at.id_tipo')
          ->whereBetween('a.created_at', [$f1, $f2])
          ->get();

          
          $totales = PlacasUsadas::whereBetween('created_at', [$f1,$f2])
          ->select(DB::raw('COUNT(*) as item, SUM(cantidad) as cantidad'))
          ->first();
  



        }

        $placas = Placas::all();

        return view('resultados.materiales', compact('materiales','f1','f2','placas','totales'));

    }

    public function materialesm(Request $request){


      if ($request->inicio != null && $request->fin != null && $request->placa == null) {

        

        $f1 = $request->inicio;
        $f2 = $request->fin;

        $materiales = DB::table('placas_malogradas as a')
        ->select('a.id', 'a.placa', 'a.atencion','a.cantidad','a.paciente','a.usuario','a.created_at', 'b.nombres', 'b.apellidos', 'c.name as nameo', 'c.lastname as lasto', 'p.nombre as placa','at.id_tipo','sr.nombre as servicio')
        ->join('pacientes as b', 'b.id', 'a.paciente')
        ->join('users as c', 'c.id', 'a.usuario')
        ->join('placas as p', 'p.id', 'a.placa')
        ->join('atenciones as at', 'at.id', 'a.atencion')
        ->join('servicios as sr', 'sr.id', 'at.id_tipo')
        ->whereBetween('a.created_at', [$f1, $f2])
        ->where('a.cantidad','!=',0)
        ->orderBy('a.id','DESC')
        ->get();

        $totales = PlacasMalogradas::whereBetween('created_at', [$f1,$f2])
        ->where('cantidad','!=',0)
        ->select(DB::raw('COUNT(*) as item, SUM(cantidad) as cantidad'))
        ->first();



      } elseif ($request->inicio != null && $request->fin != null && $request->placa != null) {
        $f1 = $request->inicio;
        $f2 = $request->fin;

        $materiales = DB::table('placas_malogradas as a')
        ->select('a.id', 'a.placa', 'a.atencion','a.cantidad','a.paciente','a.usuario','a.created_at', 'b.nombres', 'b.apellidos', 'c.name as nameo', 'c.lastname as lasto', 'p.nombre as placa','at.id_tipo','sr.nombre as servicio')
        ->join('pacientes as b', 'b.id', 'a.paciente')
        ->join('users as c', 'c.id', 'a.usuario')
        ->join('placas as p', 'p.id', 'a.placa')
        ->join('atenciones as at', 'at.id', 'a.atencion')
        ->join('servicios as sr', 'sr.id', 'at.id_tipo')
        ->whereBetween('a.created_at', [$f1, $f2])
        ->where('a.placa','=',$request->placa)
        ->where('a.cantidad','!=',0)
        ->orderBy('a.id','DESC')
        ->get();

        $totales = PlacasMalogradas::whereBetween('created_at', [$f1,$f2])
        ->where('placa','=',$request->placa)
        ->where('cantidad','!=',0)
        ->select(DB::raw('COUNT(*) as item, SUM(cantidad) as cantidad'))
        ->first();


      } else {

        $f1 = date('Y-m-d');
        $f2 = date('Y-m-d');


        
        $materiales = DB::table('placas_malogradas as a')
        ->select('a.id', 'a.placa', 'a.atencion','a.cantidad','a.paciente','a.usuario','a.created_at', 'b.nombres', 'b.apellidos', 'c.name as nameo', 'c.lastname as lasto', 'p.nombre as placa','at.id_tipo','sr.nombre as servicio')
        ->join('pacientes as b', 'b.id', 'a.paciente')
        ->join('users as c', 'c.id', 'a.usuario')
        ->join('placas as p', 'p.id', 'a.placa')
        ->join('atenciones as at', 'at.id', 'a.atencion')
        ->join('servicios as sr', 'sr.id', 'at.id_tipo')
        ->whereBetween('a.created_at', [$f1, $f2])
        ->where('a.cantidad','!=',0)
        ->get();

        
        $totales = PlacasMalogradas::whereBetween('created_at', [$f1,$f2])
        ->select(DB::raw('COUNT(*) as item, SUM(cantidad) as cantidad'))
        ->first();




      }

      $placas = Placas::all();

      return view('resultados.materialesm', compact('materiales','f1','f2','placas','totales'));

  }

  public function anotar($id)
  {

    $pacientes = DB::table('pacientes as a')
    ->select('a.id','a.nombres','a.dni','a.apellidos','a.ocupacion','a.tipo_doc','a.usuario','a.fechanac','a.email','a.sexo','a.telefono','a.empresa','a.estatus','u.name','u.lastname')
    ->join('users as u', 'u.id', 'a.usuario')
    ->where('a.id', '=', $id)
    ->first(); 

   // $edad = Carbon::parse($pacientes->fechanac)->age;
  
    
    return view('resultados.anotar', compact('id'));
  }	 
  
  public function anotaG($id)
  {

    return view('anotaciones.respuesta', compact('id'));
  }	 


  public function anotaV($id)
  {

    $anotacion = Anotaciones::where('id','=',$id)->first();

    return view('anotaciones.respuestaL', compact('anotacion'));
  }	 

  
  public function anotaI($id)
  {

    $anotacion = Anotaciones::where('id','=',$id)->first();

    return view('anotaciones.indicaciones', compact('anotacion'));
  }	 

  public function anotarPost(Request $request)
  {


        $lab = new Anotaciones();
        $lab->id_resultado =  $request->id;
        $lab->texto = $request->instru;
        $lab->fecha =  $request->fecha;
        $lab->usuario = Auth::user()->id;
        $lab->sede = $request->session()->get('sede');
        $lab->save();

        return back();

  }	  

  public function anotaP(Request $request)
  {


        $atencion = Anotaciones::where('id','=',$request->id)->first();
        $atencion->estatus = 1;
        $atencion->respuesta= $request->resp;
        $atencion->usuario_respuesta= Auth::user()->name." ".Auth::user()->lastname;

        $atencion->save();

        return back();

  }	  


  public function anotaciones(Request $request)
  {

      if ($request->inicio) {
          $f1 = $request->inicio;
          $f2 = $request->fin;


          $anotaciones = DB::table('anotaciones as a')
      ->select('a.*','b.id_paciente','pa.nombres', 'pa.apellidos','pa.telefono', 'c.name', 'c.lastname')
      ->join('atenciones as b', 'b.id', 'a.id_resultado')
      ->join('users as c', 'c.id', 'a.usuario')
      ->join('pacientes as pa', 'pa.id', 'b.id_paciente')
      ->whereBetween('a.fecha', [$f1, $f2])
      ->where('a.sede', '=',  $request->session()->get('sede'))
      ->orderBy('a.id','DESC')
      ->get();
      } else {

          $f1 = date('Y-m-d');
          $f2 = date('Y-m-d');


          $anotaciones = DB::table('anotaciones as a')
          ->select('a.*','b.id_paciente','pa.nombres', 'pa.apellidos','pa.telefono', 'c.name', 'c.lastname')
          ->join('atenciones as b', 'b.id', 'a.id_resultado')
          ->join('users as c', 'c.id', 'a.usuario')
          ->join('pacientes as pa', 'pa.id', 'b.id_paciente')
          ->whereBetween('a.fecha', [$f1, $f2])
          ->where('a.sede', '=',  $request->session()->get('sede'))
          ->orderBy('a.id','DESC')
          //->where('a.monto', '!=', '0')
          ->get();

          //->where('

      }


      return view('anotaciones.index', compact('anotaciones','f1','f2'));
      //
  }


    public function modelo_informe($id,$informe)
    {

        File::delete(File::glob('*.docx'));
        $informe = $templateProcessor = new TemplateProcessor(public_path('modelos_informes/'.$informe));
      /*  $resultados = ReportesController::elasticSearch($id);
        $resultados1 = DB::table('atenciones as a')
        ->select('a.id','a.id_paciente','a.origen_usuario','a.es_servicio','a.es_laboratorio','a.created_at','a.origen','a.id_servicio','a.pendiente','a.id_laboratorio','a.monto','a.porcentaje','a.informe','a.abono','a.resultado','b.nombres as nombrePaciente','b.apellidos as apellidoPaciente','b.fechanac','c.detalle as servicio','e.name','e.dni as dniprof','e.lastname','d.name as laboratorio','b.dni')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('servicios as c','c.id','a.id_servicio')
        ->join('analises as d','d.id','a.id_laboratorio')
        ->join('users as e','e.id','a.origen_usuario')
        ->whereNotIn('a.monto',[0,0.00])
        ->where('a.resultado','=', NULL)
        ->where('a.id','=',$id)
        ->first();*/

        $resultados = DB::table('resultados_servicios as a')
        ->select('a.id', 'a.id_atencion', 'a.id_servicio', 'a.informe','b.usuario', 'a.created_at', 'a.estatus','b.tipo_origen', 'b.id_paciente', 'b.id_origen', 's.nombre as servicio', 'pa.fechanac','pa.nombres', 'pa.apellidos','pa.dni', 'c.name', 'c.lastname')
        ->join('atenciones as b', 'b.id', 'a.id_atencion')
        ->join('users as c', 'c.id', 'b.id_origen')
        ->join('pacientes as pa', 'pa.id', 'b.id_paciente')
        ->join('servicios as s', 's.id', 'a.id_servicio')
        //->where('a.estatus', '=', 1)
        ->where('a.id',  '=', $id)
        //->where('a.monto', '!=', '0')
        ->first();


        if ($resultados->fechanac != null) {
            $edad = Carbon::parse($resultados->fechanac)->age;
        } else {
          $edad = "X";

        }

  
        $informe->setValue('name', $resultados->apellidos. ' '.$resultados->nombres. ' Edad: '.$edad);
        $informe->setValue('descripcion',$resultados->servicio);
        $informe->setValue('date',date('d-m-Y'));  
        if($resultados->tipo_origen == 2){
        $informe->setValue('indicacion',$resultados->id_origen);
        } else {
        $informe->setValue('indicacion','MADRE TERESA');
        } 
        $informe->saveAs($resultados->id.'-'.$resultados->apellidos.'-'.$resultados->nombres.'-'.$resultados->dni.'.docx');
        return response()->download($resultados->id.'-'.$resultados->apellidos.'-'.$resultados->nombres.'-'.$resultados->dni.'.docx');

    }

    public function modelo_informel($id,$informe)
    {

        File::delete(File::glob('*.docx'));
        $informe = $templateProcessor = new TemplateProcessor(public_path('modelos_informes/'.$informe));
      /*  $resultados = ReportesController::elasticSearch($id);
        $resultados1 = DB::table('atenciones as a')
        ->select('a.id','a.id_paciente','a.origen_usuario','a.es_servicio','a.es_laboratorio','a.created_at','a.origen','a.id_servicio','a.pendiente','a.id_laboratorio','a.monto','a.porcentaje','a.informe','a.abono','a.resultado','b.nombres as nombrePaciente','b.apellidos as apellidoPaciente','b.fechanac','c.detalle as servicio','e.name','e.dni as dniprof','e.lastname','d.name as laboratorio','b.dni')
        ->join('pacientes as b','b.id','a.id_paciente')
        ->join('servicios as c','c.id','a.id_servicio')
        ->join('analises as d','d.id','a.id_laboratorio')
        ->join('users as e','e.id','a.origen_usuario')
        ->whereNotIn('a.monto',[0,0.00])
        ->where('a.resultado','=', NULL)
        ->where('a.id','=',$id)
        ->first();*/

        $resultados = DB::table('resultados_laboratorio as a')
        ->select('a.id', 'a.id_atencion', 'a.id_laboratorio', 'a.informe','b.usuario', 'a.created_at', 'a.estatus','b.tipo_origen', 'b.id_paciente', 'b.id_origen', 's.nombre as servicio', 'pa.fechanac','pa.nombres', 'pa.apellidos','pa.dni', 'c.name', 'c.lastname')
        ->join('atenciones as b', 'b.id', 'a.id_atencion')
        ->join('users as c', 'c.id', 'b.id_origen')
        ->join('pacientes as pa', 'pa.id', 'b.id_paciente')
        ->join('analisis as s', 's.id', 'a.id_laboratorio')
        //->where('a.estatus', '=', 1)
        ->where('a.id',  '=', $id)
        //->where('a.monto', '!=', '0')
        ->first();


        if ($resultados->fechanac != null) {
            $edad = Carbon::parse($resultados->fechanac)->age;
        } else {
          $edad = "X";

        }

  
        $informe->setValue('name', $resultados->apellidos. ' '.$resultados->nombres. ' Edad: '.$edad);
        $informe->setValue('descripcion',$resultados->servicio);
        $informe->setValue('date',date('d-m-Y'));    
        if($resultados->tipo_origen == 2){
          $informe->setValue('indicacion',$resultados->id_origen);
          } else {
          $informe->setValue('indicacion','MADRE TERESA');
        }     
        $informe->saveAs($resultados->id.'-'.$resultados->apellidos.'-'.$resultados->nombres.'-'.$resultados->dni.'.docx');
        return response()->download($resultados->id.'-'.$resultados->apellidos.'-'.$resultados->nombres.'-'.$resultados->dni.'.docx');

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