@extends('Layouts.auth')

@section('content')
    <main class="form-signin">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="imgcontainer">
                <img src="{{asset('images/user.png')}}" alt="Avatar" class="avatar">
            </div>
            <div class="container">
                <h1>Registro</h1>
                <input id="name" type="text" placeholder="Ingrese un Usuario" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input id="email" type="email" placeholder="Ingrese su Correo" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input id="password" type="password" placeholder="Ingrese una Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input id="password-confirm" type="password" placeholder="Confirme su Contraseña" class="form-control" name="password_confirmation" required autocomplete="new-password">
                <label id="remembercont">
                    <input type="checkbox" checked="checked" name="remember"> Recuérdame
                </label>
                <button type="submit">Registrarse</button>
            </div>
            <div class="container" style="background-color:#f1f1f1">
                <p id="copy">&copy; 2021</p>
            </div>
        </form>
    </main>
@endsection