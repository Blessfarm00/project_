@extends('dashboard.layout.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="py-3 text-center">Edit Berita</h3>
    <form action="/berita-dashboard/{{$beritas->id}}" method="POST">
    @method('PUT')    
    @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Input judul" value="{{old('title',$beritas->title)}}">
            @error('title')
                {{$message}}
            @enderror
            </div>
            <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-select" name="kategori_id" aria-label="Default select example">
                @foreach ($kategoris as $kategori)
                @if(old('kategori_id',$beritas->kategori_id)==$kategori->id)
                <option value="{{$kategori->id}}" selected="selected">{{$kategori->nama}}</option>
                @else
                    <option value="{{$kategori->id}}">{{$kategori->nama}}</option>
                    @endif
                @endforeach
              </select>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea name="body" id="body" rows="3" class="form-control">{{old('body',$beritas->body)}}</textarea>
            @error('body')
                {{$message}}
            @enderror
        </div>
        <button class="btn btn-success" type="submit">Update</button>
    </form>
        </div>
    </div>
    <script src="/js/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#body' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

@endsection