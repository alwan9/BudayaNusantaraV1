<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Acara;
use App\Models\Artikel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data_artikel = Artikel::whereHas('approval', function ($query) {
            $query->where('approve', true);
        })->with(['images'])->take(6)->get(); // Tambahkan 'images' untuk eager load gambar

        $data_acara = Acara::latest()->take(10)->get();
        $top_user = User::latest()->take(5)->get();

        $total_acara = Acara::count();
        $total_artikel = Artikel::count();
        $total_user = User::count();


        // $acara = Acara::all();
        return view('index', compact(
            'data_artikel',
            'data_acara',
            'top_user',
            'total_acara',
            'total_artikel',
            'total_user'
        ));
    }

    public function kalender()
{
    $data_acara = Acara::with('images')->get();
    return view('kalender', compact('data_acara'));
}

}