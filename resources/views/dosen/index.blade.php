<!-- resources/views/dosen/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Daftar Dosen</h1>

    <a href="{{ route('dosen.create') }}" class="btn btn-success">Tambah Dosen</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIDN</th>
                <th>Jabatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dosens as $dosen)
                <tr>
                    <td>{{ $dosen->id }}</td>
                    <td>{{ $dosen->nama }}</td>
                    <td>{{ $dosen->nidn }}</td>
                    <td>{{ $dosen->jabatan }}</td>
                    <td>
                        <a href="{{ route('dosen.show', $dosen->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('dosen.edit', $dosen->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('dosen.destroy', $dosen->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus dosen ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
