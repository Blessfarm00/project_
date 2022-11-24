<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Game Galaxy</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link {{Request::is('home') ? 'active' :''}}"  aria-current="page" href="{{url('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('mahasiswa') ? 'active' :''}}" href="{{url('mahasiswa')}}">Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('berita') ? 'active' :''}}" href="{{url('berita')}}">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('jurusan') ? 'active' :''}}" href="{{url('jurusan')}}">Jurusan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('account') ? 'active' :''}}" href="{{url('account')}}">Account</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('transaksiaccount') ? 'active' :''}}" href="{{url('transaksiaccount')}}">TransaksiAccount</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-md-0">
          @auth
          <li class="nav-item">
          <form action="/logout" method="post">
            @csrf
            <button class="btn btn-dark" type="submit">Logout</button>
          </form>
</li>
          @else
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/login">Login</a>
          </li>
          @endauth

</ul>
        <!-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
      </div>
    </div>
  </nav>
</header>