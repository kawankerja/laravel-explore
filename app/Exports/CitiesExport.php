<?php

namespace App\Exports;

use App\Models\Cities;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class CitiesExport implements FromQuery, WithMapping, WithHeadings, ShouldAutoSize
{
    use Exportable;
    private $currentRow = 1;
    /**
    * @return \Illuminate\Database\Query\Buildern
    */
    public function query()
    {
        return Cities::query();
    }
    // untuk menselect data yang ditampilkan di excel
    public function map($city): array {
        return [
            $this->currentRow++, //menambah urutan
            $city->kota,
            $city->negara,
        ];
    }
    // untuk membuat header atau judul
    public function headings(): array {
        return [
            'No',
            'Kota',
            'Negara',
        ];
    }
}
