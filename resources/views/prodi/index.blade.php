<!-- resources/views/prodi/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Daftar Program Studi</h1>

    <a href="{{ route('prodi.create') }}" class="btn btn-success">Tambah Program Studi</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Kode</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prodis as $prodi)
                <tr>
                    <td>{{ $prodi->id }}</td>
                    <td>{{ $prodi->nama }}</td>
                    <td>{{ $prodi->kode }}</td>
                    <td>
                        <a href="{{ route('prodi.show', $prodi->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('prodi.edit', $prodi->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('prodi.destroy', $prodi->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus program studi ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
