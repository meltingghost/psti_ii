<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistema de Control de Asistencia del Ministerio del Trabajo</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/welcome.css')}}">

        <!-- Scripts -->
        <script src="{{asset('js/app.js')}}" defer></script>
        <script src="{{asset('js/welcome.js')}}" defer></script>
    </head>
    <body>
        <div id="main">
            <header>
              <div>
                <img id="cintillo" alt="Cintillo" src="{{asset('images/cintillo.png')}}">
                <h2 id="top">Ministerio del Poder Popular para el Proceso Social de Trabajo</h2>
                <nav class="nav">
                  <a class="pg" onclick="openTab(event, 'Inicio')" id="defaultOpen">Inicio</a>
                  <a class="pg" onclick="openTab(event, 'Desarrolladores')">Desarrolladores</a>
                </nav>
              </div>
            </header>
            <section id="First">
              <marquee direction="left"><p size="40">Ministerio del Poder Popular para el Proceso Social del Trabajo Municipio Boconó</p></marquee>
              <hr>
              <marquee direction="right">
                <img src="{{asset('images/inst1.jpg')}}" alt="Foto Institución 1" width="520">
                <img src="{{asset('images/inst2.jpg')}}" alt="Foto Institución 2" width="520">
                <img src="{{asset('images/inst3.jpg')}}" alt="Foto Institución 3" width="520">
                <img src="{{asset('images/inst4.jpg')}}" alt="Foto Institución 4" width="520">
                <img src="{{asset('images/inst5.jpg')}}" alt="Foto Institución 5" width="520">
                <img src="{{asset('images/inst6.jpg')}}" alt="Foto Institución 6" width="520">
              </marquee>
              <hr>
              <br>
            </section>
            <section id="Inicio" class="tabcontent">
              <h1 class="welcome">Bienvenidos al Sistema de Control de Asistencia del Ministerio para el Proceso Social de Trabajo, Municipio Boconó</h1>
              <div id="first">
                <div class="mv">
                  <div class="green">
                    <h3>Misión</h3>
                  </div>
                  <div>
                    <p>Somos un organismo del Estado que tiene como función principal promocionar el diálogo social con la finalidad de promover en el marco de una economía productiva y solidaria, empleo, trabajo digno y protección a los derechos humanos y sindicales; el desarrollo de un sistema de seguridad social público y la presentación de un servicio de calidad y eficiencia que permita la regulación de las relaciones laborales y su accesibilidad a todos los trabajadores y trabajadoras.</p>
                  </div>
                </div>
                <div class="mv">
                  <div class="green">
                    <h3>Reseña Histórica</h3>
                  </div>
                  <div>
                    <p>El 1 de junio de 1998, deja de ser Comisionaduría del Trabajo y pasa a Sub – Inspectoría del Trabajo de Boconó, Estado Trujillo, la cual tiene como objetivo velar por la correcta aplicación de la Ley Orgánica del Trabajo y demás normas laborales y de seguridad Social e Industrial en su jurisdicción.</p>
                  </div>
                </div>
              </div>
              <div class="reshis">
                <div class="green">
                  <h3>Visión</h3>
                </div>
                <div>
                  <p>Ser la institución líder responsable del equilibrio político, económico y social del país enalteciendo el trabajo productivo y amparando la dignidad humana de las trabajadoras y trabajadores.</p>
                </div>
              </div>
                @if (Route::has('login'))
                <div id="button-container">
                    @auth
                        <a href="{{ url('/home') }}" class="button"><b>Ir al Sistema</b></a>
                    @else
                        <a href="{{ route('login') }}" class="button"><b>Ingresar</b></a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="button"><b>Registrarse</b></a>
                        @endif
                    @endauth
                </div>
                @endif
            </section>
            <section id="Desarrolladores" class="tabcontent">
                <h2 id="dev-txt"><u>Esta aplicación fué desarrollada por:</u></h2>
                    <div class="devs">
                      <div class="dev">
                        <img id="emi" class="dev-img" alt="Emilio" src="{{asset('images/emi.jpg')}}">
                      </div>
                      <div class="dev">
                        <h3 class="dev-name">Emilio Cabezas</h3>
                        <p class="descript">Edad 19 años. Estudiante de Ingeniería Informática. Posee conocimientos moderados de desarrollo web y base de datos. Interesado en los idiomas extranjeros y las nuevas tecnologías de la Ingeniería de Software e Inteligencia Artificial.</p>
                        <h3 class="dev-name">Contacto</h3>
                        <p class="descript">Teléfono (Llamadas, MSM y Whattsapp): 0424-7000629
                          <br>Correo: emiliodavidcc@gmail.com</p>
                      </div>
                    </div>
                    <div class="devs">
                      <div class="dev">
                        <img id="gabo" class="dev-img" alt="Gabo" src="{{asset('images/gabo.jpg')}}">
                      </div>
                      <div class="dev">
                        <h3 class="dev-name">José Hidalgo</h3>
                        <p class="descript">Edad 19 años. Estudiante de Ingeniería Informática. Posee conocimientos moderados sobre soporte técnico y manejo de hardware de computador. Interesado en las nuevas tecnologías de componentes y miscelanea electrónica.</p>
                        <h3 class="dev-name">Contacto</h3>
                        <p class="descript">Correo: joseghidalgo1518@gmail.com
                          <br>Instagram: @gabo_hidalgo_mj</p>
                      </div>
                    </div>
                    <div class="devs">
                      <div class="dev">
                        <img id="jehyser" class="dev-img" alt="Jehyser" src="{{asset('images/jehy.jpg')}}">
                      </div>
                      <div class="dev">
                        <h3 class="dev-name">Jehyser Ruiz</h3>
                        <p class="descript">Edad 20 años. Estudiante de Ingeniería Informática. Posee conocimientos moderados de desarrollo web y base de datos. Interesado en el manejo de entornos informáticos y en el avance de las nuevas tecnologías del mundo del Software.</p>
                        <h3 class="dev-name">Contacto</h3>
                        <p class="descript">Telegram: https://t.me/Jehyser
                          <br>Facebook: https://www.facebook.com/jehyser.ruiz</p>
                      </div>
                    </div>  
            </section>
      
            <footer>
              <p id="foot">Aplicación realizada por el Grupo de PSTI II.</p>
            </footer>
        </div>
    </body>
</html>