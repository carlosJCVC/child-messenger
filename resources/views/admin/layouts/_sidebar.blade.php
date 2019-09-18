<aside id="sidebar" class="aside">
    <div class="sidebar">
        <ul class="nav">
            <li class="nav-item active ">
                <a class="nav-link" href="">
                    <i class="fas fa-border-all"></i>
                    <p> Dashboard </p>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="nav-link" href="{{ route('admin.writers.index') }}">
                    <i class="fas fa-edit"></i>
                    <p> Escritores </p>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="nav-link" href="{{ route('admin.redactors.index') }}">
                    <i class="fas fa-user-edit"></i>
                    <p> Redactores </p>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="nav-link" href="{{ route('admin.areas.index') }}">
                    <i class="fab fa-asymmetrik"></i>
                    <p> Areas </p>
                </a>
            </li>
        </ul>    
    </div>
</aside>