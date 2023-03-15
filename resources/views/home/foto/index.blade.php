<div>
    <img src="/img/sd.jpg" width="100%" class="img-fluid" alt="...">
</div>
{{-- <div class="container">
    <div class="row">
        @foreach ($foto as $item)
            <div class="col mb-5">
                <div class="card" style="width: 18rem;">
                    <a target="_blank" href="/{{ $item->gambar }} ">
                        <img src="/{{ $item->gambar }}" class="card-img-top" alt="..." height="200px">
                    </a>
                    <div class="card-body">
                        <p class="card-text" height="400px">
                            {!! Str::limit($item->judul, 60) !!}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div> --}}


{{-- <div class="galeri">
    @foreach ($foto as $item)
        <div class="kenangan">

            <div class="card-galeri" data-aos="zoom-in-down" data-aos-duration="2500">
                <a target="_blank" href="/{{ $item->gambar }} ">
                    <img src="/{{ $item->gambar }}" class="card-img-top" alt="..." height="200px">
                </a>
            </div>
            <div class="galeri-description">
                {!! Str::limit($item->judul, 100) !!}
            </div>
        </div>
    @endforeach

</div> --}}

<div class="main">
    <h3 class="heading">Foto Kenangan</h3>
</div>
<div class="atur ">
    @foreach ($foto as $item)
        <div class="card-jurusan" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="4500">
            <div class="card-image">
                <a href="#">
                    <img src="/{{ $item->gambar }}">
                </a>
            </div>
            <div class="card-description">
                <h3>{{ $item->judul }}</h3>
                <p>{!! Str::limit($item->deskripsi, 50) !!}</p>
                <a href="/show/{{ $item->id }}">Detail</a>
            </div>
        </div>
    @endforeach
</div>
