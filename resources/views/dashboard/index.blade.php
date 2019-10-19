<!doctype html>
<html class="no-js" lang="en">
    <head>
    //kita push ya 
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Inovasi - Smart City</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/icon-kit/dist/css/iconkit.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/ionicons/dist/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}">
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

<<<<<<< Updated upstream
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
=======
        <!-- BEGIN::Informasi Statistik Global -->
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="widget">
                    <div class="widget-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="state">
                                <h2>{{ $jumlah_inovasi }}</h2>
                                <h6>Inovasi</h6>
                            </div>
                            <div class="icon">
                                <i class="ik ik-thumbs-up"></i>
                            </div>
                        </div>
                        <small class="text-small mt-10 d-block">Dari {{ $jumlah_perangkat_daerah }} Perangkat Daerah</small>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="widget">
                    <div class="widget-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="state">
                                <h2>11</h2>
                                <h6>Usulan Inovasi</h6>
                            </div>
                            <div class="icon">
                                <i class="ik ik-thumbs-up"></i>
                            </div>
                        </div>
                        <small class="text-small mt-10 d-block">Dari Dewan Smart City</small>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="widget">
                    <div class="widget-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="state">
                                <h2>{{ $jumlah_perangkat_daerah }}</h2>
                                <h6>Perangkat Daerah</h6>
                            </div>
                            <div class="icon">
                                <i class="ik ik-help-circle"></i>
>>>>>>> Stashed changes
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
                                <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="{{ asset('assets/img/user.jpg') }}" alt=""></a>
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
                               <img src="{{ asset('assets/img/brand-white.svg.jpg') }}" class="header-brand-img" alt="ipi"> 
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
                <!-- BEGIN::Menu Utama -->

                <!-- BEGIN::Konten Utama -->
                <div class="main-content">
                    <div class="container-fluid">

<<<<<<< Updated upstream
                        <!-- BEGIN::Informasi Statistik Global -->
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h2>103</h2>
                                                <h6>Inovasi</h6>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-thumbs-up"></i>
                                            </div>
=======
        <!-- BEGIN::Baris Inovasi PD -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Inovasi Berdasarkan Perangkat Daerah</h3></div>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <!-- BEGIN::Kolom 1 Inovasi PD -->
                            <div class="col-lg-3 col-md-12">
                                <div class="row mb-15">
                                    <div class="col-9">DISKOMINFO</div>
                                    <div class="col-3 text-right"></div>
                                    <div class="col-12">
                                        <div class="progress progress-sm mt-5">
                                            <div class="progress-bar bg-green" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
>>>>>>> Stashed changes
                                        </div>
                                        <small class="text-small mt-10 d-block">Dari 38 Perangkat Daerah</small>
                                    </div>
<<<<<<< Updated upstream
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h2>11</h2>
                                                <h6>Usulan Inovasi</h6>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-thumbs-up"></i>
                                            </div>
                                        </div>
                                        <small class="text-small mt-10 d-block">Dari Dewan Smart City</small>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
=======
                                </div>

                                @foreach($ino_diskominfo as $inovasi_diskominfo)
                                <div class="row mb-15">
                                    <div class="col-9">
                                        {{ $inovasi_diskominfo->name }}
                                    </div>
                                    <div class="col-3 text-right">0%</div>
                                    <div class="col-12">
                                        <div class="progress progress-sm mt-5">
                                            <div class="progress-bar bg-aqua" role="progressbar" style="width: 0%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
>>>>>>> Stashed changes
                                    </div>
                                </div>
                                @endforeach
                            </div>
<<<<<<< Updated upstream
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h2>14</h2>
                                                <h6>Perangkat Daerah</h6>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-help-circle"></i>
                                            </div>
                                        </div>
                                        <small class="text-small mt-10 d-block">Belum Memiliki Inovasi</small>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100" style="width: 31%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h2>50</h2>
                                                <h6>Usulan</h6>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-target"></i>
                                            </div>
                                        </div>
                                        <small class="text-small mt-10 d-block">Telah Selesai 100%</small>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
=======
                            <!-- END::Kolom 1 Inovasi PD -->

                            <!-- BEGIN::Kolom 2 Inovasi PD -->
                            <div class="col-lg-3 col-md-12">
                                <div class="row mb-15">
                                    <div class="col-9">DINKES</div>
                                    <div class="col-3 text-right"></div>
                                    <div class="col-12">
                                        <div class="progress progress-sm mt-5">
                                            <div class="progress-bar bg-green" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                                @foreach($ino_diskes as $inovasi_diskes)
                                <div class="row mb-15">
                                    <div class="col-9">
                                        {{ $inovasi_diskes->name }}
                                    </div>
                                    <div class="col-3 text-right">0%</div>
                                    <div class="col-12">
                                        <div class="progress progress-sm mt-5">
                                            <div class="progress-bar bg-purple" role="progressbar" style="width: 0%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
