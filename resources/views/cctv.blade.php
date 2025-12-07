{{-- resources/views/cctv.blade.php --}}
@extends('layouts.app')

{{-- Mengisi bagian 'title' --}}
@section('title', 'CCTV Desa Sulangai')

{{-- styles --}}
@section('styles')
    <link href="css/profile.css" rel="stylesheet">
    <link href="css/cctv.css" rel="stylesheet">
@endsection

@section('content')
    <section class="hero">
        <div class="hero-inner">
            <h1>CCTV Desa Sulangai</h1>
            <p>Pemantauan lingkungan desa secara real-time untuk mendukung keamanan dan kenyamanan masyarakat.</p>
        </div>
    </section>

    <!-- spacer -->
    <div class="spacer"></div>

    <div class="grid">
      <article class="card">
        <div class="card-body">
          <h2>CCTV Desa</h2>
          <p class="muted">Berikut adalah beberapa titik pantau CCTV yang tersedia di Desa Sulangai:</p>

          <div class="filter-box">
            <input type="text" id="searchBox" placeholder="Cari lokasi CCTV...">
          </div>

          <div class="cctv-grid" id="cctvGrid">

            <div class="cctv-item" data-title="balai desa">
              <div class="cctv-placeholder">
                <i class="fa-solid fa-video-slash"></i>
                <p>Video tidak tersedia</p>
                <small>Sumber di YouTube</small>
              </div>
              <h4>Balai Desa</h4>
            </div>

            <div class="cctv-item" data-title="pura desa">
              <div class="cctv-placeholder">
                <i class="fa-solid fa-video-slash"></i>
                <p>Video tidak tersedia</p>
                <small>Sumber di YouTube</small>
              </div>
              <h4>Pura Desa</h4>
            </div>

            <div class="cctv-item" data-title="lapangan desa">
              <div class="cctv-placeholder">
                <i class="fa-solid fa-video-slash"></i>
                <p>Video tidak tersedia</p>
                <small>Sumber di YouTube</small>
              </div>
              <h4>Lapangan Desa</h4>
            </div>
            
          </div>
        </div>
      </article>
    </div>
@endsection