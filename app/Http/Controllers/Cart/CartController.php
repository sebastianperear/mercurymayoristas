<?php

namespace App\Http\Controllers\cart;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Cart;
use App\CartDet;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $carts = DB::table('carrito')
            ->join('carrito_det', 'carrito.id', '=', 'carrito_det.id_carrito')
            ->select('carrito.*', 'carrito_det.cantidad', 'carrito_det.precio')
            ->where('identificacion', auth()->user()->identificacion )
             ->where('estado', 'En espera' )
            ->get();




            

        return $carts;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $carts = DB::table('carrito')
            ->join('carrito_det', 'carrito.id', '=', 'carrito_det.id_carrito')
            ->select('carrito.*', 'carrito_det.cantidad', 'carrito_det.precio')
            ->where('identificacion', auth()->user()->identificacion )
             ->where('estado', 'En espera' )
            ->get();

            $carts_id = $carts->first();

              
            if (count($carts) > 0) {
                $cart_det = new CartDet($request->all());
                $cart_det->id_carrito = $carts_id->id;
                $cart_det->id_producto = $request->id_producto;
                $cart_det->save();
            }

            else{
                $cart = new cart($request->all());
                $cart->identificacion = auth()->user()->identificacion;
                $cart->Estado = 'En espera';
                $cart->save();

                $cart_det = new CartDet($request->all());
                $cart_det->id_carrito = $cart->id;
                $cart_det->id_producto = $request->id_producto;
                $cart_det->save();

        
            }
   
        
        
        



        

        return;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
