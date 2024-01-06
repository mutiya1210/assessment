<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    public function index()
    {
        $mataKuliahs = MataKuliah::all();
        return view('mata_kuliah.index', ['mataKuliahs' => $mataKuliahs]);
    }

    public function create()
    {
        return view('mata_kuliah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:mata_kuliah,kode',
            'nama' => 'required',
            'sks' => 'required|numeric',
        ]);

        MataKuliah::create($request->all());

        return redirect()->route('mata_kuliah.index')->with('success', 'Mata Kuliah berhasil ditambahkan');
    }

    public function show($id)
    {
        $mataKuliah = MataKuliah::find($id);
        return view('mata_kuliah.show', ['mataKuliah' => $mataKuliah]);
    }

    public function edit($id)
    {
        $mataKuliah = MataKuliah::find($id);
        return view('mata_kuliah.edit', ['mataKuliah' => $mataKuliah]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required|unique:mata_kuliah,kode,' . $id,
            'nama' => 'required',
            'sks' => 'required|numeric',
        ]);

        MataKuliah::find($id)->update($request->all());

        return redirect()->route('mata_kuliah.index')->with('success', 'Mata Kuliah berhasil diperbarui');
    }

    public function destroy($id)
    {
        MataKuliah::find($id)->delete();

        return redirect()->route('mata_kuliah.index')->with('success', 'Mata Kuliah berhasil dihapus');
    }
}
