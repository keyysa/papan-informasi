<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index()
    {
        $cards = Card::latest()->get();

        return view('admin.card.index', compact('cards'));
    }

    public function create()
    {
        return view('admin.card.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        Card::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        return redirect()->route('card.index')
            ->with('success', 'Card berhasil ditambahkan.');
    }

    public function edit(string $id)
    {
        $card = Card::findOrFail($id);

        return view('admin.card.edit', compact('card'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        $card = Card::findOrFail($id);

        $card->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        return redirect()->route('card.index')
            ->with('success', 'Card berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $card = Card::findOrFail($id);

        $card->delete();

        return redirect()->route('card.index')
            ->with('success', 'Card berhasil dihapus.');
    }
}