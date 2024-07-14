<?php

namespace Database\Seeders;

use App\Models\Countries;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CoutrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            'Indonesia',
            'Jepang',
            'Amerika Serikat',
            'Brasil',
            'Kanada',
            'Spanyol',
            'Perancis',
            'Jerman',
            'Australia',
            'Italia',
            // Anda dapat menambahkan lebih banyak negara di sini jika Anda mau
        ];

        foreach ($countries as $countryName) {
            Countries::create([
                'name' => $countryName,
                // Tambahkan kolom lainnya jika ada
            ]);
        }
    }
}
