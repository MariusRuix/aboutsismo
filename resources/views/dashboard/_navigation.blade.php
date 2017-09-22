<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">InfórmateMX</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="/dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>

                <!-- Pages -->
                <li>
                    <a href="#"><i class="fa fa-files-o fa-fw"></i> Segmentos<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        @foreach(App\Models\Page::all() as $page)
                            <li>
                                <a href="{{ route('dashboard.pages.edit', $page->slug) }}"> {{ $page->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                <!-- Videos -->
                <li>
                    <a href="#"><i class="fa fa-video-camera fa-fw"></i> Videos<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ route('dashboard.videos.index') }}"> Ver Videos</a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard.videos.create') }}"> + Nuevo Video</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                <!-- Usuarios -->

                @if(Auth::user()->isSuperAdmin())
                    <li>
                        <a href="#"><i class="fa fa-user"></i> Usuarios<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('dashboard.users.index') }}"> Ver Usuarios</a>
                            </li>
                            <li>
                                <a href="{{ route('dashboard.users.create') }}"> + Nuevo Usuario</a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
