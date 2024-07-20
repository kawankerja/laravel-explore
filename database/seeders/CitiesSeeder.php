<?php

namespace Database\Seeders;

use App\Models\Cities;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data kota beserta nama negara
        $cities = [
            ['kota' => 'Jakarta', 'negara' => 'Indonesia'],
            ['kota' => 'Tokyo', 'negara' => 'Jepang'],
            ['kota' => 'New York', 'negara' => 'Amerika Serikat'],
            ['kota' => 'Rio de Janeiro', 'negara' => 'Brasil'],
            ['kota' => 'Toronto', 'negara' => 'Kanada'],
            ['kota' => 'Madrid', 'negara' => 'Spanyol'],
            ['kota' => 'Paris', 'negara' => 'Perancis'],
            ['kota' => 'Berlin', 'negara' => 'Jerman'],
            ['kota' => 'Sydney', 'negara' => 'Australia'],
            ['kota' => 'Rome', 'negara' => 'Italia'],
            // Tambahkan data kota lainnya di sini jika perlu
        ];

        // Buat data kota berdasarkan array di atas
        foreach ($cities as $cityData) {
            Cities::create($cityData);
        }
    }
}
