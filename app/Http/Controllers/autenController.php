<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class autenController extends Controller

{
    function creat()
    {
        $login = "Login";

        return view('login', ['login' => $login]);
    }

    function login(Request $request){
        $login = $request -> only("username", "password");
        if(Auth::attempt($login)){
            echo "berhasil";
        }else{
            echo "gagal";
        }
    }

    function register()
    {

        $register = "Register";

        return view('register', ['register' => $register]);
    }

    function store(Request $request){
        //var_dump($request->all());

        $data = DBlade::table("masyarakat")->insert([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'telp' => $request->telp
        ]);
        
    }
}