<?php

// app/Http/Controllers/DosenController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::all();
        return view('dosen.index', ['dosens' => $dosens]);
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nidn' => 'required|unique:dosen,nidn',
            'jabatan' => 'required',
        ]);

        Dosen::create($request->all());

        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil ditambahkan');
    }

    public function show($id)
    {
        $dosen = Dosen::find($id);
        return view('dosen.show', ['dosen' => $dosen]);
    }

    public function edit($id)
    {
        $dosen = Dosen::find($id);
        return view('dosen.edit', ['dosen' => $dosen]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'nidn' => 'required|unique:dosen,nidn,' . $id,
            'jabatan' => 'required',
        ]);

        Dosen::find($id)->update($request->all());

        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil diperbarui');
    }

    public function destroy($id)
    {
        Dosen::find($id)->delete();

        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil dihapus');
    }
}
