@extends('master')

@section('judul_halaman', 'Mengenal "Ludwig Van Beethoven" Seorang Musisi Tuli Dari Era Klasik')

@section('konten')
<div class="container mt-5 d-flex justify-content-center">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1">Mengenal Ludwig Van Beethoven: Seorang Musisi Tuli Dari Era Klasik</h1>
                    <!-- Post meta content-->
                    <div class="text-muted fst-italic mb-2">Diposting pada 5 September 2024</div>
                </header>
                <!-- Preview image figure-->
                <figure class="mb-4"><img class="img-fluid rounded" src="{{ asset('assets/beethoven.jpg') }}" alt="..."></figure>
                <!-- Post content-->
                <section class="mb-5">
                    <p class="fs-5 mb-4">Ludwig van Beethoven adalah salah satu komposer terbesar dalam sejarah musik klasik. Meskipun mengalami gangguan pendengaran yang semakin parah hingga menjadi tuli total, ia tetap menciptakan karya-karya legendaris yang mengubah dunia musik.</p>
                    
                    <h2 class="fw-bolder mb-2 mt-2">Masa Kecil dan Awal Karier</h2>
                    <p class="fs-5 mb-4">Beethoven lahir di Bonn, Jerman, pada tahun 1770. Bakat musiknya sudah terlihat sejak kecil, dan ayahnya, yang merupakan musisi, melatihnya dengan keras agar menjadi pianis hebat seperti Mozart.</p>
                    
                    <h2 class="fw-bolder mb-2 mt-2">Kehilangan Pendengaran</h2>
                    <p class="fs-5 mb-4">Pada usia sekitar 30 tahun, Beethoven mulai mengalami gangguan pendengaran. Meskipun ini menjadi tantangan besar, ia terus berkarya dengan menuliskan musik langsung dari imajinasinya.</p>
                    
                    <h2 class="fw-bolder mb-2 mt-2">Karya-Karya Besar</h2>
                    <p class="fs-5 mb-4">Beethoven menciptakan berbagai simfoni, sonata, dan kuartet yang masih dikagumi hingga kini. Beberapa karyanya yang paling terkenal termasuk "Symphony No. 5", "Symphony No. 9" yang berisi "Ode to Joy", serta "Moonlight Sonata".</p>
                    
                    <h2 class="fw-bolder mb-2 mt-2">Warisan Beethoven</h2>
                    <p class="fs-5 mb-4">Beethoven dianggap sebagai jembatan antara era Klasik dan Romantis dalam musik. Karyanya tidak hanya menggambarkan kejeniusan musik, tetapi juga menunjukkan ketekunan dan semangat pantang menyerah.</p>
                    
                    <h2 class="fw-bolder mb-2 mt-2">Kesimpulan</h2>
                    <p class="fs-5 mb-4">Ludwig van Beethoven adalah contoh luar biasa dari seorang seniman yang tidak menyerah pada keterbatasannya. Musiknya tetap abadi dan terus menginspirasi generasi baru di seluruh dunia.</p>
                </section>
            </article>
        </div>
    </div>
</div>
@endsection