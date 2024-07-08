<?php

namespace App\Http\Controllers;

use App\Mail\KirimMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class KirimEmailController extends Controller
{
    public function index(){
        // jika ingin kirim email dari table user
          // $user =User::pluck('email');
        // foreach ($user as $email) {
        //     Mail::to('supradi765@gmail.com')->send(new KirimSertifikatMail());
        // // }
        //
        Mail::to('supradi765@gmail.com')->send(new KirimMail());
        dd('berhasil kirim email');
    }
}
