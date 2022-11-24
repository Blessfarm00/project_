<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use App\Models\User;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class BeritaDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.berita.berita',[
            'beritas'=>Berita::latest()->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.berita.create',[
            'kategoris'=>Kategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'title'=>'required',
            'kategori_id'=>'required',
            'body'=>'required'
        ]);
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body),80);
        $validatedData['user_id'] = auth()->user()->id;
        Berita::create($validatedData);
        return redirect('/berita-dashboard')->with('pesan','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori, $id)
    {
        return view('dashboard.berita.edit',[
            'beritas' => Berita::find($id),
            'kategoris' => Kategori::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori, $id)
    {
        $validatedData = $request->validate([
            'title'=>'required',
            'kategori_id'=>'required',
            'body'=>'required'

        ]);
        $validatedData['user_id'] = FacadesAuth::user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body),80);
        Berita::where('id',$id)->update($validatedData);
        return redirect('/berita-dashboard')->with('pesan','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Berita::destroy($id);
        return redirect('/berita-dashboard')->with('pesan','Data berhasil dihapus');
    }
}
