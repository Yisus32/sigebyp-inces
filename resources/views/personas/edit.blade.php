@extends('layouts.side')

@section('content')
	<hr>
	<div class="row justify-content-center">
		<div class="card w-75 text-black bg-light">
			<div class="card-header">Modificar empleado</div>
			<div class="card-body">
				<form action=" {{ route('personas.update',$personas->id) }}" method="POST">
					<input type="hidden" name="_method" value="PUT">
					@csrf
					<div class="form-group">
					<label for="documento">Cédula</label>
						<input     class="form-control" 
								   name="documento" 
								   value="{{ $personas->documento }}" 
								   placeholder="Ej.: 25977226">
					</div>

					<div class="form-group">
					<label for="nombres">Nombres</label>
						<input     class="form-control" 
								   name="nombres"  
								   value="{{ $personas->nombres }}" 
								   placeholder="Nombres del empleado">
					</div>

					<div class="form-group">
					<label for="apellidos">Apellidos</label>
						<input     class="form-control" 
								   name="apellidos"   
								   value="{{ $personas->apellidos }}" 
								   placeholder="Apellidos del empleado">
					</div>

					<div class="form-group">
					<label for="telefono">Teléfono</label>
						<input     class="form-control" 
								   name="telefono" 
								   value="{{ $personas->telefono }}" 
								   placeholder="Telefono del empleado">
					</div>

					<div class="form-group">
					<label for="email">Email</label>
						<input     class="form-control" 
								   type="mail" 
								   name="email"
								   value="{{ $personas->email }}"  
								   placeholder="Correo del empleado">
					</div>

					<div class="form-group">
					<label for="direccion">Dirección</label>
						<input     class="form-control" 
								   name="direccion"  
								   value="{{ $personas->direccion }}" 
								   placeholder="Direccion del empleado">
					</div>

					<div class="form-group">
					<label for="cargo">Cargo</label>
						<select name="cargo" class="browser-default custom-select">
							@foreach($cargos as $cargo)
							    <option value="{{ $cargo->id }}">{{ $cargo->nombre }}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
					<label for="departamento">Departamento</label>
						<select name="departamento" class="browser-default custom-select">
							@foreach($departamentos as $departamento)
							    <option value="{{ $departamento->id }}">{{ $departamento->nombre }} ubicado en la sede {{ $departamento->sede->nombre }}</option>
							@endforeach
						</select>
					</div>	

									
			</div>
			<div class="card-footer">
				<button type="submit" class="btn btn-primary btn-block">Modificar</button>		
			</div>
		</form>
	</div>
</div>
<hr>
@endsection