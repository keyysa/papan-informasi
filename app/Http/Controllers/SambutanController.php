<?php

namespace App\Http\Controllers;

use App\Models\Sambutan;
use Illuminate\Http\Request;

class SambutanController extends Controller
{
    public function index()
    {
        $sambutans = Sambutan::latest()->get();

        return view('admin.sambutan.index', compact('sambutans'));
    }

    public function create()
    {
        return view('admin.sambutan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $gambar = null;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')
                ->store('sambutan', 'public');
        }

        Sambutan::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $gambar,
        ]);

        return redirect()->route('sambutan.index')
            ->with('success', 'Sambutan berhasil ditambahkan.');
    }

    public function edit(string $id)
    {
        $sambutan = Sambutan::findOrFail($id);

        return view('admin.sambutan.edit', compact('sambutan'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $sambutan = Sambutan::findOrFail($id);

        $data = [
            'judul' => $request->judul,
            'isi' => $request->isi,
        ];

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')
                ->store('sambutan', 'public');
        }

        $sambutan->update($data);

        return redirect()->route('sambutan.index')
            ->with('success', 'Sambutan berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $sambutan = Sambutan::findOrFail($id);

        $sambutan->delete();

        return redirect()->route('sambutan.index')
            ->with('success', 'Sambutan berhasil dihapus.');
    }
}