<div class="content-wrapper" id="wrapper">
    <div id="content-wrapper">

        <div class="container-fluid">

            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>

            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Data</h1>
                </div>

            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <a href="<?php echo base_url('admin/mData'); ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="card-body">

                    <form action="<?= base_url('admin/simpanData'); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group col-4">
                            <label for="tahun">Tahun</label>
                            <select name="tahun" class="form-control" id="tahun" required>
                                <option readonly selected="selected">-- Pilih tahun --</option>
                                <option>2021</option>
                                <option>2020</option>
                                <option>2019</option>
                                <option>2018</option>
                                <option>2017</option>
                                <option>2016</option>
                                <option>2015</option>
                                <option>2014</option>
                                <option>2013</option>
                                <option>2012</option>
                                <option>2011</option>
                                <option>2010</option>
                                <option>2009</option>
                                <option>2008</option>
                                <option>2007</option>
                                <option>2006</option>
                                <option>2005</option>
                                <option>2004</option>
                            </select>
                        </div>

                        <div class="form-group col-4">
                            <label for="bulan">Bulan</label>
                            <select name="bulan" class="form-control" id="bulan" required>
                                <option readonly selected="selected">-- Pilih bulan --</option>
                                <option>Januari</option>
                                <option>Februari</option>
                                <option>Maret</option>
                                <option>April</option>
                                <option>Mei</option>
                                <option>Juni</option>
                                <option>Juli</option>
                                <option>Agustus</option>
                                <option>September</option>
                                <option>Oktober</option>
                                <option>November</option>
                                <option>Desember</option>
                            </select>
                        </div>

                        <div class="form-group col-4">
                            <label for="bidang">Bidang</label>
                            <select name="bidang" class="form-control" id="bidang" required>
                                <option readonly selected="selected">-- Pilih bidang --</option>
                                <option>Pertanian</option>
                                <option>Perikanan</option>
                                <option>Ketahanan Pangan</option>
                            </select>
                        </div>

                        <div class="form-group col-4">
                            <label for="judul">Judul</label>
                            <input class="form-control" id="judul" type="text" name="judul" min="5" placeholder="Masukkan Judul" required />
                        </div>


                        <div class="form-group col-4">
                            <label for="file">File</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="file" name="file" required>
                                <label class="custom-file-label" for="file">-- Pilih file --</label>
                            </div>
                        </div>


                        <div class="form-group row justify-content-end">
                            <div class="col ml-1">
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </div>
                    </form>



                </div>

                <div class="card-footer small text-muted">
                    * required fields
                </div>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    </body>