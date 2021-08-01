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
                    <h1>EDIT USER</h1>
                </div>

            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <a href="<?php echo base_url('admin/mUser'); ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="card-body">

                    <form action="<?= base_url('admin/updateUser'); ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $user['id'] ?>">


                        <div class="form-group col-4">
                            <label for="name">Nama</label>
                            <input class="form-control" id="name" type="text" name="name" value="<?= $user['name']; ?>" readonly>
                        </div>

                        <div class="form-group col-4">
                            <label for="email">Email</label>
                            <input class="form-control" id="email" type="text" name="email" value="<?= $user['email']; ?>" readonly>
                        </div>

                        <div class="form-group col-4">
                            <label for="role">Role</label>
                            <input class="form-control" id="role" type="text" name="role" value="<?= $user['role_id']; ?>">
                        </div>







                        <div class="form-group row justify-content-end">
                            <div class="col ml-1">
                                <button type="submit" class="btn btn-success">Update</button>
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