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
        return view('/profile/{id}',compact('userId'));
    }

    public function index_daftarpustakawan(){
        $id = Auth::user()->id;
        $userId = User::find($id);
        return view('/mendaftar-pustakawan',compact('userId'));
    }

    public function index_userupdated(Request $request, $id){
        $id = Auth::user()->id;
        $userId = User::find($id);

        $userId->update($request->all());

        return redirect()->route('profile')->with('success','Data Berhasil Di Update');
    }
}
