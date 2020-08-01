@extends('layouts.side')

@section('content')
	<hr>


	<div class="row justify-content-center">
		<div class="card w-75 text-black bg-light">
			<div class="card-header">Nuevo Bien</div>
			<div class="card-body">
				<form action=" {{ route('muebles.store') }}" method="POST">
					@csrf
					<div class="form-group">
					<label for="codigo">Código</label>
						<input     class="form-control" 
								   name="codigo" 
								   placeholder="Código del bien">
					</div>

					<div class="form-group">
					<label for="adquisicion">Fecha de Adquisición</label>
						<input     class="form-control" 
								   name="adquisicion"
								   type="date"  
								   placeholder="Fecha de Adquisición del bien">
					</div>

					<div class="form-group">
					<label for="tipo">Tipo</label>
						<select id="primary" name="tipo" class="browser-default custom-select">
							<option onclick="mueble()" value="Mueble">Mueble</option>
							<option onclick="electronico()" value="Electrónico">Electrónico</option>
							<option onclick="vehiculo()" value="Vehículo">Vehículo</option>
						</select>
					</div>

					<div class="form-group">
					<label for="modelo">Modelo</label>
						<input     class="form-control" 
								   name="modelo" 
								   placeholder="Ej.: 'Estante', 'Mouse', 'Camioneta'">
					</div>

					<div class="form-group">
					<label for="valor">Valor Contable</label>
						<input     class="form-control" 
								   name="valor" 
								   placeholder="Ej.: 200.00">
					</div>
					<div id="group-tipo" class="form-group">
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
				<button type="submit" class="btn btn-primary btn-block">Agregar</button>		
			</div>
		</form>
	</div>
</div>

<script> 
function mueble(){
	$('#group-tipo').empty();
	$('#group-tipo').append(
		$('<label>', { 'text': 'Estado' }),
		$('<select>',{
			'id': 'secondary',
			'name': 'estado',
			'class': 'browser-default custom-select'
		}).append(
			$('<option>', {
				'value': 'Buen estado',
				'text': 'Buen estado'
			}),
			$('<option>', {
				'value': 'Mal estado',
				'text': 'Mal estado'
			})
		)
	);
}
function electronico() {
	$('#group-tipo').empty();
	$('#group-tipo').append(
		$('<label>', { 'text': 'Estado' }),
		$('<select>',{
			'id': 'secondary',
			'name': 'estado',
			'class': 'browser-default custom-select'
		}).append(
			$('<option>', {
				'value': 'Operativo',
				'text': 'Operativo'
			}),
			$('<option>', {
				'value': 'Inoperativo',
				'text': 'Inoperativo'
			})
		)
	);	
}

function vehiculo() {
	$('#group-tipo').empty();
	$('#group-tipo').append(
		$('<label>', { 'text': 'Estado' }),
		$('<select>',{
			'id': 'secondary',
			'name': 'estado',
			'class': 'browser-default custom-select'
		}).append(
			$('<option>', {
				'value': 'Operativo',
				'text': 'Operativo'
			}),
			$('<option>', {
				'value': 'Inoperativo',
				'text': 'Inoperativo'
			})
		)
	);

}

window.onload = function() {
	if ($('#primary').val()=="Electrónico") {
		electronico();
	}
	if ($('#primary').val()=="Mueble") {
		mueble();
	}
	if ($('#primary').val()=="Vehículo") {
		vehiculo();
	}
}
</script>

<hr>
	
@endsection