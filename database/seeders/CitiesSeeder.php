<?php

namespace Database\Seeders;

use App\Models\Cities;
use App\Models\Countries;
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
        $countries = Countries::all();

        // Data kota beserta country_id
        $cities = [
            ['name' => 'Jakarta', 'country_id' => $countries->where('name', 'Indonesia')->first()->id],
            ['name' => 'Tokyo', 'country_id' => $countries->where('name', 'Jepang')->first()->id],
            ['name' => 'New York', 'country_id' => $countries->where('name', 'Amerika Serikat')->first()->id],
            ['name' => 'Rio de Janeiro', 'country_id' => $countries->where('name', 'Brasil')->first()->id],
            ['name' => 'Toronto', 'country_id' => $countries->where('name', 'Kanada')->first()->id],
            ['name' => 'Madrid', 'country_id' => $countries->where('name', 'Spanyol')->first()->id],
            ['name' => 'Paris', 'country_id' => $countries->where('name', 'Perancis')->first()->id],
            ['name' => 'Berlin', 'country_id' => $countries->where('name', 'Jerman')->first()->id],
            ['name' => 'Sydney', 'country_id' => $countries->where('name', 'Australia')->first()->id],
            ['name' => 'Rome', 'country_id' => $countries->where('name', 'Italia')->first()->id],
            // Tambahkan data kota lainnya di sini jika perlu
        ];

        // Buat data kota berdasarkan array di atas
        foreach ($cities as $cityData) {
            Cities::create($cityData);
        }

    }
}
