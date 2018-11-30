<nav class="navbar navbar-expand-lg navbar-light bg-light menu-blue">
   
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon icon"><i class="fas fa-bars"></i></span>
    </button>
    <a href="/" class="navbar-brand" id="logo">
        <img src="img/logo.png" alt="Smart Ride" class="logo-ico"> 
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Registrate
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/registroPadres">Padre</a>
                            <a class="dropdown-item" href="#">Transportista</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Acceder</a>
                    </li>
                        
                @else
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item {{ request()->is('') ? 'active' : '' }}">
                        <a class="nav-link" href="">Acerca de</a>
                    </li>
                    <li class="nav-item {{ request()->is('/perfil') ? 'active' : '' }}">
                        <a id="navbarDropdown" class="nav-link" href="/perfil">                           
                            {{ Auth::user()->name }}
                            <img src="../../img/perfil/{{Auth::user()->foto}}" class="img-responsive user-image" alt="User Image">
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Salir
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </ul>

    </div>
</nav>

