<?php

namespace App\Http\Controllers;

use App\Models\Topup;
use Illuminate\Http\Request;

class TopupDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.topup.topup',[
            'topups'=>Topup::latest()->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.topup.create',[
            'topups'=>Topup::all()
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
            'jenis_game'=>'required',
            'jumlah_topup'=>'required',

        ]);
        Topup::create($validatedData);
        return redirect('/topup-dashboard')->with('pesan','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Topup $topup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Topup $topup, $id)
    {
        return view('dashboard.topup.edit',[
            'topups' => Topup::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Topup $topup, $id)
    {
        //
        $validatedData = $request->validate([
            'nama'=>'required',
            'jenis_game'=>'required',
            'jumlah_topup'=>'required',

        ]);
        Topup::where('id',$id)->update($validatedData);
        return redirect('/topup-dashboard')->with('pesan','data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topup $topup, $id)
    {
        //
        Topup::destroy($id);
        return redirect('/topup-dashboard')->with('pesan','Data berhasil dihapus');
    }
}
