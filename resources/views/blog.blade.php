@extends('master')

@section('judul_halaman', 'Blog - RE:MUSIC')

@section('konten')
        <header class="py-5 border-bottom mb-4 bg-info-subtle">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">BLOG</h1>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="/blog/sejarah"><img class="card-img-top" src="{{ asset('assets/sejarah11.jpg') }}" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">1 September 2024</div>
                                    <h2 class="card-title h4">Sejarah Musik Dari Berbagai Era</h2>
                                    <p class="card-text">Musik adalah salah satu bentuk seni yang paling tua dan telah ada sejak manusia pertama kali mampu membuat suara.</p>
                                    <a class="btn btn-primary" href="/blog/sejarah">Read more →</a>
                                </div>
                            </div>
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="/blog/jenis"><img class="card-img-top" src="{{ asset('assets/alatmusik.jpg') }}" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">10 September 2024</div>
                                    <h2 class="card-title h4">Jenis Alat Musik</h2>
                                    <p class="card-text">Alat musik adalah instrumen yang dirancang atau dimodifikasi untuk menghasilkan bunyi dan suara, yang digunakan dalam berbagai genre musik di seluruh dunia.</p>
                                    <a class="btn btn-primary" href="/blog/jenis">Read more →</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="/blog/beethoven"><img class="card-img-top" src="{{ asset('assets/beethoven.jpg') }}" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">5 September 2024</div>
                                    <h2 class="card-title h4">Mengenal "Ludwig Van Beethoven" Seorang Musisi Tuli Dari Era Klasik</h2>
                                    <p class="card-text">Ludwig van Beethoven adalah salah satu nama terbesar dalam sejarah musik klasik, seorang komponis yang tidak hanya melampaui batasan-batasan zamannya, tetapi juga mengubah arah musik Barat selamanya.</p>
                                    <a class="btn btn-primary" href="/blog/beethoven">Read more →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection