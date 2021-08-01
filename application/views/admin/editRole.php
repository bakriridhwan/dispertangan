<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>EDIT ROLE</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <form action="<?php echo base_url('admin/ubahRole'); ?>" method="post">
            <div class="row">
                <div class="col-4">
                    <input type="hidden" name="id" value="<?= $user_role['id'] ?>">
                    <div class="input-group">
                        <input type="text" class="form-control" id="role" name="role" placeholder="Role name" value="<?= $user_role['role']; ?>">
                    </div>
                </div>
            </div>


            <br>
            <button type="submit" class="btn btn-warning">Update</button>
            <a href="<?= base_url('admin/role'); ?>" class="btn btn-primary">Back</a>
        </form>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->