@extends('layouts.app')

@section('title','App Shop | Dashboard')

@section('body-class','product-page sidebar-collapse')

@section('content')

  <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/profile_city.jpg')}}') ">

  </div>
    <div class="main main-raised">
      <div class="container">

        <div class="section text-center">
          <h2 class="title">Dashboard</h2>
          @if (session('notification'))
              <div class="alert alert-success" role="alert">
                  {{ session('notification') }}
              </div>
          @endif
          <ul class="nav nav-pills nav-pills-icons" role="tablist">
              <li class="nav-item">
                  <a class="nav-link active" href="#dashboard-1" role="tab" data-toggle="tab">
                      <i class="material-icons">dashboard</i>
                      CARRITO DE COMPRAS
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#tasks-1" role="tab" data-toggle="tab">
                      <i class="material-icons">list</i>
                      PEDIDOS REALIZADOS
                  </a>
              </li>
          </ul>

          <p>Tu carrito de compras presenta {{auth()->user()->cart->details->count()}} productos.</p>
          <table class="table">
              <thead>
                  <tr>
                      <th class="text-center">#</th>
                      <th class="text-center">Nombre</th>
                      <th>Precio</th>
                      <th>Cantidad</th>
                      <th>SubTotal</th>
                      <th>Opciones</th>
                  </tr>
              </thead>
              <tbody>
                @foreach (auth()->user()->cart->details as $detail)
                  <tr>
                      <td class="text-center"><img src="{{$detail->product->featured_image_url}}" height="50"></td>
                      <td>
                        <a href="{{ url('/products/'.$detail->product->id)}}" target="_blank">
                          {{$detail->product->name}}
                        </a>
                      </td>
                      <td>&euro; {{$detail->product->price}}</td>
                      <td>{{$detail->quantity}}</td>
                      <td>{{$detail->quantity * $detail->product->price}}</td>
                      <td class="td-actions">
                        <form method="post" action="{{url('/cart')}}">
                          @method('delete')
                          @csrf
                          <input type="hidden" name="cart_detail_id" value="{{$detail->id}}">
                          <a href="{{ url('/products/'.$detail->product->id)}}" rel="tooltip" target="_blank" title="Ver Producto" class="btn btn-info">
                              <i class="material-icons">info</i>
                          </a>

                          <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger">
                              <i class="material-icons">delete</i>
                          </button>
                        </form>

                      </td>
                  </tr>
                @endforeach

              </tbody>
          </table>

          <div class="text-center">
            <form method="post" action="{{url('/order')}}">
              @csrf
              <button class="btn btn-primary btn-round">
              	<i class="material-icons">done</i> Realizar Pedido
              </button>
            </form>
          </div>

        </div>

      </div>
    </div>
    @include('includes.footer')

@endsection
