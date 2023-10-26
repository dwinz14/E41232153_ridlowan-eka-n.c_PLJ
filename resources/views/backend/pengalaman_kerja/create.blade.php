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
            <li class="breadcrumb-item active">Pengalaman Kerja</li>
        </ol>
        </nav>
    </div>
    <!-- End Page Title -->
    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    {{-- Create Form Pengalaman Kerja --}}
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ isset($admin_lecturer) ? 'Mengubah' : 'Menambahkan' }} Pengalaman Kerja
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
                            <!-- Vertical Form -->
                            <form class="row g-3" action="{{ isset($pengalaman_kerja) ? route('pengalaman_kerja.update', $pengalaman_kerja->id) : route('pengalaman_kerja.store') }}" id="pengalaman_kerja_form" method="POST">
                                {!! csrf_field() !!}
                                {!! isset($pengalaman_kerja) ? method_field('PUT') : '' !!}
                                @if(isset($pengalaman_kerja))
                                    <input type="hidden" name="id" value="{{ $pengalaman_kerja->id }}">
                                @endif
                                <div class="col-12">
                                    <label for="cname" class="form-label">Nama Perusahaan <span class="required">*</span></label>
                                    <input type="text" class="form-control" id="nama" name="nama" minlength="5" 
                                    value="{{ isset($pengalaman_kerja) ? $pengalaman_kerja->nama : '' }}" required>
                                </div>
                                <div class="col-12">
                                    <label for="cname" class="form-label">Jabatan <span class="required">*</span></label>
                                    <input type="text" class="form-control" id="jabatan" name="jabatan" minlength="2" 
                                    value="{{ isset($pengalaman_kerja) ? $pengalaman_kerja->jabatan : '' }}" required>
                                </div>
                                <div class="col-12">
                                    <label for="curl" class="form-label">Tahun Masuk <span class="required">*</span></label>
                                    <input type="text" class="form-control" id="tahun_masuk" name="tahun_masuk" 
                                    value="{{ isset($pengalaman_kerja) ? $pengalaman_kerja->tahun_masuk : '' }}" required>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Tahun Selesai <span class="required">*</span></label>
                                    <input type="text" class="form-control" id="tahun_keluar" name="tahun_keluar" 
                                    value="{{ isset($pengalaman_kerja) ? $pengalaman_kerja->tahun_keluar : '' }}" required>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a href="{{ route('pengalaman_kerja.index') }}">
                                        <button class="btn btn-secondary" type="button">Cancel</button>
                                    </a>
                                </div>
                            </form>
                            <!-- Vertical Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
