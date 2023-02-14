<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary  elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('img/kab_tasik.png') }}" alt="AdminLTE Logo" class="brand-image img " style="opacity: .8">
        <span class="brand-text font-weight-light">SIMAK-KATA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Administrator</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard.index') }}" class="nav-link  @if ($title == 'Dashboard')
                        {{ 'active' }}
                    @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-header">DATA MASTER</li>
                <li class="nav-item">
                    <a href="{{ route('akun.pegawai.index') }}" class="nav-link @if ($title == 'Akun Pegawai' || $title == 'Edit Akun Pegawai') {{ 'active' }} @endif">
                        <i class="nav-icon far fa-folder"></i>
                        <p>Akun Pegawai</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pegawai.index') }}" class="nav-link @if ($title == 'Pegawai' || $title == 'Tambah Pegawai' || $title == 'Edit Pegawai') {{ 'active' }} @endif">
                        <i class="nav-icon far fa-user"></i>
                        <p>Pegawai</p>
                    </a>
                </li>
                <li class="nav-header">DATA AKTIVITAS</li>
                <li class="nav-item">
                    <a href="{{ route('tpcb.index') }}" class="nav-link @if ($title == 'Tim Pembina Cluster Binaan') {{ 'active' }} @endif">
                        <i class="nav-icon far fa-folder"></i>
                        <p>Tim Pembina Cluster Binaan</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
