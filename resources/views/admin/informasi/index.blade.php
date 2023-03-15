<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered text-center" id="dataTables-example">

                    <a href="/admin/informasi/create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah</a>
                    <thead>
                        <tr class="btn-secondary">
                            <td> No </td>
                            <td class="text-center"> Gambar </td>
                            <td> Judul</td>
                            {{-- <td width="50px"> Deskripsi </td> --}}
                            <td> Action </td>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($informasi as $item)
                            <tr>
                                <td> {{ $loop->iteration }} </td>
                                <td><img src="/{{ $item->gambar }}" width="100px" alt=""> </td>
                                <td> {{ $item->judul }} </td>
                                {{-- <td> {{ $item->desc }} </td> --}}

                                <td>
                                    <div class="text-center mb-1">
                                        <a href="/admin/informasi/{{ $item->id }}/edit "
                                            class="btn btn-success  mb-2">Edit</a>

                                        <form action="/admin/informasi/{{ $item->id }}" method="POST">
                                            @method ('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger mx-2">Hapus</button>

                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
