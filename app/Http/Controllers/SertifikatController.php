<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class SertifikatController extends Controller
{
    public function index(){
        $key = [
            'name' => "supriadi" ,
            'role' => 'Fullstack Developer',
            'start_date' => '15 Juli 2024',
            'end_date' => '15 Oktober 2024',
            'date' => Carbon::now()->isoFormat('DD MMMM YYYY'),
            'certificate_number' => 'CERT/007/KK/Dev/2024',
        ];
        return view('sertifikat.sertifikat', compact('key'));
    }

    public function showSertifikat(){
        $key = [
            'name' => "supriadi" ,
            'role' => 'Fullstack Developer',
            'start_date' => '15 Juli 2024',
            'end_date' => '15 Oktober 2024',
            'date' => Carbon::now()->isoFormat('DD MMMM YYYY'),
            'certificate_number' => 'CERT/007/KK/Dev/2024',
        ];
        return view('sertifikat.show', compact('key'));
    }

    public function createPDF(Request $request){
        // $user = User::find(5);
        $key = [
            'name' => "supriadi" ,
            'role' => 'Fullstack Developer',
            'start_date' => '15 Juli 2024',
            'end_date' => '15 Oktober 2024',
            'date' => Carbon::now()->isoFormat('DD MMMM YYYY'),
            'certificate_number' => 'CERT/007/KK/Dev/2024',
        ];

        $pdf = PDF::loadView('sertifikat/sertifikat', compact('key'))->setPaper('A4', 'landscape');

        // Tampilkan preview sertifikat sebelum di-download
        $name = $key['name'];
        $filename = $name . Carbon::now()->timestamp.'.pdf';
        return $pdf->stream($filename);
    }
}
