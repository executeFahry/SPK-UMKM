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
                            <h1>Edit Bobot</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Bobot</li>
                                <li class="breadcrumb-item active">Edit Bobot</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Form Edit Bobot</h3>
                                </div>
                                <!-- /.card-header -->

                                <!-- form start -->
                                <form method="POST" action="<?= base_url("Bobot/update/" . $data_bobot['id_bobot']); ?>">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="editKodeKriteria">Kode Kriteria</label>
                                            <input type="text" class="form-control" id="editKodeKriteria" name="kode_kriteria" placeholder="Kode Kriteria" value="<?= $data_bobot['kode_kriteria']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputNamaKriteria">Nama Kriteria</label>
                                            <input type="text" class="form-control" id="inputNamaKriteria" name="nama_kriteria" placeholder="Nama Kriteria" value="<?= $data_bobot['nama_kriteria']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputNilaiKriteria">Nilai Kriteria</label>
                                            <input type="text" class="form-control" id="inputNilaiKriteria" name="nilai_kriteria" placeholder="Nilai Kriteria" value="<?= $data_bobot['nilai_kriteria']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputTipeKriteria">Tipe Kriteria</label>
                                            <input type="text" class="form-control" id="inputTipeKriteria" name="tipe_kriteria" placeholder="Tipe Kriteria" value="<?= $data_bobot['tipe_kriteria']; ?>">
                                        </div>

                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                    </div>
                                </form>

                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

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