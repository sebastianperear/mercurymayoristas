@extends('layouts.app')


@section('content')
 <div class="container cart">
 	<div class="cart-title">
	 	<h1 class="category-title">Carrito</h1>
	 	<p>Estos son los productos que has agregado a tu carrito:</p><br>
 	</div>
	<table>
        <thead class="cart__row cart__row--heading">
	        <tr>
	         <th scope="col" class="cart__title-column">Producto</th>
	         <th class=" cart__title-column" scope="col">Precio</th>
	         <th class="cart__title-column" scope="col ">Cant.</th>
	         <th class="cart__title-column" scope="col">Total</th>
	      </tr>
    	</thead>
        @foreach($carritos as $carrito )
        <tbody>
        	<tr>
			      <td>

			      	<div class="row">
					    <div class="col-sm-2">
					      <img src="{{$carrito->url_img}}" class="cart__image">
					    </div>
					<div class="col-sm">
					   <span class="cart__product-name">
				      	  <a href="productos/{{ $carrito->id}}/{{ $carrito->nombre}}">{{$carrito->nombre}}
				      	  </a>
			      	  </span><br><br>
			      	  <a href="#" class=" cart__remove-button" v-on:click.prevent="removefromCart({{$carrito->id}})">Quitar
			      	  </a>
					</div>
			      </td>
			      <td>${{number_format($carrito->precio)}}</td>
			      <td>{{$carrito->cant}}</td>
			      <td>${{number_format($carrito->total)}}</td>
			    </tr>
       </tbody>
       @endforeach
    </table>

    

   
 </div>
@endsection