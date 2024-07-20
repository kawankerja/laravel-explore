<?php

namespace App\Imports;

use App\Models\Cities;
use App\Models\Countries;
// use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow; //untuk import data sesuai nama header di excel

class CitiesImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    // public function model(array $row)
    // {
    //     return new Cities([
    //         'name' => $row['nama'], //input sesuai header
    //         'country_id' => $row['negara'],
    //     ]);
    // }

    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            // tanpa relasi data
            Cities::create([
                'kota' => $row['kota'],
                'negara' => $row['negara'],
            ]);
        }
    }
}
