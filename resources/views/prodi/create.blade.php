<!-- resources/views/prodi/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Tambah Program Studi Baru</h1>

    <form action="{{ route('prodi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Program Studi</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="kode" class="form-label">Kode Program Studi</label>
            <input type="text" class="form-control" id="kode" name="kode" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
