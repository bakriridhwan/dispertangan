<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Access Blocked!</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="<?php echo base_url(); ?>assets/AMIKOM.png">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">


        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <center style="transform: translate(0,130px);" class="block text-white">
                <h1 style="transform: rotate(90deg) scale(1.5);"><b style="color: red;">B</b></h1>
                <h1 style="transform: rotate(90deg);"><b style="color: red;">L</b></h1>
                <h1 style="transform: rotate(90deg);"><b style="color: red;">O</b></h1>
                <h1 style="transform: rotate(90deg) scale(.85);"><b style="color: red;">C</b></h1>
                <h1 style="transform: rotate(90deg);"><b style="color: red;">K</b></h1>
                <h1 style="transform: rotate(90deg);"><b style="color: red;">E</b></h1>
                <h1 style="transform: rotate(90deg) scale(1.5);"><b style="color: red;">D</b></h1>
                <h1 style="transform: rotate(90deg) scale(2);"><b>!!</b></h1>

            </center>

        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">

            </section>

            <!-- Main content -->
            <section class="content mt-5">
                <div class="error-page mt-5">
                    <h2 class="headline text-warning"> 403</h2>

                    <div class="error-content">
                        <h3><i class="fas fa-exclamation-triangle text-warning"></i> Access Forbidden!</h3>

                        <p>
                            We could not find the page you were looking for.
                            Meanwhile, you may <a href="<?= base_url('user'); ?>">back to dashboard</a>.</p>


                    </div>
                    <!-- /.error-content -->
                </div>
                <!-- /.error-page -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <span>Copyright &copy; Kelompok 5 <b><?php echo date('Y'); ?></b></span>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
</body>

</html>