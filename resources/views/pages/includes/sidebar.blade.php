<!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    {{-- <li class="nav-label">Dashboard</li> --}}
                    <li>
                        <a href="{{ route('view.dashboard')}}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('view.profile')}}" aria-expanded="false">
                            <i class="icon-user menu-icon"></i><span class="nav-text">Perfil</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('view.courses')}}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Cursos</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('view.employers')}}" aria-expanded="false">
                            <i class="icon-anchor menu-icon"></i><span class="nav-text">Empleados</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('view.editions')}}" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Ediciones</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
