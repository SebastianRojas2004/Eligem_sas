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
          <a href="admin" class="active">
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
<div class="container">
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')
                    <div class="card-body">
                        <form method="POST" action="{{ route('usuarios.update', $usuarios->id) }}"  role="form" enctype="multipart/form-data">                        
                            @csrf @method('PATCH')
                            <div class="box box-info padding-1">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="name">Nombre</label>
                                        <input type="text" class="form-control" name="name" value="{{$usuarios->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Correo</label>
                                        <input type="text" class="form-control" name="email" value="{{$usuarios->email}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Contraseña</label>
                                        <input type="password" class="form-control" name="password" value="{{$usuarios->password}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="tipo_usuario">Tipo usuario</label>
                                        <input type="text" class="form-control" name="tipo_usuario" value="{{$usuarios->tipo_usuario}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="id_empleado">id empleado</label>
                                        <input type="text" class="form-control" name="id_empleado" value="{{$usuarios->id_empleado}}">
                                    </div>
                                </div>
                                <br>
                                <div class="box-footer mt20">
                                    <button type="submit" class="btn btn-primary">Editar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
