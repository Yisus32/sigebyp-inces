@extends('layouts.side')

@section('content')

@php
	$type   = array('Mueble',
					'Electrónico',
					'Vehículo');
@endphp

	<hr>
	<div class="row justify-content-center">
		<div class="card w-75 text-black bg-light">
			<div class="card-header">Modificar Bien</div>
			<div class="card-body">
				<form action=" {{ route('muebles.update',$muebles->id) }}" method="POST">
					<input type="hidden" name="_method" value="PUT">
					@csrf
					<div class="form-group">
					<label for="codigo">Código</label>
						<input     class="form-control" 
								   name="codigo" 
								   value="{{ $muebles->codigo }}">
					</div>

					<div class="form-group">
					<label for="adquisicion">Fecha de Adquisición</label>
						<input     class="form-control" 
								   type="date" 
								   name="adquisicion"  
								   value="{{ $muebles->adquisicion }}">	   
					</div>

					<div class="form-group">
					<label for="tipo">Tipo</label>
						<select id="primary" name="tipo" class="browser-default custom-select">
							<?php foreach ($type as $key => $value): ?>
								<option onclick="{{$value}}()" value="{{$value}}" {{($value == $muebles->tipo) ? 'selected' : '' }}>{{$value}}</option>
							<?php endforeach; ?>
						</select>
					</div>

					<div class="form-group">
					<label for="modelo">Modelo</label>
						<input     class="form-control"  
								   name="modelo"
								   value="{{ $muebles->modelo }}">
					</div>

					<div class="form-group">
					<label for="valor">Valor contable</label>
						<input     class="form-control" 
								   name="valor"   
								   value="{{ $muebles->valor }}" disabled>
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
				<button type="submit" class="btn btn-primary btn-block">Modificar</button>		
			</div>
		</form>
	</div>
</div>

<script> 
function Mueble(){
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
function Electrónico() {
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

function Vehículo() {
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
	if ($('#primary').val()=="Mueble") {
		Mueble();
	}
	if ($('#primary').val()=="Electrónico") {
		Electrónico();
	}
	if ($('#primary').val()=="Vehículo") {
		Vehículo();
	}
}
</script>

<hr>
@endsection