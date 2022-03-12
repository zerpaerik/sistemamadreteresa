<?php

namespace App\Http\Controllers;
use App\Equipos;
use App\Analisis;
use App\Servicios;
use App\Clientes;
use App\Tiempo;
use App\Material;
use App\Solicitudes;
use App\Activos;
use App\User;
use Auth;
use Illuminate\Http\Request;
use DB;


class ActivosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $activos = DB::table('activos as a')
        ->select('a.*')
        ->where('a.sede', '=', $request->session()->get('sede'))
        ->where('a.estatus', '=', 1)
        ->get(); 

        return view('activos.index', compact('activos'));
        //
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        return view('activos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        
            $analisis = new Activos();
            $analisis->nombre =$request->nombre;
            $analisis->descripcion =$request->descripcion;
            $analisis->precio =$request->precio;
            $analisis->estado =$request->estado;
            $analisis->ubicacion =$request->ubicacion;
            $analisis->sede = $request->session()->get('sede');
            $analisis->usuario =Auth::user()->id;
            $analisis->save();
               

        return redirect()->action('ActivosController@index')
        ->with('success','Creado Exitosamente!');


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
       
        $activo = Activos::where('id','=',$id)->first();
        return view('activos.edit', compact('activo')); //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clientes  $Clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Analisis $analisis)
    {


       

      $p = Activos::find($request->id);
      $p->nombre =$request->nombre;
      $p->descripcion =$request->descripcion;
      $p->precio =$request->precio;
      $p->estado =$request->estado;
      $p->ubicacion =$request->ubicacion;
      $res = $p->update();
    
    
    return redirect()->action('ActivosController@index')
    ->with('success','Modificado Exitosamente!');

        //
    }

  
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clientes  $Clientes
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {

        $analisis = Activos::find($id);
        $analisis->estatus = 0;
        $analisis->save();

        return redirect()->action('ActivosController@index');

        //
    }
}

