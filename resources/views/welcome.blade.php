@extends('layouts.app')

@section('title','Bienvenido a App Shop')

@section('body-class','landing-page sidebar-collapse')

@section('styles')
  <style>
    .team .row .col-md-4{
      margin-bottom: 5em;
    }
    .row{
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      flex-wrap: wrap;
    }
    .row > [class*='col-']{
      display: flex;
      flex-direction:column;
    }
  </style>
@endsection

@section('content')

  <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/profile_city.jpg')}}') ">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h1 class="title">Bienvenido a App Shop.</h1>
            <h4>Realiza pedidos en linea y te contactaremos para coordinar la entrega.</h4>
            <br>
            <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn btn-danger btn-raised btn-lg">
              <i class="fa fa-play"></i> Como funciona
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="main main-raised">
      <div class="container">
        <div class="section text-center">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <h2 class="title">¿Por qué App Shop?</h2>
              <h5 class="description">Puedes revisar nuestra relación completa de productos, comparar precios y realizar tus pedidos cuando estés seguro.</h5>
            </div>
          </div>
          <div class="features">
            <div class="row">
              <div class="col-md-4">
                <div class="info">
                  <div class="icon icon-info">
                    <i class="material-icons">chat</i>
                  </div>
                  <h4 class="info-title">Atendemos tus dudas</h4>
                  <p>Atendemos rápidamente cualquier consulta que tengas vía chat. No estás solo, sino que siempre estamos atentos a tus inquietudes.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="info">
                  <div class="icon icon-success">
                    <i class="material-icons">verified_user</i>
                  </div>
                  <h4 class="info-title">Pago seguro</h4>
                  <p>Todo pedido que realices será confirmado a través de una llamada. Si no confias en los pagos en línea puedes pagar contra entrega el valor acordado.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="info">
                  <div class="icon icon-danger">
                    <i class="material-icons">fingerprint</i>
                  </div>
                  <h4 class="info-title">Información privada</h4>
                  <p>Los pedidos que realices sólo lo conocerás tú a través del panel de usuario. Nadie más tiene acceso a está información.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section text-center">
          <h2 class="title">Productos disponibles</h2>
          <div class="team">
            <div class="row">
              @foreach ($products as $product)
                <div class="col-md-4">
                  <div class="team-player">
                    <div class="card card-plain">
                      <div class="col-md-6 ml-auto mr-auto">
                        <img src="{{$product->featured_image_url}}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                      </div>
                      <h4 class="card-title">
                        <a href="{{url('/products/'.$product->id)}}">{{$product->name}}</a>
                        <br>
                        <small class="card-description text-muted">{{$product->category->name}}</small>
                      </h4>
                      <div class="card-body">
                        <p class="card-description">{{$product->description}}</p>
                      </div>

                    </div>
                  </div>
                </div>
              @endforeach
            </div>
            <div class="text-center">
              {{$products->links()}}
            </div>
          </div>
        </div>
        <div class="section section-contacts">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <h2 class="text-center title">Work with us</h2>
              <h4 class="text-center description">Divide details about your product or agency work into parts. Write a few lines about each one and contact us about any further collaboration. We will responde get back to you in a couple of hours.</h4>
              <form class="contact-form">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Your Name</label>
                      <input type="email" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Your Email</label>
                      <input type="email" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleMessage" class="bmd-label-floating">Your Message</label>
                  <textarea type="email" class="form-control" rows="4" id="exampleMessage"></textarea>
                </div>
                <div class="row">
                  <div class="col-md-4 ml-auto mr-auto text-center">
                    <button class="btn btn-primary btn-raised">
                      Send Message
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer footer-default">
      <div class="container">
        <nav class="float-left">
          <ul>
            <li>
              <a href="https://www.creative-tim.com/">
                Creative Tim
              </a>
            </li>
            <li>
              <a href="https://www.creative-tim.com/presentation">
                About Us
              </a>
            </li>
            <li>
              <a href="https://www.creative-tim.com/blog">
                Blog
              </a>
            </li>
            <li>
              <a href="https://www.creative-tim.com/license">
                Licenses
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright float-right">
          &copy;
          <script>
            document.write(new Date().getFullYear())
          </script>, made with <i class="material-icons">favorite</i> by
          <a href="https://www.creative-tim.com/" target="_blank">Creative Tim</a> for a better web.
        </div>
      </div>
    </footer>

@endsection
