{{-- resources/views/isi-berita.blade.php --}}
{{-- views ini digunakan untuk merender page isi berita --}}
@extends('layouts.app')

{{-- Mengisi bagian 'title' --}}
@section('title', 'Lomba Masakan Tradisional - Desa Sulangai')

{{-- styles --}}
@section('styles')
    <link href="{{ asset('css/isi_berita.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
@endsection

{{-- status aktif tidaknya navbar --}}
@section("active_home", "active")

@section('content')
    {{-- article category & body --}}
    <section class="hero-isi">
        <div class="article-category">PEMUDA DAN OLAH RAGA</div>
        <h1 class="article-title">LOMBA MEMBUAT LAWAR, JRIMPEN SATE, KLAKAT SUDAMALA, CANANG SARI DAN KWANGEN</h1>
        
        {{-- article meta --}}
        <div class="article-meta">
            <div class="meta-item">
                <i class="far fa-calendar"></i>
                <span>30 November 2025</span>
            </div>
            <div class="meta-item">
                <i class="far fa-user"></i>
                <span>KIM Sulangai</span>
            </div>
            <div class="meta-item">
                <i class="far fa-eye"></i>
                <span>1,245 Views</span>
            </div>
        </div>
    </section>
    

    {{-- Gambar berita --}}
    <div class="featured-image">
        <img src="../image/lawar.png" alt="Lomba Masakan Tradisional Desa Sulangai">
        <div class="image-caption">Peserta lomba sedang menyiapkan bahan-bahan tradisional</div>
    </div>

    <div class="article-body">

        <p class="article-lead">
            <strong>Sulangai, 15 Agustus 2025</strong> – Masih dalam suasana kemeriahan Porsentdes Sulangai dan menyambut HUT Kemerdekaan RI yang Ke-80, Pemerintah Desa Sulangai menyelenggarakan rangkaian acara meriah. Salah satunya adalah <strong>Lomba Membuat Lawar, Jrimpen Sate, Klakat Sudamala, Canang Sari dan Kwangen</strong> yang melibatkan seluruh masyarakat dari enam Banjar Adat.
        </p>

        <h3>Persiapan Matang Sebelum Lomba</h3>
        <p>
            Sehari sebelum pelaksanaan lomba, setiap Banjar Adat mendapatkan perlengkapan lengkap berupa kalbasa (bahan bumbu tradisional) dan daging babi berkualitas yang akan diolah menjadi bahan dasar lawar. Persiapan ini penting untuk memastikan setiap peserta memiliki kesempatan yang sama dan dapat fokus pada kreativitas serta keahlian mereka dalam meracik masakan tradisional Bali yang autentik.
        </p>

        <h3>Pelaksanaan Lomba yang Meriah</h3>
        <p>
            Pada hari perlombaan, acara berlangsung dengan sangat meriah dan antusias tinggi dari seluruh peserta. Semua STT (Sekertaris Tempat Tinggal) dari keenam Banjar menampilkan kemampuan terbaik mereka. Mulai dari menyiapkan bumbu yang kompleks, ngerajang bahan-bahan dengan presisi, ngadon lawar dengan proposi yang sempurna, hingga membuat hiasan yang sangat indah dan artistik. Setiap proses dikerjakan dengan penuh dedikasi dan keterampilan turun-temurun.
        </p>

        <h3>Kebermaknaan Acara</h3>
        <p>
            Lomba ini bukan hanya sekedar kompetisi, tetapi merupakan bentuk pelestarian budaya dan tradisi lokal Desa Sulangai. Melalui kegiatan ini, generasi muda dapat belajar langsung tentang nilai-nilai budaya, keterampilan kuliner tradisional, serta pentingnya kebersamaan dalam menjaga warisan budaya nenek moyang. Selain itu, acara ini juga menjadi ajang silaturahmi dan penguatan solidaritas antar Banjar di Desa Sulangai.
        </p>

        <p>
            Kami ucapkan terima kasih kepada semua peserta, panitia, dan masyarakat yang telah mendukung pelaksanaan lomba ini sehingga berjalan dengan lancar dan sukses. Semoga kegiatan positif seperti ini dapat terus dilanjutkan untuk menjaga kelestarian budaya Bali di tengah perkembangan zaman modern.
        </p>

    </div>
@endsection