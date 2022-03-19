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
use App\Ubicaciones;
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
        if ($request->ubicacion != null) {

            if ($request->ubicacion == 'TODOS') {
                $activos = DB::table('activos as a')
            ->select('a.*')
            ->where('a.sede', '=', $request->session()->get('sede'))
            ->where('a.estatus', '!=', 99)
            ->get();
            } else {
                $activos = DB::table('activos as a')
                ->select('a.*')
                ->where('a.sede', '=', $request->session()->get('sede'))
                ->where('a.ubicacion', '=', $request->ubicacion)
                ->where('a.estatus', '!=', 99)
                ->get();

            }

        }else {

            $activos = DB::table('activos as a')
            ->select('a.*')
            ->where('a.sede', '=', $request->session()->get('sede'))
            ->where('a.estatus', '!=', 99)
            ->get();

        }

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
      $ubicaciones = Ubicaciones::all();
        return view('activos.create', compact('ubicaciones'));
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
	  
     
        $activo = DB::table('activos as a')
        ->select('a.*')
       // ->join('users as u', 'u.id', 'a.usuario')
        ->where('a.id', '=', $id)
        ->first(); 
  

        
        return view('activos.ver', compact('activo'));
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
        $ubicaciones = Ubicaciones::all();

        return view('activos.edit', compact('activo','ubicaciones')); //
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
      $p->estatus =$request->estatus;
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

    public function deletea($id)
    {

        $analisis = Activos::find($id);
        $analisis->estatus = 99;
        $analisis->save();

        return redirect()->action('ActivosController@index');

        //
    }
}

