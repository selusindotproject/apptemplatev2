
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-cyan elevation-4">

        <!-- Brand Logo -->
        <a href="<?php echo site_url() ?>" class="brand-link">
            <img src="<?php echo base_url() ?>assets/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light"><?php echo APP_NAME . ' v.' . APP_VER ?></span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?php echo base_url() ?>assets/adminlte/dist/img/<?php echo $this->ion_auth->logged_in() ? 'user1-128x128.jpg' : 'user9-160x160.jpg' ?>" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block"><?php echo $this->ion_auth->logged_in() ? $this->ion_auth->user()->row()->first_name : '' ?></a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">

                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->

                    <!-- dashboard -->
                    <li class="nav-item">
                        <a href="<?php echo site_url() ?>" class="nav-link <?php echo $this->uri->segment(1) == '' ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>DASHBOARD</p>
                        </a>
                    </li>

                    <?php // check apakah user sudah login ?>
                    <?php if ($this->ion_auth->logged_in()) { ?>

                    <!-- master -->
                    <li class="nav-item
                        <?php
                        switch ($this->uri->segment(1)) {
                            case 'auth':
                                echo 'menu-open';
                                break;
                            default:
                                echo '';
                        }
                        ?>
                    ">
                        <a href="#" class="nav-link
                            <?php
                            switch ($this->uri->segment(1)) {
                                case 'auth':
                                    echo 'active';
                                    break;
                                default:
                                    echo '';
                            }
                            ?>
                        ">
                            <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                            <i class="fas fa-clone nav-icon"></i>
                            <p>MASTER <i class="right fas fa-angle-left"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo site_url('auth') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'auth' ? 'active' : '' ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>USERS</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <?php } ?>
                    <?php // end check ?>

                    <!-- Login or logout -->
                    <li class="nav-item">
                        <?php if ($this->ion_auth->logged_in()) { ?>
                            <a href="<?php echo site_url('auth/logout'); ?>" class="nav-link">
                                <i class="fas fa-sign-out-alt nav-icon"></i>
                                <p>LOGOUT</p>
                            </a>
                        <?php } else { ?>
                            <a href="<?php echo site_url('auth/login'); ?>" class="nav-link">
                                <i class="fas fa-sign-in-alt nav-icon"></i>
                                <p>LOGIN</p>
                            </a>
                        <?php } ?>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
