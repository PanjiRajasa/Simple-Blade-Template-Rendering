{{-- resources/views/profile.blade.php --}}
@extends('layouts.app')

{{-- Mengisi bagian 'title' dengan "Halaman Utama" --}}
@section('title', 'Visi & Misi Desa Sulangai')

@section('styles')
    <link href="css/visi-misi.css" rel="stylesheet">
    <link href="css/visi-misi2.css" rel="stylesheet">
@endsection

@section('content')
    <section class="hero">
        <div class="hero-inner">
            <h1>Visi & Misi Desa Sulangai</h1>
            <p>Arah pembangunan desa yang berlandaskan tradisi, kebersamaan, dan inovasi untuk kesejahteraan masyarakat.</p>
        </div>
    </section>

    <main class="wrap">
        <div class="grid">
        <article class="card">
            <div class="card-body">
            <h2>Visi</h2>
            <div class="visi">“Mewujudkan Desa Sulangai Berdikari Berlandaskan Tri Hita Karana, Menuju Desa Yang Sejahtera dan Berbudaya”</div>

            <h2 style="margin:24px 0 14px;">Misi</h2>
            <ul class="misi" id="misiList">
                    <li data-text="pertanian subak kehutanan"><i class="fa-solid fa-leaf"></i> Mewujudkan Desa Sulangai Berdikari Berlandaskan Tri Hita Karana, Menuju Desa Yang Sejahtera dan Berbudaya.</li>
                    <li data-text="pendidikan kesehatan gotong royong"><i class="fa-solid fa-people-group"></i> Memperkokoh persatuan dan kerukunan masyarakat berlandaskan adat, budaya dan agama (religiusitas).</li>
                    <li data-text="kelembagaan adat tata kelola"><i class="fa-solid fa-handshake-angle"></i> Meningkatkan kualitas sumber daya manusia melalui sektor pendidikan, kesehatan dan kesejahteraan.</li>
                    <li data-text="pariwisata alam budaya berkelanjutan"><i class="fa-solid fa-globe"></i> Membangun infrastruktur pertanian, Subak, Subak Abian dan pelestarian lingkungan berlandaskan kearifan lokal.</li>
                    <li data-text="inovasi digital umkm"><i class="fa-solid fa-gopuram"></i> Mewujudkan pariwisata terintegritas berbasis kerakyatan sesuai dengan potensi desa, kekayaan pertanian dan industri kreatif.</li>
                    <li data-text="inovasi digital umkm"><i class="fa-solid fa-laptop"></i> Mengembangkan system pertanian berkelanjutan berbasis agroindustri serta penyerapan hasil pertanian melalui Badan Usaha Milik Desa.</li>
                    <li data-text="inovasi digital umkm"><i class="fa-solid fa-home"></i> Mewujudkan desa tanggap bencana berbasis partisipasi masyarakat.</li>
            </ul>
            </div>
            </article>
        </div>
    </main>
@endsection