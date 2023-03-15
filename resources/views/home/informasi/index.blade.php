<div class="main">
    <h3 class="heading">Informasi</h3>
</div>
<main class="container">

    <div class="p-5 p-md-4 mb-5 text-white rounded bg-success" data-aos="fade-down" data-aos-easing="linear"
        data-aos-duration="1500">
        <div>
            <h1 class="display-5 fst-italic">Ayok Daftarkan putra atau putri terbaik anda di pesantren ini dan dapatkan
                diskon pendaftaran pertama</h1>
            <p class="lead my-3">Dapatkan Update Informasi Terbaru hanya di website ini </p>
        </div>
    </div>

    <div class="row mb-2" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="4500">
        @foreach ($informasi as $item)
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static masee">
                        <strong class="d-inline-block mb-2 text-success">Informasi Terbaru</strong>
                        <h3 class="mb-1">{{ $item->judul }}</h3>
                        <p class="card-text mb-3">{!! Str::limit($item->deskripsi, 200) !!}</p>
                        <a clas="info mt-5" href="/informasi/{{ $item->id }}">Lanjutkan Membaca</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="/{{ $item->gambar }}">

                    </div>
                </div>

            </div>
        @endforeach

    </div>
</main>
