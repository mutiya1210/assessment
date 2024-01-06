@extends('layouts.app')


@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Sistem Informasi Perkuliahan</h1>
        <p class="lead">Selamat datang di Sistem Informasi Perkuliahan. Di sini Anda dapat mengelola data mahasiswa, dosen, mata kuliah, dan lainnya.</p>
        <hr class="my-4">
        <p>Silakan pilih salah satu menu di bawah untuk memulai:</p>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary btn-lg btn-block">Daftar Mahasiswa</a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('dosen.index') }}" class="btn btn-primary btn-lg btn-block">Daftar Dosen</a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('mata_kuliah.index') }}" class="btn btn-primary btn-lg btn-block">Daftar Mata Kuliah</a>
            </div>
        </div>
    </div>
@endsection

@endsection
