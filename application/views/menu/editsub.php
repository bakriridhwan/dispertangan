<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>EDIT SUBMENU MANAGEMENT</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <form action="<?php echo base_url('menu/ubahSub'); ?>" method="post">
            <input type="hidden" name="id" value="<?= $user_sub_menu['id'] ?>">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="SubMenu title" value="<?= $user_sub_menu['title'] ?>">
                    </div>

                    <div class="form-group">
                        <select name="menu_id" class="form-control">
                            <option value="<?= $user_sub_menu['menu_id'] ?>">Select Menu</option>

                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="SubMenu url" value="<?= $user_sub_menu['url'] ?>">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="SubMenu icon" value="<?= $user_sub_menu['icon'] ?>">
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked value="<?= $user_sub_menu['is_active'] ?>">
                            <label class="form-check-label" for="is_active">
                                Active?
                            </label>
                        </div>
                    </div>
                </div>
            </div>


            <button type="submit" class="btn btn-warning">Update</button>
            <a href="<?= base_url('menu/submenu'); ?>" class="btn btn-primary">Back</a>

        </form>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->