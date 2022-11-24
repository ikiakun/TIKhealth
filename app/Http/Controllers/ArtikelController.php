<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Artikel::all();
        return view('artikel.tampil', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Artikel::all();
        $data2 = Kategori::all();
        $data3 = User::all();
        return view('artikel.tambah', compact('data', 'data2', 'data3'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gambar = $request->file('foto')->store('img');

        Artikel::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'foto' => $gambar,
            'kategori_id' => $request->kategori_id,
            'user_id' => $request->user_id
        ]);


        return redirect('artikel');
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
    public function edit($id)
    {
        $data = Artikel::findOrFail($id);
        $data2 = Kategori::all();
        return view('artikel.edit', compact('data', 'data2'));
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
        $data = Artikel::findOrFail($id);
        $valid = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);
        $data->update($valid);

        if ($request->file('foto')){
            $file = $request->file('foto')->store('img');
            Storage::delete();
        } else {
            $data->update([
                'foto'=>$data->foto
            ]);
        }


        return redirect('artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Artikel::findOrFail($id);
        if ($data->foto){
            Storage::delete($data->foto);
        };
        
        $data->delete();
        return redirect('kategori');
    }
}
