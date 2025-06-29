<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datakampus;

class DataKampusController extends Controller
{
    // ✅ Ambil semua data kampus
    public function index()
    {
        $data = Datakampus::orderBy('created_at', 'desc')->get();
        return response()->json($data);
    }

    // ✅ Ambil detail kampus
    public function show($id)
    {
        $kampus = Datakampus::find($id);

        if (!$kampus) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        return response()->json($kampus);
    }

    // ✅ Tambah data kampus
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'no_telpon' => 'required',
            'kategori' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'jurusan' => 'required',
        ]);

        // Perbaikan: gunakan model yang benar
        $kampus = Datakampus::create($request->all());

        return response()->json([
            'message' => 'Data kampus berhasil ditambahkan',
            'data' => $kampus
        ], 201);
    }

    // ✅ Update data kampus
    public function update(Request $request, $id)
    {
        $kampus = Datakampus::find($id);

        if (!$kampus) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        $kampus->update($request->all());

        return response()->json([
            'message' => 'Data kampus berhasil diperbarui',
            'data' => $kampus
        ]);
    }

    // ✅ Hapus data kampus
    public function destroy($id)
    {
        $kampus = Datakampus::find($id);

        if (!$kampus) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        $kampus->delete();

        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}
