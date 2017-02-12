@extends('layouts.master')

@section('content')

<div class="row">
  <div class="column text-center">
<h1>Selecciona tus intereses</h1>
<form method="get" action="login-transporte.html">
<div class="wrap-intereses">

    <input id="deporte" type="checkbox"><label for="deporte">Deportes</label>
    <input id="tecnologia" type="checkbox"><label for="tecnologia">Tecnología</label>
    <input id="arte" type="checkbox"><label for="arte">Arte</label>
    <input id="idiomas" type="checkbox"><label for="idiomas">Idiomas</label>
    <input id="historia" type="checkbox"><label for="historia">Historia</label>
    <input id="viajes" type="checkbox"><label for="viajes">Viajes</label>
    <input id="mascotas" type="checkbox"><label for="mascotas">Mascotas</label>
    <input id="hogar" type="checkbox"><label for="hogar">Hogar</label>
    <input id="actualidad" type="checkbox"><label for="actualidad">Actualidad</label>

</div>
<hr>
<div class="text-center">
  <button class="button" type="submit">
     Siguiente 
  <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 32 32" height="32px" id="Слой_1" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path clip-rule="evenodd" d="M32,16.009c0-0.267-0.11-0.522-0.293-0.714  l-9.899-9.999c-0.391-0.395-1.024-0.394-1.414,0c-0.391,0.394-0.391,1.034,0,1.428l8.193,8.275H1c-0.552,0-1,0.452-1,1.01  s0.448,1.01,1,1.01h27.586l-8.192,8.275c-0.391,0.394-0.39,1.034,0,1.428c0.391,0.394,1.024,0.394,1.414,0l9.899-9.999  C31.894,16.534,31.997,16.274,32,16.009z" fill-rule="evenodd" id="Arrow_Forward"/><g/><g/><g/><g/><g/><g/></svg>
    </button></div>

    

@endsection