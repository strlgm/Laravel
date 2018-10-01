@extends('principal')
@section('css')
@stop

@section('contenido')
<div class="slider">
                <ul>
                    <li>
                        <img src= "{{asset ('img/banner/banner3.jpeg')}}" />
                        <span>
							<p>El video participativo como herramienta </p>
							<p>de convivencia de niños y niñas</p>
                        </span>
                    </li>
                    <li>
                        <img src="{{asset ('img/banner/g5.jpeg')}}" />
                    </li>
                    <li>
                        <img src="{{asset ('img/banner/g4.jpg')}}" />
                    </li>
                </ul>
            </div>

<div id="mid_content">
    <h1>La Ventana</h1>
    <p>El video como herramientas de convivencia de niños y niñas </p>
</div>

@stop