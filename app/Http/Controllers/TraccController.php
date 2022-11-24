<?php

namespace App\Http\Controllers;

use App\Models\Tracc;
use Illuminate\Http\Request;

class TraccController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('traac.index',[
            'traacs' => Tracc::all()
          ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tracc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData=$request->validate([
            'id '=>'required'
          ]);
          Tracc::create($validateData);
          return redirect('/traac');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tracc  $tracc
     * @return \Illuminate\Http\Response
     */
    public function show(Tracc $tracc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tracc  $tracc
     * @return \Illuminate\Http\Response
     */
    public function edit(Tracc $tracc)
    {
        return view('tracc.edit',[
            'traccs'=>$tracc
          ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tracc  $tracc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tracc $tracc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tracc  $tracc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tracc $tracc)
    {
        //
    }
}
