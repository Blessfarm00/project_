@extends('dashboard.layout.main')
@section('container')
<br/>
<center><h1>Transaksi Account</h1></center>
@if (session()->has('pesan'))
<div class="alert alert-success" role="alert">
 {{session('pesan')}}
</div>

@endif
<a href="/tracc-dashboard/create" class="btn btn-primary">Tambah Data</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Nama Account</th>
        <th scope="col">Jenis Game</th>
        <th scope="col">Status</th>
        <th scope="col">Aksi</th>
    </tr>
</thead>
    @foreach ($traccs as $tracc)
    <tbody>
    <tr>
        <td scope="row">{{ $loop->iteration }}</td>
        <td>{{ $tracc->nama }}</td>
        <td>{{ $tracc->jenis_game }}</td>
        <td>{{ $tracc->status }}</td>
        <td>
            <a href="/tracc-dashboard/{{ $tracc->id }}/edit" class="btn btn-warning">Edit</a>
            <form action="/tracc-dashboard/{{ $tracc->id }}" method="POST" class="d-inline">
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
{{ $traccs->links()}}
@endsection
