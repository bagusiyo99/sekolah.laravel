<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                @if (isset($about))
                    <form action="/admin/about/{{ $about->id }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                    @else
                        <form action="/admin/about" method="POST" enctype="multipart/form-data">
                @endif
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" name="judul"
                        class="form-control                             
                        @error('judul')
                            is-invalid
                            @enderror"
                        placeholder="Judul" value="{{ isset($about) ? $about->judul : old('judul') }}">
                    @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                {{-- <div class="form-group">
                    <label for="">Icon</label>
                    <input type="text" name="icon"
                        class="form-control   
                            @error('icon')
                            is-invalid
                            @enderror"
                        placeholder="Icon" value="{{ isset($about) ? $about->icon : old('icon') }}">
                    <a href="https://fontawesome.com/" target="blank"> Klik Untuk Mencari Icon </a>
                    @error('icon')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div> --}}

                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="deskripsi"class="form-control" cols="30" rows="10">{{ isset($about) ? $about->deskripsi : '' }} </textarea>
                    @error('deskripsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" name="gambar"
                        class="form-control 
                            @error('gambar')
                            is-invalid
                            @enderror"
                        placeholder="Gambar">
                    @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    @if (isset($about))
                        <img src="/{{ $about->gambar }}" width="100%" class="mt-4" alt="">
                    @endif
                </div>

                <button type="submit" class="btn btn-primary mb-3">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
