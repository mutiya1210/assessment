<!-- resources/views/mahasiswa/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Detail Mahasiswa</h1>

    <table class="table mt-3">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $mahasiswa->id }}</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>{{ $mahasiswa->nama }}</td>
            </tr>
            <tr>
                <th>NIM</th>
                <td>{{ $mahasiswa->nim }}</td>
            </tr>
            <tr>
                <th>Jurusan</th>
                <td>{{ $mahasiswa->jurusan }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
