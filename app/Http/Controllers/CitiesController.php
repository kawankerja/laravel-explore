<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Cities;
use App\Models\Countries;
use Illuminate\Http\Request;
use App\Exports\CitiesExport;
use App\Imports\CitiesImport;
use Maatwebsite\Excel\Facades\Excel;

class CitiesController extends Controller
{
    public function index(){
        $kota = Cities::with('country')->get();
        $countries = Countries::all();
        // dd($kota);
        return view('city', compact('kota', 'countries'));
    }

    public function export(){
        // return Excel::download(new CitiesExport, 'City-'.Carbon::now()->timestamp.'.xlsx');
        return (new CitiesExport)->download('City-'.Carbon::now()->timestamp.'.xlsx');
    }

    public function import(Request $request){
        Excel::import(new CitiesImport, $request->file('import-excel'));
        return redirect('/kota');
    }
}
