extends('dashboard.layout.main')
@section('container')

@if(session()->has('pesan'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('pesan')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

@endif

<table class="table table-bordered mt-5">
  <h2>Data Berita</h2>
  <a href="/berita-dashboard/create" class="btn btn-primary">Tambah Data Blog</a>

  <tr>
    <th>No</th>
    <th>Title</th>
    <th>User</th>
    <th>Kategori</th>
    <th>Gambar</th>
    <th>Excerpt</th>
    <th>Body</th>
    <th>Aksi</th>
  </tr>

  @foreach ($beritas as $berita)
  <tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $berita->title}}</td>
    <td>{{ $berita->user->name}}</td>
    <td>{{ $berita->kategori->nama}}</td>
    <td><img src="/images/{{ $berita->file_upload}}" alt=""></td>
    <td>{{ $berita->excerpt}}</td>
    <td>{{ $berita->body}}</td>
    <td>
      <a href="/berita-dashboard/{{ $berita->id }}/edit" class="btn btn-warning">Edit</a>
      <form class="d-inline" action="/berita-dashboard/{{$berita->id}}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin akan menghapus data?')">Hapus</button>
      </form>
      @error('alamat')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </td>
  </tr>
@endforeach
</table>
{{$beritas->links('pagination::bootstrap-5')}}

@endsection
