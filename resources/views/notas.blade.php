@extends('layouts.plantilla')


@section('cuerpo')
                   <h1>contenido</h1>
                    <table class="table table-striped">
                    	<tr>
                    		
                    
                    	<th>titulo</th>
                    	<th>nota</th>
                    	<th>editar</th>
                    	
                    	</tr>
                    	@foreach($notas as $nota)
                            <tr>
                            <td><a href="notas/{{ $nota->id }}">{{ $nota->title }}</a></td>	
                            <td>{{ $nota->body }}</td>
                            <td><a href="notas/edit/{{ $nota->id }}"><button class="btn btn-primary">Editar</button></a>
                            	<br><br>
                            	<form method="POST" action="notas/borrar/{{ $nota->id }}" name="borrar">
                            		@csrf
                					@method('DELETE')
                            		<button type="submit" name="boton" class="btn btn-danger">Borrar</button>
                            	</form>
                            	
                           

                            </tr>
                            

                        @endforeach


                    </table>
                        
                        

                    
@endsection