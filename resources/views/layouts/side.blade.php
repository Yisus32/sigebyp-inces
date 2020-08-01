<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sistema Gestor de Bienes y Personas INCES</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/jquery.modal.min.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">SIGEBYP <i>INCES</i></div>
      <div class="list-group list-group-flush">
      <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action bg-light"><i class="fa fa-home"></i> Inicio</a>
        <a href="{{ route('personas.index') }}" class="list-group-item list-group-item-action bg-light"><i class="fa fa-user"></i> Personas</a>
        <a href="{{ route('muebles.index' )}}" class="list-group-item list-group-item-action bg-light"><i class="fa fa-object-group"></i> Bienes</a>
        <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fa fa-exchange-alt"></i> Transacciones</a>
        <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fa fa-history"></i> Historial</a>
      
        <?php if((auth()->user()->is_admin)): ?>
        <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fa fa-table"></i> Cargos</a>
        <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fa fa-building"></i> Sedes</a>
        <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fa fa-paperclip"></i> Departamentos</a>
        <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fa fa-users"></i> Usuarios</a>
        <a href="#" class="list-group-item list-group-item-action bg-light"><i class="fa fa-user-secret"></i> Auditoría</a>
        <?php endif;?>
      
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Menú</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ auth()->user()->nombres }}
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#"><i class="fa fa-id-card"></i> Perfil</a>
                <!--<a class="dropdown-item" href="#">Another action</a>-->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}"><i class="fa fa-door-open"></i> Cerrar Sesión</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
          @yield('content')
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

 <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/jquery.modal.min.js') }}"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>



</body>

</html>