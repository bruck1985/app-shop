@extends('layouts.app')

@section('title','Listado de productos')

@section('body-class','product-page sidebar-collapse')

@section('content')

  <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/city-profile.jpg')}}');"></div>
    <div class="main main-raised">
      <div class="profile-content">
        <div class="container">
          <div class="row">
          <div class="section text-center">
          <h2 class="title">Productos disponibles</h2>
          <div class="team">
            <div class="row">
              <a href="{{url('/admin/products/create')}}" class="btn btn-primary btn-round">Nuevo Producto </a>
              <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="col-md-2 text-center">Nombre</th>
                        <th class="col-md-5 text-center">Descripción</th>
                        <th class="text-center">Categoría</th>
                        <th class="text-right">Precio</th>
                        <th class="text-right">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($products as $product)
                    <tr>
                        <td class="text-center">{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->category ? $product->category->name : 'General' }}</td>
                        <td class="text-right">&euro; {{$product->price}}</td>
                        <td class="td-actions text-right">
                          <form method="post" action="{{url('/admin/products/'.$product->id.'/delete')}}">
                            @csrf

                            <button type="button" rel="tooltip" title="Ver Producto" class="btn btn-info">
                                <i class="material-icons">info</i>
                            </button>
                            <a href="{{url('/admin/products/'.$product->id.'/edit')}}" rel="tooltip" title="Editar Producto" class="btn btn-success">
                                <i class="material-icons">edit</i>
                            </a>

                            <a  href="{{url('/admin/products/'.$product->id.'/images')}}" rel="tooltip" title="Imágenes del producto" class="btn btn-warning">
                                <i class="material-icons">image</i>
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
            {{$products->links()}}

            </div>
          </div>
        </div>
          </div>
        </div>
      </div>
    </div>

@include('includes.footer')

@endsection
