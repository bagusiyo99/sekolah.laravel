<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\home;
use App\Http\Controllers\Controller;

use App\Models\Foto;
use Illuminate\Http\Request;

class HomeFoto extends Controller
{
       function index (){
    $data = [
    
     
        'foto' => Foto::get(),

        'content'=> 'home/foto/index'
    ];
    return view('home.layouts.wrapper',$data);
    }

        function detail ($id)
    {
    $data = [
        'foto' => Foto::find($id),
        'content'=> 'home/foto/show'
    ];
    return view('home.layouts.wrapper',$data);
    }

    
}
