<!-- resources/views/prodi/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Detail Program Studi</h1>

    <table class="table mt-3">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $prodi->id }}</td>
            </tr>
            <tr>
                <th>Nama Program Studi</th>
                <td>{{ $prodi->nama }}</td>
            </tr>
            <tr>
                <th>Kode Program Studi</th>
                <td>{{ $prodi->kode }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('prodi.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
