    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar Section -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="<?= BASEURL ?>/img/melitiket_logo.svg" alt="" srcset="">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                </div>
                <div class="sidebar-brand-text mx-3">MeliTiket.com</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item _ Beranda -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Beranda</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading - Text -->
            <div class="sidebar-heading">
                Tiketing
            </div>

            <!-- Nav Item - Pesanan Saya -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-ticket-alt"></i>
                    <span>Pesanan Saya</span>
                </a>
            </li>

            <!-- Nav Item - Booking Tiket -->
            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL ?>/home/booking">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Booking Tiket</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Button Closer (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar Section -->

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
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
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
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <!--  -->

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item d-flex align-items-center mr-5">
                            
                            <a href="<?= BASEURL ?>/profile">User</a>
                            <img src="<?= BASEURL ?>/img/undraw_profile.svg" alt="" srcset="" class="ml-2">

                        </li>
                        <!--  -->

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="frofile-container row">
                    <div class="col-4">
                        <div class="container-lg-img container-height shadow rounded p-5">
                            <img src="<?= BASEURL ?>/img/undraw_profile.svg" alt="Profile Image" srcset="" class="profile-img mb-2">
                            <h3 class="profile-name text-center mt-2">User</h3>
                        </div>
                    </div>
                    <div class="col-8 mb-5">
                        <div class="container-lg-form container-height shadow rounded p-5">

                            <div class="form">
                            <h1 class="text-start mt-2 mb-3">Accounts Profile</h1>

                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="nama" class=" col-form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama">
                                </div>
                                <div class="form-group">
                                    <label for="notelp" class=" col-form-label">No Telepon</label>
                                    <input type="text" class="form-control" id="notelp">
                                </div>
                                <div class="form-group">
                                    <label for="email" class=" col-form-label">Email</label>
                                    <input type="text" class="form-control" id="email">
                                </div>
                                <div class="button d-flex justify-content-end mt-5 mb-3">
                                    <button class="btn btn-primary mr-2">
                                        <a href="<?= BASEURL ?>/profile/ProfileEdits">Ubah Profile</a>
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- End of Page Content -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>