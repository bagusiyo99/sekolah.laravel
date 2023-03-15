{{-- <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/pesan" class="btn btn-success mb-5">
                    <i class="fas fa-arrow-alt-circle-left">Kembali</i>
                </a>
                <tr>
                    <p> From : {{ $pesan->nama }} </p>
                </tr>
                <h3> {{ $pesan->email }} </h3>
                <p> {{ $pesan->pesan }} </p>

            </div>
        </div>
    </div>
</div>
</div> --}}


<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">

                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <p class="form-control"> {{ $pesan->nama }}</p>
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <p class="form-control"> {{ $pesan->email }}</p>
                </div>

                <div class="form-group">
                    <label for="">Alamat</label>
                    <p class="form-control"> {{ $pesan->alamat }}</p>
                </div>


                <div class="form-group" height="300px">
                    <label>Pesan</label>
                    <textarea class="form-control " height="900px"> {{ $pesan->pesan }} </textarea>

                </div>


                <a href="/admin/pesan" class="btn btn-primary mb-3">
                    Kembali</a>

            </div>
        </div>
    </div>
</div>
