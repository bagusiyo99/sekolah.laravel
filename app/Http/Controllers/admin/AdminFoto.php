<?php
/// dua komponen jika di buat folder
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;


use App\Models\Foto;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminFoto extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =[
            'title' => 'Manajemen Foto',
            'foto' => Foto::get(),
            'content' => 'admin/foto/index'
        ];
        return view ('admin.layouts.wrapper', $data );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data =[
            'title' => 'Tambah Foto',
            'content' => 'admin/foto/add'
        ];
        
        return view ('admin.layouts.wrapper', $data );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> validate ([
            'judul' => 'required',
            'deskripsi' => 'required ',
            'gambar' => 'required',
        ]);

        // upload gambar
        if ($request -> hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $file_name = time ().'-'. $gambar -> getClientOriginalName ();

            $storage = 'uploads/foto/';
            $gambar->move ($storage, $file_name);
            $data ['gambar'] =$storage .$file_name;
        }else {
            $data ['gambar'] = null;
        }

                    Alert::success('sukses', 'data berhasil DITAMBAH');
                    Foto::create ($data);
                    return redirect ('/admin/foto');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =[
            'title' => 'Edit Foto',
            'foto' => Foto::find ($id),
            'content' => 'admin/foto/add'
        ];
        return view ('admin.layouts.wrapper', $data ); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $foto = Foto::find($id);
         $data = $request -> validate ([
            'judul' => 'required|max:50',
            'deskripsi' => 'required ',

        ]);

        // upload gambar
        if ($request -> hasFile('gambar')) {
            if($foto->gambar  != null){
                unlink($foto->gambar);
            }


            $gambar = $request->file('gambar');
            $file_name = time ().'-'. $gambar -> getClientOriginalName ();

            $storage = 'uploads/foto/';
            $gambar->move ($storage, $file_name);
            $data ['gambar'] =$storage .$file_name;
        }else {
            $data ['gambar'] = $foto ->gambar;
        }

                    Alert::success('sukses', 'data berhasil diupdate');
                    $foto->update($data);
                    return redirect ('/admin/foto');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $foto = Foto::find ($id);

            if($foto->gambar != null){
            unlink($foto->gambar);
                }

        Alert::success('sukses', 'data berhasil dihapus');
        $foto->delete();
        return redirect ('/admin/foto');
        
    }
}
