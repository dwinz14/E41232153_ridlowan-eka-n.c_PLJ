@extends('backend.layouts.template')
@section('content')
<main id="main" class="main">
    {{-- Page Title --}}
    <div class="pagetitle">
        <h1>Riwayat Hidup</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Riwayat Hidup</li>
                <li class="breadcrumb-item active">Pendidikan</li>
            </ol>
        </nav>
    </div>
        <!-- form validations -->
    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-12">
            <div class="row">
                {{-- Create Form Pendidikan --}}
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    {{ isset($admin_lecturer) ? 'Mengubah' : 'Menambahkan' }} Pendidikan
                </h5>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops</strong> Ada yang salah dengan yang kamu inputkan. <br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="panel-body">
                        <div class="form">
                            <form class="form-validate form-horizontal" id="pendidikan-form" method="POST" 
                            action="{{ isset($pendidikan) ? route('pendidikan.update',$pendidikan->id) : route('pendidikan.store') }}">
                                {!!  csrf_field() !!}
                                {!! isset($pendidikan) ? method_field('PUT') : '' !!}
                                <div class="form-group">
                                    <label for="name" class="control-label col-lg-2">Nama Sekolah 
                                        <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="nama" name="nama" minlength="5" type="text" value="{{ isset($pendidikan) ? $pendidikan->nama : '' }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label col-lg-2">Tingkatan
                                        <span class="required">*</span></label>
                                    <div class="col-lg-10">
                                        <select class="form-cpntrol m-bot15" name="tingkatan" id="tingkatan" required>
                                            <option value="1" {{ (isset($pendidikan) && $pendidikan->tingkatan == 1) ? 'selected' : '' }}>TK</option>
                                            <option value="2" {{ (isset($pendidikan) && $pendidikan->tingkatan == 2) ? 'selected' : '' }}>SD</option>
                                            <option value="3" {{ (isset($pendidikan) && $pendidikan->tingkatan == 3) ? 'selected' : '' }}>SMP</option>
                                            <option value="4" {{ (isset($pendidikan) && $pendidikan->tingkatan == 4) ? 'selected' : '' }}>SMA/SMK</option>
                                            <option value="5" {{ (isset($pendidikan) && $pendidikan->tingkatan == 5) ? 'selected' : '' }}>D3</option>
                                            <option value="6" {{ (isset($pendidikan) && $pendidikan->tingkatan == 6) ? 'selected' : '' }}>D4/S1</option>
                                            <option value="7" {{ (isset($pendidikan) && $pendidikan->tingkatan == 7) ? 'selected' : '' }}>S2</option>
                                            <option value="8" {{ (isset($pendidikan) && $pendidikan->tingkatan == 8) ? 'selected' : '' }}>S3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="curl" class="control-label col-lg-2">Tahun Masuk <span
                                        class="required">*</span></label>
                                    <div class="col-lg-10">
                                    <input id="tahun masuk" type="text" name="tahun_masuk" class="form-control" value="{{ isset($pendidikan) ? $pendidikan->tahun_masuk : '' }}"
                                    required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="curl" class="control-label col-lg-2">Tahun Selesai <span
                                        class="required">*</span></label>
                                    <div class="col-lg-10">
                                    <input id="tahun keluar" type="text" name="tahun keluar" class="form-control" value="{{ isset($pendidikan) ? $pendidikan->tahun_keluar : '' }}"
                                    required>
                                    </div>
                                </div> <br>
                            <div class="text-center">
                                <button class="btn btn-primary" type="submit">Save</button>
                                <a href="{{ route('pendidikan.index') }}">
                                <button class="btn btn-secondary" type="button">Cancel</button></a>
                            </div>
                            </form>      
                        </div>
                    </div>
            </div>
            </div>
            </div>
        </div>
    </section>
</main>
@endsection
@push('content-css')
<link href="{{ asset('backend/css/bootstrap-datepicker.css') }} " rel="stylesheet" />
@endpush
@push('content-js')
<script src="{{ asset('backend/js/bootstrap-datepicker.js') }}"></script> 
<script type="text/javascript">
    $('#tahun_masuk').datepicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years"
    });$('#tahun keluar').datepicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years"
    });
</script>
@endpush
