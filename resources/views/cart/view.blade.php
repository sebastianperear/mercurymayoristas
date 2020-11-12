@extends('layouts.app')


@section('content')
 <div class="container cart">
 	<div class="cart-title">
	 	<h2 class="category-title">Carrito</h2>
	 	<p>Estos son los productos que has agregado a tu carrito:</p><br>
 	</div>
 	<div class="row">
 		<div class="col-md-12 col-sm-12">
		 	<table class="table">
			  <thead class="thead-dark">
			    <tr>
			      
			      <th scope="col">Nombre</th>
			      <th scope="col">Cantidad</th>
			      <th scope="col">Precio</th>
			      <th scope="col">Total</th>
			    </tr>
			  </thead>
			@foreach($carritos as $carrito )

			  <tbody>
			    <tr>
			      <td>{{$carrito->nombre}}</td>
			      <td>{{$carrito->cant}}</td>
			      <td>${{number_format($carrito->precio)}}</td>
			      <td>${{number_format($carrito->total)}}</td>
			    </tr>
			    
			  </tbody>
			 @endforeach

			</table><br>
			<h4 class="cart-total"><strong>Total: ${{number_format($totalcarrito->gran_total)}}</strong></h4>
			<h4 class="cart-total"><strong> Unds: {{$totalcarrito->cant_total}}</strong></h4>

			
		</div>
	</div>
 </div>
@endsection