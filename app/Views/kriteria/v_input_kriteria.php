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
                            <h1>Tambah Kriteria</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url('Home/index') ?>">Home</a></li>
                                <li class="breadcrumb-item active">Data Kriteria</li>
                                <li class="breadcrumb-item active">Tambah Kriteria</li>
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
                                    <h3 class="card-title">Form Tambah Kriteria</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form method="POST" action="<?= base_url("Kriteria/store") ?>">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="inputKodeKriteria" class="col-sm-2 col-form-label">Kode Kriteria</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="inputKodeKriteria" name="kode_kriteria">
                                                    <option>Pilih Kode Kriteria</option>
                                                    <?php foreach ($data_bobot as $bobot) : ?>
                                                        <option value="<?= $bobot['kode_kriteria'] ?>" data-nama-kriteria="<?= $bobot['nama_kriteria'] ?>">
                                                            <?= $bobot['kode_kriteria'] ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputNamaKriteria" class="col-sm-2 col-form-label">Nama Kriteria</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputNamaKriteria" name="nama_kriteria" placeholder="Nama Kriteria" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputNamaBobot">Nama Bobot</label>
                                            <input type="text" class="form-control" id="inputNamaBobot" name="nama_bobot" placeholder="Nama Bobot">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputNilaiBobot">Nilai Bobot</label>
                                            <input type="text" class="form-control" id="inputNilaiBobot" name="nilai_bobot" placeholder="Nilai Bobot">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Tambah</button>
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
    <script>
        $(document).ready(function() {
            // ketika select kode kriteria diubah
            $('#inputKodeKriteria').on('change', function() {
                // ambil nama kriteria dari atribut data-nama-kriteria
                var namaKriteria = $(this).find(':selected').data('nama-kriteria');

                // isi input nama kriteria dengan nilai nama kriteria yang sesuai
                $('#inputNamaKriteria').val(namaKriteria);
            });
        });
    </script>