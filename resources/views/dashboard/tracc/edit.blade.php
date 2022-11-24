@extends('dashboard.layout.main')
@section('title','tracc')
@section('tracc','active')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="py-3 text-center">Edit Data Transaksi</h3>
    <form action="/tracc-dashboard/{{$traccs->id}}" method="POST">
    @method('PUT')    
    @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Account</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Input nama" value="{{old('nama',$traccs->nama)}}">
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
            <label for="kuantitas" class="form-label">Kuantitas</label>
            <input type="integer" class="form-control @error('kuantitas') is-invalid @enderror" id="kuantitas" name="kuantitas" placeholder="Input kuantitas" value="{{old('kuantitas')}}">
            @error('kuantitas')
                {{$message}}
            @enderror
        </div>
        <div class="mb-3">
            <label for="bayar" class="form-label">Bayar</label>
            <input type="integer" class="form-control @error('bayar') is-invalid @enderror" id="bayar" name="bayar" placeholder="Input bayar" value="{{old('bayar')}}">
            @error('bayar')
                {{$message}}
            @enderror
        </div>
        <button class="btn btn-success" type="submit">Update</button>
    </div>
    </form>
        </div>
    </div>
@endsection