@extends('layouts.app')

@section('slide')
<slide></slide>
@endsection


@section('content')

    
   <div class="container">
        <h2 class="product-title"><strong>Los más vendidos</strong></h2><br>
        <div class="row product">
            
                @foreach ($productos as $producto)
                 @if($producto->carruselhome1)
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid6">
                        <div class="product-image6">
                            <a href="productos/{{ $producto->id}}/{{ $producto->nombre}}">
                                <img class="pic-1" src="{{ $producto->url_img }}">
                            </a>
                        </div>
                        <div class="product-content">
                            <h3 class="title">
                               <a href="productos/{{ $producto->id}}/{{ $producto->nombre}}">{{ $producto->nombre}}</a>
                            </h3>
                            <div class="price">${{ number_format($producto->precio_base) }}
                            </div>
                        </div>
                         
                        <form method="POST" v-on:submit.prevent="createCart">
                            <ul class="social add-to-cart">
                                <li>
                                 <div class="col-sm-5 qty">
                                <div class="form-group">
                                    <label for="qty">Cantidad</label>
                                    <input class="qty-input form-control" type="number" value="1" name="cantidad" v-model="newCantidad"/>
                                    <input type="text" class="newPrecio"  min="1"  id="fname" name="precio"      v-model="newPrecio"   />
                                    
                                   <p v-bind:l="12"></p>
                                    
                                </div>
                              </div>


                                   <li> <button type="submit" data-tip="Añadir al carrito"><i class="fa fa-shopping-cart"></i></button></li>
                            </ul>
                        </form>
                    </div>
                </div>

                 @endif
                @endforeach
            
        </div>
        <div class="row banner">
           <div class="col-md-6 col-sm-6 ">
             <img src="img/banners/BANNER-BOMBILLO-LED-SMART.jpg" class="banner-img">
           </div>
           <div class="col-md-6 col-sm-6">
             <img src="img/banners/BANNER-CATÁLOGO-MERCURY.jpg" class="banner-img">
           </div>
        </div>
        <div class="row banner">
           <div class="col-md-12 col-sm-12 ">
             <img src="img/banners/BANNER-COMPRA-ECOMMERCE-1536x320.png" class="banner-img">
           </div>
           
        </div>

        <h2 class="product-title"><strong>Destacados</strong></h2><br>
        <div class="row product">
            @foreach ($productos as $producto)
             @if($producto->carruselhome2)
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="productos/{{ $producto->id}}/{{ $producto->nombre}}">
                            <img class="pic-1" src="{{ $producto->url_img }}">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                           <a href="productos/{{ $producto->id}}/{{ $producto->nombre}}">{{ $producto->nombre}}</a>
                        </h3>
                        <div class="price">${{ number_format($producto->precio_base) }}
                        </div>
                    </div>
                    
                        <ul class="social add-to-cart">
                            <li>
                             <div class="col-sm-5 qty">
                            <div class="form-group">
                                <label for="qty">Cantidad</label>
                                <input class="qty-input form-control" type="number" value="1" name="qty" />
                            </div>
                          </div>
                                <a href="" data-tip="Añadir al carrito"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>

                        
                    
                </div>
            </div>
             @endif
            @endforeach
            
        </div>
    </div>
        
      
    

@endsection
