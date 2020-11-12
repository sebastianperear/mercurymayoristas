<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

        
       
        
        $productos  = DB::table('productos')
            ->join('subcategoria', 'subcategoria.id', '=', 'productos.id_subcategoria')
            ->join('categoria_cliente', 'categoria_cliente.id_subcategoria', '=', 'productos.id_subcategoria')
            ->join('tipo_dcto', 'categoria_cliente.id_tipodcto', '=', 'tipo_dcto.id')
            ->select('productos.*', DB::raw("(productos.precio_base -(productos.precio_base * tipo_dcto.dcto)/100)  as precio"))
            ->where('categoria_cliente.id_cliente', Auth::user()->identificacion)->orderBy('id', 'ASC')
            ->get();

        


        return view('home')
        ->with('productos', $productos);

        
                        
            
                        
        
    }
}
