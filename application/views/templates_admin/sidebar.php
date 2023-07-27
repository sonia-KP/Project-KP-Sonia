<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-duotone fa-server" style="--fa-secondary-color: #a6b6a0;"></i>
                </div>
                <div class="sidebar-brand-text mx-3">APP LIST SERVER</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>" <i class="fas fa-fw fa-tachomer-alt"></i>
                    <span>Dashboard</span></a>

                <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('admin/tbAplikasi'); ?>">
                    <i class="fas fa-fw fa-solid fa-database"></i>
                    <span>List Aplikasi</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('admin/tbDatabase'); ?>">
                    <i class="fas fa-fw fa-regular fa-database"></i>
                    <span>Database</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('admin/tbServer'); ?>">
                    <i class="fas fa-fw fa-solid fa-server"></i>
                    <span>Server</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('admin/tipeDatabase'); ?>">
                    <i class="fas fa-fw fa-solid fa-clipboard-list"></i>
                    <span>Tipe Database</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('admin/tipeServer'); ?>">
                    <i class="fas fa-fw fa-solid fa-clipboard-list"></i>
                    <span>Tipe Server</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('admin/tipeOS'); ?>">
                    <i class="fas fa-fw fa-solid fa-clipboard-list"></i>
                    <span>Tipe OS</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('admin/Admin'); ?>">
                    <i class="fas fa-fw fa-solid fa-user"></i>
                    <span>user</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('auth/logout'); ?>">
                    <i class="fas fa-arrow-right"></i>
                    <span>Logout</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                </div>
            </li>





        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!--Nav Item - User Information -->
                        <li class="nav-item dropdown no -arrow">
                            <a class="nav-link dropdown-toggle" href='#' id="
                                userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600
                        small">Selamat Datang <?php echo $this->session->userdata('tb_aplikasi') ?></span>
                            </a>
                        </li>


                        </a>

                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->