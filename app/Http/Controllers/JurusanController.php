<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JurusanController extends Controller
{
    public function index()
    {
        $data = [
            "jurusans" => Jurusan::all()
        ];

        return view('jurusan.index', $data);
    }

    public function create()
    {
        return view('jurusan.create');
    }

    public function store(Request $request)
    {
        // Validasi input dari form
        $validatedData = $request->validate([
            'nama_jurusan' => 'required',
            'kode_jurusan' => 'required|unique:jurusans',
            'kapasitas_jurusan' => 'required|numeric'
        ]);

        // Simpan data ke dalam database
        Jurusan::create($validatedData);

        return redirect()->route('jurusan.index')->with('success', 'Jurusan berhasil ditambahkan');
    }

    public function edit(Jurusan $jurusan)
    {
        return view('jurusan.edit', compact('jurusan'));
    }

    public function update(Request $request, Jurusan $jurusan)
    {
        // Validasi input dari form
        $validatedData = $request->validate([
            'nama_jurusan' => 'required',
            'kode_jurusan' => 'required|unique:jurusans,kode_jurusan,' . $jurusan->id,
            'kapasitas_jurusan' => 'required|numeric'
        ]);

        // Perbarui data di dalam database
        $jurusan->update($validatedData);

        return redirect()->route('jurusan.index')->with('success', 'Jurusan berhasil diperbarui');
    }

    public function destroy(Jurusan $jurusan)
    {
        // Hapus data dari database
        $jurusan->delete();

        return redirect()->route('jurusan.index')->with('success', 'Jurusan berhasil dihapus');
    }
}
