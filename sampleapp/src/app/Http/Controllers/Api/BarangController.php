<?php

namespace App\Http\Controllers\Api;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        return Barang::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'kode' => 'required|string|unique:barangs,kode',
            'stok' => 'required|integer',
        ]);

        return Barang::create($validated);
    }

    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();

        return response()->json(['message' => 'Barang deleted']);
    }
}
