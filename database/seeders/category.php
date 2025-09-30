<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class category extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Seni',
            'Bahasa',
            'Sastra',
            'Musik dan Tari',
            'Adat dan Tradisi',
            'Pakaian dan Mode',
            'Kuliner',
            'Arsitektur',
            'Kepercayaan dan Agama',
            'Olahraga dan Permainan Tradisional',
            'Teknologi dan Kegiatan Ekonomi Tradisional',
            'Nilai dan Norma Sosial',
            'Sejarah dan Warisan Budaya',
            'Media dan Hiburan',
        ];

        $mainCategoryIds = [];

        // Insert main categories
        foreach ($categories as $category) {
            $id = DB::table('kategori')->insertGetId([
                'nama' => $category,
                
            ]);
            $mainCategoryIds[$category] = $id;
        }
    }
}
