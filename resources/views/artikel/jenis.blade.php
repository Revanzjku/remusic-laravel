@extends('master')

@section('judul_halaman', 'Jenis Alat Musik')

@section('konten')
<div class="container mt-5 d-flex justify-content-center">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1">Jenis Alat Musik</h1>
                    <!-- Post meta content-->
                    <div class="text-muted fst-italic mb-2">Diposting pada 10 September 2024</div>
                </header>
                <!-- Preview image figure-->
                <figure class="mb-4"><img class="img-fluid rounded" src="{{ asset('assets/alatmusik.jpg') }}" alt="..."></figure>
                <!-- Post content-->
                <section class="mb-5">
                    <p class="fs-5 mb-4">Alat musik adalah instrumen yang digunakan untuk menghasilkan suara dalam berbagai bentuk dan genre musik. Berdasarkan cara memainkannya, alat musik dapat dikategorikan menjadi beberapa jenis.</p>
                    
                    <h2 class="fw-bolder mb-4 mt-5">1. Alat Musik Berdasarkan Sumber Bunyi</h2>
                    <p class="fs-5 mb-4">Alat musik dapat dibedakan berdasarkan bagaimana suara dihasilkan:
                        <ul>
                            <li><strong>Idiophone:</strong> Menghasilkan suara dari getaran tubuhnya sendiri, seperti gong dan angklung.</li>
                            <li><strong>Membranophone:</strong> Menggunakan membran yang dipukul, seperti gendang dan timpani.</li>
                            <li><strong>Chordophone:</strong> Menghasilkan suara melalui senar yang dipetik atau digesek, seperti gitar dan biola.</li>
                            <li><strong>Aerophone:</strong> Menghasilkan suara dengan udara yang ditiup, seperti seruling dan saksofon.</li>
                            <li><strong>Electrophone:</strong> Menghasilkan suara melalui listrik, seperti keyboard dan synthesizer.</li>
                        </ul>
                    </p>
                    
                    <h2 class="fw-bolder mb-4 mt-5">2. Alat Musik Berdasarkan Cara Memainkannya</h2>
                    <p class="fs-5 mb-4">
                        <ul>
                            <li><strong>Dipetik:</strong> Seperti gitar, harpa, dan kecapi.</li>
                            <li><strong>Digesek:</strong> Seperti biola, cello, dan rebab.</li>
                            <li><strong>Ditiup:</strong> Seperti seruling, klarinet, dan terompet.</li>
                            <li><strong>Dipukul:</strong> Seperti drum, gong, dan kendang.</li>
                            <li><strong>Ditekan:</strong> Seperti piano dan akordeon.</li>
                        </ul>
                    </p>
                    
                    <h2 class="fw-bolder mb-4 mt-5">Kesimpulan</h2>
                    <p class="fs-5 mb-4">Alat musik memiliki berbagai jenis dan karakteristik yang membuatnya unik. Dari alat musik tradisional hingga modern, semuanya memiliki peran penting dalam perkembangan musik di seluruh dunia.</p>
                </section>
            </article>
        </div>
    </div>
</div>
@endsection