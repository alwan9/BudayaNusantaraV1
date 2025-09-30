<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use App\Models\Dokumentasi;
use App\Models\Laporkan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaporkanController extends Controller
{
    
     public function create(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'acara_id'       => 'required|exists:acara,id',
            'tanggal'        => 'required|date',
            'keterangan'     => 'required|string|max:500',
            'jenis_keluhan'  => 'required|string|max:100',
            'img1'           => 'nullable|image|mimes:jpg,jpeg,png,jfif|max:2048',
            'img2'           => 'nullable|image|mimes:jpg,jpeg,png,jfif|max:2048',
            'img3'           => 'nullable|image|mimes:jpg,jpeg,png,jfif|max:2048',
            'video'          => 'nullable|mimetypes:video/mp4,video/avi,video/mpeg|max:10240',
        ]);

        // Get the logged-in user
        $user = Auth::user();
        if (!$user) {
            return response()->json([
                'message' => 'Unauthorized. Please log in first.'
            ], 401);
        }

        // Find acara to get its creator
        $acara = Acara::findOrFail($validated['acara_id']);

        // Handle file uploads (store outside storage folder)
        $uploadPath = public_path('uploads/dokumentasi');
        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0777, true);
        }

        $dataDokumentasi = [];
        foreach (['img1', 'img2', 'img3', 'video'] as $file) {
            if ($request->hasFile($file)) {
                $filename = time() . "_{$file}." . $request->file($file)->getClientOriginalExtension();
                $request->file($file)->move($uploadPath, $filename);
                $dataDokumentasi[$file] = "uploads/dokumentasi/" . $filename;
            }
        }

        // Create dokumentasi record
        $dokumentasi = Dokumentasi::create($dataDokumentasi);

        // Create laporan record
        $laporkan = Laporkan::create([
            'acara_id'           => $validated['acara_id'],
            'tanggal'            => $validated['tanggal'],
            'user_pembuat_acara' => $acara->owner ?? null,
            'user_pelapor'       => $user->id,
            'keterangan'         => $validated['keterangan'],
            'jenis_keluhan'      => $validated['jenis_keluhan'],
            'dokumentasi_id'     => $dokumentasi->id,
        ]);

        return response()->json([
            'message' => 'Laporan berhasil dibuat.',
            'data'    => $laporkan->load('dokumentasi'),
        ], 201);
    }
}