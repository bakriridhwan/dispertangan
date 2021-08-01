<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DASHBOARD</h1>
                    <h1 style="color: red;"><b>ADMINISTRATOR</b></h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <section class="content-header">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5><b>Jumlah user : </b><?= $total_user; ?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5><b>Jumlah data center : </b><?= $total_datacenter; ?></h5>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->