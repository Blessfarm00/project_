@extends('dashboard.layout.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="py-3 text-center">Edit Data Account</h3>
    <form action="/account-dashboard/{{$accounts->id}}" method="POST">
    @method('PUT')    
    @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Account</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Input nama" value="{{old('nama',$accounts->nama)}}">
            @error('nama')
                {{$message}}
            @enderror
        </div>
        <div class="mb-3">
            <label for="jenis_game" class="form-label">Jenis Game</label> <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_game" id="inlineRadio1" value="D2" {{old('jenis_game')}} checked>
                <label class="form-check-label" for="inlineRadio1">Dota2</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_game" id="inlineRadio2" value="CS">
                <label class="form-check-label" for="inlineRadio2">CSGO</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_game" id="inlineRadio2" value="OV">
                <label class="form-check-label" for="inlineRadio2">Overwatch</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_game" id="inlineRadio2" value="AX">
                <label class="form-check-label" for="inlineRadio2">Apex</label>
              </div>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="integer" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" placeholder="Input Harga" value="{{old('harga')}}">
            @error('harga')
                {{$message}}
            @enderror
        </div>
        <button class="btn btn-success" type="submit">Update</button>
    </div>
    </form>
        </div>
    </div>
@endsection