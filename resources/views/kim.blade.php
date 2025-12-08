{{-- resources/views/kim.blade.php --}}
{{-- views ini digunakan untuk merender page kim --}}
@extends('layouts.app')

{{-- Mengisi bagian 'title' --}}
@section('title', 'KIM')

{{-- styles --}}
@section('styles')
    <link rel="stylesheet" href="css/kim.css">
@endsection

{{-- status aktif tidaknya navbar --}}
@section("active_lembaga", "active")

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
        <h1>Komunitas Informasi Masyarakat<br></h1>
        <p class="hero-subtitle">
            Wadah komunikasi warga desa untuk membangun keterbukaan informasi, meningkatkan literasi digital, dan memperkuat peran masyarakat dalam penyebaran informasi positif di Desa Sulangai.
        </p>
        </div>
    </section>

    <!-- Konten Utama -->
    <section class="content-section">
    <div class="container">
        <article class="content-card">
        <div class="section-header">
            <h2>Tentang KIM Desa Sulangai</h2>
            <p>
            Komunitas Informasi Masyarakat (KIM) yang sebelumnya bernama Kelompok Informasi Masyarakat adalah Komunitas yang dibentuk oleh masyarakat, dari masyarakat dan untuk masyarakat serta secara mandiri dan kreatif melakukan aktivitas pengelolaan informasi dan pemberdayaan guna memberikan nilai tambah bagi masyarakat itu sendiri.
            Konsep tersebut merupakan sebuah pengembangan paradigma pola komunikasi di masyarakat: bukan lagi communication to people namun communication with people.
            Berdasarkan Peraturan Menteri Komunikasi dan Informatika Nomor 4 Tahun 2024 tentang Penyelenggaraan Urusan Pemerintahan Konkuren Bidang Komunikasi dan Informatika bahwa Dinas melaksanakan kemitraan dengan pemangku kepentingan, salah satunya adalah Komunitas Informasi Masyarakat, sebagaimana dimaksud dalam Pasal 4 ayat (2) huruf h.
            </p>
        </div>
        </article>
    </div>
    </section>
@endsection