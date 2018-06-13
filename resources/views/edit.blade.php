@extends('layouts.plantilla')


@section('cuerpo')
        <h1>Editar nota</h1>
        <form acction="/notas/edit/{{ $nota->title }}" method="POST" name="nuevanota">
        	@csrf
                @method('PATCH')
        	<label>Titulo
        		<input class="form-control" type="text" name="title" placeholder="titulo" maxlength="20" value="{{ $nota->title }}"></titulo>
        	</label>
        	<br>
        	<label>
        		<textarea class="form-control-lg" type="textarea" name="body" placeholder="escriba la nota" rows="10" maxlength="255">{{ $nota->body }}</textarea>
        	</label>
        	<br>
			<label>
				<select name="importante" class="form-control"> 
					no <option  value="false" selected="">No</option><br>
					si <option  value="true">Si</option>
				</select>
				
			</label>
			<br>      
			<label>
				<button type="submit" class="btn btn-primary btn-lg">Editar</button>
			</label>  	
        </form>
                    
@endsection