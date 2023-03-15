<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\home;
use App\Http\Controllers\Controller;

use App\Models\Pesan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeContact extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index ()
    {
    $data = [
        'content'=> 'home/contact/index'
    ];
    return view('home.layouts.wrapper',$data);
    }

         function send  (Request $request)
    {
        $data = $request -> validate ([
            'nama' => 'required',
            'email' => 'required ',
            'alamat' => 'required',
            'pesan' => 'required ',
        ]);
        Pesan::create($data);
         Alert::success('sukses', 'Pesan berhasil dikirim');
        return redirect('/contact');

    }

}
