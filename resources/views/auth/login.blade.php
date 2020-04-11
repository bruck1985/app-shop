@extends('layouts.app')

@section('body-class','login-page sidebar-collapse')

@section('content')
  <div class="page-header header-filter" style="background-image: url('{{asset('img/bg7.jpg')}}'); background-size: cover; background-position: top center;">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 ml-auto mr-auto">
            <div class="card card-login">
              <form class="form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="card-header card-header-primary text-center">
                  <h4 class="card-title">Inicio de Sesión</h4>
                  <div class="social-line">
                    <a href="#pablo" class="btn btn-just-icon btn-link">
                      <i class="fa fa-facebook-square"></i>
                    </a>
                    <a href="#pablo" class="btn btn-just-icon btn-link">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#pablo" class="btn btn-just-icon btn-link">
                      <i class="fa fa-google-plus"></i>
                    </a>
                  </div>
                </div>
                <p class="description text-center">Ingresa tus datos</p>
                <div class="card-body">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">mail</i>
                      </span>
                    </div>
                    <input id="email" type="email" placeholder="Email..." class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">lock_outline</i>
                      </span>
                    </div>
                    <input id="password" type="password" placeholder="Contraseña..." class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        </span>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                      </div>
                  </div>

                </div>
                <div class="footer text-center">
                  <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">Ingresar</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      @include('includes.footer')
    </div>
@endsection
