<!-- resources/views/welcome.blade.php -->

@extends('layouts.app')

@section('content')
    <section class="hero text-center">
        <div class="container">
            <h1 class="display-7">Selamat Datang di <span class="text-primary">Sistem Informasi Perkuliahan</span></h1>
            <p class="lead">Manajemen data mahasiswa, dosen, mata kuliah, dan program studi secara efisien.</p>
            <hr class="my-4">
            <p>Silakan pilih salah satu menu di bawah untuk memulai:</p>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-outline-primary btn-lg btn-block mb-3">Daftar Mahasiswa</a>
                </div>
                <div class="col-md-3">
                    <a href="{{ route('dosen.index') }}" class="btn btn-outline-primary btn-lg btn-block mb-3">Daftar Dosen</a>
                </div>
                <div class="col-md-3">
                    <a href="{{ route('mata_kuliah.index') }}" class="btn btn-outline-primary btn-lg btn-block mb-3">Daftar Mata Kuliah</a>
                </div>
                <div class="col-md-3">
                    <a href="{{ route('prodi.index') }}" class="btn btn-outline-primary btn-lg btn-block mb-3">Daftar Program Studi</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <h2 class="display-7">Tentang Sistem Informasi Perkuliahan</h2>
                    <p class="lead">
                        Sistem Informasi Perkuliahan ini didesain untuk memberikan kemudahan dalam pengelolaan data mahasiswa, dosen, mata kuliah, dan program studi di lingkungan pendidikan tinggi.
                        Dengan antarmuka yang ramah pengguna, Anda dapat dengan mudah mengelola informasi dan meningkatkan efisiensi tugas administratif.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="features text-center">
        <div class="container">
            <h2 class="display-7">Fitur Unggulan</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <i class="fas fa-user-graduate fa-3x mb-3 text-primary"></i>
                            <h5 class="card-title">Manajemen Mahasiswa</h5>
                            <p class="card-text">Kelola data mahasiswa dengan mudah dan efisien.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <i class="fas fa-chalkboard-teacher fa-3x mb-3 text-primary"></i>
                            <h5 class="card-title">Informasi Dosen</h5>
                            <p class="card-text">Lihat dan kelola informasi mengenai dosen-dosen di institusi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <i class="fas fa-book-open fa-3x mb-3 text-primary"></i>
                            <h5 class="card-title">Daftar Mata Kuliah</h5>
                            <p class="card-text">Lihat detail dan informasi mengenai mata kuliah yang ditawarkan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <i class="fas fa-book-open fa-3x mb-3 text-primary"></i>
                            <h5 class="card-title">Daftar Prodi</h5>
                            <p class="card-text">Lihat detail dan informasi mengenai prodi yang ditawarkan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
@endsection
