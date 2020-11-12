<?php

namespace App\Http\Controllers\Products;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Productos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function view($id,$nombre)
    {
        
    	$producto = Productos::get()
    	->where('id', $id)->first();
         
         
         $dcto =  DB::table('categoria_cliente')
            ->join('subcategoria', 'subcategoria.id', '=', 'categoria_cliente.id_subcategoria')
            ->join('tipo_dcto', 'tipo_dcto.id', '=', 'categoria_cliente.id_tipodcto')
            ->select('categoria_cliente.*', 'tipo_dcto.dcto')->where('categoria_cliente.id_subcategoria', $producto->id_subcategoria)
            ->where('categoria_cliente.id_cliente', Auth::user()->identificacion)
            ->get()->first();
                  
            		if (!empty($dcto) ) {
            			$precio = $producto->precio_base  * $dcto->dcto;
			            $precio2 = $precio/100;
			            $precio3 = $producto->precio_base - $precio2;
			            
            		}

            		else {
                      $precio3 = $producto->precio_base;
            			}

            

            

         
    	return view('product.view')
    	->with('producto', $producto)
    	->with('precio3', $precio3);
        
    }
}
