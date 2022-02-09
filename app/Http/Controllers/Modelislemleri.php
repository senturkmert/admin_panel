<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bilgiler;

class Modelislemleri extends Controller
{
    public function liste()
    {
        $bilgi=Bilgiler::find(3);
        echo $bilgi->metin;
    }

    public function ekleme()
    {
        Bilgiler::create([
            "metin"=>"Model Dosyasından Eklendi",
        ]);
    }

    public function guncelleme()
    {
        Bilgiler::whereId(3)->update([
            "metin"=>"Kesinlikle Bu Alan Güncellenmiştir",
        ]);
    }

    public function silme()
    {
        Bilgiler::whereId(4)->delete();
    }


}
