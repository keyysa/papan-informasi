<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\Sambutan;

class PublicController extends Controller
{
  public function home()
{
    $informasis = Informasi::latest()->take(3)->get();

    $sliders = \App\Models\Slider::latest()->get();

    $cards = \App\Models\Card::latest()->take(3)->get();

    $sambutan = Sambutan::latest()->first();

    return view('public.home', compact(
        'informasis',
        'sliders',
        'cards',
        'sambutan'
    ));
}

    public function index()
    {
        $informasis = Informasi::latest()->get();

        return view('public.index', compact('informasis'));
    }

    public function show($id)
    {
        $informasi = Informasi::findOrFail($id);

        return view('public.show', compact('informasi'));
    }
}