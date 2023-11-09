<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
        $a = 8;
        $b = 5;
        $c = $a * $b;
        return "<h1> Hasil Perkalian = " . $c . "</h1>";
    }

    public function biodata(){
        $nama = "Diki Alfaribi Hadi";
        $alamat = "Surabaya";
        $umur = 18;
        return view ('biodata', ['nama'=> $nama, 'alamat'=> $alamat,'umur'=> $umur, ]);
    }
}
