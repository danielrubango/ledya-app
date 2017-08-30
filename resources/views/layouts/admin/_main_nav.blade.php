<button class="navbar-toggler mobile-sidebar-toggler d-lg-none" type="button">☰</button>
<a class="navbar-brand" href="#" style="background-image:none">Pyramide Hotel</a>
<ul class="nav navbar-nav d-md-down-none">
    <li class="nav-item">
        <a class="nav-link navbar-toggler sidebar-toggler" href="#">☰</a>
    </li>

    {{-- <li class="nav-item px-3">
        <a class="nav-link" href="#">Dashboard</a>
    </li>
    <li class="nav-item px-3">
        <a class="nav-link" href="#">Users</a>
    </li>
    <li class="nav-item px-3">
        <a class="nav-link" href="#">Settings</a>
    </li> --}}
</ul>

<ul class="nav navbar-nav ml-auto">
    <li class="nav-item d-md-down-none">
        <a class="nav-link" href="#"><i class="icon-bell"></i><span class="badge badge-pill badge-danger">5</span></a>
    </li>
    <li class="nav-item dropdown pr-4">
        <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            {{-- <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com"> --}}
            <span class="d-md-down-none">admin</span>
        </a>

        <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center">
                <strong>Account</strong>
            </div>

            <a class="dropdown-item" href="#">
                <i class="fa fa-bell-o"></i> Updates
                <span class="badge badge-info">42</span>
            </a>

            <a class="dropdown-item" href="#">
                <i class="fa fa-envelope-o"></i> Messages
                <span class="badge badge-success">42</span>
            </a>

            {{-- <div class="dropdown-header text-center">
                <strong>Settings</strong>
            </div> --}}

            {{-- <a class="dropdown-item" href="#">
                <i class="fa fa-user"></i> Profile
            </a> --}}

            <a class="dropdown-item" href="#">
                <i class="fa fa-wrench"></i> Settings
            </a>

            <a class="dropdown-item" href="#">
                <i class="fa fa-usd"></i> Payments
                <span class="badge badge-default">42</span>
            </a>

            <div class="divider"></div>

            <a class="dropdown-item" href="{{ route('logout') }}">
                <i class="fa fa-lock"></i> Logout
            </a>
        </div>
    </li>

    {{-- <li class="nav-item d-md-down-none">
        <a class="nav-link navbar-toggler aside-menu-toggler" href="#">☰</a>
    </li> --}}
</ul>