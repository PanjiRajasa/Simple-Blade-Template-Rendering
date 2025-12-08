{{-- resources/views/home.blade.php --}}
@extends('layouts.app')

{{-- Mengisi bagian 'title' --}}
@section('title', 'Badan Permusyawaratan Desa Sulangai')

{{-- styles --}}
@section('styles')
    <link rel="stylesheet" href="css/pemerintahan.css">
@endsection

{{-- status aktif tidaknya navbar --}}
@section("active_pemerintahan", "active")

{{-- contents --}}
@section('content')
    <!-- Hero section -->
    <section class="hero">
        <div class="hero-inner">
            <h1>Lembaga Desa</h1>
            <p>Lembaga yang menampung dan menyalurkan aspirasi masyarakat dalam penyelenggaraan pemerintahan desa.</p>
        </div>
    </section>

    <div class="spacer"></div>

    <div class="grid">
        <article class="card">
        <div class="card-body">

            <h2 style="font-weight:800; text-transform:uppercase; margin-bottom:10px; text-align:center;">
            Badan Permusyawaratan Desa Sulangai
            </h2>

            <div style="width:100%; display:flex; justify-content:center; margin-bottom:25px;">
            <div style="height:4px; width:120px; background:linear-gradient(to right, #10B981, #6EE7B7); border-radius:2px;"></div>
            </div>

            <p>
            Badan Permusyawaratan Desa (BPD) Sulangai adalah lembaga perwakilan masyarakat desa yang berfungsi sebagai pengawas dan mitra kerja pemerintahan desa. BPD merupakan perwujudan demokrasi dalam penyelenggaraan pemerintahan desa, sering disebut sebagai "parlemen" desa. Anggota BPD dipilih secara demokratis berdasarkan keterwakilan wilayah dan ditetapkan melalui musyawarah dan mufakat. 
            Dasar hukum Badan Permusyawaratan Desa (BPD) adalah Undang-Undang Nomor 6 Tahun 2014 tentang Desa dan Peraturan Menteri Dalam Negeri Nomor 110 Tahun 2016 tentang Badan Permusyawaratan Desa. BPD merupakan lembaga yang melaksanakan fungsi pemerintahan yang anggotanya merupakan wakil dari penduduk desa berdasarkan keterwakilan wilayah dan ditetapkan secara demokratis. BPD memiliki hak untuk mengusulkan dan menyampaikan pendapat dalam pembahasan peraturan desa, serta mengusulkan atau mengajukan pemberhentian Kepala Desa jika melanggar ketentuan. BPD juga memiliki kewajiban untuk memegang teguh Pancasila dan Undang-Undang Dasar, serta mempertahankan keutuhan NKRI.           </p>
            </p>
            
            <div style="margin-top: 2rem;"></div>

        </div>
        </article> 

        <aside class="card">
        <div class="card-body">
            <h3>Anggota BPD Desa Sulangai</h3>
            <br>
            <div class="slider" id="slider">

            <div class="slide active">
                <img src="image/aparatur7.jpg" alt="I NYOMAN SUNARTA">
                <div class="info">
                <h4>I NYOMAN SUNARTA</h4>
                <p>Ketua BPD</p>
                </div>
                <div class="counter">1 / 8</div>
            </div>

            <div class="slide">

                <img src="image/aparatur1.jpg" alt="Ni Luh Sundra Kristyani">
                <div class="info">
                <h4>Ni Luh Sundra Kristyani, S.Sos.H.,M.Pd.H</h4>
                <p>Wakil Ketua BPD</p>
                </div>

                <div class="counter">2 / 8</div>

            </div>

            <div class="slide">
                <img src="image/aparatur2.jpg" alt="IDA BAGUS GEDE BAJRA">
                <div class="info">
                <h4>IDA BAGUS GEDE BAJRA</h4>
                <p>Sekretaris BPD</p>
                </div>
                <div class="counter">3 / 8</div>
            </div>

            <div class="slide">
                <img src="image/aparatur3.jpg" alt="I WAYAN BUDAYANA">
                <div class="info">
                <h4>I WAYAN BUDAYANA</h4>
                <p>Anggota BPD</p>
                </div>
                <div class="counter">4 / 8</div>
            </div>

            <div class="slide">
                <img src="image/aparatur4.jpg" alt="NI PUTU LENI HISTORINA">
                <div class="info">
                <h4>NI PUTU LENI HISTORINA</h4>
                <p>Anggota BPD</p>
                </div>
                <div class="counter">5 / 8</div>
            </div>

            <div class="slide">
                <img src="image/aparatur5.jpg" alt="Ni Made Supartini">
                <div class="info">
                <h4>Ni Made Supartini, S.A.P.</h4>
                <p>Anggota BPD</p>
                </div>
                <div class="counter">6 / 8</div>
            </div>

            <div class="slide">
                <img src="image/aparatur8.jpg" alt="NI KETUT ARWATI">
                <div class="info">
                <h4>NI KETUT ARWATI</h4>
                <p>Anggota BPD</p>
                </div>
                <div class="counter">7 / 8</div>
            </div>

            <div class="slide">
                <img src="image/aparatur6.jpg" alt="I KETUT ARIANTO">
                <div class="info">
                <h4>I KETUT ARIANTO</h4>
                <p>Anggota BPD</p>
                </div>
                <div class="counter">8 / 8</div>
            </div>

            <button class="arrow left" id="prev"><i class="fa-solid fa-chevron-left"></i></button>
            <button class="arrow right" id="next"><i class="fa-solid fa-chevron-right"></i></button>

        </div>
            
        <div class="facts" style="margin-top: 1.5rem;">

            <div class="fact">
                <i class="fa-solid fa-users"></i>
                <div>
                <strong>8 Anggota</strong>
                <p>Terpilih secara demokratis</p>
                </div>
            </div>

        </div>
            
        <div class="fact" style="margin-top: 1.5rem;">
            <i class="fa-solid fa-handshake"></i>
            <div>
                <strong>Musyawarah</strong>
                <p>Metode pengambilan keputusan</p>
            </div>
        </div>
        </aside>
    </div>

    <script src="js/pemerintahan_desa.js"></script>
@endsection