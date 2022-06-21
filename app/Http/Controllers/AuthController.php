<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\user;
use Illuminate\Auth\Events\Attempting;
use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function user()
    {
        $user = User::paginate();
        return view('user', ['user' => $user]);
    }
    public function formuliruser()
    {
        return view('formuliruser');
    }
    public function simpanuser(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        return redirect('/user');
    }
    public function login()
    {
        return view('login');
    }
    public function ceklogin(Request $request)
    {
        if(!Auth::attempt(['email' => $request->email, 'password'=> $request->password ]))
        {
            return redirect('/login');
        }
        else
        {
            return redirect('/dosen');
        }

    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('flash', 'Anda Berhasil Keluar');
    }
}
