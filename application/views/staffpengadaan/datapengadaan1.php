<?php

$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ajukan Pengadaan</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="pengusul.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Staff Pengadaanx</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="pengusul">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>About us</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom about:</h6>
                        <a class="collapse-item" href="about.html">about</a>
                        <a class="collapse-item" href="cards.html"></a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->

            <!-- Divider -->

            <!-- Nav Item - Pages Collapse Menu -->


            <!-- Nav Item - Charts -->


            <!-- Nav Item - Tables -->


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->


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
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for.." aria-label="Search" aria-describedby="basic-addon2">
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
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $username; ?></span>
                                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/undraw_profile.svg') ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Borang Pengadaan</h1>

                    </div>

                    <!-- Content Row -->
                    <div class="col-xl-12 col-lg-7">

                        <!-- Illustrations -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">1Pengadaan Politeknik Negeri Batam</h6>
                            </div>
                        </div>


                        <div class="card shadow mb-4">
                            <div class="card-header py-3">

                                <hr>
                                <?php
                                $no = 1;
                                foreach ($staffpengadaan1 as $index => $value) :
                                ?>
                                    <div class="form-group">
                                        <label>Kode Output Kegiatan</label>
                                        <input type="text" name="kokegiatan" class="form-control" value="<?= $value->kokegiatan ?>" disabled>
                                        <?= form_error('kokegiatan', '<div class="text-small text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Kode Akun Kegiatan</label>
                                        <input type="text" name="kokegiatan" class="form-control" value="<?= $value->kakegiatan ?>" disabled>
                                        <?= form_error('kakegiatan', '<div class="text-small text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Detail Akun Kegiatan</label>
                                        <input type="text" name="kokegiatan" class="form-control" value="<?= $value->detailakun ?>" disabled>
                                        <?= form_error('detailakun', '<div class="text-small text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Paket Pekerjaan</label>
                                        <input type="text" name="namapaket" class="form-control" value="<?= $value->namapaket ?>" disabled>
                                        <?= form_error('namapaket', '<div class="text-small text-danger">', '</div>'); ?>
                                    </div>
                                    <button data-toggle="modal" data-target="#edit1<?= $value->id_perencanaan ?>" class="btn btn-warning btn-sm" disabled><i class="fas fa-edit"></i> UBAH DATA</button>
                                    <div class="modal fade" id="edit1<?= $value->id_perencanaan ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action=<?= base_url('pengusul/editdata1/' . $value->id_perencanaan) ?>" method="POST">
                                                        <div class="form-group">
                                                            <label>Kode Output Kegiatan</label>
                                                            <input type="text" name="kokegiatan" class="form-control" value="<?= $value->kokegiatan ?>">
                                                            <?= form_error('kokegiatan', '<div class="text-small text-danger">', '</div>'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Kode Akun Kegiatan</label>
                                                            <input type="text" name="kakegiatan" class="form-control" value="<?= $value->kakegiatan ?>">
                                                            <?= form_error('kakegiatan', '<div class="text-small text-danger">', '</div>'); ?>
                                                        </div>
                                                        <div class=" form-group">
                                                            <label>Detail Akun Kegiatan</label>
                                                            <input type="text" name="detailakun" class="form-control" value="<?= $value->detailakun ?>">
                                                            <?= form_error('detailakun', '<div class="text-small text-danger">', '</div>'); ?>
                                                        </div>
                                                        <div class=" form-group">
                                                            <label>Nama Paket Pekerjaan</label>
                                                            <input type="text" name="namapaket" class="form-control" value="<?= $value->namapaket ?>">
                                                            <?= form_error('namapaket', '<div class="text-small text-danger">', '</div>'); ?>
                                                        </div>
                                                        <div class=" modal-footer">
                                                            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i>Simpan</button>
                                                            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Reset</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                        </div>
                        </form>

                    </div>



                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm" data-toggle="modal" data-target="#tambahdata" disabled>Tambah Data Pengadaan</button>
                            <!-- modal insert -->
                            <div class="example-modal">
                                <div id="tambahdata" class="modal fade" role="dialog" style="display:none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title">Tambah Data Pengadaan</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?= base_url('pengusul/tambahdata1/' . $value->id_perencanaan) ?>" method="post" role="form">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <label class="col-sm-3 control-label text-right">Nama Barang <span class="text-red"></span></label>
                                                            <div class="col-sm-8"><input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang" value=""></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <label class="col-sm-3 control-label text-right">Spesifikasi <span class="text-red"></span></label>
                                                            <div class="col-sm-8"><input type="text" class="form-control" name="spesifikasi" placeholder="Spesifikasi" value=""></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <label class="col-sm-3 control-label text-right">Satuan <span class="text-red"></span></label>
                                                            <div class="col-sm-8"><input type="text" class="form-control" name="satuan" placeholder="Satuan" value=""></div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="row">
                                                            <label class="col-sm-3 control-label text-right">Volume <span class="text-red"></span></label>
                                                            <div class="col-sm-8"><input type="text" class="form-control" name="volume" placeholder="Volume" value=""></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <label class="col-sm-3 control-label text-right">Harga Satuan <span class="text-red"></span></label>
                                                            <div class="col-sm-8"><input type="text" class="form-control" name="harga_satuan" placeholder="Harga Satuan" value=""></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <label class="col-sm-3 control-label text-right">PDN/Impor <span class="text-red"></span></label>
                                                            <div class="col-sm-8">
                                                                <select class="form-control" name="pdnimpor" id="pdnimpor">
                                                                    <option value="">-- Pilih --</option>
                                                                    <option value="PDN">PDN</option>
                                                                    <option value="impor">Impor</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row" id="keterangan">
                                                            <label class="col-sm-3 control-label text-right">Keterangan <span class="text-red"></span></label>
                                                            <div class="col-sm-8"><input type="text" class="form-control" name="keterangan" placeholder="Keterangan" value=""></div>
                                                        </div>
                                                    </div>
                                                    <script type="text/javascript">
                                                        $(function() {
                                                            $("#pdnimpor").change(function() {
                                                                if ($(this).val() == "impor") {
                                                                    $("#keterangan").show();
                                                                } else {
                                                                    $("#keterangan").hide();
                                                                }
                                                            });
                                                        });
                                                    </script>
                                                    <div class="modal-footer">
                                                        <button id="nosave" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
                                                        <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- modal insert close -->
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Spesifikasi</th>
                                            <th>Satuan</th>
                                            <th>Volume</th>
                                            <th>Harga Satuan</th>
                                            <th>Total Harga</th>
                                            <th>Pdn/Import</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($data_pengadaan as $no => $staffpengadaan1) :
                                        ?>
                                            <tr class="text-center">
                                                <td><?php echo $no + 1; ?></td>
                                                <td><?php echo $staffpengadaan1->nama_barang ?></td>
                                                <td><?php echo $staffpengadaan1->spesifikasi ?></td>
                                                <td><?php echo $staffpengadaan1->satuan ?></td>
                                                <td><?php echo $staffpengadaan1->volume ?></td>
                                                <td><?php echo $staffpengadaan1->harga_satuan ?></td>
                                                <td>
                                                    <?php $total = $staffpengadaan1->volume * $staffpengadaan1->harga_satuan;
                                                    echo $total
                                                    ?>
                                                </td>
                                                <td><?php echo $staffpengadaan1->pdnimpor ?></td>
                                                <td><?php echo $staffpengadaan1->keterangan ?></td>
                                                <td><?php echo $staffpengadaan1->nama_barang ?></td>
                                                <td>
                                                    <button data-toggle="modal" data-target="#edit<?= $staffpengadaan1->id_data ?>" class="btn btn-warning btn-sm" disabled><i class="fas fa-edit"></i></button>

                                                    <div class="modal fade" id="edit<?= $staffpengadaan1->id_data ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="<?= base_url('pengusul/editdata/' . $staffpengadaan1->id_data) ?>" method="POST"> <input hidden name="id_perencanaan" value="<?= $staffpengadaan1->id_perencanaan ?>">
                                                                        <div class="form-group">
                                                                            <label>Nama Barang</label>
                                                                            <input type="text" name="nama_barang" class="form-control" value="<?= $staffpengadaan1->nama_barang ?>">
                                                                            <?= form_error('nama_barang', '<div class="text-small text-danger">', '</div>'); ?>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Spesifikasi</label>
                                                                            <textarea name="spesifikasi" cols="20" rows="5" class="form-control"><?= $staffpengadaan1->spesifikasi ?></textarea>
                                                                            <?= form_error('spesifikasi', '<div class="text-small text-danger">', '</div>'); ?>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Satuan</label>
                                                                            <input type="text" name="satuan" class="form-control" value="<?= $staffpengadaan1->satuan ?>">
                                                                            <?= form_error('satuan', '<div class="text-small text-danger">', '</div>'); ?>
                                                                        </div>
                                                                        <div class=" form-group">
                                                                            <label>Volume</label>
                                                                            <input type="text" name="volume" class="form-control" value="<?= $staffpengadaan1->volume ?>">
                                                                            <?= form_error('volume', '<div class="text-small text-danger">', '</div>'); ?>
                                                                        </div>
                                                                        <div class=" form-group">
                                                                            <label>Harga Satuan</label>
                                                                            <input type="text" name="harga_satuan" class="form-control" value="<?= $staffpengadaan1->harga_satuan ?>">
                                                                            <?= form_error('harga_satuan', '<div class="text-small text-danger">', '</div>'); ?>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="row">
                                                                                <label class="col-sm-4 control-label">PDN/Impor <span class="text-red"></span></label>
                                                                                <div class="col-sm-8">
                                                                                    <select class="form-control" name="pdnimpor">
                                                                                        <option value="PDN">PDN</option>
                                                                                        <option value="impor">Impor</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=" form-group">
                                                                            <label>Keterangan</label>
                                                                            <input type="text" name="keterangan" class="form-control" value="<?= $staffpengadaan1->keterangan ?>">
                                                                            <?= form_error('keterangan', '<div class="text-small text-danger">', '</div>'); ?>
                                                                        </div>
                                                                        <div class=" modal-footer">
                                                                            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i>Simpan</button>
                                                                            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Reset</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button data-toggle="modal" data-target="#delete<?= $staffpengadaan1->id_data ?>" class="btn btn-danger btn-sm" disabled><i class="fas fa-trash"></i><input hidden name="id_perencanaan" value="<?= $staffpengadaan1->id_perencanaan ?>"></button>
                                                    <div class="modal fade" id="delete<?= $staffpengadaan1->id_data ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Data</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="<?= base_url('pengusul/delete/' . $staffpengadaan1->id_data) ?>" method="POST"> <input hidden name="id_perencanaan" value="<?= $staffpengadaan1->id_perencanaan ?>">
                                                                        <h5 align="center">Apakah anda yakin ingin menghapus <?php echo
                                                                                                                                $staffpengadaan1->nama_barang; ?> dari Data Permintaan Pengadaan<strong><span class="grt"></span></strong> ?</h5>
                                                                        <div class=" modal-footer">
                                                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                                                                            <button type="reset" class="btn btn-warning btn-sm"><i class="fa fa-times"></i> Reset</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



            <!-- Modal edit -->


            <!-- modal edit close -->


            <div class="row">
                <div class="card-body">

                    <!-- Area Chart -->
                    <div class="col-xl-12 col-lg-7">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Persetujuan Borang Pengadaan</h6>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header">Dropdown Header:</div>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Kepala Unit Pengusul</th>
                                                <th>ppk</th>
                                                <th>Kepala Unit Pengusul</th>
                                            </tr>
                                            <tr>
                                                <th><a href="#" class="btn btn-success btn-circle">
                                                        <i class="fas fa-check"></i>
                                                    </a></th>
                                                <th><a href="#" class="btn btn-success btn-circle">
                                                        <i class="fas fa-check"></i>
                                                    </a></th>
                                                <th><a href="#" class="btn btn-success btn-circle">
                                                        <i class="fas fa-check"></i>
                                                    </a></th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pie Chart -->
                    <div class="col-xl-12 col-lg-5">
                        <div class="card shadow mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Metode Pengadaan</h6>
                                    <button data-toggle="modal" data-target="#editfile<?= $staffpengadaan1->id_data ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> UBAH DATA</button>
                                    <div class="modal fade" id="editfile<?= $staffpengadaan1->id_data ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Metode Pengadaan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h6 class="m-0 font-weight-bold text-primary">Metode Pengadaan</h6>
                                                    <hr>
                                                    <?php echo form_open_multipart('staffpengadaan/tambahdatapengadaan/' . $staffpengadaan1->id_data); ?><input hidden name="id_perencanaan" value="<?= $staffpengadaan1->id_perencanaan ?>">
                                                    <p>
                                                    <p>
                                                    <form>

                                                        <div class="form-group">

                                                            <label>NO SPBY/SP/SPK</label><input type="text" name="nosp" class="form-control" id="nosp" placeholder="">
                                                            <label>File SPBY/SP/SPK</label><input type="file" name="filesp" class="form-control" id="filesp" placeholder="">
                                                            <label>HPS</label><input type="file" name="hps" class="form-control" id="hps" placeholder="">
                                                            <label>BAST</label><input type="file" name="bast" class="form-control" id="bast" placeholder="">

                                                        </div>

                                                        <button type="save" class="btn btn-warning btn-user btn-block">
                                                            Simpan
                                                        </button>
                                                        <?php echo form_close(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <?php echo form_open_multipart('staffpengadaan/tambahdatapengadaan'); ?><input hidden name="id_perencanaan" value="<?= $staffpengadaan1->id_perencanaan ?>">
                                    <p>
                                    <p>
                                    <form>

                                        <div class="form-group">

                                            <label>NO SPBY/SP/SPK</label><input type="text" name="nosp" class="form-control" id="nosp" value="<?= $staffpengadaan1->nosp ?>" disabled>
                                            <label>File SPBY/SP/SPK</label><input type="text" name="filesp" class="form-control" id="filesp" value="<?= $staffpengadaan1->filesp ?>" disabled>
                                            <label>HPS</label><input type="text" name="hps" class="form-control" id="hps" value="<?= $staffpengadaan1->hps ?>" disabled>
                                            <label>BAST</label><input type="text" name="bast" class="form-control" id="bast" value="<?= $staffpengadaan1->bast ?>" disabled>

                                        </div>
                                        <?php echo form_close(); ?>
                                </div>


                                <!-- Card Header - Dropdown -->

                                <!-- Card Body -->

                            </div>
                        </div>
                    </div>
                </div>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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