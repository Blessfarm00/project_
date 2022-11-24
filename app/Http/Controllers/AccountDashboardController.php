<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.account.account',[
            'accounts'=>Account::latest()->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.account.create',[
            'account'=>Account::all()
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
            'id'=> 'required',
            'nama'=>'required',
            'jenis_game'=>'required',
            'harga'=>'required',

        ]);
        Account::create($validatedData);
        return redirect('/account-dashboard')->with('pesan','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account, $id)
    {
        return view('dashboard.account.edit',[
            'accounts' => Account::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account, $id)
    {
        //
        $validatedData = $request->validate([
            'nama'=>'required',
            'jenis_game'=>'required',
            'harga'=>'required',

        ]);
        Account::where('id',$id)->update($validatedData);
        return redirect('/account-dashboard')->with('pesan','data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account, $id)
    {
        //
        Account::destroy($id);
        return redirect('/account-dashboard')->with('pesan','Data berhasil dihapus');
    }
}
