{{-- resources/views/home.blade.php --}}
{{-- views ini digunakan untuk merender page home --}}
@extends('layouts.app')

{{-- Mengisi bagian 'title' --}}
@section('title', 'Halaman Utama')

{{-- styles --}}
@section('styles')
    <link rel="stylesheet" href="css/dashboard.css">
@endsection

{{-- status aktif tidaknya navbar --}}
@section("active_home", "active")

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Selamat Datang di<br>Desa <span style="color:#2c9e31">Sulangai</span></h1>
            <p class="hero-subtitle">
            Portal digital resmi Desa Sulangai, Kecamatan Petang, Kabupaten Badung, Bali. 
            Nikmati kemudahan akses informasi pemerintahan, layanan publik, dan perkembangan terkini desa kami.
            </p>

            {{-- tombol dalam hero section --}}
            <div class="hero-buttons">
                <a href="/profile" class="btn btn-primary"><i class="fas fa-compass"></i> Jelajahi Desa</a>
                <a href="https://1tempat.id/" class="btn btn-secondary"><i class="fas fa-globe"></i> Layanan Online</a>
            </div>
        </div>
    </section>

    <!-- Latest News Section -->
    <section class="latest-news" id="kabar">
    <div class="container">
        <div class="section-header">
        <h2>Kabar Terbaru Desa</h2>
        <p>Informasi terkini seputar kegiatan, program, dan pengumuman resmi dari Pemerintah Desa Sulangai untuk kemajuan bersama.</p>
        </div>

        <div class="news-grid">
        <div class="news-main">
            <article class="news-card">
            <div class="news-meta">
                <span class="news-category">Kesehatan</span>
                <span class="news-date"><i class="fas fa-calendar-alt"></i> 30 Juli 2025</span>
            </div>
            <h3 class="news-title">5 Kunci Keamanan Pangan untuk Kesehatan Optimal</h3>
            <p class="news-excerpt">Menjaga keamanan pangan adalah fondasi utama kesehatan masyarakat desa. Mari pelajari 5 kunci praktis untuk memastikan makanan kita tetap aman, bergizi, dan berkualitas tinggi setiap hari.</p>

            {{-- link untuk lihat detail berita --}}
            <a href="/home/isi_berita" class="news-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
            </article>

            <article class="news-card">
            <div class="news-meta">
                <span class="news-category">Pelayanan</span>
                <span class="news-date"><i class="fas fa-calendar-alt"></i> 21 Juli 2025</span>
            </div>
            <h3 class="news-title">Maklumat Pelayanan Prima Desa Sulangai</h3>
            <p class="news-excerpt">Komitmen kami untuk memberikan pelayanan terbaik kepada seluruh masyarakat. Transparansi, kecepatan, dan kepuasan warga menjadi prioritas penting dalam setiap layanan publik.</p>

            {{-- link untuk lihat detail berita --}}
            <a href="/home/isi_berita" class="news-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
            </article>

            <article class="news-card">
            <div class="news-meta">
                <span class="news-category">Pengumuman</span>
                <span class="news-date"><i class="fas fa-calendar-alt"></i> 15 Juli 2025</span>
            </div>
            <h3 class="news-title">Musyawarah Desa: Rencana Kerja Pembangunan 2026</h3>
            <p class="news-excerpt">Undangan resmi Musyawarah Desa untuk membahas Rencana Kerja Pemerintah Desa tahun 2026. Partisipasi aktif seluruh warga sangat diharapkan untuk kemajuan desa bersama.</p>

            {{-- link untuk lihat detail berita --}}
            <a href="/home/isi_berita" class="news-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
            </article>

            <div class="news-button-container">
            <a href="/#kabar" class="btn-view-all">Lihat Semua Kabar Desa <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <aside class="sidebar">
            <div class="sidebar-widget kategori-widget">
            <h3><i class="fas fa-tags"></i> Kategori Berita</h3>

            <!-- All Categories -->
            <ul class="category-list">
                <li><a href="#" data-category="all"><i class="fas fa-list"></i> Semua Berita</a></li>
                <li><a href="#" data-category="berita-desa"><i class="fas fa-newspaper"></i> Berita Desa</a></li>
                <li><a href="#" data-category="pengumuman"><i class="fas fa-bullhorn"></i> Pengumuman</a></li>
                <li><a href="#" data-category="kegiatan"><i class="fas fa-calendar-check"></i> Kegiatan</a></li>
                <li><a href="#" data-category="pemerintahan"><i class="fas fa-building"></i> Pemerintahan</a></li>
                <li><a href="#" data-category="lembaga"><i class="fas fa-users"></i> Lembaga</a></li>
                <li><a href="#" data-category="keuangan"><i class="fas fa-chart-line"></i> Keuangan</a></li>
                <li><a href="#" data-category="toko-desa"><i class="fas fa-store"></i> Toko Desa</a></li>
                <li><a href="#" data-category="pembangunan"><i class="fas fa-hammer"></i> Pembangunan</a></li>
                <li><a href="#" data-category="kesehatan"><i class="fas fa-heartbeat"></i> Kesehatan</a></li>
                <li><a href="#" data-category="pendidikan"><i class="fas fa-graduation-cap"></i> Pendidikan</a></li>
            </ul>
            </div>

            <div class="recent-posts">
            <h3>Berita Terkini</h3>
            <a href="/home/isi_berita" style="text-decoration:none;color:inherit;">
                <div class="recent-post">
                <h4>5 Kunci Keamanan Pangan untuk Kesehatan Optimal</h4>
                <span><i class="fas fa-clock"></i> 30 Juli 2025</span>
                </div>
            </a>
            <a href="/home/isi_berita" style="text-decoration:none;color:inherit;">
                <div class="recent-post">
                <h4>Maklumat Pelayanan Prima Desa Sulangai</h4>
                <span><i class="fas fa-clock"></i> 21 Juli 2025</span>
                </div>
            </a>
            <a href="/home/isi_berita" style="text-decoration:none;color:inherit;">
                <div class="recent-post">
                <h4>Musyawarah Desa: RKP 2026</h4>
                <span><i class="fas fa-clock"></i> 15 Juli 2025</span>
                </div>
            </a>
            </div>
        </aside>
        </div>
    </div>
    </section>
@endsection