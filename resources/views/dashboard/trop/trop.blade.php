@extends('dashboard.layout.main')
@section('container')
<br/>
<center><h1>Transaksi Account</h1></center>
@if (session()->has('pesan'))
<div class="alert alert-success" role="alert">
 {{session('pesan')}}
</div>

@endif
<a href="/trop-dashboard/create" class="btn btn-primary">Tambah Transaksi</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Nama Account</th>
        <th scope="col">Jumlah Top-up</th>
        <th scope="col">Bayar</th>
        <th scope="col">Aksi</th>
    </tr>
</thead>
    @foreach ($trops as $trop)
    <tbody>
    <tr>
        <td scope="row">{{ $loop->iteration }}</td>
        <td>{{ $trop->nama }}</td>
        <td>{{ $trop->jumlah_topup }}</td>
        <td>{{ $trop->bayar }}</td>
        <td>
            <a href="/trop-dashboard/{{ $trop->id }}/edit" class="btn btn-warning">Edit</a>
            <form action="/trop-dashboard/{{ $trop->id }}" method="POST" class="d-inline">
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
{{ $trops->links()}}
@endsection
