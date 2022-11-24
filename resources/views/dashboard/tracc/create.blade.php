@extends('dashboard.layout.main')
@section('container')
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="py-3 text-center">Entri Data Transaksi</h3>
    <form action="/tracc-dashboard" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Account</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Input nama" value="{{old('nama')}}">
            @error('nama')
                {{$message}}
            @enderror
        </div>
        <div class="mb-3">
            <label for="jenis_game" class="form-label">Jenis Game</label> <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_game" id="inlineRadio1" value="Dota2" {{old('jenis_game')}} checked>
                <label class="form-check-label" for="inlineRadio1">Dota2</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_game" id="inlineRadio2" value="CSGO">
                <label class="form-check-label" for="inlineRadio2">CSGO</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_game" id="inlineRadio2" value="Overwatch">
                <label class="form-check-label" for="inlineRadio2">Overwatch</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_game" id="inlineRadio2" value="ApeX">
                <label class="form-check-label" for="inlineRadio2">Apex</label>
              </div>
        </div>
        <div class="mb-3">
            <label for="jenis_game" class="form-label">Status</label> <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="Ada" {{old('jenis_game')}} checked>
                <label class="form-check-label" for="inlineRadio1">Ada</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="Terjual">
                <label class="form-check-label" for="inlineRadio2">Terjual</label>
              </div>
        <button class="btn btn-success" type="submit">Submit</button>
    </div>
    </form>
        </div>
    </div>
    <script>
        ClassicEditor
            .create( document.querySelector( '#alamat' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection