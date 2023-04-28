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
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')
                    <div class="card-body">
                        <form method="PUT" action="{{ route('usuarios.update', $usuarios) }}"  role="form" enctype="multipart/form-data">                        
                            <div class="box box-info padding-1">
                                <div class="box-body">
                                    <div class="form-group">
                                    {{ Form::label('Nombre') }}
                                    {{ Form::text('name', $usuarios->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                                    {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('Correo') }}
                                        {{ Form::text('Correo', $usuarios->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
                                        {!! $errors->first('Correo', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('Contraseña') }}
                                        {{ Form::text('Contraseña', $usuarios->password, ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'Contraseña']) }}
                                        {!! $errors->first('Contraseña', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('Tipo de usuario') }}
                                        {{ Form::Number('Contraseña', $usuarios->tipo_usuario, ['class' => 'form-control' . ($errors->has('tipo_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de usuario']) }}
                                        {!! $errors->first('Tipo de usuario', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('Id empleado') }}
                                        {{ Form::Number('Id empleado', $usuarios->id_empleado, ['class' => 'form-control' . ($errors->has('id_empleado') ? ' is-invalid' : ''), 'placeholder' => 'Id empleado']) }}
                                        {!! $errors->first('Id empleado', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>
                                <div class="box-footer mt20">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
