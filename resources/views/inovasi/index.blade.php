<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Inovasi - Smart City</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="../favicon.ico" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/icon-kit/dist/css/iconkit.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/ionicons/dist/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/select2/dist/css/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/dist/summernote-bs4.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/mohithg-switchery/dist/switchery.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/weather-icons/css/weather-icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/c3/c3.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/owl.carousel/dist/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/owl.carousel/dist/assets/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/dist/css/theme.min.css') }}">
        <script src="{{ asset('assets/src/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- BEGIN::Wrapper Utama -->
        <div class="wrapper">

            <!-- BEGIN::Header -->
            <header class="header-top" header-theme="light">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <div class="top-menu d-flex align-items-center">
                            <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                            <div class="header-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close"><i class="ik ik-x"></i></span>
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon search-btn"><i class="ik ik-search"></i></span>
                                </div>
                            </div>
                            <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button>
                        </div>

                        <div class="top-menu d-flex align-items-center">

                            <!-- BEGIN::Tombol Ikon Fitur Kelola Sistem -->
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-plus"></i></a>
                                <div class="dropdown-menu dropdown-menu-right menu-grid" aria-labelledby="menuDropdown">
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Dashboard"><i class="ik ik-bar-chart-2"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Message"><i class="ik ik-mail"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Accounts"><i class="ik ik-users"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Sales"><i class="ik ik-shopping-cart"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Purchase"><i class="ik ik-briefcase"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Pages"><i class="ik ik-clipboard"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Chats"><i class="ik ik-message-square"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Contacts"><i class="ik ik-map-pin"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Blocks"><i class="ik ik-inbox"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Events"><i class="ik ik-calendar"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Notifications"><i class="ik ik-bell"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="More"><i class="ik ik-more-horizontal"></i></a>
                                </div>
                            </div>
                            <!-- END::Tombol Ikon Fitur Kelola Sistem -->

                            <!-- BEGIN::Tombol Modal Fitur Kelola Sistem -->
                            <button type="button" class="nav-link ml-10" id="apps_modal_btn" data-toggle="modal" data-target="#appsModal"><i class="ik ik-grid"></i></button>
                            <!-- END::Tombol Modal Fitur Kelola Sistem -->

                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="../img/user.jpg" alt=""></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="profile.html"><i class="ik ik-user dropdown-icon"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="ik ik-settings dropdown-icon"></i> Settings</a>
                                    <a class="dropdown-item" href="#"><span class="float-right"><span class="badge badge-primary">6</span></span><i class="ik ik-mail dropdown-icon"></i> Inbox</a>
                                    <a class="dropdown-item" href="#"><i class="ik ik-navigation dropdown-icon"></i> Message</a>
                                    <a class="dropdown-item" href="login.html"><i class="ik ik-power dropdown-icon"></i> Logout</a>
                                </div>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </header>
            <!-- END::Header -->

            <!-- BEGIN::Halaman -->
            <div class="page-wrap">

                <!-- BEGIN::Menu Utama -->
                <div class="app-sidebar colored">
                    <div class="sidebar-header">
                        <a class="header-brand" href="index.html">
                            <div class="logo-img">
                               <img src="../src/img/brand-white.svg" class="header-brand-img" alt="ipi"> 
                            </div>
                            <span class="text">Inovasi SC</span>
                        </a>
                        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                    </div>
                    
                    <div class="sidebar-content">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">
                                <div class="nav-lavel">Navigasi</div>
                                <div class="nav-item active">
                                    <a href="dashboard"><i class="ik ik-bar-chart-2"></i><span>Dasbor</span></a>
                                </div>
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-aperture"></i><span>Inovasi</span> <span class="badge badge-danger">150+</span></a>
                                    <div class="submenu-content">
                                        <a href="inovasi" class="menu-item">Data Inovasi</a>
                                        <a href="tambah-inovasi" class="menu-item">Tambah Inovasi</a>
                                    </div>
                                </div>
                                <div class="nav-lavel">Bantuan</div>
                                <div class="nav-item">
                                    <a href="javascript:void(0)"><i class="ik ik-monitor"></i><span>Dokumentasi</span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="javascript:void(0)"><i class="ik ik-help-circle"></i><span>Keluhan</span></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- END::Menu Utama -->

                <!-- BEGIN::Konten Utama -->
                <div class="main-content">
                    <div class="container-fluid">
                        <!-- BEGIN::Header & Breadcrumb -->
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-aperture bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Kelola</h5>
                                            <span>Halaman kelola Data Inovasi</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="../index.html"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#">Kelola</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Data Inovasi</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- END::Header & Breadcrumb -->

                        <!-- BEGIN::Tabel Data Inovasi -->
                        <div class="card">
                            <div class="card-header row">
                                <div class="col col-sm-3">
                                    <div class="card-options d-inline-block">
                                        <!-- <a href="#" data-toggle="modal" data-target="#fullwindowModal"><i class="ik ik-plus"></i></a> -->
                                        <a href="add-innovation.html"><i class="ik ik-plus"></i></a>
                                        <a href="#"><i class="ik ik-rotate-cw"></i></a>
                                        <div class="dropdown d-inline-block">
                                            <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-more-horizontal"></i></a>
                                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="moreDropdown">
                                                <a class="dropdown-item" href="#">Ubah</a>
                                                <a class="dropdown-item" href="#">Hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-sm-6">
                                    <div class="card-search with-adv-search dropdown">
                                        <form action="">
                                            <input type="text" class="form-control global_filter" id="global_filter" placeholder="Pencarian" required>
                                            <button type="submit" class="btn btn-icon"><i class="ik ik-search"></i></button>
                                            <button type="button" id="adv_wrap_toggler" class="adv-btn ik ik-chevron-down dropdown-toggle" data-toggle="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                            <div class="adv-search-wrap dropdown-menu dropdown-menu-right" aria-labelledby="adv_wrap_toggler">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control column_filter" id="col0_filter" placeholder="Inovasi" data-column="0">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control column_filter" id="col1_filter" placeholder="Perangkat Daerah/Dewan Smart City" data-column="1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control column_filter" id="col2_filter" placeholder="Tahun" data-column="2">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control column_filter" id="col3_filter" placeholder="Bulan" data-column="3">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-theme">Cari</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col col-sm-3">
                                    <div class="card-options text-right">
                                        <span class="mr-5" id="top">1 - 50 of 2,500</span>
                                        <a href="#"><i class="ik ik-chevron-left"></i></a>
                                        <a href="#"><i class="ik ik-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="advanced_table" class="table">
                                    <thead>
                                        <tr>
                                            <th class="nosort" width="10">
                                                <label class="custom-control custom-checkbox m-0">
                                                    <input type="checkbox" class="custom-control-input" id="selectall" name="" value="option2">
                                                    <span class="custom-control-label">&nbsp;</span>
                                                </label>
                                            </th>
                                            <th class="nosort">Inovasi</th>
                                            <th>Perangkat Daerah</th>
                                            <th>Tahapan</th>
                                            <th>Progres</th>
                                            <th>Total Progres</th>
                                            <th>Tanggal Buat</th>
                                            <th>Tanggal Ubah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
                                                    <span class="custom-control-label">&nbsp;</span>
                                                </label>
                                            </td>
                                            <td><a href="detail-innovation.html">Pembangunan Sistem Manajemen Inovasi Smart City</a></td>
                                            <td>DISKOMINFO</td>
                                            <td>Implementasi</td>
                                            <td>50%</td>
                                            <td>70%</td>
                                            <td>22/07/2019</td>
                                            <td>22/07/2019</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
                                                    <span class="custom-control-label">&nbsp;</span>
                                                </label>
                                            </td>
                                            <td><a href="detail-innovation.html">Pembangunan Pemesanan Online Space Room</a></td>
                                            <td>DISKOMINFO</td>
                                            <td>Perencanaan Pembangunan</td>
                                            <td>50%</td>
                                            <td>40%</td>
                                            <td>22/07/2019</td>
                                            <td>22/07/2019</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END::Tabel Data Inovasi -->

                    </div>
                </div>
                <!-- END::Konten Utama -->

                <!-- BEGIN::Footer -->
                <footer class="footer">
                    <div class="w-100 clearfix">
                        <span class="text-center text-sm-left d-md-inline-block">Inovasi Smart City Copyright © 2019 Kota Depok.</span>
                        <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Created DISKOMINFO Kota Depok</span>
                    </div>
                </footer>
                <!-- END::Footer -->
                
            </div>
            <!-- END::Halaman -->

        </div>
        <!-- END::Wrapper Utama -->

        <!-- BEGIN::Modal Layar Penuh -->
        <div class="modal fade full-window-modal" id="fullwindowModal" tabindex="-1" role="dialog" aria-labelledby="fullwindowModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-dark text-white">
                        <h5 class="modal-title" id="fullwindowModalLabel">Tambah Data Inovasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <!-- BEGIN::Tab Menu -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
                            <div class="card">
                                <div class="card-header pills-regular">
                                    <ul class="nav nav-pills card-header-pills" id="myTab2" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="card-pills-1" data-toggle="tab" href="#card-pill-1" role="tab" aria-controls="card-1" aria-selected="true"><h6>Inovasi Perangkat Daerah</h6></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="card-pills-2" data-toggle="tab" href="#card-pill-2" role="tab" aria-controls="card-2" aria-selected="false"><h6>Usulan Dewan Smart City</h6></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="myTabContent2">
                                        <div class="tab-pane fade show active" id="card-pill-1" role="tabpanel" aria-labelledby="card-tab-1">
                                            <div class="col-md-12">
                                                <form class="forms-sample">

                                                    <!-- BEGIN::Nama Inovasi -->
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <label for="namaInovasi">Nama Singkat Inovasi</label>
                                                                <input type="text" class="form-control" id="namaInovasi" placeholder="Nama Singkat Inovasi yang Diajukan">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="perangkatDaerah">Perangkat Daerah</label>
                                                                <select class="form-control" id="perangkatDaerah">
                                                                    <option value="1">DISKOMINFO</option>
                                                                    <option value="2">DINKES</option>
                                                                    <option value="3">DISDIK</option>
                                                                    <option value="4">DISKARPUS</option>
                                                                    <option value="5">DISPORYATA</option>
                                                                    <option value="6">DPMPTSP</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END::Nama Inovasi -->

                                                    <!-- BEGIN::Jenis dan Pilar Inovasi -->
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="jenisInovasi">Jenis Inovasi</label>
                                                                <select class="form-control" id="jenisInovasi">
                                                                    <option value="1">Program</option>
                                                                    <option value="2">Produk</option>
                                                                    <option value="3">Metode</option>
                                                                    <option value="4">Konseptual</option>
                                                                    <option value="5">Teknologi</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="pilarInovasi">Pilar Smart City</label>
                                                                <select class="form-control" id="pilarInovasi">
                                                                    <option value="1">Smart Governance</option>
                                                                    <option value="2">Smart Branding</option>
                                                                    <option value="3">Smart Economy</option>
                                                                    <option value="4">Smart Living</option>
                                                                    <option value="5">Smart Society</option>
                                                                    <option value="6">Smart Environment</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END::Jenis dan Pilar Inovasi -->
    
                                                    <!-- BEGIN::Status, Progres, Keterangan -->
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="statusInovasi">Status Inovasi</label>
                                                                <select class="form-control" id="statusInovasi">
                                                                    <option value="1">Perumusan Masalah atau Kebutuhan</option>
                                                                    <option value="2">Perumusan Ide</option>
                                                                    <option value="3">Perencanaan Pembangunan</option>
                                                                    <option value="4">Pembangunan</option>
                                                                    <option value="5">Implementasi</option>
                                                                    <option value="6">Evaluasi</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <label>Unggah File</label>
                                                                <input type="file" name="img[]" class="file-upload-default">
                                                                <div class="input-group col-xs-12">
                                                                    <input type="text" class="form-control file-upload-info" disabled placeholder="File">
                                                                    <span class="input-group-append">
                                                                    <button class="file-upload-browse btn btn-primary" type="button">Unggah</button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <label for="progresInovasi">Progres Inovasi (%)</label>
                                                                <input required="" type="number" min="0" max="100" placeholder="0-100" class="form-control" id="progresInovasi">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="keteranganStatus">Keterangan</label>
                                                                <textarea class="form-control" id="keteranganStatus" rows="3" placeholder="Keterangan mengenai status tahapan Inovasi"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END::Status, Progres, Keterangan -->
    
                                                    <!-- BEGIN::Penjelasan Manfaat Keunikan Inovasi -->
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="penjelasanInovasi">Penjelasan Singkat Inovasi</label>
                                                                <textarea class="form-control" id="penjelasanInovasi" rows="3" placeholder="Penjelasan mengenai inovasi yang dapat dipahami dengan baik"></textarea>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="manfaatInovasi">Manfaat Inovasi</label>
                                                                <textarea class="form-control" id="manfaatInovasi" rows="3" placeholder="Manfaat Inovasi ini bagi Penyelenggara, Pemerintah dan Masyarakat"></textarea>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="keunikanInovasi">Keunikan/Kreativitas Inovasi</label>
                                                                <textarea class="form-control" id="keunikanInovasi" rows="3" placeholder="Keunggulan dan keunikan Inovasi"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END::Penjelasan Manfaat Keunikan Inovasi -->
    
                                                    <!-- BEGIN::Mitra Inovasi -->
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <!-- Repeater Html Start -->
                                                                <div id="repeater">
                                                                    <!-- Repeater Heading -->
                                                                    <div class="repeater-heading">
                                                                        <h5 class="float-left">Kemitraan</h5>
                                                                        <button class="btn btn-primary pt-5 float-right repeater-add-btn">
                                                                            Tambah Form
                                                                        </button>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <!-- Repeater Items -->
                                                                    <div class="items" data-group="test">
                                                                        <!-- Repeater Content -->
                                                                        <div class="item-content">
                                                                            <div class="form-group">
                                                                                <label for="bentukMitra" class="col-lg-2 col-md-2 control-label">Bentuk Mitra</label>
                                                                                <div class="col-lg-10 col-md-10">
                                                                                    <input type="text" class="form-control" id="bentukMitra" placeholder="Bentuk Mitra yang Melakukan Kerjasama" data-name="bentuk">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="namaMitra" class="col-lg-2 control-label">Nama Mitra</label>
                                                                                <div class="col-lg-10">
                                                                                    <input type="text" class="form-control" id="namaMitra" placeholder="Nama Mitra yang Melakukan Kerjasama" data-name="nama">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Repeater Remove Btn -->
                                                                        <div class="float-right repeater-remove-btn">
                                                                            <button class="btn btn-danger remove-btn">
                                                                                Hapus Form
                                                                            </button>
                                                                        </div>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                </div>
                                                                <!-- Repeater End -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END::Mitra Inovasi -->
    
                                                    <!-- BEGIN::Potensi Strategi Analisis Inovasi -->
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="potensiPengembangan">Potensi Pengembangan Inovasi</label>
                                                                <textarea class="form-control" id="potensiPengembangan" rows="3" placeholder="Kemungkinan perluasan, peningkatan, replikasi"></textarea>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="strategiKeberlangsungan">Strategi Menjaga Keberlangsungan</label>
                                                                <textarea class="form-control" id="strategiKeberlangsungan" rows="3" placeholder="Upaya memastikan keberlangsungan (regulasi, kelembagaan, penyediaan sumber daya, dan model bisnis)"></textarea>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="analisisRisiko">Analisis Risiko</label>
                                                                <textarea class="form-control" id="analisisRisiko" rows="3" placeholder="Dampak yang perlu diantisipasi, hambatan, dan potensi kegagalan"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END::Potensi Strategi Analisis Inovasi -->
    
                                                    <!-- BEGIN::Sumber Tahun Pilar Inovasi -->
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="potensiPengembangan">Sumber Daya yang Digunakan</label>
                                                                <textarea class="form-control" id="potensiPengembangan" rows="3" placeholder="Anggaran, tenaga kerja, fasilitas dan sumber daya yang diperlukan (berapa dan berasal dari mana)"></textarea>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="strategiKeberlangsungan">Strategi Menjaga Keberlangsungan</label>
                                                                <textarea class="form-control" id="strategiKeberlangsungan" rows="3" placeholder="Upaya memastikan keberlangsungan (regulasi, kelembagaan, penyediaan sumber daya, dan model bisnis)"></textarea>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="analisisRisiko">Analisis Risiko</label>
                                                                <textarea class="form-control" id="analisisRisiko" rows="3" placeholder="Dampak yang perlu diantisipasi, hambatan, dan potensi kegagalan"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END::Sumber Tahun Pilar Inovasi -->
    
                                                    <!-- BEGIN::Tombol Simpan & Ulang -->
                                                    <button type="submit" class="btn btn-primary btn-lg btn-block mt-4 mb-4">SIMPAN DATA</button>
                                                    <!-- BEGIN::Tombol Simpan & Ulang -->
                                                </form>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="card-pill-2" role="tabpanel" aria-labelledby="card-tab-2">
                                            <div class="col-md-12">
                                                <form class="forms-sample">

                                                    <!-- BEGIN::Nama Inovasi -->
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <label for="namaInovasi">Nama Singkat Inovasi</label>
                                                                <input type="text" class="form-control" id="namaInovasi" placeholder="Nama Singkat Inovasi yang Diajukan">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="dewanSc">Dewan Smart City</label>
                                                                <select class="form-control" id="dewanSc">
                                                                    <option value="1">Pemerintah Kota Depok</option>
                                                                    <option value="2">Universitas Indonesia</option>
                                                                    <option value="3">Universitas Gunadarma</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- BEGIN::Nama Inovasi -->

                                                    <!-- BEGIN::Jenis dan Pilar Inovasi -->
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="jenisInovasi">Jenis Inovasi</label>
                                                                <select class="form-control" id="jenisInovasi">
                                                                    <option value="1">Program</option>
                                                                    <option value="2">Produk</option>
                                                                    <option value="3">Metode</option>
                                                                    <option value="4">Konseptual</option>
                                                                    <option value="5">Teknologi</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="pilarInovasi">Pilar Smart City</label>
                                                                <select class="form-control" id="pilarInovasi">
                                                                    <option value="1">Smart Governance</option>
                                                                    <option value="2">Smart Branding</option>
                                                                    <option value="3">Smart Economy</option>
                                                                    <option value="4">Smart Living</option>
                                                                    <option value="5">Smart Society</option>
                                                                    <option value="6">Smart Environment</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END::Jenis dan Pilar Inovasi -->
    
                                                    <!-- BEGIN::Status, Progres, Keterangan -->
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="statusInovasi">Status Inovasi</label>
                                                                <select class="form-control" id="statusInovasi">
                                                                    <option value="1">Perumusan Masalah atau Kebutuhan</option>
                                                                    <option value="2">Perumusan Ide</option>
                                                                    <option value="3">Perencanaan Pembangunan</option>
                                                                    <option value="4">Pembangunan</option>
                                                                    <option value="5">Implementasi</option>
                                                                    <option value="6">Evaluasi</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <label>Unggah File</label>
                                                                <input type="file" name="img[]" class="file-upload-default">
                                                                <div class="input-group col-xs-12">
                                                                    <input type="text" class="form-control file-upload-info" disabled placeholder="File">
                                                                    <span class="input-group-append">
                                                                    <button class="file-upload-browse btn btn-primary" type="button">Unggah</button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <label for="progresInovasi">Progres Inovasi (%)</label>
                                                                <input required="" type="number" min="0" max="100" placeholder="0-100" class="form-control" id="progresInovasi">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="keteranganStatus">Keterangan</label>
                                                                <textarea class="form-control" id="keteranganStatus" rows="3" placeholder="Keterangan mengenai status tahapan Inovasi"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- BEGIN::Status, Progres, Keterangan -->
    
                                                    <!-- BEGIN::Penjelasan Manfaat Keunikan Inovasi -->
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="penjelasanInovasi">Penjelasan Singkat Inovasi</label>
                                                                <textarea class="form-control" id="penjelasanInovasi" rows="3" placeholder="Penjelasan mengenai inovasi yang dapat dipahami dengan baik"></textarea>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="manfaatInovasi">Manfaat Inovasi</label>
                                                                <textarea class="form-control" id="manfaatInovasi" rows="3" placeholder="Manfaat Inovasi ini bagi Penyelenggara, Pemerintah dan Masyarakat"></textarea>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="keunikanInovasi">Keunikan/Kreativitas Inovasi</label>
                                                                <textarea class="form-control" id="keunikanInovasi" rows="3" placeholder="Keunggulan dan keunikan Inovasi"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END::Penjelasan Manfaat Keunikan Inovasi -->
    
                                                    <!-- BEGIN::Mitra Inovasi -->
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <!-- Repeater Html Start -->
                                                                <div id="repeater">
                                                                    <!-- Repeater Heading -->
                                                                    <div class="repeater-heading">
                                                                        <h5 class="float-left">Kemitraan</h5>
                                                                        <button class="btn btn-primary pt-5 float-right repeater-add-btn">
                                                                            Tambah Form
                                                                        </button>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <!-- Repeater Items -->
                                                                    <div class="items" data-group="test">
                                                                        <!-- Repeater Content -->
                                                                        <div class="item-content">
                                                                            <div class="form-group">
                                                                                <label for="bentukMitra" class="col-lg-2 col-md-2 control-label">Bentuk Mitra</label>
                                                                                <div class="col-lg-10 col-md-10">
                                                                                    <input type="text" class="form-control" id="bentukMitra" placeholder="Bentuk Mitra yang Melakukan Kerjasama" data-name="bentuk">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="namaMitra" class="col-lg-2 control-label">Nama Mitra</label>
                                                                                <div class="col-lg-10">
                                                                                    <input type="text" class="form-control" id="namaMitra" placeholder="Nama Mitra yang Melakukan Kerjasama" data-name="nama">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Repeater Remove Btn -->
                                                                        <div class="float-right repeater-remove-btn">
                                                                            <button class="btn btn-danger remove-btn">
                                                                                Hapus Form
                                                                            </button>
                                                                        </div>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                </div>
                                                                <!-- Repeater End -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END::Mitra Inovasi -->
    
                                                    <!-- BEGIN::Potensi Strategi Analisis Inovasi -->
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="potensiPengembangan">Potensi Pengembangan Inovasi</label>
                                                                <textarea class="form-control" id="potensiPengembangan" rows="3" placeholder="Kemungkinan perluasan, peningkatan, replikasi"></textarea>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="strategiKeberlangsungan">Strategi Menjaga Keberlangsungan</label>
                                                                <textarea class="form-control" id="strategiKeberlangsungan" rows="3" placeholder="Upaya memastikan keberlangsungan (regulasi, kelembagaan, penyediaan sumber daya, dan model bisnis)"></textarea>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="analisisRisiko">Analisis Risiko</label>
                                                                <textarea class="form-control" id="analisisRisiko" rows="3" placeholder="Dampak yang perlu diantisipasi, hambatan, dan potensi kegagalan"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END::Potensi Strategi Analisis Inovasi -->
    
                                                    <!-- BEGIN::Sumber Tahun Pilar Inovasi -->
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="potensiPengembangan">Sumber Daya yang Digunakan</label>
                                                                <textarea class="form-control" id="potensiPengembangan" rows="3" placeholder="Anggaran, tenaga kerja, fasilitas dan sumber daya yang diperlukan (berapa dan berasal dari mana)"></textarea>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="strategiKeberlangsungan">Strategi Menjaga Keberlangsungan</label>
                                                                <textarea class="form-control" id="strategiKeberlangsungan" rows="3" placeholder="Upaya memastikan keberlangsungan (regulasi, kelembagaan, penyediaan sumber daya, dan model bisnis)"></textarea>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="analisisRisiko">Analisis Risiko</label>
                                                                <textarea class="form-control" id="analisisRisiko" rows="3" placeholder="Dampak yang perlu diantisipasi, hambatan, dan potensi kegagalan"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END::Sumber Tahun Pilar Inovasi -->
    
                                                    <!-- BEGIN::Tombol Simpan & Ulang -->
                                                    <button type="submit" class="btn btn-primary btn-lg btn-block mt-4 mb-4">SIMPAN DATA</button>
                                                    <!-- BEGIN::Tombol Simpan & Ulang -->
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END::Tab Menu -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END::Modal Layar Penuh -->
        
        <!-- BEGIN::Modal Fitur Kelola Sistem -->
        <div class="modal fade apps-modal" id="appsModal" tabindex="-1" role="dialog" aria-labelledby="appsModalLabel" aria-hidden="true" data-backdrop="false">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ik ik-x-circle"></i></button>
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="quick-search">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 ml-auto mr-auto">
                                    <div class="input-wrap">
                                        <input type="text" id="quick-search" class="form-control" placeholder="Search..." />
                                        <i class="ik ik-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="container">
                            <div class="apps-wrap">
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                                </div>
                                <div class="app-item dropdown">
                                    <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-command"></i><span>Ui</span></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-mail"></i><span>Message</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-users"></i><span>Accounts</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-shopping-cart"></i><span>Sales</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-briefcase"></i><span>Purchase</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-server"></i><span>Menus</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-clipboard"></i><span>Pages</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-message-square"></i><span>Chats</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-map-pin"></i><span>Contacts</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-box"></i><span>Blocks</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-calendar"></i><span>Events</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-bell"></i><span>Notifications</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-pie-chart"></i><span>Reports</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-layers"></i><span>Tasks</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-edit"></i><span>Blogs</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-settings"></i><span>Settings</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-more-horizontal"></i><span>More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END::Modal Fitur Kelola Sistem -->
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{ asset('assets/src/js/vendor/jquery-3.3.1.min.js') }}"><\/script>')</script>
        <script src="{{ asset('assets/plugins/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/select2/dist/js/select2.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/summernote/dist/summernote-bs4.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/form-fields-repeater/repeater.js') }}"></script>
        <script src="{{ asset('assets/plugins/mohithg-switchery/dist/switchery.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/screenfull/dist/screenfull.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js') }}"></script>
        <script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
        <script src="{{ asset('assets/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/d3/dist/d3.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/c3/c3.min.js') }}"></script>
        <script src="{{ asset('assets/js/tables.js') }}"></script>
        <script src="{{ asset('assets/js/widgets.js') }}"></script>
        <script src="{{ asset('assets/js/charts.js') }}"></script>
        <script src="{{ asset('assets/dist/js/theme.min.js') }}"></script>
        <script src="{{ asset('assets/js/form-components.js') }}"></script>
        <script src="{{ asset('assets/js/form-advanced.js') }}"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

        <!-- BEGIN::Repeater -->
        <script>
            $("#repeater").createRepeater({
                showFirstItemToDefault: true,
            });
        </script>
        <!-- END::Repeater -->
    </body>
</html>