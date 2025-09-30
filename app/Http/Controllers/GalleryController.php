<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $images = Image::all(); // ambil semua gambar
        return view('gallery.index', compact('images'));
    }
}