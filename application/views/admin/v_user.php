<!-- Content Wrapper. Contains page content -->

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>MANAGEMENT USER</h1>
            </div>
        </div>
        <div class="row mb-2 ml-1">
            <a class="btn btn-primary" href="<?= base_url('admin/mUser'); ?>" role="button">Back</a>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<form action="<?= base_url('') ?>" method="post" enctype="multipart/form-data">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Data Pengguna Dinas Pertanian dan Ketahanan Pangan Kota Yogyakarta</h2><br>

                        </div>



                        <!-- /.card-header -->
                        <div class="card-body">

                            <h5><b>Jumlah User : </b><?= $total_user; ?></h5>

                            <?php echo $this->session->flashdata('message'); ?>

                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Gambar</th>
                                        <th>Waktu Pendaftaran</th>

                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($user as $u) :
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $u['name'] ?></td>
                                            <td><?= $u['email'] ?></td>
                                            <td><img width="150" src="<?php echo base_url('assets/profile/' . $u['image']) ?>"></td>

                                            <!-- <td><?= $u['image'] ?></td> -->
                                            <td><?= date('d F Y', $u['date_created']); ?></td>


                                            <td><a href="<?= base_url() ?>admin/hapusUser/<?= $u['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin?');">hapus</a>
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
</form>