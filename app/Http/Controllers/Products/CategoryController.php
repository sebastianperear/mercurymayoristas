<?php

namespace App\Http\Controllers\Products;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Productos;


class CategoryController extends Controller
{
    public function index($categoria,$subcategoria)
    {
        $productos = DB::table('productos')
            ->join('subcategoria', 'subcategoria.id', '=', 'productos.id_subcategoria')
            ->join('categoria', 'categoria.id', '=', 'productos.id_categoria')
            ->join('categoria_cliente', 'categoria_cliente.id_subcategoria', '=', 'productos.id_subcategoria')
            ->join('tipo_dcto', 'categoria_cliente.id_tipodcto', '=', 'tipo_dcto.id')
            ->select('productos.*', 'subcategoria.nombre as subcat', 'categoria.nombre as cat', DB::raw("(productos.precio_base -(productos.precio_base * tipo_dcto.dcto)/100)  as precio") )
            ->where('categoria.nombre', $categoria)
            ->where('subcategoria.nombre', $subcategoria)
            ->where('categoria_cliente.id_cliente', Auth::user()->identificacion)
            ->get();
    	
         
    	return view('categories.index')
    	->with('productos', $productos)
        ->with('subcategoria', $subcategoria);
        
    }

}
