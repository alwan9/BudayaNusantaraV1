<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Acara;
use App\Models\Artikel;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        // $data_artikel = Artikel::all();
           $data_artikel = Artikel::whereHas('approval', function ($query) {
            $query->where('approve', true); // atau 1 jika tipe datanya integer
        })->get();
        $data_acara = Acara::all();
        $top_user = User::all();
        // $acara = Acara::all();
        return view('profile.index', compact('data_artikel', 'data_acara', 'top_user'));
    }
    public function show($id)
    {
          $user = User::with(['artikel', 'acara'])->findOrFail($id);
     

        // Data tambahan
        $total_artikel = $user->artikel->count();
        $artikels = $user->artikel;
        $acaras = $user->acara;
        $total_acara = $user->acara->count();
       $acara_aktif = $user->acara ->where('tanggal_mulai', '!=', now()->toDateString())->count();
        return view('user-profile', compact(
            'user',
            'artikels',
            'acaras',
            'total_artikel',
            'total_acara',
            'acara_aktif'
        ));
    }
}