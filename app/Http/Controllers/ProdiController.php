<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodi;

class ProdiController extends Controller
{
    public function index()
    {
        $prodis = Prodi::all();
        return view('prodi.index', ['prodis' => $prodis]);
    }

    public function create()
    {
        return view('prodi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kode' => 'required|unique:prodi,kode',
        ]);

        Prodi::create($request->all());

        return redirect()->route('prodi.index')->with('success', 'Program Studi berhasil ditambahkan');
    }

    public function show($id)
    {
        $prodi = Prodi::find($id);
        return view('prodi.show', ['prodi' => $prodi]);
    }

    public function edit($id)
    {
        $prodi = Prodi::find($id);
        return view('prodi.edit', ['prodi' => $prodi]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'kode' => 'required|unique:prodi,kode,' . $id,
        ]);

        Prodi::find($id)->update($request->all());

        return redirect()->route('prodi.index')->with('success', 'Program Studi berhasil diperbarui');
    }

    public function destroy($id)
    {
        Prodi::find($id)->delete();

        return redirect()->route('prodi.index')->with('success', 'Program Studi berhasil dihapus');
    }
}
