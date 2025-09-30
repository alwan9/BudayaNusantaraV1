<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Str;

class SeachController extends Controller
{
    public function searchAcara(Request $request)
    {

        $query = $request->get('q');

        $acara = Acara::where('judul', 'like', "%{$query}%")
            ->orWhere('lokasi', 'like', "%{$query}%")
            ->orWhere('des_singkat', 'like', "%{$query}%")
            ->get();

        if ($acara->count() > 0) {
            $html = '';
            foreach ($acara as $item) {
                $imgPath = $item->images && $item->images->img1
                    ? asset('storage/' . $item->images->img1)
                    : asset('assets/default-image.jpg');

                $status = $item->htm > 0
                    ? '<div class="lg:px-12 px-8 text-xs lg:text-xl py-2 rounded-bl-3xl text-zinc-100 shadow-sm bg-red-500 absolute right-0 top-0">Berbayar</div>'
                    : '<div class="px-12 py-2 text-xs lg:text-xl rounded-bl-3xl text-zinc-50 shadow-sm bg-green-500 absolute right-0 top-0">Tanpa Biaya</div>';

                $html .= '
        <a href="' . route('acara.show', $item->id) . '">
            <div class="relative z-[4] card-bg rounded-2xl w-min-[300px] lg:w-min-[500px] shadow-lg hover:bg-zinc-100 hover:cursor-pointer overflow-hidden hover:scale-105 bg-zinc-50 duration-200">
                <div class="w-full h-[150px] lg:h-[200px] bg-zinc-50 bg-center bg-cover" style="background-image: url(' . $imgPath . ')"></div>
                ' . $status . '
                <div class="p-3 lg:p-6">
                    <p class="flex items-center line-clamp-1 gap-2">
                        <svg class="min-w-[10px] max-w-[26px] w-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                            <g fill="none">
                                <path fill="url(#fluentColorLocationRipple162)" d="M14 12.5C14 14 11.314 15 8 15s-6-1-6-2.5S4.686 10 8 10s6 1 6 2.5" />
                                <path fill="url(#fluentColorLocationRipple160)" d="M8 1a5 5 0 0 0-5 5c0 1.144.65 2.35 1.393 3.372c.757 1.043 1.677 1.986 2.346 2.62a1.824 1.824 0 0 0 2.522 0c.669-.634 1.589-1.577 2.346-2.62C12.349 8.35 13 7.144 13 6a5 5 0 0 0-5-5" />
                                <path fill="url(#fluentColorLocationRipple161)" d="M9.5 6a1.5 1.5 0 1 1-3 0a1.5 1.5 0 0 1 3 0" />
                                <defs>
                                    <linearGradient id="fluentColorLocationRipple160" x1=".813" x2="8.969" y1="-2.285" y2="10.735" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#f97dbd" />
                                        <stop offset="1" stop-color="#d7257d" />
                                    </linearGradient>
                                    <linearGradient id="fluentColorLocationRipple161" x1="6.674" x2="8.236" y1="6.133" y2="7.757" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#fdfdfd" />
                                        <stop offset="1" stop-color="#fecbe6" />
                                    </linearGradient>
                                    <radialGradient id="fluentColorLocationRipple162" cx="0" cy="0" r="1"
                                        gradientTransform="matrix(9.42857 -1.66667 .69566 3.93547 7.571 11.667)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#7b7bff" />
                                        <stop offset=".502" stop-color="#a3a3ff" />
                                        <stop offset="1" stop-color="#ceb0ff" />
                                    </radialGradient>
                                </defs>
                            </g>
                        </svg>
                        <span class="line-clamp-1">' . e($item->lokasi) . '</span>
                    </p>
                    <h3 class="font-bold text-base md:text-xl mb-2 line-clamp-2 h-[50px] md:h-[70px]">' . e($item->judul) . '</h3>
                    <p class="text-zinc-900/60 text-sm line-clamp-2">' . e(Str::limit($item->des_singkat, 100)) . '</p>
                </div>
            </div>
        </a>';
            }
        } else {
            $html = '<p class="no-results text-center text-zinc-600">Tidak ada acara ditemukan</p>';
        }


        return $html;
    }
    public function searchArtikel(Request $request)
    {
        $query = $request->get('q');

        $artikel = Artikel::where('judul', 'like', "%{$query}%")
            ->orWhere('created_at', 'like', "%{$query}%")
            ->orWhere('des_singkat', 'like', "%{$query}%")
            ->whereHas('approval', function ($query) {
                $query->where('approve', true); // atau 1 jika tipe datanya integer
            })->get();

        if ($artikel->count() > 0) {
            $html = '';
            foreach ($artikel as $item) {
                $imgPath = $item->images && $item->images->img1
                    ? asset('storage/' . $item->images->img1)
                    : asset('assets/default-image.jpg');

                $tanggalAkhir = \Carbon\Carbon::parse($item->tanggal_akhir)->translatedFormat(' d F ');

                $html .= '
        <a href="' . route('artikel.show', $item->id) . '">
            <div class="hover:bg-orange-100 card-bg relative z-[99] rounded-3xl gap-5 w-full duration-200 hover:scale-105 hover:cursor-pointer">
                <div class="bg-center bg-cover rounded-2xl h-[190px] w-full bg-orange-100" style="background-image: url(' . $imgPath . ')"></div>
                <div class="mt-3 lg:mt-5 px-2 py-4">
                    <p class="flex text-xs md:text-base items-center gap-2 text-orange-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                            <path fill="currentColor"
                                d="M5.673 0a.7.7 0 0 1 .7.7v1.309h7.517v-1.3a.7.7 0 0 1 1.4 0v1.3H18a2 2 0 0 1 2 1.999v13.993A2 2 0 0 1 18 20H2a2 2 0 0 1-2-1.999V4.008a2 2 0 0 1 2-1.999h2.973V.699a.7.7 0 0 1 .7-.699M1.4 7.742v10.259a.6.6 0 0 0 .6.6h16a.6.6 0 0 0 .6-.6V7.756zm5.267 6.877v1.666H5v-1.666zm4.166 0v1.666H9.167v-1.666zm4.167 0v1.666h-1.667v-1.666zm-8.333-3.977v1.666H5v-1.666zm4.166 0v1.666H9.167v-1.666zm4.167 0v1.666h-1.667v-1.666zM4.973 3.408H2a.6.6 0 0 0-.6.6v2.335l17.2.014V4.008a.6.6 0 0 0-.6-.6h-2.71v.929a.7.7 0 0 1-1.4 0v-.929H6.373v.92a.7.7 0 0 1-1.4 0z" />
                        </svg>
                        ' . $tanggalAkhir . ' | Bali, Pulau Bali
                    </p>
                    <h1 class="text-base md:text-xl font-bold h-[50px] md:h-[70px]">' . e($item->judul) . '</h1>
                    <p class="opacity-50 line-clamp-4 text-xs md:text-base">' . e(Str::limit($item->des_singkat, 150)) . '</p>
                </div>
            </div>
        </a>';
            }
        } else {
            $html = '<p class="no-results">Tidak ada artikel ditemukan</p>';
        }


        return $html;
    }
    public function search(Request $request)
    {
        $query = $request->get('q');

        $artikel = Artikel::where('judul', 'like', "%{$query}%")
            ->orWhere('tangal_mulai', 'like', "%{$query}%")
            ->orWhere('des_singkat', 'like', "%{$query}%")
            ->whereHas('approval', function ($query) {
                $query->where('approve', true); // atau 1 jika tipe datanya integer
            })->get();
        $acara =  Acara::where('judul', 'like', "%{$query}%")
            ->orWhere('lokasi', 'like', "%{$query}%")
            ->orWhere('des_singkat', 'like', "%{$query}%")
            ->get();

        if ($artikel->count() > 0) {
            $html = '<ul class="search-results">';
            foreach ($artikel as $item) {
                $html .= '<li>
                    <strong>' . e($item->judul) . '</strong><br>
                    <small>' . e($item->tanggal_mulai) . '</small><br>
                    <span>' . e(Str::limit($item->des_singkat, 50)) . '</span>
                </li>';
            }
            $html .= '</ul>';
        } else if ($acara->count() > 0) {
            $html = '<ul class="search-results">';
            foreach ($acara as $item) {
                $html .= '<li>
                    <strong>' . e($item->judul) . '</strong><br>
                    <small>' . e($item->lokasi) . '</small><br>
                    <span>' . e(Str::limit($item->des_singkat, 50)) . '</span>
                </li>';
            }
            $html .= '</ul>';
        } else {
            $html = '<p class="no-results">Tidak ada acara atau artikel ditemukan</p>';
        }

        return $html;
    }
}