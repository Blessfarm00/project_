@extends('dashboard.layout.main')
@section('container')
<br/>
<center><h1>Transaksi Account</h1></center>
@if (session()->has('pesan'))
<div class="alert alert-success" role="alert">
 {{session('pesan')}}
</div>

@endif
<a href="/payment-dashboard/create" class="btn btn-primary">Tambah pilih metode</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">User</th>
        <th scope="col">Metode Pembayaran</th>
        <th scope="col">Status Pembayaran</th>
        <th scope="col">Jumlah Pembayaran</th>
        <th scope="col">Aksi</th>
    </tr>
</thead>
    @foreach ($payments as $payment)
    <tbody>
    <tr>
        <td scope="row">{{ $loop->iteration }}</td>
        <td>{{ $payment->nama }}</td>
        <td>{{ $payment->metode_pembayaran }}</td>
        <td>{{ $payment->status_pembayaran }}</td>
        <td>{{ $payment->jumlah_pembayaran }}</td>
        <td>
            <a href="/payment-dashboard/{{ $payment->id }}/edit" class="btn btn-warning">Edit</a>
            <form action="/payment-dashboard/{{ $payment->id }}" method="POST" class="d-inline">
                @method('DELETE')
                @csrf
                
                <button class="btn btn-danger" type="submit" onclick="return confirm
                ('Yakin akan menghapus data ?')">Delete</button>
</form>
        

        </td>
       </tr>
    @endforeach
</tbody>
</table>
{{ $payments->links()}}
@endsection
