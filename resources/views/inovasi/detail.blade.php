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
                               <img src="{{asset('assets/src/img/brand-white.svg')}}" class="header-brand-img" alt="ipi">
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
                                <div class="nav-item ">
                                    <a href="/dashboard"><i class="ik ik-bar-chart-2"></i><span>Dasbor</span></a>
                                </div>
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-aperture"></i><span>Inovasi</span> <span class="badge badge-danger">150+</span></a>
                                    <div class="submenu-content active">
                                        <a href="/inovasi" class="menu-item ">Data Inovasi</a>
                                        <a href="/tambah-inovasi" class="menu-item">Tambah Inovasi</a>
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
                                                <a href="/dashboard"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="/inovasi">Kelola</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Detail Inovasi</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- END::Header & Breadcrumb -->

                        <!-- BEGIN::Tab Menu -->
                        <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5"> -->
                            <div class="card">
                                <div class="card-header">
                                    DETAIL DATA INOVASI
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="myTabContent2">

                                            <div class="col-md-12">
                                                <form class="forms-sample" action="status-innovation.html">

                                                    <!-- BEGIN::Nama Inovasi -->
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <label for="namaInovasi">Nama Singkat Inovasi</label>
                                                                <input type="text" class="form-control" id="namaInovasi" value="{{ $detail_info->name }}" disabled>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="perangkatDaerah">Perangkat Daerah</label>
                                                                <select class="form-control" id="perangkatDaerah" disabled>
                                                                    <option value="{{$detail_info->institute->short_name}}" >{{$detail_info->institute->short_name}}</option>
                                                                    <!-- <option value="2">DINKES</option>
                                                                    <option value="3">DISDIK</option>
                                                                    <option value="4">DISKARPUS</option>
                                                                    <option value="5">DISPORYATA</option>
                                                                    <option value="6">DPMPTSP</option> -->
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
                                                                <select class="form-control" id="jenisInovasi" disabled>
                                                                    <!-- <option value="1">Program</option> -->

                                                                    <option value="">{{$detail_info->Type->name}}</option>
                                                                    <!-- <option value="3">Metode</option>
                                                                    <option value="4">Konseptual</option>
                                                                    <option value="5">Teknologi</option> -->
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="pilarInovasi">Pilar Smart City</label>
                                                                <select class="form-control" id="pilarInovasi" disabled>
                                                                    <option value="">{{$detail_info->Pilar->name}}</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END::Jenis dan Pilar Inovasi -->

                                                    <!-- BEGIN::Status, Progres, Keterangan -->
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="statusInovasi">Status Inovasi</label>
                                                                <select class="form-control" id="statusInovasi" disabled>
                                                                    <!-- <option value="1">Perumusan Masalah atau Kebutuhan</option>
                                                                    <option value="2">Perumusan Ide</option>
                                                                    <option value="3">Perencanaan Pembangunan</option>
                                                                    <option value="4">Pembangunan</option> -->
                                                                    @foreach($detail_info->innovation_step as $ino_step)
                                                                        <option value="">{{$ino_step->step->name}}</option>
                                                                    @endforeach

                                                                    <!-- <option value="6">Evaluasi</option> -->
                                                                </select>
                                                            </div>
                                                            <!-- <div class="col-md-2">
                                                                <label>Unggah File</label>
                                                                <input type="file" name="img[]" class="file-upload-default">
                                                                <div class="input-group col-xs-12">
                                                                    <input type="text" class="form-control file-upload-info" disabled placeholder="File">
                                                                    <span class="input-group-append">
                                                                    <button class="file-upload-browse btn btn-primary" type="button">Unggah</button>
                                                                    </span>
                                                                </div>
                                                            </div> -->
                                                            <div class="col-md-2">
                                                                <label for="progresInovasi">Progres Inovasi (%)</label>
                                                                <input type="text" class="form-control" id="progresInovasi" placeholder="50%" disabled>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="keteranganStatus">Keterangan</label>
                                                                <textarea class="form-control" id="keteranganStatus" rows="3" placeholder="Aplikasi ini masih dalam tahap uji coba" disabled></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END::Status, Progres, Keterangan -->

                                                    <!-- BEGIN::Penjelasan Manfaat Keunikan Inovasi -->
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="penjelasanInovasi">Penjelasan Singkat Inovasi</label>
                                                                <textarea class="form-control" id="penjelasanInovasi" rows="3" placeholder="{{$detail_info->description}}" disabled></textarea>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="manfaatInovasi">Manfaat Inovasi</label>
                                                                <textarea class="form-control" id="manfaatInovasi" rows="3" placeholder="{{$detail_info->benefit}}" disabled></textarea>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="keunikanInovasi">Keunikan/Kreativitas Inovasi</label>
                                                                <textarea class="form-control" id="keunikanInovasi" rows="3" placeholder="{{$detail_info->unique_creativity}}" disabled></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END::Penjelasan Manfaat Keunikan Inovasi -->

                                                    <!-- BEGIN::Mitra Inovasi -->
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="namaInovasi">Bentuk Mitra</label>
                                                                <input type="text" class="form-control" id="bentukMitra" placeholder="Perusahaan (PT)" disabled>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="perangkatDaerah">Nama Mitra</label>
                                                                <input type="text" class="form-control" id="namaMitra" placeholder="PPV" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END::Mitra Inovasi -->

                                                    <!-- BEGIN::Potensi Strategi Analisis Inovasi -->
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="potensiPengembangan">Potensi Pengembangan Inovasi</label>
                                                                <textarea class="form-control" id="potensiPengembangan" rows="3" placeholder="{{$detail_info->potency}}" disabled></textarea>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="strategiKeberlangsungan">Strategi Menjaga Keberlangsungan</label>
                                                                <textarea class="form-control" id="strategiKeberlangsungan" rows="3" placeholder="{{$detail_info->strategy}}" disabled></textarea>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="analisisRisiko">Analisis Risiko</label>
                                                                <textarea class="form-control" id="analisisRisiko" rows="3" placeholder="{{$detail_info->risk_analysis}}" disabled></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END::Potensi Strategi Analisis Inovasi -->

                                                    <!-- BEGIN::Sumber Tahun Pilar Inovasi -->
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label for="potensiPengembangan">Sumber Daya yang Digunakan</label>
                                                                <textarea class="form-control" id="potensiPengembangan" rows="3" placeholder="{{$detail_info->resource}}" disabled></textarea>
                                                            </div>
                                                            <!-- <div class="col-md-4">
                                                                <label for="strategiKeberlangsungan">Strategi Menjaga Keberlangsungan</label>
                                                                <textarea class="form-control" id="strategiKeberlangsungan" rows="3" placeholder="Upaya memastikan keberlangsungan (regulasi, kelembagaan, penyediaan sumber daya, dan model bisnis)"></textarea>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="analisisRisiko">Analisis Risiko</label>
                                                                <textarea class="form-control" id="analisisRisiko" rows="3" placeholder="Dampak yang perlu diantisipasi, hambatan, dan potensi kegagalan"></textarea>
                                                            </div> -->
                                                        </div>
                                                    </div>

                                                    <!-- END::Sumber Tahun Pilar Inovasi -->

                                                    <!-- BEGIN::Tombol Simpan & Ulang -->
                                                    <button type="submit" class="btn btn-primary btn-lg btn-block mt-4 mb-4">MEMPERBARUI DATA STATUS</button>
                                                    <!-- BEGIN::Tombol Simpan & Ulang -->
                                                </form>
                                            </div>


                                    </div>
                                </div>
                            </div>
                        <!-- </div> -->
                        <!-- END::Tab Menu -->

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
