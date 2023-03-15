<?php

namespace App\Http\Controllers\home;
use App\Http\Controllers\Controller;


use App\Models\Informasi;
use Illuminate\Http\Request;

class HomeInformasi extends Controller
{
       function index (){
    $data = [
    
     
        'informasi' => Informasi::get(),

        'content'=> 'home/informasi/index'
    ];
    return view('home.layouts.wrapper',$data);
    }

        function informasi ($id)
    {
    $data = [
        'informasi' => Informasi::find($id),
        'content'=> 'home/informasi/informasi'
    ];
    return view('home.layouts.wrapper',$data);
    }

    
}

