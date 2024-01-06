<!-- resources/views/mata_kuliah/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Tambah Mata Kuliah Baru</h1>

    <form action="{{ route('mata_kuliah.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="kode" class="form-label">Kode Mata Kuliah</label>
            <input type="text" class="form-control" id="kode" name="kode" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Mata Kuliah</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="sks" class="form-label">SKS</label>
            <input type="number" class="form-control" id="sks" name="sks" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
