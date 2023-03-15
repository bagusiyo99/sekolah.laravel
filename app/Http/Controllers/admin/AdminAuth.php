<?php
/// dua komponen jika di buat folder
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuth extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index()
    {
        $data = [
        'content'=> 'home/auth/login'
    ];
    return view('home.layouts.wrapper',$data);
    }


    function doLogin (Request $request)
    {
        // dd($request->all());
        $data = $request ->validate([
            'email'=> 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect('admin/dasboard');
        }

        return back()->with ('loginError', 'gagal login');
    }

    function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }


}
