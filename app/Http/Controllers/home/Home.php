<?php

namespace App\Http\Controllers\home;
use App\Http\Controllers\Controller;

use App\Models\About;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Formulir;
use App\Models\Foto;
use App\Models\Informasi;
use App\Models\Promo;
use App\Models\SiswaBaru;
use Illuminate\Http\Request;

class Home extends Controller
{
    function index (){
    $data = [
        // 'about' => About::get(),
        'about' => About::limit(1)->get(),
        'informasi' => Informasi::paginate(4),
        'banner' => Banner::get(),



        'content'=> 'home/home/index'
    ];
    return view('home.layouts.wrapper',$data);
    }




        public function informasi($id)
    {
    $data = [
        'informasi' => Informasi::find($id),
        'content'=> 'home/home/informasi'
    ];
    return view('home.layouts.wrapper',$data);
    }



}