@extends('layouts.plantilla')


@section('cuerpo')
                   <h1>Nota</h1>
                    <ul>
                        
                            <li>{{ $nota->title }}<br>{{ $nota->body }}</li>
                                                

                    </ul>
@endsection