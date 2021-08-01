<div class="login-box">

    <!-- /.login-logo -->
    <div class="card pb-3">
        <div class="card-body login-card-body">
            <h5 class="login-box-msg"><b>LOGIN</b> PAGE</h5>

            <?= $this->session->flashdata('message'); ?>

            <form action="<?= base_url('auth'); ?>" method="post">
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email" id="email" value="<?php echo set_value('email'); ?>" required>
                    <?php echo form_error('email'); ?>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                    <?php echo form_error('password'); ?>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <br>
            <center>
                <p class="mb-1">
                    <a href="<?= base_url('auth/forgotPassword') ?>">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="<?= base_url('auth/registration'); ?>" class="text-center">Register a new membership</a>
                </p>
                <p class="mb-0">
                    <a href="<?= base_url('landing'); ?>" class="text-center">Go to website</a>
                </p>
            </center>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->