@extends('layouts.app')


@section('content')
   <div class="container">
  <div class="row">
    <div class="col-sm-7">
                    <div class="product-image">
                            <img class="pic-1" src="/..{{ $producto->url_img }}">
                    </div>  

    </div>
    
    <div class="col-sm-5">
      <div class="product-content-page">
                        <h2 class="product-title-page"><strong>{{ $producto->nombre}}</strong></h2>
                        <p>Código: {{ $producto->codigo}}</p>
                        @if($producto->estado == 'Disponible')
                            <p class="text-success"><i class="fa fa-check-circle-o text-success" aria-hidden="true"></i> Disponible</p>
                        @endif

                        
                        <div class="product-description">
                            <p>{{ $producto->descripción}}</p>
                        </div>
                        <div class="price-page">
                            <p><strong>${{ number_format($precio3, 0, ',','.') }}</strong></p>
                        </div>

                        
                          <button type="button" class="btn btn-success"><i class="fa fa-shopping-cart"></i> Añadir al carrito</button>
                        
                    </div>
    </div>
  </div>
</div>
    
   
        
    

@endsection