>>>>>>> Stashed changes
                                    </div>
                                </div>
                                @endforeach
                            </div>
<<<<<<< Updated upstream
                        </div>
                        <!-- END::Informasi Statistik Global -->

                        <!-- BEGIN::Baris Keterkinian & Distribusi -->
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card" style="min-height: 422px;">
                                    <div class="card-header"><h3>Keterkinian Data Inovasi</h3></div>
                                    <div class="card-body">
                                        <div id="c3-donut-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="card">
                                    <div class="card-header"><h3>Distribusi Perkembangan</h3></div>
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="row mb-15">
                                                    <div class="col-4">Perumusan Masalah atau Kebutuhan</div>
                                                    <div class="col-2 text-right">28%</div>
                                                    <div class="col-6">
                                                        <div class="progress progress-sm mt-5">
                                                            <div class="progress-bar bg-green" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-15">
                                                    <div class="col-4">Perumusan Ide</div>
                                                    <div class="col-2 text-right">21%</div>
                                                    <div class="col-6">
                                                        <div class="progress progress-sm mt-5">
                                                            <div class="progress-bar bg-aqua" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-15">
                                                    <div class="col-4">Perencanaan Pembangunan</div>
                                                    <div class="col-2 text-right">18%</div>
                                                    <div class="col-6">
                                                        <div class="progress progress-sm mt-5">
                                                            <div class="progress-bar bg-purple" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-15">
                                                    <div class="col-4">Pembangunan</div>
                                                    <div class="col-2 text-right">12%</div>
                                                    <div class="col-6">
                                                        <div class="progress progress-sm mt-5">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-15">
                                                    <div class="col-4">Implementasi</div>
                                                    <div class="col-2 text-right">12%</div>
                                                    <div class="col-6">
                                                        <div class="progress progress-sm mt-5">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">Evaluasi</div>
                                                    <div class="col-2 text-right">12%</div>
                                                    <div class="col-6">
                                                        <div class="progress progress-sm mt-5">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END::Kolom 1 Inovasi PD -->
=======

                            <!-- END::Kolom 2 Inovasi PD -->

                            <!-- BEGIN::Kolom 3 Inovasi PD -->
                            <div class="col-lg-3 col-md-12">
                                <div class="row mb-15">
                                    <div class="col-9">DISDIK</div>
                                    <div class="col-3 text-right"></div>
                                    <div class="col-12">
                                        <div class="progress progress-sm mt-5">
                                            <div class="progress-bar bg-green" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                                @foreach($ino_disdik as $inovasi_disdik)
                                <div class="row mb-15">
                                    <div class="col-9">
                                        {{ $inovasi_disdik->name }}
                                    </div>
                                    <div class="col-3 text-right">0%</div>
                                    <div class="col-12">
                                        <div class="progress progress-sm mt-5">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
>>>>>>> Stashed changes
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- END::Baris Keterkinian & Distribusi -->

