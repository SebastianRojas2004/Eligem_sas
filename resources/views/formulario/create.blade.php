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
          <a href="{{ route('formulario.create') }}">
              <i class='bx bx-box'></i>
              <span class="links_name">Formulario</span>
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
  <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Formulario</div>
          <div class="sales-details">
            <ul class="details">
        <form action="{{ route('formulario.store') }}" method="post" class="form-formulario">
        @csrf
        <label class="form-label" for="">Empresa en mision en la que termino su contrato</label>
        <br>
        <select name="empresaContrato" class="form-control">
            <option value="Alborada">Alborada</option>
            <option value="Agricola cardenal (Facatativa)">Agricola cardenal (Facatativa)</option>
            <option value="Agricola cardenal (Rosal)">Agricola cardenal (Rosal)</option>
            <option value="Inverpalmas">Inverpalmas</option>
            <option value="Flores colon">Flores colon</option>
            <option value="Flores del rio">Flores del rio</option>
            <option value="Flores Funza">Flores Funza</option>
            <option value="Flexport de Colombia">Flexport de Colombia</option>
        </select>
        <br>
        <label class="form-label" for="">¿Cual de los siguiente motivos se ajusta mas a la terminacion de su contrato?</label>
        <br>
        <select name="motivo" class="form-control">
          <option value="Terminacion de contrato">Terminacion de contrato</option>
          <option value="Retiro voluntario">Retiro voluntario</option>
          <option value="Una mejor opcion laboral">Una mejor opcion laboral</option>
          <option value="Viaje">Viaje</option>
          <option value="Motivos familiares">Motivos familiares</option>
        </select>                
        <br>

        <label class="form-label" for="">Nos gustaria saber tu opinion de trabajar con nosotros(cuentanos aqui)</label>
        <br>
        <textarea class="form-control" name="opinion" id="" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Enviar" class="btn btn-success">
    </form>        