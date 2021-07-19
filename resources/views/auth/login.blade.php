@extends('Layouts.auth')

@section('content')
        <main class="form-signin">
            <form action="action_page.php" method="post">
                @csrf
                <div class="imgcontainer">
                    <img src="{{asset('images/user.png')}}" alt="Avatar" class="avatar">
                </div>
                <div class="container">
                    <h1>Ingresar</h1>
                    <input type="text" placeholder="Usuario" name="uname" required>
                    <input type="password" placeholder="Contraseña" name="psw" required>
                    <label id="remembercont">
                        <input type="checkbox" checked="checked" name="remember"> Recuérdame
                    </label>
                    <button onclick="pop()" id="submit" type="submit">Ingresar</button>
                </div>
                <div class="container" style="background-color:#f1f1f1">
                    <span class="psw">¿No posee una cuenta? Entonces <a href="{{ route('register.index') }}">Registrese</a></span>    
                    <span class="psw">¿Olvidó su <a href="#">Contraseña?</a></span>
                    <p id="copy">&copy; 2021</p>
                </div>
                <p id="letuknow">Error de Autenticación</p>
            </form>
        </main>
        <script>
            function pop() {
                var x = document.getElementById("letuknow");
                x.className = "show";
                setTimeout(function(){ x.className = x.className.replace("show","");}, 3000);
            }
            function openSystem(evt, systemName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(systemName).style.display = "block";
                evt.currentTarget.className += " active";
            }
            document.getElementById("defaultOpen").click();
        </script>
@endsection