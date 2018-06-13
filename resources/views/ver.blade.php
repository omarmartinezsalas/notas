@extends('layouts.plantilla')

@section('cuerpo')
   
        @foreach($nombre as $name)
            nombre= {{$name['nombre']}}
            @isset($name['g'])
                {{ $name['g'] }}
            @endisset
            
            @if($name['phone']<'10')
            *
            @endif
                {{$name['phone']}}
            <hr>
        @endforeach
        
    

@endsection