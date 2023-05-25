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
                <a id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <i class='bx bx-log-out'> {{ Auth::user()->name }}</i>                
                </a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a href=" {{ route('logout') }}"
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
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
<<<<<<< HEAD
            <br><br><br><br>
<<<<<<< HEAD
            <form method="POST" action="{{ url('/exportar-tabla') }}">
        @csrf
        <label for="fecha_inicio">Fecha de inicio:</label>
        <input type="date" id="fecha_inicio" name="fecha_inicio">

        <label for="fecha_fin">Fecha de fin:</label>
        <input type="date" id="fecha_fin" name="fecha_fin">

        <button type="submit">Exportar</button>
    </form>
=======
            <form action="{{ route('excel')}}">
            <div class="container">
    <h2>Seleccionar fecha del reporte</h2>
    <div class="row">
      <div class="col">
        <div class="form-group">
          <label for="fecha1">desde:</label>
          <input type="date" class="form-control" id="fechaInicio">
        </div>
      </div>
      <div class="col">
        <div class="form-group">
          <label for="fecha2">hasta:</label>
          <input type="date" class="form-control" id="fechaFin">
        </div>
      </div>
            </div>
              </div>
              <br>
              <input type="submit" class="btn btn-primary" value="Generar Excel">
            </form>
=======
            <br><br><br><br><br>
          <div class="container">
              <h4>Descargar datos de respuesta a formulario</h4>
              <br>
              <label for="fecha">fecha inicio:</label>
              <input type="date" id="fecha_inicio" name="fecha_inicio">
              &nbsp;              
              <label for="fecha">hasta:&nbsp;</label>
              <input type="date" id="fecha_final" name="fecha_final">&nbsp;
              <input type="button" class="btn btn-primary" value="Generar Excel">
            </div>  
>>>>>>> ba2e97b82cdf30df5aa54921dcd5fcf6234abac9
>>>>>>> 4b92be8421724e2fdf839cfd252704bb343f1800
