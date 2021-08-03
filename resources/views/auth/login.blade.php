@extends('Layouts.auth')

@section('content')
        <main class="form-signin">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="imgcontainer">
                    <img src="{{asset('images/user.png')}}" alt="Avatar" class="avatar">
                </div>
                <div class="container">
                    <h1>Ingresar</h1>
                    <input id="email" type="email" placeholder="Correo" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <label id="remembercont">
                        <input class="form-check-input" checked="checked" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    </label>
                    <button onclick="pop()" id="submit" type="submit">Ingresar</button>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
                <div class="container" style="background-color:#f1f1f1">
                    <span class="psw">¿No posee una cuenta? Entonces <a href="{{ route('register.index') }}">Registrese</a></span>    
                    <span class="psw">¿Olvidó su <a href="#">Contraseña?</a></span>
                    <p id="copy">&copy; 2021</p>
                </div>
                @error('message')
                    <p id="letuknow">Error de Autenticación</p>
                @enderror
            </form>
        </main>
@endsection