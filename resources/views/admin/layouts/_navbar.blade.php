<div class="header navbar">
    <div class="header-container">
        <ul class="nav-left">
            <li>
                <a id='sidebar-toggle' class="sidebar-toggle" href="javascript:void(0);">
                    {{-- <i class="ti-menu"></i> --}}
                    <i class="fas fa-bars"></i>
                </a>
            </li>
        </ul>
        <ul class="nav-right">
            <li class="notifications dropdown">
                <span class="counter bgc-red">3</span>
                <a href="" class="dropdown-toggle no-after" data-toggle="dropdown">
                    {{-- <i class="ti-bell"></i> --}}
                    {{-- <i class="fas fa-bell"></i> --}}
                    <i class="far fa-bell"></i>
                </a>

                <ul class="dropdown-menu">
                    <li class="pX-20 pY-15 bdB">
                        <i class="fas fa-bell"></i>
                        {{-- <i class="ti-bell pR-10"></i> --}}
                        <span class="fsz-sm fw-600 c-grey-900">Notifications</span>
                    </li>
                </ul>
            </li>
            <li class="notifications dropdown">
                <span class="counter bgc-blue">3</span>
                <a href="" class="dropdown-toggle no-after" data-toggle="dropdown">
                    {{-- <i class="ti-email"></i> --}}
                    <i class="far fa-envelope"></i>
                </a>

                <ul class="dropdown-menu">
                    <li class="pX-20 pY-15 bdB">
                    {{-- <i class="ti-email pR-10"></i> --}}
                    <i class="fas fa-envelope"></i>
                    <span class="fsz-sm fw-600 c-grey-900">Emails</span>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                    <div class="peer mR-10">
                        <img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/10.jpg" alt="">
                    </div>
                    <div class="peer">
                        <span class="fsz-sm c-white">Carlos V</span>
                    </div>
                </a>
                
                <ul class="dropdown-menu fsz-sm">
                    <li>
                        <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                            {{-- <i class="ti-settings mR-10"></i> --}}
                            <i class="fas fa-cog"></i>
                            <span>Setting</span>
                        </a>
                    </li>
                    <li>
                        <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                            {{-- <i class="ti-user mR-10"></i> --}}
                            <i class="far fa-user"></i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="email.html" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                            {{-- <i class="ti-email mR-10"></i> --}}
                            <i class="far fa-envelope"></i>
                            <span>Messages</span>
                        </a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li>
                        <a href="{{ route('logout') }}" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">

                            {{-- <i class="ti-power-off mR-10"></i> --}}
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Logout</span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>