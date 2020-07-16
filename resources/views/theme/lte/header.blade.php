<!--{{ $v='main-header navbar navbar-expand navbar-info navbar-light' }}-->
<nav class="{{ $v }}">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item mt-2 d-none d-sm-inline-block">
            <a>@yield('titulo')</a>
        </li>
    </ul>
</nav>
