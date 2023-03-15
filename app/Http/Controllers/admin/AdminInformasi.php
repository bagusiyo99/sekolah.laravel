<?php

/// dua komponen jika di buat folder
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\Informasi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminInformasi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =[
            'title' => 'Manajemen Infromasi',
            'informasi' => Informasi::get(),
            'content' => 'admin/informasi/index'
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
            'title' => 'Tambah Infromasi',
            'content' => 'admin/informasi/add'
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

            $storage = 'uploads/informasi/';
            $gambar->move ($storage, $file_name);
            $data ['gambar'] =$storage .$file_name;
        }else {
            $data ['gambar'] = null;
        }

                    Alert::success('sukses', 'data berhasil DITAMBAH');
                    Informasi::create ($data);
                    return redirect ('/admin/informasi');

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
            'title' => 'Edit Infromasi',
            'informasi' => Informasi::find ($id),
            'content' => 'admin/informasi/add'
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
        $informasi = Informasi::find($id);
         $data = $request -> validate ([
            'judul' => 'required',
            'deskripsi' => 'required ',

        ]);

        // upload gambar
        if ($request -> hasFile('gambar')) {
            if($informasi->gambar  != null){
                unlink($informasi->gambar);
            }


            $gambar = $request->file('gambar');
            $file_name = time ().'-'. $gambar -> getClientOriginalName ();

            $storage = 'uploads/informasi/';
            $gambar->move ($storage, $file_name);
            $data ['gambar'] =$storage .$file_name;
        }else {
            $data ['gambar'] = $informasi ->gambar;
        }

                    Alert::success('sukses', 'data berhasil diupdate');
                    $informasi->update($data);
                    return redirect ('/admin/informasi');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $informasi = Informasi::find ($id);

            if($informasi->gambar != null){
            unlink($informasi->gambar);
                }

        Alert::success('sukses', 'data berhasil dihapus');
        $informasi->delete();
        return redirect ('/admin/informasi');
        
    }
}

