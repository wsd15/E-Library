<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index_user(){
        $id = Auth::user()->id;
        $userId = User::find($id);
        return view('/profile',compact('userId'));
    }

    public function index_daftarpustakawan(){
        $id = Auth::user()->id;
        $userId = User::find($id);
        return view('/mendaftar-pustakawan',compact('userId'));
    }
}
