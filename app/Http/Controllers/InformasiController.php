<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $informasis = \App\Models\Informasi::latest()->get();

    return view('admin.informasi.index', compact('informasis'));
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('admin.informasi.create');
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'judul' => 'required',
        'isi' => 'required',
        'tanggal' => 'required|date',
        'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $gambar = null;

    if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar')->store('informasi', 'public');
    }

    \App\Models\Informasi::create([
        'judul' => $request->judul,
        'isi' => $request->isi,
        'tanggal' => $request->tanggal,
        'gambar' => $gambar,
    ]);

    return redirect()->route('informasi.index')
        ->with('success', 'Informasi berhasil ditambahkan.');
}
    /**
     * Display the specified resource.
     */
    public function show(string $id)
{
    $informasi = \App\Models\Informasi::findOrFail($id);

    return view('admin.informasi.show', compact('informasi'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    $informasi = \App\Models\Informasi::findOrFail($id);

    return view('admin.informasi.edit', compact('informasi'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $request->validate([
        'judul' => 'required',
        'isi' => 'required',
        'tanggal' => 'required|date',
        'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $informasi = \App\Models\Informasi::findOrFail($id);

    $gambar = $informasi->gambar;

    if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar')->store('informasi', 'public');
    }

    $informasi->update([
        'judul' => $request->judul,
        'isi' => $request->isi,
        'tanggal' => $request->tanggal,
        'gambar' => $gambar,
    ]);

    return redirect()->route('informasi.index')
        ->with('success', 'Informasi berhasil diperbarui.');
}
    /**
     * Remove the specified resource from storage.
     */
   public function destroy(string $id)
{
    $informasi = \App\Models\Informasi::findOrFail($id);

    $informasi->delete();

    return redirect()->route('informasi.index')
        ->with('success', 'Informasi berhasil dihapus.');
}
}
