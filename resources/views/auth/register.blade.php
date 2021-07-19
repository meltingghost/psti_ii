@extends('Layouts.auth')

@section('content')
    <main class="form-signin">
        <form action="" method="post">
            @csrf
            <div class="imgcontainer">
                <img src="{{asset('images/user.png')}}" alt="Avatar" class="avatar">
            </div>
            <div class="container">
                <h1>Registro</h1>
                <input type="text" placeholder="Ingrese un Usuario" name="name" required>
                <input type="email" placeholder="Ingrese su Correo" name="email" required>
                <input type="password" placeholder="Ingrese una Contraseña" name="password" required>
                <input type="password" placeholder="Confirme su Contraseña" name="psw-conf" required>
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