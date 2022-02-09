<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Yonet extends Controller
{
    public function site()
    {
        $data["yazi1"]="PHP Türkiye";
        $data["yazi2"]="Web Sitemize Hoş Geldiniz";
        $data["yazi3"]="Hizmetlerimiz";
        $data["yazi4"]="web tasarım ve yazılım hizmetlerimiz";
        $data["yazi5"]="bize ulaşın";

        return view('web',$data);

    }

}
