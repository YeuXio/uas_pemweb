<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangWebController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        return view('barang.index', compact('barangs'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'kode' => 'required|string|unique:barangs,kode',
            'stok' => 'required|integer',
        ]);

        Barang::create($validated);

        return redirect('/barang')->with('success', 'Barang berhasil ditambahkan');
    }
}
