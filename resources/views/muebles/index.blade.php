@extends('layouts.side')

@section('content')
<hr>
<div class="row justify-content-center">
	<div class="card w-95 text-black bg-light">
		<div class="card-header">Bienes</div>
		<div class="card-body small">
			<table class="table-sm table-striped table-hover table-responsive text-center">
				<!--Cabeza-->
				<thead>
					<tr>
						<th scope="col">Id</th>
						<th scope="col">Código</th>
						<th scope="col">Adquisición</th>
						<th scope="col">Tipo</th>
						<th scope="col">Modelo</th>
						<th scope="col">Estado</th>
						<th scope="col">Departamento</th>
						<th scope="col">Sede</th>
						<th scope="col">Valor Contable</th>
						<th scope="col">Acciones</th>
					</tr>
				</thead>
				
				<!--Cuerpo-->
				<tbody>
					@foreach($muebles as $mueble)
						<tr>
							<th scope="row"> {{ $mueble-> id}} </th>
							<td> {{ $mueble-> codigo}} </td>
							<td> {{ $mueble-> adquisicion}} </td>
							<td> {{ $mueble-> tipo}} </td>
							<td> {{ $mueble-> modelo}} </td>
							<td> {{ $mueble-> estado}} </td>
							<td> {{ $mueble-> departamento->nombre}} </td>
							<td> {{ $mueble-> departamento->sede->nombre}} </td>
							<td> {{ $mueble-> valor}} </td>

		  					<td><a href="{{ route('muebles.edit', $mueble->id) }}"><i class="fa fa-pen"></i></a>
		  						<a href="#"><i class="fa fa-wrench" style="color: #fed700"></i></a>
		  						<a href="{{ route('muebles.destroy', $mueble->id)}}"><i class="fa fa-trash" style="color: #eb4034"></a></i>
		  					</td>
						</tr> 
					@endforeach
				</tbody>
			</table>
		</div>
		
		<div class="card-footer">
			<a href="{{ route('muebles.create') }}" class="btn btn-primary btn-block">Agregar bienes</a>
		</div>
	</div>
</div>
<hr>
<div class="row justify-content-center">
	{{ $muebles->links() }}
</div>

@endsection