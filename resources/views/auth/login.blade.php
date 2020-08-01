@extends('layouts.app')

@section('content')
	<div class="row justify-content-center"> 
	<!--RECORDATORIO: LA CLASE JUSTIFY-CONTENT-CENTER ME PERMITE CENTRAR LO QUE TENGO DENTRO DEL ROW-->
			
			<div class="card w-50 text-black bg-light "> 
				<div class="card-header"><i class="fa fa-user-check"></i> Acceso a la aplicación</div>
				<div class="card-body">
					
					<form method="GET" action="{{ route('login') }}">

						{{ csrf_field() }} <!--token csrf obligatorio-->

						<div class="form-group">
							<label for="email"><i class="fa fa-mail-bulk"></i> Email</label>
							<input type="email" 
								   class="form-control" 
								   name="email" 
								   id="email" 
								   value="{{ old('email') }}" 
								   placeholder="Ingrese su Email">
								   {!! $errors->first('email','<span class="help-block">:message</span>') !!}
						</div>
							
						<div class="form-group">		   	
							<label for="password"><i class="fa fa-key"></i> Contraseña</label>
							<input type="password" 
								   class="form-control"
								   name="password" 
								   id="password" 
								   placeholder="Ingrese su contraseña">
								   {!! $errors->first('password','<span class="help-block">:message</span>') !!}
						</div>
						
						<button type="submit" class="btn btn-primary btn-block">Acceder</button>
					</form>
				</div>
			</div>
	</div>

@endsection