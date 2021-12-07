<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
            'title' => 'Register'
        ]);
    }

    public function store (Request $request)
    {
        $validateData = $request->validate([
            'name'=>'required|max:255',
            'username'=>'required|min:3|max:255|unique:users',
            'email'=>'email:dns|unique:users',
            'password'=>'required|min:5|max:255'
        ]);
    $validateData['password'] = Hash::make($validateData['password']);

    User::create($validateData);
    return redirect('/login')->with('sukses', 'Register Berhasil, Silahkan Login !');
    }
}