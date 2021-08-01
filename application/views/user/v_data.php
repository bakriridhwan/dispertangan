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
                <a class="btn btn-primary" href="<?= base_url('user/formTambah'); ?>" role="button"><i class="fas fa-plus"></i><span> </span> Add Data</a>
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
                            <p><span style="color: red;"><b>*</b></span><i>Softfile : docx | pdf | doc</i></p>

                            <form action="<?= base_url('user/tampilkanData'); ?>" method="post">
                                <div class="input-group mb-3 col-4">
                                    <input type="text" class="form-control" placeholder="Cari kata kunci ..." name="keyword" autocomplete="off" autofocus>
                                    <div class="input-group-append">
                                        <input class="btn btn-primary" type="submit" name="submit" value="Search">
                                    </div>
                                </div>

                                <h5 class="ml-2"><b>Jumlah data : </b><?= $total_rows; ?></h5>

                            </form>

                            <?= $this->session->flashdata('message'); ?>

                        </div>




                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php if (empty($datacenter)) :  ?>
                                <div class="alert alert-danger text-center" role="alert">
                                    data not found!
                                </div>
                            <?php endif; ?>

                            <!-- Page -->
                            <?= $this->pagination->create_links(); ?>



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

                                    <!-- <?php if (empty($datacenter)) : ?>
                                        <tr>
                                            <td>
                                                <div class="alert alert-danger" role="alert">
                                                    data not found!
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endif; ?> -->

                                    <?php foreach ($datacenter as $dc) :
                                    ?>
                                        <tr>
                                            <td><?= ++$start; ?></td>
                                            <td><?= $dc['tahun'] ?></td>
                                            <td><?= $dc['bulan'] ?></td>
                                            <td><?= $dc['bidang'] ?></td>
                                            <td><?= $dc['judul'] ?></td>


                                            <td><a target="_blank" href="<?php echo base_url('assets/fileupload/' . $dc['file']) ?>"><?= $dc['file']; ?></a></td>


                                            <td>
                                                <a href="<?= base_url() ?>user/formEdit/<?= $dc['id']; ?>" class="badge badge-success">edit</a>

                                                <a href="<?= base_url() ?>user/hapus/<?= $dc['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin?');">delete</a>
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