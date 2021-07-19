@extends('Layouts.app')

@section('content')
<script>
      function openTab(evt, contentName) {
        var i, tabcontent, pg;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        pg = document.getElementsByClassName("pg");
        for (i = 0; i < pg.length; i++) {
          pg[i].className = pg[i].className.replace(" active","");
        }
        document.getElementById(contentName).style.display = "block";
        evt.currentTarget.className += " active";
      }
      document.getElementById("defaultOpen").click();
    </script>
    <div id="main">
      <header>
        <div>
          <h3 id="top">Ministerio para el Proceso Social de Trabajo</h3>
          <nav class="nav">
            <a class="pg" onclick="openTab(event, 'Inicio')" id="defaultOpen">Inicio</a>
            <a class="pg" onclick="openTab(event, 'Informacion')">Información</a>
            <a class="pg" onclick="openTab(event, 'Desarrolladores')">Desarrolladores</a>
          </nav>
        </div>
      </header>
      <section id="Inicio" class="tabcontent">
        <h1 id="welcome">Bienvenidos al Sistema de Control de Asistencia del Ministerio para el Proceso Social de Trabajo, Municipio Boconó</h1>
        <div id="first">
          <div class="mv">
            <div class="green">
              <h3>Misión</h3>
            </div>
          </div>
          <div class="mv">
            <div class="green">
              <h3>Visión</h3>
            </div>
          </div>
        </div>
        <div class="reshis">
          <div class="green">
            <h3>Reseña Histórica</h3>
          </div>
        </div>
        <div id="button-container">
          <a href="{{ route('login.index') }}" class="button"><b>Ir al Sistema</b></a>
        </div>
      </section>
      <section id="Desarrolladores" class="tabcontent">
          <h2 id="dev-txt"><u>Esta aplicación fué desarrollada por:</u></h2>
              <div class="devs">
                <div class="dev">
                  <img id="emi" class="dev-img" alt="Emilio" src="">
                </div>
                <div class="dev">
                  <h3 class="dev-name">Emilio Cabezas</h3>
                  <p class="descript">Edad 19 años. Estudiante de Ingeniería Informática. Posee conocimientos moderados de desarrollo web y base de datos. Interesado en los idiomas extranjeros y las nuevas tecnologías de la Ingeniería de Software e Inteligencia Artificial.</p>
                </div>
              </div>
              <div class="devs">
                <div class="dev">
                  <img id="gabo" class="dev-img" alt="Gabo" src="{{asset('images/gabo.jpg')}}">
                </div>
                <div class="dev">
                  <h3 class="dev-name">José Hidalgo</h3>
                  <p class="descript">Edad 19 años. Estudiante de Ingeniería Informática. Posee conocimientos moderados sobre soporte técnico y manejo de hardware de computador. Interesado en las nuevas tecnologías de componentes y miscelanea electrónica.</p>
                </div>
              </div>
              <div class="devs">
                <div class="dev">
                  <img id="ronal" class="dev-img" alt="Ronal" src="">
                </div>
                <div class="dev">
                  <h3 class="dev-name">Jehyser Ruiz</h3>
                  <p class="descript">Edad 20 años. Estudiante de Ingeniería Informática.</p>
                </div>
              </div>  
      </section>

      <footer>
        <p id="foot">Aplicación realizada por el Grupo de PSTI II.</p>
      </footer>
@endsection