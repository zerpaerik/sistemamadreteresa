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
use App\Comisiones;
use App\Visitas;
use Auth;
use Illuminate\Http\Request;
use DB;


class VisitadorController extends Controller
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

        
        $comisiones = DB::table('comisiones as a')
        ->select('a.id', 'a.estatus','a.recibo','a.id_origen','a.id_responsable', 'a.id_atencion','a.fecha_pago','a.created_at','a.detalle','a.usuario', 'a.porcentaje', 'a.monto', 'a.estatus', 'at.id_paciente', 'at.tipo_atencion', 'at.sede', 'at.tipo_origen', 'at.id_origen', 'at.monto as total', 'b.nombres', 'b.apellidos', 'c.name as nameo', 'c.lastname as lasto', 'd.name as nameu', 'd.lastname as lastu',DB::raw('SUM(a.monto) as totalrecibo'))
        ->join('atenciones as at', 'at.id', 'a.id_atencion')
        ->join('pacientes as b', 'b.id', 'at.id_paciente')
        ->join('users as c', 'c.id', 'a.id_responsable')
        ->join('users as d', 'd.id', 'a.usuario')
        ->where('a.estatus', '=', 2)
        ->where('a.id_origen', '=', 2)
        ->where('at.sede', '=', $request->session()->get('sede'))
       // ->where('at.id_origen','=',$request->origen)
        ->whereBetween('a.fecha_pago', [$f1, $f2])
        ->groupBy('a.recibo')      
        ->get();

      //  $comisiones = self::unique_multidim_array(json_decode($comisionest, true), "recibo");



        } else {

            $f1 = date('Y-m-d');
            $f2 = date('Y-m-d');

      

        $comisiones = DB::table('comisiones as a')
        ->select('a.id', 'a.estatus','a.recibo','a.id_origen','a.id_responsable', 'a.fecha_pago', 'a.id_atencion','a.created_at','a.detalle','a.usuario', 'a.porcentaje', 'a.monto', 'a.estatus', 'at.id_paciente', 'at.tipo_atencion', 'at.sede', 'at.tipo_origen', 'at.id_origen', 'at.monto as total', 'b.nombres', 'b.apellidos', 'c.name as nameo', 'c.lastname as lasto', 'd.name as nameu', 'd.lastname as lastu',DB::raw('SUM(a.monto) as totalrecibo'))
        ->join('atenciones as at', 'at.id', 'a.id_atencion')
        ->join('pacientes as b', 'b.id', 'at.id_paciente')
        ->join('users as c', 'c.id', 'a.id_responsable')
        ->join('users as d', 'd.id', 'a.usuario')
        ->where('a.estatus', '=', 2)
        ->where('a.id_origen', '=', 2)
        ->where('at.sede', '=', $request->session()->get('sede'))
       // ->where('at.id_origen','=',$request->origen)
        ->whereBetween('a.fecha_pago', [$f1, $f2])
        ->groupBy('a.recibo')      
        ->get();



        //$comisiones = self::unique_multidim_array(json_decode($comisionest, true), "recibo");

        //dd($comisiones);






        }
       


        return view('visitador.entregar', compact('comisiones','f1','f2'));
        //
    }

    public function index1(Request $request)
    {

        if ($request->inicio) {
            $f1 = $request->inicio;
            $f2 = $request->fin;

            

        $comisiones = DB::table('comisiones as a')
        ->select('a.id', 'a.estatus','a.recibo','a.id_origen','a.fecha_entrega','a.usuario_entrega','a.fecha_pago', 'a.id_atencion','a.created_at','a.detalle','a.usuario', 'a.porcentaje', 'a.monto', 'a.estatus', 'at.id_paciente', 'at.tipo_atencion', 'at.sede', 'at.tipo_origen', 'at.id_origen', 'at.monto as total', 'b.nombres', 'b.apellidos', 'c.name as nameo', 'c.lastname as lasto', 'd.name as nameu', 'd.lastname as lastu',DB::raw('SUM(a.monto) as totalrecibo'))
        ->join('atenciones as at', 'at.id', 'a.id_atencion')
        ->join('pacientes as b', 'b.id', 'at.id_paciente')
        ->join('users as c', 'c.id', 'at.id_origen')
        ->join('users as d', 'd.id', 'a.usuario')
        ->where('a.estatus', '=', 3)
        ->where('at.sede', '=', $request->session()->get('sede'))
       // ->where('at.id_origen','=',$request->origen)
        ->whereBetween('a.fecha_entrega', [$f1, $f2])
        ->groupBy('a.recibo')      
        ->get();


      

        } else {

            $f1 = date('Y-m-d');
            $f2 = date('Y-m-d');

      

         

        $comisiones = DB::table('comisiones as a')
        ->select('a.id', 'a.estatus','a.recibo', 'a.id_origen','a.fecha_entrega','a.usuario_entrega','a.id_atencion','a.fecha_pago','a.created_at','a.detalle','a.usuario', 'a.porcentaje', 'a.monto', 'a.estatus', 'at.id_paciente', 'at.tipo_atencion', 'at.sede', 'at.tipo_origen', 'at.id_origen', 'at.monto as total', 'b.nombres', 'b.apellidos', 'c.name as nameo', 'c.lastname as lasto', 'd.name as nameu', 'd.lastname as lastu',DB::raw('SUM(a.monto) as totalrecibo'))
        ->join('atenciones as at', 'at.id', 'a.id_atencion')
        ->join('pacientes as b', 'b.id', 'at.id_paciente')
        ->join('users as c', 'c.id', 'at.id_origen')
        ->join('users as d', 'd.id', 'a.usuario')
        ->where('a.estatus', '=', 3)
        ->where('at.sede', '=', $request->session()->get('sede'))
       // ->where('at.id_origen','=',$request->origen)
        ->whereBetween('a.fecha_entrega', [$f1, $f2])
        ->groupBy('a.recibo')      
        ->get();



        }

        return view('visitador.entregadas', compact('comisiones','f1','f2'));
        //
    }

    public function cumpleaños(Request $request)
    {


      if ($request->inicio) {
          $f1 = $request->inicio;
          $f2 = $request->fin;


          $prof = DB::table('users as a')
        ->select('a.id', 'a.name', 'a.lastname','a.nacimiento', 'a.telefono', 'a.especialidad', 'a.estatus', 'a.tipo', 'a.centro', 'a.email', 'b.nombre as especialidad', 'c.nombre as centro_name')
        ->join('especialidades as b', 'b.id', 'a.especialidad')
        ->join('centros as c', 'c.id', 'a.centro')
        ->where('a.estatus', '=', 1)
        ->where('a.tipo', '=', 2)
        ->whereBetween('a.nacimiento', [$f1, $f2])
        ->distinct('a.id')
        ->get();
      } else {
        $f1 = date('Y-m-d');
        $f2 = date('Y-m-d');

        $prof = DB::table('users as a')
        ->select('a.id', 'a.name', 'a.lastname','a.nacimiento', 'a.telefono', 'a.especialidad', 'a.estatus', 'a.tipo',  'a.email', 'b.nombre as especialidad', 'c.nombre as centro_name')
        ->join('especialidades as b', 'b.id', 'a.especialidad')
        ->join('centros as c', 'c.id', 'a.centro')
        ->where('a.estatus', '=', 1)
        ->where('a.tipo', '=', 2)
        ->whereBetween('a.nacimiento', [$f1, $f2])
        ->distinct('a.id')
        ->get();


      }

    
        return view('visitador.cumples', compact('prof','f1','f2'));
        //
    }

    public function visitas(Request $request)
    {


      if ($request->inicio && $request->prof == 0) {
          $f1 = $request->inicio;
          $f2 = $request->fin;


          $visitas = DB::table('visitas as a')
          ->select('a.id', 'a.profesional', 'a.turno','a.usuario','a.created_at', 'b.centro','b.telefono', 'b.name as namep','b.lastname as apep','c.name as visiname','c.lastname as visiape','d.nombre as centro')
          ->join('users as b', 'b.id', 'a.profesional')
          ->join('users as c', 'c.id', 'a.usuario')
          ->join('centros as d', 'd.id', 'b.centro')
          ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
          //->whereBetween('a.nacimiento', [$f1, $f2])
          ->get();


      } else if($request->inicio && $request->prof != 0) {

        $f1 = $request->inicio;
        $f2 = $request->fin;


        $visitas = DB::table('visitas as a')
        ->select('a.id', 'a.profesional', 'a.turno','a.usuario','a.created_at', 'b.centro','b.telefono', 'b.name as namep','b.lastname as apep','c.name as visiname','c.lastname as visiape','d.nombre as centro')
        ->join('users as b', 'b.id', 'a.profesional')
        ->join('users as c', 'c.id', 'a.usuario')
        ->join('centros as d', 'd.id', 'b.centro')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        ->where('a.profesional', '=', $request->prof)
        ->get();


      } else {
        $f1 = date('Y-m-d');
        $f2 = date('Y-m-d');

        $visitas = DB::table('visitas as a')
        ->select('a.id', 'a.profesional', 'a.turno','a.usuario','a.created_at', 'b.centro','b.telefono', 'b.name as namep','b.lastname as apep','c.name as visiname','c.lastname as visiape','d.nombre as centro')
        ->join('users as b', 'b.id', 'a.profesional')
        ->join('users as c', 'c.id', 'a.usuario')
        ->join('centros as d', 'd.id', 'b.centro')
        ->whereBetween('a.created_at', [date('Y-m-d 00:00:00', strtotime($f1)), date('Y-m-d 23:59:59', strtotime($f2))])
        //->whereBetween('a.nacimiento', [$f1, $f2])
        ->get();


      }
      $profesionales = User::where('estatus','=',1)->where('tipo','=',2)->orderBy('lastname','ASC')->get();


    
        return view('visitador.visitas', compact('visitas','f1','f2','profesionales'));
        //
    }

    
    public function create_visitas()
    {

        $profesionales = User::where('estatus','=',1)->where('tipo','=',2)->orderBy('lastname','ASC')->get();

        return view('visitador.create', compact('profesionales'));
        //
    }

    public function guardar_visitas (Request $request)
    {

       // dd($request->all());

        $tiempo = new Visitas();
        $tiempo->profesional =$request->prof;
        $tiempo->turno =$request->turno;
        $tiempo->usuario =Auth::user()->id;
        $tiempo->save();

        return redirect()->action('VisitadorController@visitas');


    }


   
    public function entregar(Request $request)
    {

      $usuario = DB::table('users')
      ->select('*')
      ->where('id','=', Auth::user()->id)
      ->first();  

      $comision = Comisiones::where('recibo','=',$request->id)->get();


      foreach ($comision as $con) {
        $recibo = $con->recibo;
        if (!is_null($recibo)) {
          Comisiones::where('recibo', $request->id)
          ->update([
              'estatus' => 3,
              'fecha_entrega' => date('Y-m-d'),
              'usuario_entrega' =>  $usuario->lastname.' '.$usuario->name,
              'tipo_entrega' => $request->tipo
          ]);
        }
       }

     /* Comisiones::where('recibo', $request->id)
      ->update([
          'estatus' => 3,
          'fecha_entrega' => date('Y-m-d'),
          'usuario_entrega' =>  $usuario->lastname.' '.$usuario->name,
          'tipo_entrega' => $request->tipo
      ]);*/

    
      return back();

        //
    }

    

        public function eliminar($id)
        {

          $visitas = Visitas::where('id','=',$id)->first();
          $visitas->delete();
    
        
          return back();
    
            //
        }

    public function reversar($id)
    {


      $comision = Comisiones::where('recibo','=',$id)->get();


      foreach ($comision as $con) {
        $recibo = $con->recibo;
        if (!is_null($recibo)) {
          Comisiones::where('recibo', $recibo)
          ->update([
              'estatus' => 2,
              'fecha_entrega' => NULL,
              'usuario_entrega' => '',
              'tipo_entrega' => ''
          ]);
        }
       }
    
      return back();

        //
    }



  





    static function unique_multidim_array($array, $key) {
        $temp_array = array();
        $i = 0;
        $key_array = array();
       
        foreach($array as $val) {
            if (!in_array($val[$key], $key_array)) {
                $key_array[$i] = $val[$key];
                $temp_array[$i] = $val;
            }
            $i++;
        }
        return $temp_array;
      }    

 
   
}