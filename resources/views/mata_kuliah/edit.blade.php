<!-- resources/views/mata_kuliah/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Mata Kuliah</h1>

    <form action="{{ route('mata_kuliah.update', $mataKuliah->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="kode" class="form-label">Kode Mata Kuliah</label>
            <input type="text" class="form-control" id="kode" name="kode" value="{{ $mataKuliah->kode }}" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Mata Kuliah</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $mataKuliah->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="sks" class="form-label">SKS</label>
            <input type="number" class="form-control" id="sks" name="sks" value="{{ $mataKuliah->sks }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>

    <a href="{{ route('mata_kuliah.index') }}" class="btn btn-secondary mt-3">Kembali</a>
@endsection
