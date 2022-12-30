<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?> assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    
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
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            
                            <div class="input-group-append">
                                <button class="btn btn-warning" type="button">
                                    <i class="">Sistem Informasi Pengadaan Polibatam</i>

                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            
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

                        <!-- Nav Item - Alerts -->
                         
                          

                        <!-- Nav Item - Messages -->
                       

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="index" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Beranda</span></a>
                                 <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="index">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Beranda
                                </a>
                               
                            
                            <!-- Dropdown - User Information -->
                        </li>


                         <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="<?= base_url('landingpages/about'); ?>" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Tentang Kami</span>
                               
                            </a>
                             <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href=""<?= base_url('landingpages/about'); ?>"">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Tentang Kami
                                </a>
                            <!-- Dropdown - User Information -->
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href=""<?= base_url('landingpages/login'); ?>"" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Login</span>
                               
                            </a>
                             <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url('landingpages/login'); ?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Login
                                </a>
                            <!-- Dropdown - User Information -->
                        </li>



                         

                        <!-- Nav Item - User Information -->
                        
                            
                            
                            <!-- Dropdown - User Information -->
                        
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
                    <div class="row">

                        <div class="col-lg-6">

                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <img class="img-fluid px-3 px-sm-3 mt-3 mb-5" style="width: 30 rem;"
                                    src="<?php echo base_url(); ?>assets/img/poltek.jpg" alt="...">
                                </div>
                            </div>

                            <!-- Brand Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Visi Misi Pengadaan</h6>
                                </div>

                                <div class="card-body">
                                    <p>Visi</p>
                                    <p>Menjadi Bagian Pengadaan Barang dan Jasa/Unit Layanan Pengadaan profesional dan unggul yang mampu mendukung Universitas Pendidikan Indonesia menuju Leading and Outstanding dalam bidang pendidikan.</p>

                                    <p>Mis</p>
                                    <p>1. Melaksanakan pengadaan barang dan jasa secara efisien dengan menggunakan sumber daya yang yang terbatas diperoleh barang dan jasa dalam kuantitas dan kualitas yang diharapkan dengan waktu yang tepat.</p>
                                    <p>2. Melaksanakan pengadaan barang dan jasa secara efektif sesuai dengan kebutuhan dan sasaran yang telah ditetapkan serta memberikan manfaat yang sebesar-besarnya bagi Universitas Pendidikan Indonesia.</p>
                                    <p>3. Menyelenggarakan pengadaan barang dan jasa secara akuntabel, sesuai dengan aturan dan ketentuan yang berlaku sehingga dapat dipertanggungjawabkan kepada pihak yang berkepentingan.</p>
                                    <p>4. Mengembangkan personil pengadaan barang dan jasa sehingga dapat meningkatkan pengetahuan, keahlian, keterampilan dan sikap profesional serta beretika.</p>
                                    <a href="#" class="btn btn-google btn-block"><i class="fab fa-google fa-fw"></i>
                                        .btn-google</a>
                                    <a href="#" class="btn btn-facebook btn-block"><i
                                            class="fab fa-facebook-f fa-fw"></i> .btn-facebook</a>

                                </div>
                            </div>

                        </div>

                        

                        <div class="col-lg-6">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Pengadaan Polibatam</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="<?php echo base_url(); ?>assets/img/pgd2.jpg" alt="...">
                                    </div>
                                    <span class="subheading">Tentang Kami</span>
                                    <h3 class="mb-4">Sistem Informasi Pengadaan Polibatam</h3>
                                    <p>Pengadaan merupakan proses kegiatan untuk pemenuhan atau penyediaan kebutuhan dan pasokan barang atau jasa di bawah kontrak atau pembelian langsung untuk memenuhi kebutuhan bisnis. Pengadaan dapat mempengaruhi keseluruhan proses arus barang karena merupakan bagian penting dalam proses tersebut </p>

                                    <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="<?php echo base_url(); ?>assets/img/pgd1.jpg" alt="...">
                                    </div>

                                    <span class="subheading">Tujuan Pengadaan</span>
                                    <h3 class="mb-4">Sistem Informasi Pengadaan Polibatam</h3>
                                    <p>1. menghasilkan barang/jasa yang tepat dari setiap uang yang dibelanjakan, diukur dari aspek kualitas,kuantitas, waktu, biaya, lokasi, dan Penyedia</p>
                                    <p>2. meningkatkan penggunaan produk dalam negeri</p>
                                    <p>3. meningkatkan peran serta Usaha Mikro, Usaha Kecil,dan Koperasi</p>

                                   
                                </div>
                            </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
          
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
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

    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>