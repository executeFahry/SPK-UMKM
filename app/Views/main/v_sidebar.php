<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('Home/index') ?>" class="brand-link">
        <img src="dist/img/logo_uin.png" alt="Logo UIN Malang" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">TI UIN Malang</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a class="d-block">Admin</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Home
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('JenisUsaha/index') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Jenis Usaha</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Umkm/index') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data UMKM</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Bobot/index') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Bobot</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Kriteria/index') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Kriteria</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>