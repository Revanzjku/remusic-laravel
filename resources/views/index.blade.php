@extends('master')

@section('judul_halaman', 'Home - RE:MUSIC')

@section('konten')
        <header class="py-5 border-bottom mb-4 bg-info-subtle">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">SELAMAT DATANG DI RE:MUSIC</h1>
                    <p class="lead mb-0">Rediscover Music Culture</p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-12">
                    <!-- Nested row for non-featured blog posts-->
                    <div class="text-center mb-4">
                        <h2>Artikel Terkait</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href=""><img class="card-img-top" src="{{ asset('assets/sejarah11.jpg') }}" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">September 1, 2024</div>
                                    <h2 class="card-title h4">Sejarah Musik Dari Berbagai Era</h2>
                                    <p class="card-text">Musik adalah salah satu bentuk seni yang paling tua dan telah ada sejak manusia pertama kali mampu membuat suara.</p>
                                    <a class="btn btn-primary" href="#!">Read more →</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="{{ asset('assets/beethoven.jpg') }}" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">September 5, 2024</div>
                                    <h2 class="card-title h4">Mengenal "Ludwig Van Beethoven" Seorang Musisi Tuli Dari Era Klasik</h2>
                                    <p class="card-text">Ludwig van Beethoven adalah salah satu nama terbesar dalam sejarah musik klasik, seorang komponis yang tidak hanya melampaui batasan-batasan zamannya, tetapi juga mengubah arah musik Barat selamanya.</p>
                                    <a class="btn btn-primary" href="#!">Read more →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection