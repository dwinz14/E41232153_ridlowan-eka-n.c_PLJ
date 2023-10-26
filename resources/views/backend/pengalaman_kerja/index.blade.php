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
            <section class="card-body">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Pengalaman Kerja</h5>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <a href="{{ route('pengalaman_kerja.create') }}"><button class="btn btn-primary" type="button">Tambah</button></a>
                    <!-- Table with stripped rows -->
                    <br><br>
                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                        <tr>
                            <th scope="col"><i class="bi bi-bag-dash"></i> Nama</th>
                            <th scope="col"><i class="bi bi-receipt"></i> Jabatan</th>
                            <th scope="col"><i class="bi bi-calendar-event"></i> Tahun Masuk</th>
                            <th scope="col"><i class="bi bi-calendar-event"></i> Tahun Selesai</th>
                            <th scope="col"><i class="bi bi-gear"></i> Action</th>
                        </tr>
                        @foreach ($pengalaman_kerja as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->jabatan }}</td>
                                <td>{{ $item->tahun_masuk }}</td>
                                <td>{{ $item->tahun_keluar }}</td>
                                <td>
                                    <div class="btn-group">
                                        <form action="{{ route('pengalaman_kerja.destroy',$item->id) }}" method="POST">
                                        <a href="{{ route('pengalaman_kerja.edit',$item->id) }}"
                                            class="btn btn-warning">
                                            <i class="bi bi-pencil-fill"></i>
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
                    </div>
                </div>
            </section>
          </div>
        </div>
    </section>
</main>
@endsection