    <!DOCTYPE html>
    <!-- Coding by CodingLab | www.codinglabweb.com -->
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Scripts -->
        @vite(['resources/css/app.css'])
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        
        <!----===== Boxicons CSS ===== -->
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        
        <!--<title>Dashboard Sidebar Menu</title>--> 
    </head>
    <body>
        <nav class="sidebar close">
            <header>
                <div class="image-text">
                    <span class="image">
                        <!--<img src="logo.png" alt="">-->
                    </span>

                    <div class="text logo-text">
                        <span class="name">ELIGEM SAS</span>
                        <span class="profession">E.S.T. Lideres en Gestion Empresarial S.A.S</span>
                    </div>
                </div>

                <i class='bx bx-chevron-right toggle'></i>
            </header>

            <div class="menu-bar">
                <div class="menu">

                    <li class="search-box">
                        <i class='bx bx-search icon'></i>
                        <input type="text" placeholder="Search...">
                    </li>

                    <ul class="menu-links">
                        <li class="nav-link">
                            <a href="#">
                                <i class='bx bx-home-alt icon' ></i>
                                <span class="text nav-text">Home</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="{{ route('empleados.index') }}">
                                <i class='bx bxs-user-rectangle icon'></i>
                                <span class="text nav-text">Empleado</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="{{ route('usuarios.index')}}">
                                <i class='bx bxs-user icon'></i>
                                <span class="text nav-text">Usuarios</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="{{ route('cargarPdf.index')}}">
                                <i class='bx bxs-file-pdf icon' ></i>
                                <span class="text nav-text">Cargar Pdf</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="bottom-content">
                    <li class="">
                                    <a id="navbarDropdown" class="text nav-text" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="bx bx-log-out icon" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>

                    <li class="mode">
                        <div class="sun-moon">
                            <i class='bx bx-moon icon moon'></i>
                            <i class='bx bx-sun icon sun'></i>
                        </div>
                        <span class="mode-text text">Dark mode</span>

                        <div class="toggle-switch">
                            <span class="switch"></span>
                        </div>
                    </li>
                    
                </div>
            </div>

        </nav>

        <section class="home">
            <div class="text">Dashboard Sidebar</div>
        </section>

        <script>
            const body = document.querySelector('body'),
        sidebar = body.querySelector('nav'),
        toggle = body.querySelector(".toggle"),
        searchBtn = body.querySelector(".search-box"),
        modeSwitch = body.querySelector(".toggle-switch"),
        modeText = body.querySelector(".mode-text");


    toggle.addEventListener("click" , () =>{
        sidebar.classList.toggle("close");
    })

    searchBtn.addEventListener("click" , () =>{
        sidebar.classList.remove("close");
    })

    modeSwitch.addEventListener("click" , () =>{
        body.classList.toggle("dark");
        
        if(body.classList.contains("dark")){
            modeText.innerText = "Light mode";
        }else{
            modeText.innerText = "Dark mode";
            
        }
    });
        </script>

    </body>
    </html>