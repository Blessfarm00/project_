@extends('dashboard.layout.main')
@section('container')
<br/>
<center><h1>Data Top-Up</h1></center>
@if (session()->has('pesan'))
<div class="alert alert-success" role="alert">
 {{session('pesan')}}
</div>

@endif
<a href="/topup-dashboard/create" class="btn btn-primary">Tambah Transaksi</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Nama Account</th>
        <th scope="col">Jenis Game</th>
        <th scope="col">Jumlah Topup</th>
        <th scope="col">Aksi</th>
    </tr>
</thead>
    @foreach ($topups as $topup)
    <tbody>
    <tr>
        <td scope="row">{{ $loop->iteration }}</td>
        <td>{{ $topup->nama }}</td>
        <td>{{ $topup->jenis_game }}</td>
        <td>{{ $topup->jumlah_topup }}</td>
        <td>
            <a href="/topup-dashboard/{{ $topup->id }}/edit" class="btn btn-warning">Edit</a>
            <form action="/topup-dashboard/{{ $topup->id }}" method="POST" class="d-inline">
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
{{ $topups->links()}}
@endsection