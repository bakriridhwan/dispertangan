<div class="content-wrapper" id="wrapper">
    <div id="content-wrapper">

        <div class="container-fluid">



            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>EDIT PROFILE</h1>
                </div>

            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <a href="<?php echo base_url('user/tampilkanProfil'); ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="card-body">

                    <form action="<?= base_url('user/edit'); ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                                <?php echo form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-sm-2">Gambar</div>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="<?= base_url('assets/profile/') . $user['image']; ?>" class="img-thumbnail">
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image">
                                            <label class="custom-file-label" for="image">-- Pilih file --</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Edit</button>
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
</div>
<!-- /#wrapper -->

</body>