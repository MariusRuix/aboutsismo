<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <ul class="nav navbar__list">
                <li>
                    <a href="#" class="link--navbar">Ubicaciones</a>
                </li>
                <li>
                    <a href="#" class="link--navbar">Información</a>
                </li>
                <li>
                    <a href="#" class="link--navbar">Fuentes</a>
                </li>
                <li>
                    <a href="#" class="link--navbar">Contactos</a>
                </li>
            </ul>
        </div><!-- .navbar-header -->

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if(Auth::guest())
                    <li><a href="/login">Iniciar sesión</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle btn btn-secondary btn-square navbar-btn" data-toggle="dropdown" role="button" aria-expanded="false">
                            Name Ipsum
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            @if(Auth::user()->isAdmin())
                                <li><a href="/dashboard">Dashboard</a></li>
                            @endif
                            <li><a href="/logout" class="text-small"><i class="fa fa-sign-out"></i> Cerrar sesión</a></li>
                        </ul>
                    </li>
                @endif
            </ul><!-- .nav navbar-nav navbar-right -->
        </div><!-- .collapse navbar-collapse -->
    </div><!-- .container -->
</nav><!-- .navbar navbar-inverse navbar-fixed-top -->

<!--  -->