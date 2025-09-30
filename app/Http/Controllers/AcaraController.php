<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Acara;
use App\Models\Artikel;
use Illuminate\Http\Request;

class AcaraController extends Controller
{
    public function index()
    {
        $today = Carbon::today()->toDateString();

        $data_acara = Acara::
        // whereDate('tanggal_mulai', '<=', $today)
            // ->whereDate('tanggal_akhir', '>=', $today)
orderByDesc('tanggal_mulai')
            ->get();

        $acara_berlangsung = Acara::whereDate('tanggal_mulai', $today)->get();
        $acara_selesai = Acara::whereDate('tanggal_akhir', '<', $today)->get();

        return view('acara.index', compact('data_acara', 'acara_berlangsung', 'acara_selesai'));
    }

    public function show($id)
    {
        $data_artikel = Artikel::latest()->take(10)->get();
        $data_acara = Acara::latest()->take(5)->get();
        $data_user = User::all();
        $detail_acara = Acara::where('id', $id)->firstOrFail();
        return view('acara.detail', compact('detail_acara', 'data_acara', 'data_artikel', 'data_user'));
    }

    public function search(Request $request)
    {
        $query = $request->q;
        $data_acara = Acara::all();
        $results = Acara::where('judul', 'like', '%' . $query . '%')
            ->orWhere('lokasi', 'like', '%' . $query . '%')
            ->orWhere('des_singkat', 'like', '%' . $query . '%')
            ->get();

        return view('acara.index', compact('results', 'data_acara'));
    }
}