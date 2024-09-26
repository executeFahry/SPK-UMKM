<?php include(APPPATH . 'Views/main/link.php'); ?>

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
                            <h1>Edit Kriteria</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url('Home/index') ?>">Home</a></li>
                                <li class="breadcrumb-item active">Edit Kriteria</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Form Edit Kriteria</h3>
                                </div>

                                <!-- Form start -->
                                <form method="POST" action="<?= base_url('Kriteria/update/' . $data_kriteria['id_kriteria']) ?>">
                                    <div class="card-body">
                                        <!-- Kode Kriteria -->
                                        <div class="form-group row">
                                            <label for="inputKodeKriteria" class="col-sm-2 col-form-label">Kode Kriteria</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="inputKodeKriteria" name="kode_kriteria">
                                                    <?php foreach ($data_bobot as $bobot) : ?>
                                                        <option value="<?= $bobot['kode_kriteria'] ?>" data-nama-kriteria="<?= $bobot['nama_kriteria'] ?>" <?= $bobot['kode_kriteria'] == $data_kriteria['kode_kriteria'] ? 'selected' : '' ?>>
                                                            <?= $bobot['kode_kriteria'] ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Nama Kriteria -->
                                        <div class="form-group row">
                                            <label for="inputNamaKriteria" class="col-sm-2 col-form-label">Nama Kriteria</label>
                                            <div class="col-sm-10">
                                                <input type="hidden" name="nama_kriteria" id="inputNamaKriteria" value="<?= $data_kriteria['nama_kriteria'] ?>">
                                            </div>
                                        </div>

                                        <!-- Nama Bobot -->
                                        <div class="form-group">
                                            <label for="inputNamaBobot">Nama Bobot</label>
                                            <input type="text" class="form-control" id="inputNamaBobot" name="nama_bobot" value="<?= $data_kriteria['nama_bobot'] ?>" placeholder="Nama Bobot">
                                        </div>

                                        <!-- Nilai Bobot -->
                                        <div class="form-group">
                                            <label for="inputNilaiBobot">Nilai Bobot</label>
                                            <input type="text" class="form-control" id="inputNilaiBobot" name="nilai_bobot" value="<?= $data_kriteria['nilai_bobot'] ?>" placeholder="Nilai Bobot">
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <?php include(APPPATH . 'Views/main/v_footer.php'); ?>

        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
    </div>

    <?php include(APPPATH . 'Views/main/config.php'); ?>

    <script>
        $(document).ready(function() {
            $('#inputKodeKriteria').on('change', function() {
                var namaKriteria = $(this).find(':selected').data('nama-kriteria');
                $('#inputNamaKriteria').val(namaKriteria); // Set hidden input
            });
        });
    </script>
</body>