<div class="register-box">


    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg"><b>REGISTRATION</b> PAGE</p>

            <form action="<?= base_url('auth/registration'); ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-user" placeholder="Full name" name="name" id="name" required value="<?php echo set_value('name'); ?>">
                    <?php echo form_error('name', '<small class="text-danger">', '</small>'); ?>

                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email" id="email" required value="<?php echo set_value('email'); ?>">
                    <?php echo form_error('email', '<small class="text-danger">', '</small>'); ?>

                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password1" id="password1" required>
                    <?php echo form_error('password1', '<small class="text-danger">', '</small>'); ?>

                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Retype password" name="password2" id="password2" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <br>
            <center>
                <a href="<?= base_url('auth'); ?>" class="text-center">I already have a membership</a>
            </center>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->