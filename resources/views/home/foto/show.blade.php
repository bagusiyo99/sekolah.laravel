<section id="page-header" class="blog-header">


    <h2>Selamat Datang</h2>
    <p> Sejarah SMKN Bagus Bandar Lampung</p>


</section>

<div class="main">
    <h3 class="heading">{{ $foto->judul }}</h3>
    <p>{{ $foto->created_at->format('d F Y ') }}</p>


    <div class="detail-tentang">
        <img src="/{{ $foto->gambar }}" width="500px" height="400px">
    </div>
</div>

<div class="huruf">
    <p>{!! $foto->deskripsi !!}</p>
</div>
