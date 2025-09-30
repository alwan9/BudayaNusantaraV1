<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Excel as Excel;
use Maatwebsite\Excel\Facades\Excel as FacadesExcel;
use PhpOffice\PhpSpreadsheet\IOFactory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $spreadsheet = IOFactory::load(base_path('database\seeders\daftar-kabupaten-kota-di-indonesia-excel.xlsx'));
        $sheet = $spreadsheet->getActiveSheet();
        $rows = $sheet->toArray();

        array_shift($rows); // Remove header row

        foreach ($rows as $row) {
            $name = trim($row[0]);
            $email = strtolower(str_replace(' ', '', $name)) . '@gmail.com';
            $password = $row[1] ?? 'password'; // or use default if not provided

            User::create([
                'name' => $name,
                'email' => $email,
                'password' => bcrypt($password),
            ]);
        }
    }
}
