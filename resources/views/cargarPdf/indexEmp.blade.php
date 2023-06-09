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
          <a href="home" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Home</span>
          </a>
        </li>
        <li class="nav-link">
          <a href="{{ route('formulario.create') }}">
              <i class='bx bx-box'></i>
              <span class="links_name">Formulario</span>
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
          <div class="container">          
    <div class="container">
        <table class="table">
            <div class="float-right">
            </div>
            <br>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Documento</th>
                    <th>id empleado</th>
                    <th>Ver documento</th>
                    <th>Descargar documento</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datos as $d)
                    <tr>
                        <td>{{ $d->id_doc }}</td>
                        <td>{{ $d->nombre }}</td>
                        <td>{{ $d->documento }}</td>     
                        <td>{{ $d->id_empleado }}</td>
                        <td><a href="Archivos/{{$d->documento}}" class="btn btn-info" target="blank_">Ver Documento</a></td>
                        <td><a href="Archivos/{{$d->documento}}" class="btn btn-success" download>descargar documento</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>