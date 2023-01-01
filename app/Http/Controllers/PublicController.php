<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    public function index()
    {

        return view('homepage');
    }

    public function informasi()
    {
        $informasi = DB::table('informasi')->get();
        return view('informasi', ['informasi' => $informasi]);
    }

    public function media()
    {
        return view('media');
    }

    public function about()
    {
        return view('about');
    }
    public function sejarah()
    {
        return view('sejarah');
    }
    public function visimisi()
    {
        return view('visimisi');
    }
    public function strategibisnis()
    {
        return view('strategibisnis');
    }
    public function kebijakanmutu()
    {
        return view('kebijakanmutu');
    }
    public function budayakerja()
    {
        return view('budayakerja');
    }
    public function wilayahkerja()
    {
        return view('wilayahkerja');
    }
    public function komisaris()
    {
        return view('komisaris');
    }
    public function direksi()
    {
        return view('direksi');
    }
    public function gm()
    {
        return view('gm');
    }
    public function kadiv()
    {
        return view('kadiv');
    }
    public function login()
    {
        return view('login');
    }
}
