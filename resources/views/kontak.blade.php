@extends('master')

@section('judul_halaman', 'Kontak- RE:MUSIC')

@section('konten')
        <!-- Page content-->
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="text-center my-5">
                <h2 class="fw-bold">Kontak Kami</h2>
            </div>
            <p class="text-justify">
                Kami selalu terbuka untuk diskusi, saran, atau pertanyaan seputar musik. Jangan ragu untuk menghubungi kami melalui formulir di bawah ini atau melalui media sosial kami.
            </p>
            
            <h3 class="mt-4">Hubungi Kami</h3>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Pesan</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Tulis pesan Anda"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form>
            
            <h3 class="mt-5">Media Sosial</h3>
            <p>Ikuti kami untuk mendapatkan update terbaru tentang dunia musik:</p>
            <ul>
                <li><b><a href="https://www.facebook.com/revans.satria.3">Facebook</a></b></li>
                <li><b><a href="https://www.instagram.com/revanssatria/">Instagram</a></b></li>
                <li><b><a href="https://x.com/SatriaRevans">X</a></b></li>
            </ul>
        </div>
    </div>
</div>

@endsection