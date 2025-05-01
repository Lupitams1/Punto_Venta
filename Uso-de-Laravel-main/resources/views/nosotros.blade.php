@extends('layouts/app')

@section('nombre')
    Quienes somos?
@endsection

@section('contenido')
    Acerca de nosotros
@endsection

{{--Directiva if--}}
@section('informacion')
@if($edad <= 12)
    <h3>Aun no puedes tomar cerveza</h3>
    @elseif($edad <=18)
    <h3>Casi puedes tomar</h3>
    @else
    <h3>Ya puedes tomar cerveza "Con medida!!!"</h3>
@endif
@endsection

{{--Directiva switch--}}
@section('swicth')
    @switch($noEstacion)
        @case(1)
            <h3>Primavera</h3>
            @break
        @case(2)
            <h3>Verano</h3>
            @break
        @case(3)
            <h3>Otono</h3>
            @break
        @case(4)
            <h3>Invierno</h3>
            @break
        @default
            <h3>Numero de estacion invalido</h3>
    @endswitch
@endsection

{{--Directiva for--}}
@section('for')
<ul>
    @for ($i = 1; $i <=10; $i++)
        <li>{{$tablaMult}} X {{$i}} = {{$i*$tablaMult}}</li>
    @endfor
</ul>
@endsection

{{--Directiva while y directiva php--}}
@section('while')
    @php 
        $i = 1
    @endphp
<ul>
    @while ($i <= 10)
        <li>{{$tablaMult}} X {{$i}} = {{$i*$tablaMult}}</li>
        @php
            $i ++
        @endphp
    @endwhile
</ul>
@endsection

@section('each')
<ul>
    @foreach ($equipos as $equipo)
        <li>{{$equipo}}</li>
    @endforeach
</ul>
@endsection

@section('else')
    <ul>
        @forelse ($equipos as $equipo)
            <li>{{$equipo}}</li>
        @empty
            <li>No hay equipos para mostrar</li>
        @endforelse
    </ul>
@endsection

@section('factorial')
    @php $resultado = 1 @endphp
    @for ($i = 1; $i <=$numeroFactorial; $i++)
        @php
            $multi = $i * $resultado
        @endphp
        <li>{{$resultado}} X {{$i}} = {{$multi}}</li>
        @php
            $resultado = $multi
        @endphp
        
    @endfor

@endsection