<div class="sidebar">
    <div class="sidebar-inner">
        <!-- ### $Sidebar Header ### -->
        <div class="sidebar-logo">
            <div class="peers ai-c fxw-nw">
                <div class="peer peer-greed">
                <a class="sidebar-link td-n" href="{{ route('admin.dashboard') }}">
                    <div class="peers ai-c fxw-nw">
                    <div class="peer">
                        <div class="logo">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="">
                        </div>
                    </div>
                    <div class="peer peer-greed">
                        <h5 class="lh-1 mB-0 logo-text c-white">Administrator</h5>
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
                    <span class="title c-white">Dashboard</span>
                </a>
            </li>
            @if(Gate::check('list users') || Gate::check('create users'))
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        {{-- <i class="c-orange-500 ti-layout-list-thumb"></i> --}}
                        <i class="fas fa-users"></i>
                    </span>
                    <span class="title c-white">Usuarios</span>
                    <span class="arrow">
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    @can('list users')
                    <li>
                        <a class='sidebar-link c-white' href="{{ route('admin.users.index') }}">
                            <span class="icon-holder">
                                {{-- <i class="c-brown-500 ti-email"></i> --}}
                                <i class="fas fa-list"></i>
                            </span>
                            <span class="title c-white">Lista usuarios</span>
                        </a>
                    </li>
                    @endcan
                    @can('create users')
                    <li>
                        <a class='sidebar-link c-white' href="{{ route('admin.users.create') }}">
                            <span class="icon-holder">
                                {{-- <i class="c-brown-500 ti-email"></i> --}}
                                <i class="fas fa-edit"></i>
                            </span>
                            <span class="title c-white">Crear usuario</span>
                        </a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endif
            @if(Gate::check('list roles') || Gate::check('create roles'))
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        {{-- <i class="c-orange-500 ti-layout-list-thumb"></i> --}}
                        <i class="fas fa-user-lock"></i>
                    </span>
                    <span class="title c-white">Roles</span>
                    <span class="arrow">
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    @can('list roles')
                    <li>
                        <a class='sidebar-link c-white' href="{{ route('admin.roles.index') }}">
                            <span class="icon-holder">
                                {{-- <i class="c-brown-500 ti-email"></i> --}}
                                <i class="fas fa-list"></i>
                            </span>
                            <span class="title c-white">Lista roles</span>
                        </a>
                    </li>
                    @endcan
                    @can('create users')
                    <li>
                        <a class='sidebar-link c-white' href="{{ route('admin.roles.create') }}">
                            <span class="icon-holder">
                                {{-- <i class="c-brown-500 ti-email"></i> --}}
                                <i class="fas fa-edit"></i>
                            </span>
                            <span class="title c-white">Crear role</span>
                        </a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endif
            @if(Gate::check('list writers') || Gate::check('create writers'))
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        {{-- <i class="c-orange-500 ti-layout-list-thumb"></i> --}}
                        <i class="fas fa-edit"></i>
                    </span>
                    <span class="title c-white">Escritores</span>
                    <span class="arrow">
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    @can('list writers')
                    <li>
                        <a class='sidebar-link c-white' href="{{ route('admin.writers.index') }}">
                            <span class="icon-holder">
                                {{-- <i class="c-brown-500 ti-email"></i> --}}
                                <i class="fas fa-list"></i>
                            </span>
                            <span class="title c-white">Lista escritores</span>
                        </a>
                    </li>
                    @endcan
                    @can('create writers')
                    <li>
                        <a class='sidebar-link c-white' href="{{ route('admin.writers.create') }}">
                            <span class="icon-holder">
                                {{-- <i class="c-brown-500 ti-email"></i> --}}
                                <i class="fas fa-edit"></i>
                            </span>
                            <span class="title c-white">Crear escritor</span>
                        </a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endif
            @if(Gate::check('list letters') || Gate::check('create letters'))
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="fas fa-mail-bulk"></i>
                    </span>
                    <span class="title c-white">Cartas</span>
                    <span class="arrow">
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    @can('list letters')
                    <li>
                        <a class='sidebar-link c-white' href="{{ route('admin.letters.index') }}">
                            <span class="icon-holder">
                                <i class="fas fa-list"></i>
                            </span>
                            <span class="title c-white">Mis cartas</span>
                        </a>
                    </li>
                    @endcan
                    @can('create letters')
                    <li>
                        <a class='sidebar-link c-white' href="{{ route('admin.letters.create') }}">
                            <span class="icon-holder">
                                <i class="fas fa-edit"></i>
                            </span>
                            <span class="title c-white">Redactar carta</span>
                        </a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endif
            @if(Gate::check('list articles') || Gate::check('create articles'))
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="fas fa-mail-bulk"></i>
                    </span>
                    <span class="title c-white">Articulos</span>
                    <span class="arrow">
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    @can('list articles')
                    <li>
                        <a class='sidebar-link c-white' href="{{ route('admin.articles.index') }}">
                            <span class="icon-holder">
                                <i class="fas fa-list"></i>
                            </span>
                            <span class="title c-white">Mis articulos</span>
                        </a>
                    </li>
                    @endcan
                    @can('create articles')
                    <li>
                        <a class='sidebar-link c-white' href="{{ route('admin.articles.create') }}">
                            <span class="icon-holder">
                                <i class="fas fa-edit"></i>
                            </span>
                            <span class="title c-white">Redactar</span>
                        </a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endif
            @if(Gate::check('list redactors') || Gate::check('create redactors'))
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        {{-- <i class="c-orange-500 ti-layout-list-thumb"></i> --}}
                        <i class="fas fa-user-tag"></i>
                    </span>
                    <span class="title c-white">Redactores</span>
                    <span class="arrow">
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    @can('list redactors')
                    <li>
                        <a class='sidebar-link c-white' href="{{ route('admin.redactors.index') }}">
                            <span class="icon-holder">
                                {{-- <i class="c-brown-500 ti-email"></i> --}}
                                <i class="fas fa-list"></i>
                            </span>
                            <span class="title c-white">Lista redactores</span>
                        </a>
                    </li>
                    @endcan
                    @can('create redactors')
                    <li>
                        <a class='sidebar-link c-white' href="{{ route('admin.redactors.create') }}">
                            <span class="icon-holder">
                                {{-- <i class="c-brown-500 ti-email"></i> --}}
                                <i class="fas fa-edit"></i>
                            </span>
                            <span class="title c-white">Crear redactor</span>
                        </a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endif
            @if(Gate::check('list suscriptors') || Gate::check('create suscriptors'))
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        {{-- <i class="c-orange-500 ti-layout-list-thumb"></i> --}}
                        <i class="fas fa-user-tag"></i>
                    </span>
                    <span class="title c-white">Suscriptores</span>
                    <span class="arrow">
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    @can('list suscriptors')
                    <li>
                        <a class='sidebar-link c-white' href="{{ route('admin.suscriptors.index') }}">
                            <span class="icon-holder">
                                {{-- <i class="c-brown-500 ti-email"></i> --}}
                                <i class="fas fa-list"></i>
                            </span>
                            <span class="title c-white">Lista suscriptores</span>
                        </a>
                    </li>
                    @endcan
                    @can('create suscriptors')
                    <li>
                        <a class='sidebar-link c-white' href="{{ route('admin.suscriptors.create') }}">
                            <span class="icon-holder">
                                {{-- <i class="c-brown-500 ti-email"></i> --}}
                                <i class="fas fa-edit"></i>
                            </span>
                            <span class="title c-white">Crear suscriptor</span>
                        </a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endif
            @if(Gate::check('list areas') || Gate::check('create areas'))
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        {{-- <i class="c-orange-500 ti-layout-list-thumb"></i> --}}
                        <i class="fas fa-globe-americas"></i>
                    </span>
                    <span class="title c-white">Areas</span>
                    <span class="arrow">
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    @can('list areas')
                    <li>
                        <a class='sidebar-link c-white' href="{{ route('admin.areas.index') }}">
                            <span class="icon-holder">
                                {{-- <i class="c-brown-500 ti-email"></i> --}}
                                <i class="fas fa-list"></i>
                            </span>
                            <span class="title c-white">Lista areas</span>
                        </a>
                    </li>
                    @endcan
                    @can('create areas')
                    <li>
                        <a class='sidebar-link c-white' href="{{ route('admin.areas.create') }}">
                            <span class="icon-holder">
                                {{-- <i class="c-brown-500 ti-email"></i> --}}
                                <i class="fas fa-edit"></i>
                            </span>
                            <span class="title c-white">Crear area</span>
                        </a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endif
        </ul>
    </div>
</div>