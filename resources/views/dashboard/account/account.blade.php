@extends('dashboard.layout.main')
@section('container')
<br/>
<center><h1>Data Account</h1></center>
@if (session()->has('pesan'))
<div class="alert alert-success" role="alert">
 {{session('pesan')}}
</div>

@endif
<a href="/account-dashboard/create" class="btn btn-primary">Tambah Data</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Nama Account</th>
        <th scope="col">Jenis Game</th>
        <th scope="col">Harga</th>
        <th scope="col">Aksi</th>
    </tr>
</thead>
    @foreach ($accounts as $account)
    <tbody>
    <tr>
        <td scope="row">{{ $loop->iteration }}</td>
        <td>{{ $account->nama }}</td>
        <td>{{ $account->jenis_game }}</td>
        <td>{{ $account->harga }}</td>
        <td>
            <a href="/account-dashboard/{{ $account->id }}/edit" class="btn btn-warning">Edit</a>
            <form action="/account-dashboard/{{ $account->id }}" method="POST" class="d-inline">
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
{{ $accounts->links()}}
@endsection
