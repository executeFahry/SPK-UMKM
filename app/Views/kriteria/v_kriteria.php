<?php
include(APPPATH . 'Views/main/link.php');
?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/logo_uin.png" alt="Logo UIN Malang" height="60" width="60">
        </div>

        <?php
        // Load the navbar, and sidebar view files
        include(APPPATH . 'Views/main/v_nav.php');
        include(APPPATH . 'Views/main/v_sidebar.php');
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Data kriteria</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url("Home/index") ?>">Home</a></li>
                                <li class="breadcrumb-item active">Data Kriteria</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="card-title">Tabel Kriteria</h3>
                                        <div>
                                            <a href="<?= base_url('Kriteria/create') ?>" class="btn btn-primary">
                                                <i class="fas fa-plus"></i> Tambah Kriteria
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table
                                        id="example1"
                                        class="table table-bordered table-striped">
                                        <thead>
                                            <tr class="text-center">
                                                <th>No</th>
                                                <th>Kode Kriteria</th>
                                                <th>Nama Kriteria</th>
                                                <th>Nama Bobot</th>
                                                <th>Nilai Bobot</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($data_kriteria)) : ?>
                                                <?php
                                                $no = 0;
                                                foreach ($data_kriteria as $kriteria) : $no++ ?>
                                                    <tr>
                                                        <td class="text-center"><?= $no; ?></td>
                                                        <td><?= $kriteria->kode_kriteria; ?></td>
                                                        <td><?= $kriteria->nama_kriteria; ?></td>
                                                        <td><?= $kriteria->nama_bobot; ?></td>
                                                        <td><?= $kriteria->nilai_bobot; ?></td>
                                                        <td class="text-center">
                                                            <a href="<?= base_url("Kriteria/edit/" . $kriteria->id_kriteria); ?>" class="btn btn-sm btn-warning">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            <a href="<?= base_url("Kriteria/delete/" . $kriteria->id_kriteria) ?>" class="btn btn-sm btn-danger">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php include(APPPATH . 'Views/main/v_footer.php'); ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php
    include(APPPATH . 'Views/main/config.php');
    ?>