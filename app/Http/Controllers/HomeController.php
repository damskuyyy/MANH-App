<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }

    public function ekstra()
    {
        return view('front.ekstra');
    }

    public function profil()
    {
        return view('front.ekstra');
    }

    public function galeri()
    {
        return view('front.ekstra');
    }

}
