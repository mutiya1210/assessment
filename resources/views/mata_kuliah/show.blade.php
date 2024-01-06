<!-- resources/views/mata_kuliah/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Detail Mata Kuliah</h1>

    <table class="table mt-3">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $mataKuliah->id }}</td>
            </tr>
            <tr>
                <th>Kode Mata Kuliah</th>
                <td>{{ $mataKuliah->kode }}</td>
            </tr>
            <tr>
                <th>Nama Mata Kuliah</th>
                <td>{{ $mataKuliah->nama }}</td>
            </tr>
            <tr>
                <th>SKS</th>
                <td>{{ $mataKuliah->sks }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('mata_kuliah.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
