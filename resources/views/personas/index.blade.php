@extends('layouts.side')

@section('content')
<hr>
<div class="row justify-content-center">
	<div class="card w-95 text-black bg-light">
		<div class="card-header">Personas</div>
		<div class="card-body small">
			<table class="table-sm table-striped table-hover table-responsive text-center">
				<!--Cabeza-->
				<thead>
					<tr>
						<th scope="col">Id</th>
						<th scope="col">Cédula</th>
						<th scope="col">Nombres</th>
						<th scope="col">Apellidos</th>
						<th scope="col">Teléfono</th>
						<th scope="col">Email</th>
						<th scope="col">Direccion</th>
						<th scope="col">Cargo</th>
						<th scope="col">Departamento</th>
						<th scope="col">Sede</th>
						<th scope="col">Acciones</th>
					</tr>
				</thead>
				
				<!--Cuerpo-->
				<tbody>
					@foreach($personas as $persona)
						<tr>
							<th scope="row"> {{ $persona-> id}} </th>
							<td> {{ $persona-> documento}} </td>
							<td> {{ $persona-> nombres}} </td>
							<td> {{ $persona-> apellidos}} </td>
							<td> {{ $persona-> telefono}} </td>
							<td> {{ $persona-> email}} </td>
							<td> {{ $persona-> direccion}} </td>
							<td> {{ $persona-> cargo->nombre}} </td>
							<td> {{ $persona-> departamento->nombre}} </td>
							<td> {{ $persona-> departamento->sede->nombre}} </td>

		  					<td><a href="{{ route('personas.edit',$persona->id) }}"><i class="fa fa-pen"></i></a>
	      						<a href="{{ route('personas.destroy',$persona->id )}}"><i class="fa fa-trash" style="color: #eb4034"></i></a>
	      					</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		
		<div class="card-footer">
			<a href="{{ route('personas.create') }}" class="btn btn-primary btn-block">Agregar personal</a>
		</div>
	</div>
</div>
<hr>
<div class="row justify-content-center">
	{{ $personas->links() }}
</div>

@endsection