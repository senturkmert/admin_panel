<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Iletisim extends Controller
{
    public function index()
    {
        return view('iletisim');

    }

    public function ekleme(Request $request)
    {
        $adsoyad=$request->adsoyad;
        $mail=$request->mail;
        $telefon=$request->telefon;
        $metin=$request->metin;

        echo $adsoyad."<br>";
        echo $mail."<br>";
        echo $telefon."<br>";
        echo $metin."<br>";
        \App\Models\Iletisim::create([
           "adsoyad"=>$adsoyad,
           "mail"=>$mail,
            "telefon"=>$telefon,
            "metin"=>$metin,
        ]);
        echo "ekleme işlemi başarılı";

    }
}
