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
            // untuk mengubah string menjadi id note tidak perlu menggunakan ini jika data tidak berelasi
                $cities = Countries::where('name', $row['negara'])->first();

                if($cities != null){
                    Cities::create([
                        'name' => $row['nama'],
                        'country_id' => $cities['id'],
                    ]);
                } else {
                    dd('masuk ke sini');
                }
            // tanpa relasi data
            // Cities::create([
            //     'name' => $row['nama'],
            //     'country_id' => $row['negara'],
            // ]);
        }
    }
}
