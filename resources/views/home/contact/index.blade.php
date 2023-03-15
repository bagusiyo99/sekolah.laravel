<div>
    <img src="/img/sd.jpg" width="100%" class="img-fluid" alt="...">
</div>


<div class="container mt-5">
    <div class="text-center">
        <h4> Kritik dan Saran </h4>
    </div>
</div>

<div class="container mb-5">
    <div class="row">

        <form action="/contact/send" method="POST" class="row g-3">
            @csrf
            <div class="col-xl-12">
                <div class="custom-accordion">
                    <div class="card">
                        <a href="#personal-saya" class="text-dark text-daftar" data-bs-toggle="collapse">

                            <div class="p-4 text-daftar">
                                <h5 class="font-size-16 mb-1">Data Pribadi</h5>
                                <p>FIle maksimal 2mb </p>

                            </div>
                        </a>
                        <div id="personal-saya" class="collapse show">
                            <div class="p-4 border-top">

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label">Nama</label>
                                            <input type="text" name="nama"
                                                class="form-control                             
                                                    @error('nama')
                                                        is-invalid
                                                    @enderror"
                                                placeholder="Masukkan Nama"
                                                value="{{ isset($daftar_online) ? $daftar_online->nama : old('nama') }}">
                                            @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="personal-data-nik">Email</label>
                                            <input type="email" name="email"
                                                class="form-control                             
                                                    @error('email')
                                                        is-invalid
                                                    @enderror"
                                                placeholder="Masukkan Email"
                                                value="{{ isset($daftar_online) ? $daftar_online->email : old('email') }}">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="mb-3 mb-6">
                                            <label class="form-label">Alamat Lengkap</label>
                                            <textarea type="text" name="alamat" placeholder="Masukkan Alamat Lengkap"
                                                class="form-control                             
                                                    @error('alamat')
                                                        is-invalid
                                                    @enderror"
                                                value="{{ isset($daftar_online) ? $daftar_online->alamat : old('alamat') }}"></textarea>
                                            @error('alamat')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>



                                    <div class="col-lg-6">
                                        <div class="mb-3 mb-6">
                                            <label class="form-label">Kritik dan Saran</label>
                                            <textarea type="text" name="pesan" placeholder="Masukkan Kritik dan Saran"
                                                class="form-control                             
                                                    @error('pesan')
                                                        is-invalid
                                                    @enderror"
                                                value="{{ isset($daftar_online) ? $daftar_online->pesan : old('pesan') }}"></textarea>
                                            @error('pesan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>




                            </div>
                        </div>
                        <div class="col-12 my-1 mx-3">
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </div>

                </div>

        </form>

    </div>

</div>
</div>
