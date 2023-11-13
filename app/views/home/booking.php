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
                <a class="nav-link" href="<?= BASEURL ?>/home">
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

                        <!-- Nav Item - Messages -->
                        <li class="nav-item d-flex align-items-center mr-5">
                            
                            <img src="<?= BASEURL ?>/img/undraw_profile.svg" alt="" srcset="" class="mr-2">
                            <a href="http://">Login</a>

                        </li>
                        <!-- End of -->

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <button class="btn btn-primary">Sign In</button>
                        <!--  -->

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Container Form -->
                <div class="container-sm bg-white shadow rounded p-5">
                    <div class="form">
                        <h1 class="text-center mt-2 mb-5">Booking Tiket</h1>

                        <form action="" method="post">
                            <div class="form-group row">
                                <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tujuan" class="col-sm-3 col-form-label">Tujuan</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="tujuan" name="tujuan">

                                    <!-- PHP ForEach -->
                                    <?php foreach ( $data['tiket'] as $rowBooking ) : ?>

                                        <option><?= $rowBooking['nama_tiket'] ?></option>

                                    <?php endforeach ?>
                                    <!-- End PHP ForEach -->
                                    
                                    </select>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="harga" class="col-sm-3 col-form-label">Harga Tiket</label>
                                <div class="col-sm-9">

                                    <input type="text" class="form-control" id="harga" name="harga" value="<?= $rowBooking['harga_tiket'] ?>" readonly>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggal-booking" class="col-sm-3 col-form-label">Pilih Tanggal Booking</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="tanggal-booking" name="tanggal_booking">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah" class="col-sm-3 col-form-label">Jumlah Tiket</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="jumlah" name="jumlah_tiket">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="totalharga" class="col-sm-3 col-form-label">Total Harga</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="totalharga" name="total_harga">
                                </div>
                            </div>
                            
                        </form>

                            <!-- Prototype Button -->
                            <div class="button d-flex justify-content-end mt-5 mb-4">
                                <button class="btn btn-danger mr-2">
                                    <a href="<?= BASEURL ?>/home">Kembali</a>
                                </button>
                                <button type="" class="btn btn-primary ml-2" data-toggle="modal" data-target="#exampleModal">
                                    Booking Sekarang
                                </button>
                            </div>

                    </div>
                </div>
                <!-- End of Container Form -->

                <!-- Modal Design -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header alert-modal">
                                <h5 class="modal-title" id="exampleModalLabel">Booking Sukses!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Selamat, Tiketmu Berhasil DiBooking!
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali Ke Beranda</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Modal Design -->

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