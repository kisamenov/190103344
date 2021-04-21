<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function changeLocal($locale)
    {
        session(['locale' => $locale]);
        App::setLocale($locale);
        return redirect()->back();
    }
}
