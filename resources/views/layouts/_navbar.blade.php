<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <ul class="nav navbar__list">
                <li>
                    <a href="#" class="link--navbar active" data-item="locations">Ubicaciones</a>
                </li>
                <li>
                    <a href="#" class="link--navbar" data-item="information">Información</a>
                </li>
                <li>
                    <a href="#" class="link--navbar" data-item="sources">Fuentes</a>
                </li>
                <li>
                    <a href="#" class="link--navbar" data-item="help">¿Cómo ayudar?</a>
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
                        <a href="#" class="dropdown-toggle btn btn-secondary btn-square navbar-btn m-a-0" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            @if(Auth::user()->isAdmin())
                                <li><a href="/dashboard"><i class="fa fa-cog"></i> Dashboard</a></li>
                                <li class="divider"></li>
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
