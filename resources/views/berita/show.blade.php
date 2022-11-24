@extends('layout.main')

@section('container')

<div class="row">
<div class="col-lg-8">
  <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=200&ixid=MnwxfDB8MXxyYW5kb218MHx8Y2FtcHVzfHx8fHx8MTY1NzA3MjQ3MA&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=800" class="card-img-top" alt="...">
  <div class="card-body mt-3">
    <h1 class="card-title text-center">{!! $berita->title !!}</h1>
    <p>{!! $berita->body !!}</p>
    <a href="/berita" class="btn btn-primary">Back</a>
  </div>
</div>
</div>
@endsection