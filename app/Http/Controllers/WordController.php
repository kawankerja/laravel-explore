<?php

namespace App\Http\Controllers;


use DOMDocument;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;


class WordController extends Controller
{
    public function index(){
        return view('word');
    }


    public function exportWord()
    {
        // Render HTML view menjadi string
        $html = view('word')->render();

        // Menggunakan DOMDocument untuk memparsing HTML
        $dom = new DOMDocument();
        @$dom->loadHTML($html);

        // Mengambil elemen body
        $body = $dom->getElementsByTagName('body')->item(0);

        // Mengambil teks dari elemen body
        $bodyContent = $dom->saveHTML($body);

        // Menghapus tag HTML dari konten body untuk mendapatkan teks plain
        $plainText = strip_tags($bodyContent);

        // Membuat objek PhpWord baru
        $phpWord = new PhpWord();

        // Menambahkan section ke dalam objek PhpWord
        $section = $phpWord->addSection();

        // Menambahkan konten teks dari body ke dalam section
        $section->addText($plainText);

        // Membuat objek writer untuk menyimpan dokumen
        $objWriter = IOFactory::createWriter($phpWord, 'Word2007');

        // Menentukan path dimana dokumen Word akan disimpan
        $filePath = storage_path('app/public/word.docx');

        // Menyimpan dokumen Word
        $objWriter->save($filePath);

        // Mengembalikan dokumen Word sebagai respon unduhan dan menghapus file setelah diunduh
        return response()->download($filePath)->deleteFileAfterSend(true);
    }

}
