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
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dashboard"><i class="ik ik-bar-chart-2"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Message"><i class="ik ik-mail"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Accounts"><i class="ik ik-users"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sales"><i class="ik ik-shopping-cart"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Purchase"><i class="ik ik-briefcase"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pages"><i class="ik ik-clipboard"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chats"><i class="ik ik-message-square"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Contacts"><i class="ik ik-map-pin"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Blocks"><i class="ik ik-inbox"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Events"><i class="ik ik-calendar"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Notifications"><i class="ik ik-bell"></i></a>
                                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="More"><i class="ik ik-more-horizontal"></i></a>
                                </div>
                            </div>
                            <!-- END::Tombol Ikon Fitur Kelola Sistem -->

                            <!-- BEGIN::Tombol Modal Fitur Kelola Sistem -->
                            <button type="button" class="nav-link ml-10" id="apps_modal_btn" data-toggle="modal" data-target="#appsModal"><i class="ik ik-grid"></i></button>
                            <!-- END::Tombol Modal Fitur Kelola Sistem -->

                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="Inovasi%20-%20Smart%20City_files/user.jpg" alt=""></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="http://inovasi.depok.go.id/pages/profile.html"><i class="ik ik-user dropdown-icon"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="ik ik-settings dropdown-icon"></i> Settings</a>
                                    <a class="dropdown-item" href="#"><span class="float-right"><span class="badge badge-primary">6</span></span><i class="ik ik-mail dropdown-icon"></i> Inbox</a>
                                    <a class="dropdown-item" href="#"><i class="ik ik-navigation dropdown-icon"></i> Message</a>
                                    <a class="dropdown-item" href="http://inovasi.depok.go.id/pages/login.html"><i class="ik ik-power dropdown-icon"></i> Logout</a>
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
                                                <a href="http://inovasi.depok.go.id/index.html"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#">Kelola</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Status Inovasi</li>
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
                                    STATUS DATA INOVASI
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="myTabContent2">

                                            <div class="col-md-12">
                                                <form class="forms-sample" method="post" action="/inovasi/update/{{$inovasi->id}}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('PUT')}}

                                                    <!-- BEGIN::Nama Inovasi -->
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <label for="namaInovasi">Nama Singkat Inovasi</label>
                                                                <input type="text" class="form-control" id="namaInovasi" value="{{ $inovasi->name }}" disabled="disabled">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="perangkatDaerah">Perangkat Daerah</label>
                                                                <select class="form-control" id="perangkatDaerah" disabled="disabled">
                                                                    <option value="{{$inovasi->institute->short_name}}" >{{$inovasi->institute->short_name}}</option>
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

                                                    <!-- BEGIN::Status, Progres, Keterangan -->
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="statusInovasi">Status Inovasi 1</label>
                                                                <select class="form-control" id="statusInovasi" disabled="disabled">
                                                                    {{-- @foreach($inovasi->innovation_step as $ino_step)
                                                                        <option value="">{{$ino_step->step->name}}</option>
                                                                    @endforeach --}}
                                                                    <option value="1" selected="selected">Perumusan Masalah atau Kebutuhan</option>
                                                                    <!-- <option value="2">Perumusan Ide</option>
                                                                    <option value="3">Perencanaan Pembangunan</option>
                                                                    <option value="4">Pembangunan</option>
                                                                    <option value="5">Implementasi</option>
                                                                    <option value="6">Evaluasi</option> -->
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
                                                                    {{-- @foreach($inovasi->innovation_step as $ino_step)
                                                                        <input type="text" class="form-control" id="progresInovasi" disabled="disabled" value="{{$ino_step->progress_persentage}}">
                                                                    @endforeach --}}
                                                                    <input type="text" class="form-control" id="progresInovasi" placeholder="100%" disabled="disabled">
                                                             </div>
                                                            <div class="col-md-4">
                                                                <label for="keteranganStatus">Keterangan</label>
                                                                    @foreach($inovasi->innovation_step as $ino_step)
                                                                        <textarea class="form-control" id="keteranganStatus" rows="3" placeholder="-" disabled="disabled">{{$ino_step->explaination}}</textarea>
                                                                    @endforeach
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="statusInovasi">Status Inovasi 2</label>
                                                                <select class="form-control" id="statusInovasi" disabled="disabled">
                                                                    <!-- <option value="1">Perumusan Masalah atau Kebutuhan</option> -->
                                                                    <option value="2" selected="selected">Perumusan Ide</option>
                                                                    <!-- <option value="3">Perencanaan Pembangunan</option>
                                                                    <option value="4">Pembangunan</option>
                                                                    <option value="5">Implementasi</option>
                                                                    <option value="6">Evaluasi</option> -->
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
                                                                <input type="text" class="form-control" id="progresInovasi" placeholder="100%" disabled="disabled">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="keteranganStatus">Keterangan</label>
                                                                <textarea class="form-control" id="keteranganStatus" rows="3" placeholder="-" disabled="disabled"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="statusInovasi">Status Inovasi 3</label>
                                                                <select class="form-control" id="statusInovasi" disabled="disabled">
                                                                    <!-- <option value="1">Perumusan Masalah atau Kebutuhan</option>
                                                                    <option value="2">Perumusan Ide</option> -->
                                                                    <option value="3" selected="selected">Perencanaan Pembangunan</option>
                                                                    <!-- <option value="4">Pembangunan</option>
                                                                    <option value="5">Implementasi</option>
                                                                    <option value="6">Evaluasi</option> -->
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
                                                                <input type="text" class="form-control" id="progresInovasi" placeholder="100%" disabled="disabled">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="keteranganStatus">Keterangan</label>
                                                                <textarea class="form-control" id="keteranganStatus" rows="3" placeholder="-" disabled="disabled"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="statusInovasi">Status Inovasi 4</label>
                                                                <select class="form-control" id="statusInovasi" disabled="disabled">
                                                                    <!-- <option value="1">Perumusan Masalah atau Kebutuhan</option>
                                                                    <option value="2">Perumusan Ide</option>
                                                                    <option value="3">Perencanaan Pembangunan</option> -->
                                                                    <option value="4" selected="selected">Pembangunan</option>
                                                                    <!-- <option value="5">Implementasi</option>
                                                                    <option value="6">Evaluasi</option> -->
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
                                                                <input type="text" class="form-control" id="progresInovasi" placeholder="100%" disabled="disabled">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="keteranganStatus">Keterangan</label>
                                                                <textarea class="form-control" id="keteranganStatus" rows="3" placeholder="-" disabled="disabled"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="statusInovasi">Status Inovasi 5</label>
                                                                <select class="form-control" id="statusInovasi" disabled="disabled">
                                                                    <!-- <option value="1">Perumusan Masalah atau Kebutuhan</option>
                                                                    <option value="2">Perumusan Ide</option>
                                                                    <option value="3">Perencanaan Pembangunan</option>
                                                                    <option value="4">Pembangunan</option> -->
                                                                    <option value="5" selected="selected">Implementasi</option>
                                                                    <!-- <option value="6">Evaluasi</option> -->
                                                                </select>
                                                            </div>
                                                            {{-- <div class="col-md-2">
                                                                <label>Unggah File</label>
                                                                <input type="file" name="img[]" class="file-upload-default">
                                                                <div class="input-group col-xs-12">
                                                                    <input type="text" class="form-control file-upload-info" disabled="disabled" placeholder="File">
                                                                    <span class="input-group-append">
                                                                    <button class="file-upload-browse btn btn-primary" type="button">Unggah</button>
                                                                    </span>
                                                                </div>
                                                            </div> --}}
                                                            <div class="col-md-2">
                                                                    <label for="progresInovasi">Progres Inovasi (%)</label>
                                                                    <input type="text" class="form-control" id="progresInovasi" placeholder="100%" disabled="disabled">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="keteranganStatus">Keterangan</label>
                                                                <textarea class="form-control" id="keteranganStatus" rows="3" placeholder="-" disabled="disabled"></textarea>
                                                                {{-- <textarea class="form-control" id="keteranganStatus" rows="3" placeholder="Aplikasi ini masih dalam tahap uji coba"></textarea> --}}
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label for="statusInovasi">Status Inovasi 6</label>
                                                                <select class="form-control" id="statusInovasi" disabled="disabled">
                                                                    {{-- <option value="1">Perumusan Masalah atau Kebutuhan</option>
                                                                    <option value="2">Perumusan Ide</option>
                                                                    <option value="3">Perencanaan Pembangunan</option>
                                                                    <option value="4">Pembangunan</option> -->
                                                                    <option value="5" selected="selected">Implementasi</option> --}}
                                                                    <option value="6">Evaluasi</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <label>Unggah File</label>
                                                                <input type="file" name="img[]" class="file-upload-default">
                                                                <div class="input-group col-xs-12">
                                                                    <input type="text" class="form-control file-upload-info" disabled="disabled" placeholder="File">
                                                                    <span class="input-group-append">
                                                                    <button class="file-upload-browse btn btn-primary" type="button">Unggah</button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                    <label for="progresInovasi">Progres Inovasi (%)</label>
                                                                    <input required="" type="number" min="0" max="100" value="" disabled="disabled" class="form-control" id="progresInovasi">
                                                                    {{-- <input type="text" class="form-control" id="progresInovasi" placeholder="100%" disabled="disabled"> --}}
                                                                </div>
                                                            <div class="col-md-4">
                                                                <label for="keteranganStatus">Keterangan</label>
                                                                <textarea class="form-control" id="keteranganStatus" rows="3" placeholder="Aplikasi ini masih dalam tahap uji coba"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- END::Status, Progres, Keterangan -->

                                                    <!-- BEGIN::Tombol Simpan & Ulang -->
                                                    <button type="submit" class="btn btn-primary btn-lg btn-block mt-4 mb-4">SIMPAN DATA</button>
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
                                        <input type="text" id="quick-search" class="form-control" placeholder="Search...">
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

        <script src="Inovasi%20-%20Smart%20City_files/jquery-3.js"></script>
        <script>window.jQuery || document.write('<script src="../src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="Inovasi%20-%20Smart%20City_files/popper.js"></script>
        <script src="Inovasi%20-%20Smart%20City_files/bootstrap.js"></script>
        <script src="Inovasi%20-%20Smart%20City_files/perfect-scrollbar.js"></script>
        <script src="Inovasi%20-%20Smart%20City_files/select2.js"></script>
        <script src="Inovasi%20-%20Smart%20City_files/summernote-bs4.js"></script>
        <script src="Inovasi%20-%20Smart%20City_files/bootstrap-tagsinput.js"></script>
        <script src="Inovasi%20-%20Smart%20City_files/repeater.js"></script>
        <script src="Inovasi%20-%20Smart%20City_files/switchery.js"></script>
        <script src="Inovasi%20-%20Smart%20City_files/screenfull.js"></script>
        <script src="Inovasi%20-%20Smart%20City_files/jquery.js"></script>
        <script src="Inovasi%20-%20Smart%20City_files/dataTables.js"></script>
        <script src="Inovasi%20-%20Smart%20City_files/dataTables_002.js"></script>
        <script src="Inovasi%20-%20Smart%20City_files/responsive.js"></script>
        <script src="Inovasi%20-%20Smart%20City_files/jquery-jvectormap.js"></script>
        <script src="Inovasi%20-%20Smart%20City_files/jquery-jvectormap-world-mill-en.html"></script>
        <script src="Inovasi%20-%20Smart%20City_files/moment.js"></script>
        <script src="Inovasi%20-%20Smart%20City_files/tempusdominus-bootstrap-4.js"></script>
        <script src="Inovasi%20-%20Smart%20City_files/d3.js"></script>
        <script src="Inovasi%20-%20Smart%20City_files/c3.js"></script>
        <script src="Inovasi%20-%20Smart%20City_files/tables.js"></script>
        <script src="Inovasi%20-%20Smart%20City_files/widgets.js"></script>
        <script src="Inovasi%20-%20Smart%20City_files/charts.js"></script>
        <script src="Inovasi%20-%20Smart%20City_files/theme.js"></script>
        <script src="Inovasi%20-%20Smart%20City_files/form-components.js"></script>
        <script src="Inovasi%20-%20Smart%20City_files/form-advanced.js"></script>
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


</body></html>
