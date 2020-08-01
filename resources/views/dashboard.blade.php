@extends('layouts.side')

@section('content')
<hr>
	<div class="row justify-content-center">
		<div class="card w-75">
			<div class="card-header">
				<h4 class="mt-4">Bienvenido, {{ auth()->user()->nombres }} </h1> <!--Me trae el nombre del usuario-->
			</div>
			<div class="card-body">
				
			</div>

			<div class="card-footer">
				
			</div>
		</div>
	</div>
@endsection