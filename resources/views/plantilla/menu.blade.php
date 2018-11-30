<nav class="navbar navbar-expand-lg navbar-light bg-light">
   
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon icon"><i class="fas fa-bars"></i></span>
    </button>
    <a href="/" class="navbar-brand" id="logo">
        <img src="img/logo.png" alt="Smart Ride" style="width:80px;margin-top: 5px;"> 
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
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
                <a class="nav-link" href="#">Acceder</a>
            </li>

        </ul>

    </div>
</nav>










{{-- <div class="navbar navbar-default navbar-fixed-top" role="navigation">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
        </button>
        <a href="/" class="navbar-brand" id="logo">
            <img src="img/smart ride.jpeg" alt="Smart Ride" style="width:180px;margin-top: 5px;"> 
        </a>
    </div>
    <div class="collapse navbar-collapse justify-content-end">
        <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="/">Inicio</a></li>
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" id="user" data-toggle="dropdown">
                    Registrate <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="" id="registro">Padre</a></li>
                    <li><a href="" id="registro">Transportista</a></li>
                </ul>
            </li>
            @if (Route::has('login'))
                @if (Auth::check())
        
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            @if(Auth::user()->tipo == "Padre")
                                <img src="../../img/Aspirante/{{Auth::user()->imagen}}" class="img-responsive user-image" alt="User Image">
                                {{ Auth::user()->name }}<span class="caret"></span>
                            @elseif (Auth::user()->tipo == "Transportista")
                                <img src="../../img/users/{{Auth::user()->imagen}}" class="img-responsive user-image" alt="User Image">
                                {{ Auth::user()->name }}<span class="caret"></span>
                            @elseif (Auth::user()->tipo == "Admin")
                                <img src="../../img/logos/{{Auth::user()->imagen}}" class="img-responsive user-image" alt="User Image">
                                {{ Auth::user()->name }}<span class="caret"></span>
                            @endif
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="navbar-login">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-5">
                                            @if(Auth::user()->tipo == "Padre")
                                                <img src="../../img/Aspirante/{{Auth::user()->imagen}}" class="img-user img-responsive" alt="User Image">
                                            @elseif (Auth::user()->tipo == "Transportista")
                                                <img src="../../img/users/{{Auth::user()->imagen}}" class="img-responsive img-user " alt="User Image">
                                            @elseif (Auth::user()->tipo == "Admin")
                                                <img src="../../img/logos/{{Auth::user()->imagen}}" class="img-user img-responsive" alt="User Image">
                                            @endif
                                        </div>
                                        <div class="col-md-7">
                                            Hola Bienvenido <br>
                                            <p class="text-left"><strong>{{ Auth::user()->name }}</strong></p>
                                            <p class="text-left small">{{ Auth::user()->email }}</p> 
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-md-12" id="btn-user-footer">
                                        @if (Auth::user()->tipo == "Padre")
                                            <a href="" class="btn btn-agre btn-pers">Perfíl <span class="fa fa-user"></span></a>
                                        @elseif (Auth::user()->tipo== "Transportista")
                                            <a href="" class="btn btn-agre btn-pers">Admin Panel<span class="fa fa-next"></span></a>
    
                                        @endif
                                        <a href=""
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" class="btn btn-eli">
                                            Cerrar <span class="fa fa-sign-in"></span>
                                        </a>
                                        <form id="logout-form" action="" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            @else
                                <li><a href="">Acceder</a></li>
                                
                            @endif 
                        @endif
                    </ul>
                </li>
        </ul>
    </div>
</div> --}}