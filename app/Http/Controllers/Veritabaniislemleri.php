<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Veritabaniislemleri extends Controller
{
    public function ekle()
    {
        DB::table('bilgiler')->insert([
            "metin"=>"Göze Batan Çivi Çekici Yer"
        ]);
    }

    public function guncelle()
    {
        DB::table('bilgiler')->where("id",1)->update([
           "metin"=>"Göze Batan Çekiç Çiviyi Yer"
        ]);
    }

    public function sil()
    {
        DB::table('bilgiler')->where("id",2)->delete();
    }

    public function bilgiler()
    {
        $veriler=DB::table('bilgiler')->get();

        {
           /* foreach ($veriler as $key => $value)
            {
                echo $value->id." ".$value->metin;
                echo "<br>";
            }*/

            $veri=DB::table('bilgiler')->where("id",1)->first();
            echo $veri->metin;

        }
    }
}
