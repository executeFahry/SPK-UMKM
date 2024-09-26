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
                            <h1>Edit Data UMKM</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data UMKM</li>
                                <li class="breadcrumb-item active">Edit UMKM</li>
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
                                    <h3 class="card-title">Form Edit UMKM</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form method="POST" action="<?= base_url("Umkm/update/" . $data_umkm['id_umkm']); ?>">
                                    <input type="hidden" name="id_umkm" value="<?= $data_umkm['id_umkm'] ?>">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="inputNamaUMKM">Nama UMKM</label>
                                            <input type="text" class="form-control" id="inputNamaUMKM" name="nama_umkm" placeholder="Nama UMKM" value="<?= $data_umkm['nama_umkm'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputNamaUMKM">Nama Pimpinan</label>
                                            <input type="text" class="form-control" id="inputNamaPimpinan" name="nama_pimpinan" placeholder="Nama Pimpinan" value="<?= $data_umkm['nama_pimpinan'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAlamat">Alamat</label>
                                            <div class="row">
                                                <div class="col-5">
                                                    <input type="text" class="form-control" placeholder="Jalan" id="inputJalan" name="jalan" value="<?= $data_umkm['jalan'] ?>">
                                                </div>
                                                <div class="col-4">
                                                    <input type="text" class="form-control" placeholder="Desa" id="inputDesa" name="desa" value="<?= $data_umkm['desa'] ?>">
                                                </div>
                                                <div class="col-3">
                                                    <input type="text" class="form-control" placeholder="Kecamatan" id="inputKecamatan" name="kecamatan" value="<?= $data_umkm['kecamatan'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputJenisUsaha" class="col-sm-2 col-form-label">Jenis Usaha</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="inputJenisUsaha" name="id_jenis_usaha">
                                                    <?php foreach ($data_jenis_usaha as $jenis_usaha) : ?>
                                                        <option value="<?= $jenis_usaha['id_jenis_usaha'] ?>" <?= $data_umkm['id_jenis_usaha'] == $jenis_usaha['id_jenis_usaha'] ? 'selected' : '' ?>><?= $jenis_usaha['nama_jenis_usaha'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
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