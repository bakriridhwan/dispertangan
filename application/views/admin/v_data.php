<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DATA CENTER</h1>
                </div>

            </div>
            <div class="row mb-2 ml-1">
                <a class="btn btn-primary" href="<?= base_url('admin/formTambah'); ?>" role="button">Tambah Data</a>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Data Dinas Pertanian dan Ketahanan Pangan Kota Yogyakarta</h2><br>
                            <p><span style="color: red;"><b>*</b></span><i><b>klik file jika mau mendownload</b></i></p>
                        </div>




                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tahun</th>
                                        <th>Bulan</th>
                                        <th>Bidang</th>
                                        <th>Judul</th>
                                        <th>File</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($datacenter as $dc) :
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $dc['tahun'] ?></td>
                                            <td><?= $dc['bulan'] ?></td>
                                            <td><?= $dc['bidang'] ?></td>
                                            <td><?= $dc['judul'] ?></td>


                                            <td><a href="<?php echo base_url('assets/fileupload/' . $dc['file']) ?>"><?= $dc['file']; ?></a></td>


                                            <td>
                                                <a href="<?= base_url() ?>user/formEdit/<?= $dc['id']; ?>" class="badge badge-success">edit</a>

                                                <a href="<?= base_url() ?>user/hapus/<?= $dc['id']; ?>" class="badge badge-danger">hapus</a>
                                            </td>
                                        </tr>
                                    <?php
                                    endforeach;
                                    ?>
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