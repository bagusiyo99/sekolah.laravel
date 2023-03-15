<?php
/// dua komponen jika di buat folder
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\Pesan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminPesan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =[
            'title' => 'Manajemen Pesan',
            'pesan' => Pesan::get(),
            'content' => 'admin/pesan/index'
        ];
        return view ('admin.layouts.wrapper', $data );
    }

    public function show ($id)
    {
    $data = [
        'pesan' => Pesan::find($id),
        'content'=> 'admin/pesan/show'
    ];
    return view('admin.layouts.wrapper',$data);
    }

        public function destroy($id)
    {
        $pesan = Pesan::find ($id);


        Alert::success('sukses', 'data berhasil dihapus');
        $pesan->delete();
        return redirect ('/admin/pesan');
        
    }

}
