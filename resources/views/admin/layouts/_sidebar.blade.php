<div class="sidebar">
    <div class="sidebar-inner">
        <!-- ### $Sidebar Header ### -->
        <div class="sidebar-logo">
            <div class="peers ai-c fxw-nw">
                <div class="peer peer-greed">
                <a class="sidebar-link td-n" href="index.html">
                    <div class="peers ai-c fxw-nw">
                    <div class="peer">
                        <div class="logo">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="">
                        </div>
                    </div>
                    <div class="peer peer-greed">
                        <h5 class="lh-1 mB-0 logo-text">Adminator</h5>
                    </div>
                    </div>
                </a>
                </div>
                <div class="peer">
                <div class="mobile-toggle sidebar-toggle">
                    <a href="" class="td-n">
                        <i class="fas fa-chevron-circle-left"></i>
                        {{-- <i class="ti-arrow-circle-left"></i> --}}
                    </a>
                </div>
                </div>
            </div>
        </div>

        <!-- ### $Sidebar Menu ### -->
        <ul class="sidebar-menu scrollable pos-r">
            <li class="nav-item mT-30 actived">
            <a class="sidebar-link" href="{{ route('admin.dashboard') }}">
                    <span class="icon-holder">
                        {{-- <i class="c-blue-500 ti-home"></i> --}}
                        <i class="fas fa-home"></i>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class='sidebar-link' href="{{ route('admin.users.index') }}">
                    <span class="icon-holder">
                        <i class="fas fa-users"></i>
                    </span>
                    <span class="title">Usuarios</span>
                </a>
            </li>
            <li class="nav-item">
                <a class='sidebar-link' href="{{ route('admin.roles.index') }}">
                    <span class="icon-holder">
                        <i class="fas fa-user-lock"></i>
                    </span>
                    <span class="title">Roles</span>
                </a>
            </li>
            <li class="nav-item">
                <a class='sidebar-link' href="{{ route('admin.writers.index') }}">
                    <span class="icon-holder">
                        {{-- <i class="c-brown-500 ti-email"></i> --}}
                        <i class="fas fa-edit"></i>
                    </span>
                    <span class="title">Escritores</span>
                </a>
            </li>
            <li class="nav-item">
                <a class='sidebar-link' href="{{ route('admin.redactors.index') }}">
                    <span class="icon-holder">
                        <i class="fas fa-user-tag"></i>
                    </span>
                    <span class="title">Redactores</span>
                </a>
            </li>
            <li class="nav-item">
                <a class='sidebar-link' href="{{ route('admin.suscriptors.index') }}">
                    <span class="icon-holder">
                        <i class="fas fa-user-tag"></i>
                    </span>
                    <span class="title">Suscriptores</span>
                </a>
            </li>
            <li class="nav-item">
                <a class='sidebar-link' href="{{ route('admin.areas.index') }}">
                    <span class="icon-holder">
                        <i class="fas fa-globe-americas"></i>
                    </span>
                    <span class="title">Areas</span>
                </a>
            </li>
        </ul>
    </div>
</div>