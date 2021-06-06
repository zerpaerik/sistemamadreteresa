<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Creditos;
use App\Debitos;
use App\Analisis;
use App\Atenciones;
use App\Sedes;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sedes = Sedes::all();

        $total = Atenciones::where('estatus','=',1)
        ->select(DB::raw('SUM(monto) as monto'))
        ->where('created_at','=',date('Y-m-d'))
        ->first();

        $count = Atenciones::where('estatus','=',1)
        ->select(DB::raw('COUNT(*)'))
        ->where('created_at','=',date('Y-m-d'))
        ->first();

        $efec = Atenciones::where('estatus','=',1)
        ->select(DB::raw('SUM(monto) as monto'))
        ->where('created_at','=',date('Y-m-d'))
        ->where('tipo_pago','=','EF')
        ->first();


        $tarj = Atenciones::where('estatus','=',1)
        ->select(DB::raw('SUM(monto) as monto'))
        ->where('created_at','=',date('Y-m-d'))
        ->where('tipo_pago','=','TJ')
        ->first();

        $dep = Atenciones::where('estatus','=',1)
        ->select(DB::raw('SUM(monto) as monto'))
        ->where('created_at','=',date('Y-m-d'))
        ->where('tipo_pago','=','DP')
        ->first();

        $yap = Atenciones::where('estatus','=',1)
        ->select(DB::raw('SUM(monto) as monto'))
        ->where('created_at','=',date('Y-m-d'))
        ->where('tipo_pago','=','YP')
        ->first();

        return view('home',compact('sedes', 'total','efec','tarj','dep','count','yap'));
    }
}
