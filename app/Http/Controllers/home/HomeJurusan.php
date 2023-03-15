<?php

namespace App\Http\Controllers\home;
use App\Http\Controllers\Controller;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class HomeJurusan extends Controller
{
       function index (){
    $data = [
    
     
        'jurusan' => Jurusan::get(),

        'content'=> 'home/jurusan/index'
    ];
    return view('home.layouts.wrapper',$data);
    }

        function detail ($id)
    {
    $data = [
        'jurusan' => Jurusan::find($id),
        'content'=> 'home/jurusan/show'
    ];
    return view('home.layouts.wrapper',$data);
    }

    
}
