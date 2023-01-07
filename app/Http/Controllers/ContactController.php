<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $attr = $request->only('name', 'email', 'subject', 'message');
        \DB::table('contacts')->insert($attr);
    }
}
