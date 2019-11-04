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
                                <li class="breadcrumb-item">
                                    <a href="/inovasi">Kelola</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah Inovasi</li>
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
                        TAMBAH DATA INOVASI
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent2">

                        <!-- /resources/views/post/create.blade.php -->

                        <h1>Create Post</h1>

                        <!-- @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif                        -->
                

                        <!-- Create Post Form -->

                                <div class="col-md-12">
                                    <form class="forms-sample" action="/tambah-inovasi" method="post" enctype='multipart/form-data'>
                                    <input type="hidden" name="created_by" value="1">
                                    <input type="hidden" name="date" value="{{date('Y-m-d h:i:s')}}">
                                    <input type="hidden" name="verification_status" value="True">
                                    @csrf

                                        <!-- BEGIN::Nama Inovasi -->
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label for="namaInovasi" >Nama Singkat Inovasi</label>
                                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="namaInovasi" placeholder="Nama Singkat Inovasi yang Diajukan" name="name" value="{{old('name')}}">
                                                    @error('name')
                                                        <div class="invalid-feedback">{{$message}}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="perangkatDaerah">Perangkat Daerah</label>
                                                    <select class="form-control @error('institute_id') is-invalid @enderror" placeholder="Perangkat Daerah" id="perangkatDaerah" name="institute_id">
                                                    @foreach($institute as $ins_data)
                                                        <option value="{{$loop->iteration}}">{{$ins_data->short_name}}</option>
                                                    @endforeach

                                                    @error('institute_id')
                                                        <div class="invalid-feedback">{{$message}}</div>
                                                    @enderror

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
                                                    <select class="form-control" id="jenisInovasi" name="innovation_type_id">
                                                    @foreach($type as $type_data)
                                                        <option value="{{$loop->iteration}}">{{$type_data->name}}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="pilarInovasi">Pilar Smart City</label>
                                                    <select class="form-control" id="pilarInovasi" name="pilar_id">
                                                    @foreach($pilar as $pilar_data)
                                                        <option value="{{$loop->iteration}}">{{ $pilar_data->name }}</option>
                                                    @endforeach
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
                                                    <select class="form-control @error('step_id') is-invalid @enderror" id="statusInovasi" name="step_id">
                                                        @foreach($step as $step_data)
                                                        <option value="{{$loop->iteration}}">{{ $step_data->name}}</option>
                                                        @endforeach
                                                        @error('step_id')
                                                        <div class="invalid-feedback">{{$message}}</div>
                                                        @enderror
                                                    </select>
                                                </div>
                                                <div class="col-md-2">
                                                    <label>Unggah File</label>
                                                    <input type="file" name="imgStep" class="file-upload-default">
                                                    <div class="input-group col-xs-12">
                                                        <input type="text" class="form-control file-upload-info" disabled placeholder="File" value="{{old('file')}}">
                                                        <span class="input-group-append">
                                                        <button class="file-upload-browse btn btn-primary" type="button">Unggah</button>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="progresInovasi">Progres Inovasi (%)</label>
                                                    <input type="text" class="form-control @error('progress_persentage') is-invalid @enderror" placeholder="0-100" id="progresInovasi" name="progress_persentage" value="{{old('progress_persentage')}}">
                                                    @error('progress_persentage')
                                                        <div class="invalid-feedback">{{$message}}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="keteranganStatus">Keterangan</label>
                                                    <textarea class="form-control @error('explaination') is-invalid @enderror" id="keteranganStatus" rows="3" placeholder="Keterangan mengenai status tahapan Inovasi"  name="explaination" >{{old('explaination')}}</textarea>
                                                    @error('explaination')
                                                        <div class="invalid-feedback">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END::Status, Progres, Keterangan -->

                                        <!-- BEGIN::Penjelasan Manfaat Keunikan Inovasi -->
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="penjelasanInovasi">Penjelasan Singkat Inovasi</label>
                                                    <textarea class="form-control @error('description') is-invalid @enderror" id="penjelasanInovasi" rows="3" placeholder="Penjelasan mengenai inovasi yang dapat dipahami dengan baik" name="description">{{old('description')}}</textarea>
                                                    @error('description')
                                                        <div class="invalid-feedback">{{$message}}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="manfaatInovasi">Manfaat Inovasi</label>
                                                    <textarea class="form-control @error('benefit') is-invalid @enderror" id="manfaatInovasi" rows="3" placeholder="Manfaat Inovasi ini bagi Penyelenggara, Pemerintah dan Masyarakat" name="benefit" >{{old('benefit')}}</textarea>
                                                    @error('benefit')
                                                        <div class="invalid-feedback">{{$message}}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="keunikanInovasi">Keunikan/Kreativitas Inovasi</label>
                                                    <textarea class="form-control @error('unique_creativity') is-invalid @enderror" id="keunikanInovasi" rows="3" placeholder="Keunggulan dan keunikan Inovasi" name="unique_creativity" >{{old('unique_creativity')}}</textarea>
                                                    @error('unique_creativity')
                                                        <div class="invalid-feedback">{{$message}}</div>
                                                    @enderror
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
                                                    <!-- Key Array Form Repeater keperluar validate jika gagal agar tidak ketik ulang value -->
                                                    <input type="text" class="keyFormMitra" name="keyFormMitra" value="{{old('keyFormMitra')}}" hidden>    
                                                    <?php
                                                        $keyFormMitra = old('keyFormMitra');
                                                        if($keyFormMitra != null){
                                                            $key = old('keyFormMitra')+1;                                                           
                                                        }else{
                                                            $key = 1;                                                        
                                                        }                                                                               
                                                    ?> 
                                                    
                                                        <!-- Repeater Heading -->
                                                        <div class="repeater-heading">
                                                            <h5 class="float-left">Kemitraan</h5>
                                                            <span class="btn btn-primary pt-5 float-right repeater-add-btn">
                                                                Tambah Form
                                                            </span>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <!-- Repeater Items -->
                                                        
                                                        @for ($i=0; $i < $key; $i++)
                                                        <div class="items" data-group="Mitra">                                                                                                                                                                 
                                                            <!-- Repeater Content -->                                                        
                                                            <div class="item-content">                                                                           
                                                                <div class="form-group">
                                                                    <label for="bentukMitra" class="col-lg-2 col-md-2 control-label">Bentuk Mitra</label>
                                                                    <div class="col-lg-10 col-md-10">
                                                                        <input type="text" class="form-control @error('Mitra.*.Bentuk') is-invalid @enderror" id="bentukMitra" placeholder="Bentuk Mitra yang Melakukan Kerjasama" data-name="Bentuk" value="{{old('Mitra.'.$i.'.Bentuk') }}"  >                                                                        
                                                                        @error('Mitra.*.Bentuk')
                                                                            <div class="invalid-feedback">{{$message}}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="namaMitra" class="col-lg-2 control-label">Nama Mitra</label>
                                                                    <div class="col-lg-10">
                                                                        <input type="text" class="form-control @error('Mitra.*.Nama') is-invalid @enderror" id="namaMitra" placeholder="Nama Mitra yang Melakukan Kerjasama" data-name="Nama" value="{{old('Mitra.'.$i.'.Nama') }}">
                                                                        @error('Mitra.*.Nama')
                                                                            <div class="invalid-feedback">{{$message}}</div>
                                                                        @enderror
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
                                                        @endfor
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
                                                    <textarea class="form-control @error('potency') is-invalid @enderror" id="potensiPengembangan" rows="3" placeholder="Kemungkinan perluasan, peningkatan, replikasi" name="potency" >{{old('potency')}}</textarea>
                                                    @error('potency')
                                                        <div class="invalid-feedback">{{$message}}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="strategiKeberlangsungan">Strategi Menjaga Keberlangsungan</label>
                                                    <textarea class="form-control @error('strategy') is-invalid @enderror" id="strategiKeberlangsungan" rows="3" placeholder="Upaya memastikan keberlangsungan (regulasi, kelembagaan, penyediaan sumber daya, dan model bisnis)" name="strategy" >{{old('strategy')}}</textarea>
                                                    @error('strategy')
                                                        <div class="invalid-feedback">{{$message}}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="analisisRisiko">Analisis Risiko</label>
                                                    <textarea class="form-control @error('risk_analysis') is-invalid @enderror" id="analisisRisiko" rows="3" placeholder="Dampak yang perlu diantisipasi, hambatan, dan potensi kegagalan" name="risk_analysis" >{{old('risk_analysis')}}</textarea>
                                                    @error('risk_analysis')
                                                        <div class="invalid-feedback">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END::Potensi Strategi Analisis Inovasi -->

                                        <!-- BEGIN::Sumber Tahun Pilar Inovasi -->
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="potensiPengembangan">Sumber Daya yang Digunakan</label>
                                                    <textarea class="form-control @error('resource') is-invalid @enderror" id="potensiPengembangan" rows="3" placeholder="Anggaran, tenaga kerja, fasilitas dan sumber daya yang diperlukan (berapa dan berasal dari mana)" name="resource" >{{old('resource')}}</textarea>
                                                    @error('resource')
                                                        <div class="invalid-feedback">{{$message}}</div>
                                                    @enderror
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
            <!-- </div> -->
            <!-- END::Tab Menu -->

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
                                                            <input required="" type="text" placeholder="0-100" class="form-control" id="progress_presentage">
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
                                                                <div class="items" data-group="mitra">
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
