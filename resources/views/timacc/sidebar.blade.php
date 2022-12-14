<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <div class="d-flex sidebar-profile">
                <div class="sidebar-profile-name">
                    <p class="sidebar-name">
                        {{Auth::user()->name}}
                    </p>
                    <p class="sidebar-designation">
                        Welcome
                    </p>
                </div>
            </div>
            <p class="sidebar-menu-title">Menu</p>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('timacc')}}">
                <i class="typcn typcn-device-desktop menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('pinjam')}}">
                <i class="typcn typcn-compass menu-icon"></i>
                <span class="menu-title">Pinjaman Sepeda</span>
            </a>
        </li>

    </ul>
</nav>