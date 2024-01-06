<!-- resources/views/prodi/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Program Studi</h1>

    <form action="{{ route('prodi.update', $prodi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Program Studi</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $prodi->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="kode" class="form-label">Kode Program Studi</label>
            <input type="text" class="form-control" id="kode" name="kode" value="{{ $prodi->kode }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>

    <a href="{{ route('prodi.index') }}" class="btn btn-secondary mt-3">Kembali</a>
@endsection
