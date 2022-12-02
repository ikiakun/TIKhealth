<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NilaiController extends Controller
{
   
    public function nilai(Request $request)
    {
        $nama = $request->nama;
        $nis = $request->nis;
        $tugas = $request->tugas;
        $quiz = $request->quiz;
        $uts = $request->uts;
        $uas = $request->uas;

        $nilai = new Hitung($tugas, $quiz, $uts, $uas);
        $data = [
            'hasNama' => $nama,
            'hasNis' => $nis,
            'hasNilai' => $nilai,
        ];

        return view('nilai', compact('data'));
    }

}

class Hitung {
    public $tugas;
    public $quiz;
    public $uts;
    public $uas;


    public function __construct ($tugas, $quiz, $uts, $uas){
        $this->tugas = $tugas;
        $this->quiz = $quiz;
        $this->uts = $uts;
        $this->uas = $uas;
    }

    function nilaiAkhir() {
        return $this->tugas*20/100 +
         $this->quiz*10/100 +
         $this->uts*30/100 +
         $this->uas*40/100;
    }
};