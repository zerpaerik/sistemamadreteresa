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
    public function index(Request $request)
    {
        $sedes = Sedes::all();


        $total = Creditos::whereDate('created_at', date('Y-m-d 00:00:00', strtotime(date('Y-m-d'))))
        ->select(DB::raw('SUM(monto) as monto'))
        ->where('sede','=',$request->session()->get('sede'))
        ->first();

       /* $count = Atenciones::where('estatus','=',1)
        ->select(DB::raw('COUNT(*)'))
        ->where('created_at','=',date('Y-m-d'))
        ->first();*/

        $efec = Creditos::whereDate('created_at', date('Y-m-d 00:00:00', strtotime(date('Y-m-d'))))
        ->select(DB::raw('SUM(monto) as monto'))
        ->where('tipopago','=','EF')
        ->where('sede','=',$request->session()->get('sede'))
        ->first();


        $tarj = Creditos::whereDate('created_at', date('Y-m-d 00:00:00', strtotime(date('Y-m-d'))))
        ->select(DB::raw('SUM(monto) as monto'))
        ->where('tipopago','=','TJ')
        ->where('sede','=',$request->session()->get('sede'))
        ->first();

        $dep = Creditos::whereDate('created_at', date('Y-m-d 00:00:00', strtotime(date('Y-m-d'))))
        ->select(DB::raw('SUM(monto) as monto'))
        ->where('tipopago','=','DP')
        ->where('sede','=',$request->session()->get('sede'))
        ->first();

        $yap = Creditos::whereDate('created_at', date('Y-m-d 00:00:00', strtotime(date('Y-m-d'))))
        ->select(DB::raw('SUM(monto) as monto'))
        ->where('tipopago','=','YP')
        ->where('sede','=',$request->session()->get('sede'))
        ->first();

        $egresos = Debitos::whereDate('created_at', date('Y-m-d 00:00:00', strtotime(date('Y-m-d'))))
        ->select(DB::raw('SUM(monto) as monto'))
        ->where('sede','=',$request->session()->get('sede'))
        ->first();

        return view('home',compact('sedes', 'total','efec','tarj','dep','count','yap','egresos'));
    }
}
