<div class="login-box">

    <!-- /.login-logo -->
    <div class="card pb-3">
        <div class="card-body login-card-body">
            <h5 class="login-box-msg"><b>FORGOT</b> PASSWORD</h5>

            <?= $this->session->flashdata('message'); ?>


            <center>

                <h1>Coming soon!</h1>

                <br>
                <p class="mb-0">
                    <a href="<?= base_url('auth'); ?>" class="text-center">Back to login</a>
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