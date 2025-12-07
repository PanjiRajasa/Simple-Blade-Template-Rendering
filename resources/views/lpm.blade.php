{{-- resources/views/lpm.blade.php --}}
@extends('layouts.app')

{{-- Mengisi bagian 'title' --}}
@section('title', 'Badan Permusyawaratan Desa Sulangai')

{{-- styles --}}
@section('styles')
    <link rel="stylesheet" href="css/lpm.css">
@endsection

{{-- contents --}}
@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-inner">
        <h1>Lembaga Pemberdayaan Masyarakat<br></h1>
        <p>Wadah partisipasi masyarakat dalam perencanaan, pelaksanaan, dan pengawasan pembangunan desa untuk mewujudkan kesejahteraan bersama.</p>
        </div>
    </section>

    {{-- spacer --}}
    <div class="spacer"></div>

    <div class="grid">
        <article class="card">
            <div class="card-body">

            <h2 style="font-weight:800; text-transform:uppercase; margin-bottom:10px; text-align:center;">
                Lembaga Pemberdayaan Masyarakat Desa Sulangai
            </h2>

            <div style="width:100%; display:flex; justify-content:center; margin-bottom:25px;">
                <div style="height:4px; width:120px; background:linear-gradient(to right, #10B981, #6EE7B7); border-radius:2px;"></div>
            </div>

            <p class="lead">
                Lembaga Pemberdayaan Masyarakat Desa yang disingkat dengan LPM adalah salah satu Lembaga Kemasyarakatan Desa (LKD) yang ada di Desa Sulangai yang tumbuh dari oleh dan untuk masyarakat merupakan wahana partisipasi masyarakat dalam pembangunan yang mendukung pelaksanaan berbagai kegiatan pemerintah dan prakarsa serta swadaya gotong royong masyarakat dalam segala aspek kehidupan masyarakat dalam rangka mewujudkan ketahanan nasional yang meliputi aspek Idiologi, Politik, Sosial Budaya, Agama serta pertahanan keamanan.
            </p>

            <p class="lead">
                LPM sebagai mitra kerja Perbekel dalam hal perencanaan dan pelaksanaan pembangunan serta pemerataan hasil-hasil pembangunan dan menumbuhkan prakarsa, serta menggerakkan swadaya gotong royong masyarakat, memiliki kedekatan dan ketangguhan yang mengandung kemampuan mengembangkan ketahanan didalam menghadapi/mengatasi segala macam tantangan dan hambatan dalam hal pembinaan wilayah. Struktur LPM Sulangai berdasarkan Keputusan Perbekel Nomor 35 Tahun 2019 tentang  Penetapan  Struktur Lembaga Pemberdayaan Masyarakat (LPM) Desa Sulangai Periode  Tahun  2019 – 2024.
            </p>

            <h3>Struktur Organisasi LPM</h3>
            <div class="table-container">
                <table class="org-table">
                <thead>
                    <tr>
                    <th>Jabatan</th>
                    <th>Nama</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Ketua</td><td>I Made Sutama</td></tr>
                    <tr><td>Wakil Ketua</td><td>Ni Ketut Ariani</td></tr>
                    <tr><td>Sekretaris</td><td>I Wayan Putra</td></tr>
                    <tr><td>Bendahara</td><td>Ni Luh Komang Rini</td></tr>
                    <tr><td>Seksi Sosial & Pemberdayaan</td><td>I Kadek Wirawan</td></tr>
                    <tr><td>Seksi Ekonomi Kreatif</td><td>Ni Nyoman Lestari</td></tr>
                    <tr><td>Seksi Infrastruktur & Lingkungan</td><td>I Gusti Ngurah Budi</td></tr>
                </tbody>
                </table>
            </div>
        </article>
    </div>

    <script src="js/lpm.js"></script>
@endsection