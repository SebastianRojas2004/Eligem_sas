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
            <br><br><br><br> 
<div class="container">
    <table class="table">        
        <div class="float-right">
            <a href="{{ route('empleados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                {{ __('Create New') }}
            </a>
        </div>
                        </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Correo</th>										
										<th>Celular</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empleados as $empleado)
                                        <tr>
                                            <td>{{ $empleado->id }}</td>
                                            
											<td>{{ $empleado->Nombre }}</td>
											<td>{{ $empleado->Correo }}</td>											
											<td>{{ $empleado->Celular }}</td>

                                            <td>
                                                <form action="{{ route('empleados.destroy',$empleado->id) }}" method="POST">
                                                    <!--- <a class="btn btn-sm btn-primary " href="{{ route('empleados.show',$empleado->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a> -->
                                                    <a class="btn btn-sm btn-success" href="{{ route('empleados.edit',$empleado->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>