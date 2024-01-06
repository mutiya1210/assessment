<!-- resources/views/mata_kuliah/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Daftar Mata Kuliah</h1>

    <a href="{{ route('mata_kuliah.create') }}" class="btn btn-success">Tambah Mata Kuliah</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>SKS</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mataKuliahs as $mataKuliah)
                <tr>
                    <td>{{ $mataKuliah->id }}</td>
                    <td>{{ $mataKuliah->kode }}</td>
                    <td>{{ $mataKuliah->nama }}</td>
                    <td>{{ $mataKuliah->sks }}</td>
                    <td>
                        <a href="{{ route('mata_kuliah.show', $mataKuliah->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('mata_kuliah.edit', $mataKuliah->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('mata_kuliah.destroy', $mataKuliah->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus mata kuliah ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
