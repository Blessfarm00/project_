<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.payment.payment',[
            'payments'=>Payment::latest()->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.payment.create',[
            'payments'=>Payment::all()
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
            'user'=>'required',
            'metode_pembayaran'=>'required',
            'status_pembayaran'=>'required',
            'jumlah_pembayaran'=>'required',

        ]);
        Payment::create($validatedData);
        return redirect('/payment-dashboard')->with('pesan','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment, $id)
    {
        return view('dashboard.payment.edit',[
            'payments' => Payment::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment, $id)
    {
        //
        $validatedData = $request->validate([
            'user'=>'required',
            'metode_pembayaran'=>'required',
            'status_pembayaran'=>'required',
            'jumlah_pembayaran'=>'required',
        ]);
        Payment::where('id',$id)->update($validatedData);
        return redirect('/payment-dashboard')->with('pesan','data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment, $id)
    {
        //
        Payment::destroy($id);
        return redirect('/payment-dashboard')->with('pesan','Data berhasil dihapus');
    }
}