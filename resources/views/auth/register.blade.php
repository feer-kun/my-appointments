@extends('layouts.form')

@section('content')

<div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
    <div class="card card-plain">
        <div class="card-header pb-0 text-start">
            <h4 class="font-weight-bolder">Registro</h4>
            <p class="mb-0">Enter your email and password to sign in</p>
        </div>
        <div class="card-body">
            <form  method="POST" action="{{ route('register') }}">
                @csrf
                <!-- formulario Registro-->
                <div class="mb-3">

                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        placeholder="Nombre completo" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        placeholder="Correo electronico" name="email" value="{{ old('email') }}" required
                        autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" placeholder="Contraseña" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <input id="password-confirm" type="password" class="form-control" placeholder="Confirma contraseña"
                        name="password_confirmation" required autocomplete="new-password">
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Registrar</button>
                </div>
            </form>
        </div>
        <div class="card-footer text-center pt-0 px-lg-2 px-1">
            <p class="mb-4 text-sm mx-auto">
                ¿Ya tienes cuenta?
                <a href="{{ route('login') }}" class="text-primary text-gradient font-weight-bold">Inicia sesion</a>
            </p>
        </div>
    </div>
</div>
@endsection