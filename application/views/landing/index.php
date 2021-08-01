<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-center text-dark"> Data Center</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-center">Data Dinas Pertanian dan Ketahanan Pangan Kota Yogyakarta</h3>
                        </div>


                        <form action="<?= base_url('landing/index'); ?>" method="post" class="ml-3 mt-4">
                            <div class="input-group mb-3 col-sm-4">
                                <input type="text" class="form-control" placeholder="Cari kata kunci ..." name="keyword" autocomplete="off" autofocus>
                                <div class="input-group-append">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Cari">
                                </div>
                            </div>

                            <h5 class="ml-2"><b>Jumlah data : </b><?= $total_rows; ?></h5>

                        </form>

                        <?= $this->session->flashdata('message'); ?>


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
                                <thead class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Tahun</th>
                                        <th>Bulan</th>
                                        <th>Bidang</th>
                                        <th>Judul</th>
                                        <th>File</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php foreach ($datacenter as $dc) :
                                    ?>
                                        <tr>
                                            <td><?= ++$start; ?></td>
                                            <td><?= $dc['tahun'] ?></td>
                                            <td><?= $dc['bulan'] ?></td>
                                            <td><?= $dc['bidang'] ?></td>
                                            <td><?= $dc['judul'] ?></td>

                                            <!-- UPLOAD -->
                                            <td><a href="<?php echo base_url('assets/fileupload/' . $dc['file']) ?>" download>Unduh</a></td>
                                        </tr>
                                    <?php
                                    endforeach;
                                    ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <section class="bg-secondary m-0 p-3">
        <div class="container">
            <div class="row text-dark">
                <div class="col-sm-4">
                    <div class="card h-100 bg-secondary">
                        <div class="card-body">
                            <h5 class="card-title">Sosial Media</h5>
                            <p class="card-text">Temukan kami di sosial media!</p>
                            <a href="#" style="font-size: 40px; background-color: #3b5998" class="fa text-light rounded-circle px-4 py-3 fa-facebook-f"></a>
                            <a href="#" style="font-size: 40px; background-color: #55ACEE" class="fa text-light rounded-circle p-3 fa-twitter"></a>
                            <a href="#" style="font-size: 40px; background-color: #c32aa3; " class="fa text-light rounded-circle p-3 fa-instagram"></a>
                            <a href="#" style="font-size: 40px" class="fa text-light bg-danger rounded-circle p-3 fa-youtube"></a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card h-100 bg-secondary">
                        <div class="card-body">
                            <h5 class="card-title">Alamat</h5>
                            <p class="card-text">Dinas Pertanian dan Ketahanan Pangan Kota Yogyakarta</p>
                            <p>Kelurahan Giwangan, Kecamatan Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta, 55163</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card h-100 bg-secondary">
                        <div class="card-body">
                            <h5 class="card-title">Hubungi Kami</h5>
                            <p class="card-text">Telp.: (0274) xxxx</p>
                            <p class="card-text">Fax: (0274) xxxx</p>
                            <p class="card-text">Email: example@example.com</p>
                            <p class="card-text">Jam Kerja: 07.00 - 15.30</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
</div>
<!-- /.content-wrapper -->