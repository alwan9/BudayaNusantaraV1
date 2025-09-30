<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Acara as AcaraModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Acara extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($x = 0; $x = 20; $x++){

            $image = Image::create([
                'img1'  => 'images/01K2PYKH6K30PETXWFTTEYG20X.jpeg',
                'img2'  => null,
                'img3'  => null,
                'video' => null,
                'jenis' => "acara",
            ]);
            
            // create acara record referencing the image
            AcaraModel::create([
                'judul'         => 'Festival Budaya Nusantara',
                'tanggal_mulai' => '2025-09-01',
                'tanggal_akhir' => '2025-09-05',
                'img'           => $image->id, // FK
                'lokasi'           => "Kawasan parkir Pura Uluwatu, Jl. Uluwatu, Pecatu, Kec. Kuta Sel., Kabupaten Badung, Bali 80361", // FK
                'des_singkat'   => 'Festival budaya yang menampilkan seni dan tradisi.',
                'detail_acara'  => 'Menampilkan tari tradisional, kuliner, dan musik daerah.',
                'htm'           => 50000,
                'no_panitia'    => '08123456789',
                'kategori'      => 'Budaya',
                'asal'          => 'Bali',
                'owner'          => rand(516,1030),

            ]);  
        }
    }
}