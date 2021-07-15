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
      <main id="Inicio" class="tabcontent">
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
          <a href="#" class="button"><b>Ir al Sistema</b></a>
        </div>
      </main>
      <footer>
        <p id="foot">Aplicación realizada por el Grupo de PSTI II.</p>
      </footer>
@endsection