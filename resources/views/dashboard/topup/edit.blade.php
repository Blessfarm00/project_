@extends('dashboard.layout.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="py-3 text-center">Edit Data Account</h3>
    <form action="/topup-dashboard/{{$topups->nama}}" method="POST">
    @method('PUT')    
    @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Account</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Input nama" value="{{old('nama',$topups->nama)}}">
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
                <input class="form-check-input" type="radio" name="jenis_game" id="inlineRadio2" value="Apex">
                <label class="form-check-label" for="inlineRadio2">Apex</label>
              </div>
        </div>
        <div class="mb-3">
            <label for="jumlah_topup" class="form-label">Jumlah Top-Up</label> <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jumlah_topup" id="inlineRadio1" value="399" {{old('jumlah_topup')}} checked>
                <label class="form-check-label" for="inlineRadio1">399 Dm</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jumlah_topup" id="inlineRadio2" value="599">
                <label class="form-check-label" for="inlineRadio2">599 Dm</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jumlah_topup" id="inlineRadio2" value="999">
                <label class="form-check-label" for="inlineRadio2">999 Dm</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jumlah_topup" id="inlineRadio2" value="1999">
                <label class="form-check-label" for="inlineRadio2">1999 Dm</label>
              </div>
        </div>
        <button class="btn btn-success" type="submit">Update</button>
    </div>
    </form>
        </div>
    </div>
@endsection