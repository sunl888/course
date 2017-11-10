<?php

namespace App\Http\Controllers\Frontend\Web;


use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        //dd(clean("<video>sssadsf<p>1111111</p>asdsdf</video>"));
        return view(config('template.theme_namespace') . '::index');
    }
}
