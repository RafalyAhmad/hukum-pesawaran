@extends('layout')

@section('title', 'Portal JDIH Hukum Kabupaten Pesawaran')

@section('content')
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            Kontak Layanan
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li>
              <a class="dropdown-item" href="#">Something else here</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tentang</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="d-flex justify-content-center align-items-center full-height">
  <div class="text-center">
    <h1 id="portal"> <b> PORTAL <br>BAGIAN HUKUM <br> KABUPATEN PESAWARAN</b></h1>
    <img src="{{ asset('images/JDIH.png') }}" width="100px" class="m-4" id="logo1" /> 
    <img src="{{ asset('images/SIPEPHD.png') }}" width="100px" class="m-4" id="logo2"/>
    <img src="{{ asset('images/IKPH.png') }}" width="100px" class="m-4" id="logo3"/>
    
    <div class="position-absolute bottom-0 start-0 p-3">
      <img src="{{ asset('images/instagram.png') }}" width="30px" />
      <img src="{{ asset('images/facebook.png') }}" width="30px" />
      <img src="{{ asset('images/x.png') }}" width="30px" />
    </div>
  </div>
</div>

<style>
.full-height {
  height: 98vh; 
  background-image: url('{{ asset('images/background-portal.jpg') }}');
  background-size: cover; 
  background-position: center;
  background-repeat: no-repeat;
  opacity: 0.8;
}

#portal {
  font-size: 60px;
  color: white;  
}
</style>

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
  // Seleksi elemen-elemen yang akan ditambahkan event hover
  var logos = document.querySelectorAll('#logo1, #logo2, #logo3');

  // Fungsi untuk mengubah transformasi saat hover
  function handleMouseOver(event) {
    event.target.style.transform = 'scale(1.1) translateZ(30px)';
  }

  // Fungsi untuk mengubah transformasi saat hover berakhir
  function handleMouseOut(event) {
    event.target.style.transform = 'scale(1) translateZ(0)';
  }

  // Menambahkan event listener untuk hover
  logos.forEach(function (logo) {
    logo.addEventListener('mouseover', handleMouseOver);
    logo.addEventListener('mouseout', handleMouseOut);
  });
});
</script>
@endsection
