<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Pastikan metode ini ada
    public function home()
    {
        return view('home'); // Mengarah ke resources/views/home.blade.php
    }
}
