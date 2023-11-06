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

                        <!-- Nav Item - Messages -->
                        <li class="nav-item d-flex align-items-center mr-5">
                            
                            <img src="<?= BASEURL ?>/img/undraw_profile.svg" alt="" srcset="" class="mr-2">
                            <a href="<?= BASEURL ?>/Login">Login</a>

                        </li>
                        <!-- End of -->

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <button class="btn btn-primary">Sign In</button>
                        <!--  -->

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Slider Section --> 
                    <!-- Masih Perlu Beberapa Gambar -->
                    <div id="carouselExampleIndicators" class="carousel slide mt-3" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="<?= BASEURL ?>/img/slider_img.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="<?= BASEURL ?>/img/slider_img.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="<?= BASEURL ?>/img/slider_img.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>
                    <!-- End of Slider Section -->

                </div>
                <!-- /.container-fluid -->

                <!-- card Container Section -->
                <div class="container-sm">

                    <!-- Card Section -->
                    <div class="card-deck mt-5 mb-5">

                        <!-- PHP Code For Each -->
                        <?php foreach ( $data['tiket'] as $contentTiket ) : ?>

                         <!-- Content Of Card -->
                        <div class="card">
                            <img src="<?= BASEURL ?>/img/besakih-temple.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center"><?= $contentTiket['nama_tiket'] ?></h5>
                                <hr>
                                <p class="card-text"><?= $contentTiket['Keterangan'] ?></p>
                                <hr>
                                <p class="card-text"><small class="text-muted">Rp. <?= $contentTiket['harga_tiket'] ?></small></p>
                                <div class="card-footers row">
                                    <div class="rating col-6">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <div class="col-6">
                                        <button class="btn btn-primary btn-booking">Booking Sekarang</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Content of Card -->

                        <?php endforeach; ?>
                        <!-- End of PHP For Each -->


                        <!-- Prototype UI Card Design -->
                        <!-- <div class="card">
                            <img src="/img/besakih-temple.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                                <hr>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <hr>
                                <p class="card-text"><small class="text-muted">Rp. 100.000</small></p>
                                <div class="card-footers row">
                                    <div class="rating col-6">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <div class="col-6">
                                        <button class="btn btn-primary btn-booking">Booking Sekarang</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <img src="/img/besakih-temple.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                                <hr>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <hr>
                                <p class="card-text"><small class="text-muted">Rp. 100.000</small></p>
                                <div class="card-footers row">
                                    <div class="rating col-6">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <div class="col-6">
                                        <button class="btn btn-primary btn-booking">Booking Sekarang</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <img src="/img/besakih-temple.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Card title</h5>
                                <hr>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <hr>
                                <p class="card-text"><small class="text-muted">Rp. 100.000</small></p>
                                <div class="card-footers row">
                                    <div class="rating col-6">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <div class="col-6">
                                        <button class="btn btn-primary btn-booking">Booking Sekarang</button>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- End Prototype UI Card Design -->

                    </div>
                    <!-- End of Card Section -->

                </div>
                <!-- End of Card Container Section -->

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