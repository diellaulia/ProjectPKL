<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use function PHPUnit\Framework\fileExists;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $informations = Informasi::orderBy('created_at', 'DESC')->get();

        return view('admin.informasi.index', compact('informations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.informasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attr = $request->all();
        $attr['slug'] = Str::slug($attr['judul'], '-');

        if ($request->hasFile('gambar')) {

            $reqImage = $request->file('gambar');
            $imageName = time() . '-' . $reqImage->getClientOriginalName();

            $dictionaryImage = $reqImage->storeAs('/public/information', $imageName);

            $attr['gambar'] = $imageName;

            Informasi::create($attr);
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Informasi $informasi)
    {
        return view('admin.informasi.edit', compact('informasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $attr = $request->all();
        $attr['slug'] = Str::slug($attr['judul'], '-');


        if ($request->hasFile('gambar')) {

            // $destinatnionImage = '/public/information/' . $;

            $reqImage = $request->file('gambar');

            $imageName = time() . '-' . $reqImage->getClientOriginalName();

            $dictionaryImage = $reqImage->storeAs('/public/information', $imageName);
            $attr['gambar'] = $imageName;

            dd($attr);
            Informasi::update($attr);
            return back();
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Informasi $informasi)
    {

        if ($informasi->gambar) {
            Storage::delete('/public/information/' . $informasi->gambar);
        }

        $informasi->delete();

        return back();
    }
}
