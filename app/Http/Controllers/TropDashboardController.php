<?php

namespace App\Http\Controllers;

use App\Models\Trop;
use Illuminate\Http\Request;

class TropDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.trop.trop',[
            'trops'=>Trop::latest()->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.trop.create',[
            'trops'=>Trop::all()
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
        $validatedData = $request->validate([
            'nama'=>'required',
            'jumlah_topup'=>'required',
            'bayar'=>'required',

        ]);
        Trop::create($validatedData);
        return redirect('/trop-dashboard')->with('pesan','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Trop $trop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Trop $trop, $id)
    {
        return view('dashboard.trop.edit',[
            'trops' => Trop::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trop $trop, $id)
    {
        //
        $validatedData = $request->validate([
            'nama'=>'required',
            'jumlah_topup'=>'required',
            'bayar'=>'required',

        ]);
        Trop::where('id',$id)->update($validatedData);
        return redirect('/trop-dashboard')->with('pesan','data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trop $trop, $id)
    {
        //
        Trop::destroy($id);
        return redirect('/trop-dashboard')->with('pesan','Data berhasil dihapus');
    }
}