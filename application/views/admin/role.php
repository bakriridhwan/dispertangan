<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ROLE ACCESS MENU</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-lg-6">

                <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>


                <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal"><i class="fas fa-plus"></i><span> </span> Add New Role</a>

                <?= $this->session->flashdata('message'); ?>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Role</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($role as $r) : ?>
                            <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><?php echo $r['role']; ?></td>
                                <td>
                                    <a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>" class="badge badge-warning">access</a>

                                    <a href="<?= base_url() ?>/admin/formeditRole/<?= $r['id']; ?>" class="badge badge-success">edit</a>

                                    <a href="<?= base_url() ?>/admin/hapusRole/<?= $r['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin?');">delete</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>


            </div>
        </div>



    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->




<!-- Modal -->

<!-- ADD -->
<!-- Modal -->
<form action="<?= base_url('admin/addrole'); ?>" method="post">
    <div class="modal fade" id="newRoleModal" tabindex="-1" aria-labelledby="newRoleModalLabel" aria-hidden="true" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newRoleModalLabel">Add New Role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="<?php echo base_url('admin/role'); ?>" method="post">
                    <div class="modal-body">

                        <div class="input-group">
                            <input type="text" class="form-control" id="role" name="role" placeholder="Role name">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</form>