<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;

class CategoryController extends Controller
{
    public function index($categoria,$subcategoria)
    {
        
    	$productos = Productos::all()
    	->where('categoria', $categoria)
    	->where('subcategoria', $subcategoria)
    	;
         
    	return view('categories.index')
    	->with('subcategoria', $subcategoria)
    	->with('productos', $productos);
        
    }

}
