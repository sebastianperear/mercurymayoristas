@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row product">
            @foreach ($productos as $producto)
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="../../productos/{{ $producto->id}}/{{ $producto->nombre}}">
                            <img class="pic-1" src="../..{{ $producto->url_img }}">
                        </a>
                    </div>  
                    <div class="product-content">
                        <h3 class="title">
                            <a href="../../productos/{{ $producto->id}}/{{ $producto->nombre}}">{{ $producto->nombre}}</a></h3>
                        <div class="price">${{ number_format($producto->precio_base, 0, ',','.') }}
                        </div>
                    </div>
                    <ul class="social add-to-cart">
                          
                        <li><a href="" data-tip="Añadir al carrito"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
             
            @endforeach
            
        </div>

    </div>
   
        
    

@endsection
