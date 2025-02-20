@extends('master')

@section('judul_halaman', 'Sejarah Perkembangan Musik')

@section('konten')
<div class="container mt-5 d-flex justify-content-center">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1">Sejarah Musik Dari Berbagai Era</h1>
                    <!-- Post meta content-->
                    <div class="text-muted fst-italic mb-2">Diposting pada 1 September 2024</div>
                </header>
                <!-- Preview image figure-->
                <figure class="mb-4"><img class="img-fluid rounded" src="{{ asset('assets/sejarah11.jpg') }}" alt="..."></figure>
                <!-- Post content-->
                <section class="mb-5">
                    <p class="fs-5 mb-4">Musik telah menjadi bagian dari kehidupan manusia sejak zaman prasejarah. Dari alat musik sederhana hingga orkestra megah, perkembangan musik terus berlangsung seiring dengan evolusi budaya dan teknologi.</p>
            
                    <h2 class="fw-bolder mb-2 mt-2">Musik Zaman Prasejarah</h2>
                    <p class="fs-5 mb-4">Musik pada zaman prasejarah didasarkan pada ritme dan suara alami. Manusia purba menggunakan benda-benda seperti batu, kayu, dan tulang untuk menghasilkan suara.</p>
                    
                    <h2 class="fw-bolder mb-2 mt-2">Musik Zaman Kuno</h2>
                    <p class="fs-5 mb-4">Pada era Mesir Kuno, Yunani, dan Romawi, musik mulai berkembang dengan penggunaan alat musik seperti harpa, lira, dan seruling.</p>
                    
                    <h2 class="fw-bolder mb-2 mt-2">Musik Abad Pertengahan</h2>
                    <p class="fs-5 mb-4">Pada abad pertengahan, musik gereja menjadi sangat dominan. Musik Gregorian Chant berkembang di gereja Katolik dan menjadi bentuk awal notasi musik.</p>
                    
                    <h2 class="fw-bolder mb-2 mt-2">Musik Zaman Renaisans</h2>
                    <p class="fs-5 mb-4">Era Renaisans menandai kebangkitan seni dan ilmu pengetahuan, termasuk musik. Notasi musik semakin kompleks, dan polifoni mulai digunakan.</p>
                    
                    <h2 class="fw-bolder mb-2 mt-2">Musik Barok</h2>
                    <p class="fs-5 mb-4">Zaman Barok ditandai oleh munculnya musik instrumental yang kaya akan ornamen. Komposer besar seperti Johann Sebastian Bach dan Antonio Vivaldi menciptakan karya monumental.</p>
                    
                    <h2 class="fw-bolder mb-2 mt-2">Musik Klasik</h2>
                    <p class="fs-5 mb-4">Musik klasik lebih berfokus pada keseimbangan, harmoni, dan struktur yang jelas. Komposer terkenal dari era ini termasuk Mozart dan Beethoven.</p>
                    
                    <h2 class="fw-bolder mb-2 mt-2">Musik Romantis</h2>
                    <p class="fs-5 mb-4">Era Romantis menghadirkan musik yang lebih ekspresif dan emosional. Komposer seperti Chopin dan Tchaikovsky menciptakan karya dengan perasaan mendalam.</p>
                    
                    <h2 class="fw-bolder mb-2 mt-2">Musik Modern dan Kontemporer</h2>
                    <p class="fs-5 mb-4">Pada abad ke-20 dan 21, musik berkembang dengan sangat pesat. Genre baru seperti jazz, rock, pop, elektronik, dan hip-hop lahir dan berkembang.</p>
                    
                    <h2 class="fw-bolder mb-2 mt-2">Kesimpulan</h2>
                    <p class="fs-5 mb-4">Sejarah musik mencerminkan perkembangan budaya manusia dari waktu ke waktu. Dengan terus berkembangnya teknologi dan kreativitas, musik akan terus mengalami evolusi di masa depan.</p>
                </section>
            </article>
        </div>
    </div>
</div>


@endsection