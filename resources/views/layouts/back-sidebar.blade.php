<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('assets/dist/img/pip-semarang-logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle">
        <span class="brand-text font-weight-light"><b>SICM KLINIK PIP</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard')}}" class="nav-link {{ (request()->segment(1) == 'dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link {{ (request()->segment(1) == 'dokter') ? 'active' : '' }} {{ (request()->segment(1) == 'jurusan') ? 'active' : '' }} {{ (request()->segment(1) == 'taruna') ? 'active' : '' }} {{ (request()->segment(1) == 'sertifikat') ? 'active' : '' }} {{ (request()->segment(1) == 'jabatan') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Data Master
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dokter.index')}}" class="nav-link {{ (request()->segment(1) == 'dokter') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dokter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('jurusan.index')}}" class="nav-link {{ (request()->segment(1) == 'jurusan') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jurusan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('taruna.index')}}" class="nav-link {{ (request()->segment(1) == 'taruna') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Taruna</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('sertifikat.index')}}" class="nav-link {{ (request()->segment(1) == 'sertifikat') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sertifikat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('jabatan.index')}}" class="nav-link {{ (request()->segment(1) == 'jabatan') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jabatan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link {{ (request()->segment(1) == 'rekam-medis') ? 'active' : '' }} {{ (request()->is('lengkapi-data')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file-medical-alt"></i>
                        <p>
                            Rekam Medis
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('rekam-medis.create')}}" class="nav-link {{ (request()->is('rekam-medis/create')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah Rekam Medis</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('rekam-medis.index')}}" class="nav-link {{ (request()->is('rekam-medis')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lihat Rekam Medis</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link {{ (request()->segment(1) == 'periksa') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file-archive"></i>
                        <p>
                            Pemeriksaan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('periksa.create')}}" class="nav-link {{ (request()->is('periksa/create')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah Pemeriksaan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('periksa.index')}}" class="nav-link {{ (request()->is('periksa')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lihat Pemeriksaan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @if (Auth::user()->id_role == 1)
                    <li class="nav-item">
                        <a href="{{ route('user.index')}}" class="nav-link {{ (request()->segment(1) == 'user') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Kelola Pengguna</p>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
