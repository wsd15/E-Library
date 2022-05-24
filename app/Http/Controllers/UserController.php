<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index(){
        $id = Auth::user()->id;
        $userId = User::find($id);
        return view('/profile',compact('userId'));
    }
}
