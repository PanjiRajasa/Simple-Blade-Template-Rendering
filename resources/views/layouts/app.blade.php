{{-- resources/views/layouts/app.blade.php --}}

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desa Sulangai - @yield('title', 'Beranda')</title>

  {{-- link css --}}
  @yield('styles') {{-- Tempat untuk style tambahan per halaman --}}

  {{-- link untuk icon CDN --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
  <header class="header" id="header">

    {{-- Navbar --}}
    {{-- Navbar akan dirender dalam semua halaman dengan format yang sama --}}
    <nav class="nav-container">
      <div class="logo" id="logoToggle" style="cursor:pointer;">

        <div class="logo-img">
          {{-- logo navbar --}}
          <img src="{{ asset('image/logo.png') }}" alt="Logo Desa Sulangai">
        </div>

        <div class="logo-text">
          {{-- Text besar disebelah kanan logo --}}
          <h1>Desa <span class="sulangai-green">Sulangai</span></h1>
        </div>
      </div>

      <ul class="nav-menu" id="navMenu">
        {{-- route root --}}
        <li><a href="/">Home</a></li>

        {{-- loncat ke section kabar --}}
        <li><a href="/#kabar">Kabar Desa</a></li>

        <!-- Dropdown Profil Desa -->
        <li>
          
          {{-- route profile --}}
          <a href="/profile">Profil Desa <i class="fa-solid fa-caret-down"></i></a>

          <ul class="dropdown-menu">

            {{-- route visi-misi --}}
            <li><a href="/visi-misi"><i class="fa-solid fa-bullseye"></i> Visi & Misi</a></li>

            {{-- route cctv --}}
            <li><a href="/cctv"><i class="fa-solid fa-video"></i> CCTV</a></li>

          </ul>
        </li>

        {{-- route pemerintahan --}}
        <li><a href="/pemerintahan">Pemerintahan Desa</a></li>

        <!-- Dropdown Lembaga Desa (DIPERBARUI: LPM & KIM) -->
        <li>
        
          {{-- route lpm --}}
          <a href="#">Lembaga Masyarakat <i class="fa-solid fa-caret-down"></i></a>
          <ul class="dropdown-menu">

            {{-- route lpm --}}
            <li>
              <a href="/lpm">
                <i class="fa-solid fa-hand-holding-heart"></i> Lembaga Pemberdayaan Masyarakat (LPM)
              </a>
            </li>

            {{-- route kim --}}
            <li><a href="/kim"><i class="fa-solid fa-comments"></i> Komunitas Informasi Masyarakat (KIM)</a></li>

          </ul>
        </li>

        {{-- external route ke 1tempat (nama website external) --}}
        <li><a href="https://1tempat.id/">Toko Masyarakat</a></li>
      </ul>
    </nav>
  </header>

  <main class="container">
    {{-- contents will be rendered here --}}
    {{-- Disinilah letak semua konten nantinya --}}
    @yield('content') {{-- Konten utama --}}
  </main>
  
  {{-- footer --}}
  {{-- footer akan selalu sama di semua page --}}
  <footer>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-info">
          <div class="logo">
            <div class="logo-img">
              <img src="{{ asset('image/logo.png') }}" alt="Logo Desa Sulangai"
                style="width:60px;height:70px;border-radius:50%;object-fit:cover;">
            </div>
            <div class="logo-text">
              <h1>Desa Sulangai</h1>
            </div>
          </div>
          <p>Selamat Datang di website Desa Sulangai. Website ini merupakan salah satu media Informasi kegiatan Desa Sulangai. Cek terus bagaimana perkembangan Desamu lewat website resmi Desa Sulangai</p>
        </div>

        <div class="footer-links">
          <h3>Tautan Cepat</h3>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/#kabar">Kabar Desa</a></li>
            <li><a href="/profile">Profil Desa</a></li>
            <li><a href="/pemerintahan">Pemerintah Desa</a></li>
            <li><a href="/lpm">Lembaga Masyarakat</a></li>
            <li><a href="https://1tempat.id/">Toko Masyarakat</a></li>
          </ul>
        </div>

        <div class="footer-contact">
          <h3>Kontak</h3>
          <div class="contact-info">
            <div class="contact-item">
              <i class="fas fa-map-marker-alt"></i>
              <span>Jl. Petang - Batulantang. Desa Sulangai, Kecamatan Petang, Kabupaten Badung - Bali</span>
            </div>
            <div class="contact-item">
              <i class="fas fa-phone"></i>
              <span>+6281353030915</span>
            </div>
            <div class="contact-item">
              <i class="fas fa-envelope"></i>
              <span>info@sulangai.desa.id</span>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <p>© 2025 Desa Sulangai. Seluruh hak cipta dilindungi undang-undang.</p>
      </div>
    </div>
  </footer>
</body>
</html>