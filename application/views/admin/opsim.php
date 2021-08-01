<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>MANAGEMENT</h1>
                    <h1><b>DATA CENTER</b> dan <b>DATA USER</b></h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">

                <div class="col-6">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><b>Lihat Data Center</b></h3>
                        </div>
                        <div class="card-body">
                            Tekan tombol berikut untuk menyunting data!
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <a class="btn btn-block btn-primary" href="<?= base_url('user/tampilkanData') ?>" role="button">Data Center</a>
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>

                <div class="col-6">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><b>Lihat Data User</b></h3>
                        </div>
                        <div class="card-body">
                            Tekan tombol berikut untuk menampilkan data!
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <a class="btn btn-block btn-primary" href="<?= base_url('admin/opsim') ?>" role="button">Data User</a>
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>

            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->