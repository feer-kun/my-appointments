@extends('layouts.form')

@section('content')

<div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
    <div class="card card-plain">
        <div class="card-header pb-0 text-start">
            <h4 class="font-weight-bolder">Inicio de sesión</h4>
            <p class="mb-0">Enter your email and password to sign in</p>
        </div>
        <div class="card-body">

            <!-- formulario -->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        placeholder="Correo electronico" name="email" value="{{ old('email') }}" required
                        autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        placeholder="Contraseña" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember')
                        ? 'checked' : '' }}>
                    <label class="form-check-label" for="rememberMe">Recordarme</label>
                </div>
                <div class="text-center">
                    <button type="Submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Iniciar sesión</button>
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraseña?') }}
                    </a>
                    @endif
                </div>
            </form>
            <!-- Fin de formulario -->
        </div>
        <div class="card-footer text-center pt-0 px-lg-2 px-1">
            <p class="mb-4 text-sm mx-auto">
                ¿No tienes cuenta?
                <a href="{{ route('register') }}" class="text-primary text-gradient font-weight-bold">Registrate</a>
            </p>
        </div>
    </div>
</div>

@endsection