<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class HomeController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        return view('welcome', compact('produks'));
    }

    public function profil()
    {
        return view('profil');
    }

    public function artikel()
    {
        return view('artikel');
    }

    public function galeri()
    {
        return view('galeri');
    }

    public function contact()
    {
        return view('contact');
    }
}