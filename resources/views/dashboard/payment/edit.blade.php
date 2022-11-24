@extends('dashboard.layout.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="py-3 text-center">Edit Payment</h3>
    <form action="/payment-dashboard/{{$payments->id}}" method="POST">
    @method('PUT')    
    @csrf
        <div class="mb-3">
            <label for="user" class="form-label">User</label>
            <input type="text" class="form-control @error('user') is-invalid @enderror" id="user" name="user" placeholder="Input user" value="{{old('user',$payments->user)}}">
            @error('user')
                {{$message}}
            @enderror
        </div>
        <div class="mb-3">
            <label for="metode_pembayaran" class="form-label">metode_pembayaran</label> <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="metode_pembayaran" id="inlineRadio1" value="Dana" {{old('metode_pembayaran')}} checked>
                <label class="form-check-label" for="inlineRadio1">Dana</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="metode_pembayaran" id="inlineRadio2" value="Transfer Bank">
                <label class="form-check-label" for="inlineRadio2">Transfer Bank</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="metode_pembayaran" id="inlineRadio2" value="Credit Card">
                <label class="form-check-label" for="inlineRadio2">Credit Card</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="metode_pembayaran" id="inlineRadio2" value="OVO">
                <label class="form-check-label" for="inlineRadio2">OVO</label>
              </div>
        </div>
        <div class="mb-3">
            <label for="status_pembayaran" class="form-label">Status</label> <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status_pembayaran" id="inlineRadio1" value="Lunas" {{old('status_pembayaran')}} checked>
                <label class="form-check-label" for="inlineRadio1">Lunas</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status_pembayaran" id="inlineRadio2" value="Proses">
                <label class="form-check-label" for="inlineRadio2">Proses</label>
              </div>
            </div>
            <div class="mb-3">
            <label for="jumlah_pembayaran" class="form-label">Jumlah Pembayaran</label>
            <input type="integer" class="form-control @error('jumlah_pembayaran') is-invalid @enderror" id="jumlah_pembayaran" name="jumlah_pembayaran" placeholder="Input jumlah_pembayaran" value="{{old('jumlah_pembayaran')}}">
            @error('jumlah_pembayaran')
                {{$message}}
            @enderror
        </div>
        <button class="btn btn-success" type="submit">Update</button>
    </div>
    </form>
        </div>
    </div>
@endsection