<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
     public function register(Request $request)
    {
        // Validasi dasar input
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Cek apakah nama sudah dipakai
        if (User::where('name', $validated['name'])->exists()) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Nama sudah terdaftar, silakan gunakan nama lain.',
            ], 409);
        }

        // Cek apakah email sudah dipakai
        if (User::where('email', $validated['email'])->exists()) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Email sudah terdaftar, silakan gunakan email lain.',
            ], 409);
        }

        // Buat user baru
        $user = User::create([
            'name'     => $validated['name'],
            'email'    => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        // Masukkan role secara langsung ke tabel model_has_roles
        DB::table('model_has_roles')->insert([
            'role_id'    => 3,                 // ID role default
            'model_type' => User::class,       // Path lengkap model User
            'model_id'   => $user->id,         // ID user yang baru dibuat
        ]);

        // Kembalikan response sukses
        return response()->json([
            'status'  => 'success',
            'message' => 'User berhasil didaftarkan dan role berhasil diberikan.',
            'user'    => $user,
        ], 201);
    }
}
