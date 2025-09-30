<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        // $data_artikel = Artikel::all();

        $data_artikel = Artikel::with('images')
            ->whereHas('approval', function ($query) {
                $query->where('approve', true); // atau 1 jika tipe datanya integer
            })->get();

        $detail_artikel = Artikel::all();
        return view('artikel.index', compact('data_artikel', 'detail_artikel'));
    }


    public function show($id)
    {
        $data_artikel = Artikel::with('images')
            ->whereHas('approval', function ($query) {
                $query->where('approve', true); // atau 1 jika tipe datanya integer
            })
            ->latest()
            ->take(13)
            ->get();
        $detail_artikel = Artikel::with('images')->where('id', $id)->firstOrFail();
        return view('artikel.detail', compact('detail_artikel', 'data_artikel'));
    }
}