<<<<<<< Updated upstream
                        <!-- BEGIN::Baris Inovasi PD -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header"><h3>Inovasi Berdasarkan Perangkat Daerah</h3></div>
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <!-- BEGIN::Kolom 1 Inovasi PD -->
                                            <div class="col-lg-3 col-md-12">
                                                <div class="row mb-15">
                                                    <div class="col-9">DISKOMINFO</div>
                                                    <div class="col-3 text-right">28%</div>
                                                    <div class="col-12">
                                                        <div class="progress progress-sm mt-5">
                                                            <div class="progress-bar bg-green" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-15">
                                                    <div class="col-9">DINKES</div>
                                                    <div class="col-3 text-right">21%</div>
                                                    <div class="col-12">
                                                        <div class="progress progress-sm mt-5">
                                                            <div class="progress-bar bg-aqua" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-15">
                                                    <div class="col-9"> DISDIK</div>
                                                    <div class="col-3 text-right">18%</div>
                                                    <div class="col-12">
                                                        <div class="progress progress-sm mt-5">
                                                            <div class="progress-bar bg-purple" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-9">DINSOS</div>
                                                    <div class="col-3 text-right">12%</div>
                                                    <div class="col-12">
                                                        <div class="progress progress-sm mt-5">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END::Kolom 1 Inovasi PD -->

                                            <!-- BEGIN::Kolom 2 Inovasi PD -->
                                            <div class="col-lg-3 col-md-12">
                                                <div class="row mb-15">
                                                    <div class="col-9">DISKOMINFO</div>
                                                    <div class="col-3 text-right">28%</div>
                                                    <div class="col-12">
                                                        <div class="progress progress-sm mt-5">
                                                            <div class="progress-bar bg-green" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-15">
                                                    <div class="col-9">DINKES</div>
                                                    <div class="col-3 text-right">21%</div>
                                                    <div class="col-12">
                                                        <div class="progress progress-sm mt-5">
                                                            <div class="progress-bar bg-aqua" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-15">
                                                    <div class="col-9"> DISDIK</div>
                                                    <div class="col-3 text-right">18%</div>
                                                    <div class="col-12">
                                                        <div class="progress progress-sm mt-5">
                                                            <div class="progress-bar bg-purple" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-9">DINSOS</div>
                                                    <div class="col-3 text-right">12%</div>
                                                    <div class="col-12">
                                                        <div class="progress progress-sm mt-5">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END::Kolom 2 Inovasi PD -->

                                            <!-- BEGIN::Kolom 3 Inovasi PD -->
                                            <div class="col-lg-3 col-md-12">
                                                <div class="row mb-15">
                                                    <div class="col-9">DISKOMINFO</div>
                                                    <div class="col-3 text-right">28%</div>
                                                    <div class="col-12">
                                                        <div class="progress progress-sm mt-5">
                                                            <div class="progress-bar bg-green" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-15">
                                                    <div class="col-9">DINKES</div>
                                                    <div class="col-3 text-right">21%</div>
                                                    <div class="col-12">
                                                        <div class="progress progress-sm mt-5">
                                                            <div class="progress-bar bg-aqua" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-15">
                                                    <div class="col-9"> DISDIK</div>
                                                    <div class="col-3 text-right">18%</div>
                                                    <div class="col-12">
                                                        <div class="progress progress-sm mt-5">
                                                            <div class="progress-bar bg-purple" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-9">DINSOS</div>
                                                    <div class="col-3 text-right">12%</div>
                                                    <div class="col-12">
                                                        <div class="progress progress-sm mt-5">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END::Kolom 3 Inovasi PD -->

                                            <!-- BEGIN::Kolom 4 Inovasi PD -->
                                            <div class="col-lg-3 col-md-12">
                                                <div class="row mb-15">
                                                    <div class="col-9">DISKOMINFO</div>
                                                    <div class="col-3 text-right">28%</div>
                                                    <div class="col-12">
                                                        <div class="progress progress-sm mt-5">
                                                            <div class="progress-bar bg-green" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-15">
                                                    <div class="col-9">DINKES</div>
                                                    <div class="col-3 text-right">21%</div>
                                                    <div class="col-12">
                                                        <div class="progress progress-sm mt-5">
                                                            <div class="progress-bar bg-aqua" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-15">
                                                    <div class="col-9"> DISDIK</div>
                                                    <div class="col-3 text-right">18%</div>
                                                    <div class="col-12">
                                                        <div class="progress progress-sm mt-5">
                                                            <div class="progress-bar bg-purple" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-9">DINSOS</div>
                                                    <div class="col-3 text-right">12%</div>
                                                    <div class="col-12">
                                                        <div class="progress progress-sm mt-5">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END::Kolom 4 Inovasi PD -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END::Baris Inovasi PD -->

                        <!-- BEGIN::Tabel Data Inovasi -->
                        <div class="card">
                            <div class="card-header row">
                                <div class="col col-sm-3">
                                    <div class="card-options d-inline-block">
                                        <a href="#"><i class="ik ik-inbox"></i></a>
                                        <a href="#"><i class="ik ik-plus"></i></a>
                                        <a href="#"><i class="ik ik-rotate-cw"></i></a>
                                        <div class="dropdown d-inline-block">
                                            <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-more-horizontal"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="moreDropdown">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">More Action</a>
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
=======
                            <!-- BEGIN::Kolom 4 Inovasi PD -->
                            <div class="col-lg-3 col-md-12">
                                <div class="row mb-15">
                                    <div class="col-9">DIKARPUS</div>
                                    <div class="col-3 text-right"></div>
                                    <div class="col-12">
                                        <div class="progress progress-sm mt-5">
                                            <div class="progress-bar bg-green" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                                @foreach($ino_diskarpus as $inovasi_diskarpus)
                                <div class="row mb-15">
                                    <div class="col-9">
                                        {{ $inovasi_diskarpus->name }}
                                    </div>
                                    <div class="col-3 text-right">0%</div>
                                    <div class="col-12">
                                        <div class="progress progress-sm mt-5">
                                            <div class="progress-bar bg-blue" role="progressbar" style="width: 0%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
>>>>>>> Stashed changes
                                    </div>
                                </div>
                                @endforeach
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
                                            <td>Pembangunan Sistem Manajemen Inovasi Smart City</td>
                                            <td>DISKOMINFO</td>
                                            <td>Tahapan 5</td>
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
                                            <td>Pembangunan Pemesanan Online Space Room</td>
                                            <td>DISKOMINFO</td>
                                            <td>Tahapan 3</td>
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
                                        <input type="text" id="quick-search" class="form-control" placeholder="Pencarian" />
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

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
