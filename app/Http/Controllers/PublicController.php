<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function informasi()
    {
        return view('informasi');
    }

    public function media()
    {
        return view('media');
    }
}
