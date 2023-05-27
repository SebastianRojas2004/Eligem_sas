<!DOCTYPE html>       
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Scripts -->
        @vite(['resources/css/app.css','resources/js/navbar.js'])
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        
        <!----===== Boxicons CSS ===== -->
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        
        <!--<title>Dashboard Sidebar Menu</title>--> 
    </head>    
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-cog'></i>
      <span class="logo_name">Eligem sas</span>
    </div>
      <ul class="nav-links">
      <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Home</span>
          </a>
        </li>
        <li class="nav-link">
          <a href="{{ route('empleados.index') }}">
              <i class='bx bx-group'></i>
              <span class="links_name">Empleado</span>
          </a>
        </li>    
        <li class="nav-link">
          <a href="{{ route('usuarios.index')}}">
              <i class='bx bx-user'></i>
              <span class="links_name">Usuarios</span>
          </a>
        </li>  
        <li class="nav-link">
          <a href="{{ route('cargarPdf.index')}}">
              <i class='bx bx-file'></i>
              <span class="links_name">Cargar Pdf</span>
          </a>
        </li>             
        <li class="log_out">
    @guest
        <a href="{{ route('login') }}">{{ __('Login') }}</a>
    @else
        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"class="links_name" class="bx bx-log-out" style="color: white;">
            {{ Auth::user()->name }} ({{ __('Cerrar sesion') }})
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    @endguest
</li>

      </ul>
  </div>  
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>        
      </div>          
    </nav>    
    <div class="sales-details">
            <ul class="details">
        <div class="recent-sales box">
            <br><br><br><br>
            <form method="POST" action="{{ url('/exportar-tabla') }}">
            <div class="container">
        <h2>Seleccionar fecha del reporte</h2>
        @csrf
        <label for="fecha_inicio">Fecha de inicio:</label>
        <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio">

        <label for="fecha_fin">Fecha de fin:</label>
        <input type="date" id="fecha_fin"  class="form-control" name="fecha_fin">
        <br>
        <button type="submit" class="btn btn-primary">Exportar</button>
        </div>
    </form>