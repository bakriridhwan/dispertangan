<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?php echo base_url() ?>assets/dist/img/LogoDispertangan.png" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">DISPERTANGAN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url('assets/profile/') . $user['image']; ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <p class="text-white"><b><?php echo $user['name']; ?></b></p>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->

                <!-- QUERY MENU -->
                <?php

                $role_id = $this->session->userdata('role_id');
                $queryMenu = "SELECT `user_menu`.`id`, `menu`
                        FROM `user_menu` JOIN `user_access_menu` 
                            ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                    WHERE `user_access_menu`.`role_id` = $role_id
                ORDER BY `user_access_menu`.`menu_id` ASC
                ";
                $menu = $this->db->query($queryMenu)->result_array();

                ?>


                <!-- LOOPING -->
                <?php foreach ($menu as $m) : ?>
                    <div class="sidebar-heading text-white font-weight-bold">
                        <?= $m['menu']; ?>
                    </div>



                    <!-- SIAPKAN SUB-MENU SESUAI MENU -->
                    <?php

                    $menuId = $m['id'];
                    $querySubMenu = "SELECT *
                            FROM `user_sub_menu` JOIN   `user_menu` 
                            ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                        WHERE `user_sub_menu`.`menu_id` = $menuId
                        AND `user_sub_menu`.`is_active` = 1
                    ";
                    // {$menuId}

                    $subMenu = $this->db->query($querySubMenu)->result_array();

                    ?>

                    <?php foreach ($subMenu as $sm) : ?>
                        <?php if ($title == $sm['title']) : ?>
                            <li class="nav-item active">
                            <?php else : ?>
                            <li class="nav-item">
                            <?php endif; ?>
                            <a href="<?= base_url($sm['url']); ?>" class="nav-link">
                                <i class="<?= $sm['icon']; ?>"></i>
                                <p>
                                    <?= $sm['title']; ?>
                                </p>
                            </a>
                            </li>
                        <?php endforeach; ?>

                        <hr class="sidebar-divider">

                    <?php endforeach; ?>








                    <li class="nav-item">
                        <a href="<?= base_url('auth/logout'); ?>" class="nav-link">
                            <i class="nav-icon fa fa-sign-out-alt nav-icon"></i>
                            <p>
                                Logout
                            </p>
                        </a>
                    </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>