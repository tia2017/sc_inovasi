@extends('master')
@section('konten')
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
                                <li class="breadcrumb-item active"  aria-current="page">Kelola</li>
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
                            <a href="tambah-inovasi"><i class="ik ik-plus"></i></a>
                            <a href="inovasi"><i class="ik ik-rotate-cw"></i></a>
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
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr class="text text-center">
                                <th>Inovasi</th>
                                <th>Perangkat Daerah</th>
                                <th>Tahapan</th>
                                <th>Progres</th>
                                <th>Total Progres</th>
                                <th colspan="2">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($inovasi as $ino_data)
                                <tr class="text text-center">
                                    <td><a href="/inovasi/detail/{{$ino_data->id}}" >{{$ino_data->name}}</a></td>
                                    <td>{{$ino_data->Institute->short_name}}</td>
                                    <td>
                                    @foreach($ino_data->innovation_step as $ino_step)
                                        {{$ino_step->step->name}}
                                    @endforeach
                                    </td>
                                    <td>
                                    @foreach($ino_data->innovation_step as $ino_step)
                                        {{$ino_step->progress_persentage}}%
                                    @endforeach
                                    </td>
                                    <td>70%</td>
                                    <td><a href="/inovasi/edit/{{$ino_data->id}}" class="btn btn-warning">Edit</a></td>
                                    <td><a href="/inovasi/hapus/{{$ino_data->id}}" class="btn btn-danger">Hapus</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END::Tabel Data Inovasi -->

        </div>
    </div>
<!-- END::Konten Utama -->

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
                                                            <input required="" type="number" min="0" max="100" placeholder="0-100" class="form-control" id="progress_presentage">
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
@endsection
