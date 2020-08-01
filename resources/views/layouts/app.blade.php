<!--Este archivo me genera un layout para insertar-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sistema Gestor de Bienes y Personas INCES</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<link href="{{ asset('css/all.min.css') }}" rel="stylesheet">

</head>
<body>
	<div class="container">
		<hr>
			@if(session()->has('flash'))
				<div class="alert alert-info">{{ session('flash') }}</div>
			@endif
			@yield('content')
	</div>
</body>
</html>