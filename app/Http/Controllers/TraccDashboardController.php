<?php

namespace App\Http\Controllers;

use App\Models\Tracc;
use Illuminate\Http\Request;

class TraccDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.tracc.tracc',[
            'traccs'=>Tracc::latest()->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tracc.create',[
            'traccs'=>Tracc::all()
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
            'status'=>'required',

        ]);
        Tracc::create($validatedData);
        return redirect('/tracc-dashboard')->with('pesan','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Tracc $tracc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Tracc $tracc, $id)
    {
        return view('dashboard.tracc.edit',[
            'traccs' => Tracc::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tracc $tracc, $id)
    {
        //
        $validatedData = $request->validate([
            'nama'=>'required',
            'jenis_game'=>'required',
            'status'=>'required',

        ]);
        Tracc::where('id',$id)->update($validatedData);
        return redirect('/tracc-dashboard')->with('pesan','data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tracc $tracc, $id)
    {
        //
        Tracc::destroy($id);
        return redirect('/tracc-dashboard')->with('pesan','Data berhasil dihapus');
    }
}