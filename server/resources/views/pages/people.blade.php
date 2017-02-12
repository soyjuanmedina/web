@extends('layouts.master')

@section('content')
<div class="row">

<div class="column">
    <div class="wrap-cards">


        <!-- carta del usuario -->
<div class="card">
    <div class="card__foto"><img src="img/user.png" alt="">
    
    <div class="conexion">Online</div>
    <div class="bg"><img src="img/user.png" alt=""></div>
    </div>
    <div class="card__body">
        <div class="card__body__intereses">

                <div class="card__body__interes">Deportes</div>
                <div class="card__body__interes">Historia</div>
                <div class="card__body__interes">Historia</div>
           
        </div>
        <div class="card__body__transportes">
             <ul class="menu">
                <li><div class="card__body__transporte l1">  <span class="numLinea"> 1</span></div></li>
                <li><div class="card__body__transporte l2">  <span class="numLinea"> 2</span></div></li>
            </ul>
        </div>

    </div>
    <div class="card__footer text-center">
        <div class="card__body__transporte l1"><a href="#" class="button">Solicitar amistad</a> </div>
      </div>
</div>

</div>
</div>

</div>

@endsection