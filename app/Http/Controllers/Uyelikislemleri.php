<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Uyelikislemleri extends Controller
{
    public function uyekayit(Request $uyebilgileri)
    {
        $uyebilgileri->validate([
            "adsoyad"=>"required|min:3|max:50",
            "mail"=>"required|email",
            "telefon"=>"required|min:10|max:11",
        ]);
        echo "form bilgileri filtreden başarıyla geçti";
    }
}
