<?php

namespace Database\Seeders;

use App\Models\Artikel;
use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
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
                'jenis' => "Artikel",
            ]);
            
            // create acara record referencing the image
            Artikel::create([
                'judul'         => 'Festival Budaya Nusantara',
                'tanggal_mulai' => '2025-09-01',
                'tanggal_akhir' => '2025-09-05',
                'img'           => $image->id, // FK 
                'des_singkat'   => 'Festival budaya yang menampilkan seni dan tradisi.',
                'detail_acara'  => 'Tari Kecak adalah tarian tradisional Bali yang terkenal, dikenal juga sebagai "tarian api" atau "tarian monyet" karena gerakannya yang menyerupai kera dan penggunaan suara "cak" sebagai musik pengiring. Tarian ini biasanya menceritakan kisah Ramayana, sebuah epos Hindu, dengan gerakan teatrikal yang diperankan oleh puluhan penari laki-laki yang duduk melingkar. Sejarah dan Asal Usul Tari Kecak dikembangkan pada tahun 1930-an oleh Wayan Limbak (seniman Bali) dan Walter Spies (seniman Jerman). Mereka mengambil inspirasi dari ritual sakral Sanghyang yang melibatkan suara vokal untuk memanggil roh, dan kemudian mengemasnya menjadi pertunjukan yang bisa dinikmati publik. Meskipun menjadi pertunjukan yang populer, Tari Kecak tetap mempertahankan nilai spiritualnya, yang terlihat dari gerakan dan cerita yang ditampilkan. Karakteristik Tari Kecak Irama "cak": Puluhan penari laki-laki duduk melingkar dan menyerukan "cak" secara harmonis sebagai pengiring tarian. Cerita Ramayana: Tarian ini seringkali mengangkat kisah Ramayana, dengan tokoh-tokoh seperti Rama, Shinta, Rahwana, dan Hanoman yang diperankan oleh penari. Formasi Melingkar: Penari duduk melingkar, menciptakan pola lantai yang khas untuk Tari Kecak. Tarian Api: Beberapa pementasan Tari Kecak melibatkan atraksi api, di mana penari menginjak bara api tanpa alas kaki, terkadang dalam kondisi kesurupan (trans). Tanpa Gamelan: Berbeda dengan tarian Bali lainnya, Tari Kecak tidak menggunakan gamelan, melainkan suara manusia sebagai pengiringnya. Makna dan Nilai Nilai Agama dan Spiritual: Tari Kecak memiliki makna keagamaan dan spiritual bagi masyarakat Bali, terkait dengan pemanggilan roh dan komunikasi dengan dewa. Nilai Moral: Tarian ini juga mengandung nilai moral, seperti kesetiaan, kesabaran, pengorbanan, dan kebaikan yang dicontohkan oleh tokoh-tokoh dalam Ramayana. Nilai Persatuan dan Gotong Royong: Penampilan Tari Kecak yang melibatkan banyak penari juga mencerminkan semangat persatuan dan gotong royong. Simbol Budaya: Tari Kecak telah menjadi simbol budaya Bali yang terkenal di seluruh dunia, memperkenalkan tradisi Bali kepada masyarakat global. Lokasi Pertunjukan Tari Kecak dapat dinikmati di berbagai lokasi di Bali, seperti: Uluwatu: Pementasan Tari Kecak di Pura Uluwatu sangat populer karena pemandangan matahari terbenam yang indah. Tanah Lot: Pementasan Tari Kecak juga dapat disaksikan di dekat Pura Tanah Lot. GWK (Garuda Wisnu Kencana): Pementasan Tari Kecak juga ada di kawasan GWK. Tempat lain: Banyak tempat lain di Bali yang menawarkan pertunjukan Tari Kecak, termasuk hotel dan tempat wisata lainnya.',
              
                'owner'          => rand(516,1030),

            ]);  
        }
    }
}