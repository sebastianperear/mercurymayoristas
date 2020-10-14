<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;

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

        $productos = Productos::all();
        
        return view('home')
        ->with('productos', $productos);
    }
}
