<?php

namespace App\Http\Controllers\Products;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Productos;

class ProductController extends Controller
{
    public function view($id,$nombre)
    {
        
    	$producto = Productos::get()
    	->where('id', $id)->first();
         
    	return view('product.view')
    	->with('producto', $producto);
        
    }
}
