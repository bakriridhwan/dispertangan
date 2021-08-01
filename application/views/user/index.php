<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 style="color: green;">BERANDA</h1>
                    <h1>Admin <b>DATA CENTER</b></h1>
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
                            <h3 class="card-title">Tampilkan Data</h3>
                        </div>
                        <div class="card-body">
                            Tekan tombol berikut untuk menampilkan data!
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <a class="btn btn-block btn-primary" href="<?= base_url('user/tampilkanData') ?>" role="button">Tampilkan Data</a>
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-6">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Data</h3>
                        </div>
                        <div class="card-body">
                            Tekan tombol berikut untuk menyunting data!
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <a class="btn btn-block btn-primary" href="<?= base_url('user/editData') ?>" role="button">Edit Data</a>
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