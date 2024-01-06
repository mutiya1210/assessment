<!-- resources/views/dosen/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Detail Dosen</h1>

    <table class="table mt-3">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $dosen->id }}</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>{{ $dosen->nama }}</td>
            </tr>
            <tr>
                <th>NIDN</th>
                <td>{{ $dosen->nidn }}</td>
            </tr>
            <tr>
                <th>Jabatan</th>
                <td>{{ $dosen->jabatan }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
