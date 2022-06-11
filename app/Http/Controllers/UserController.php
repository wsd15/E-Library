<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use phpDocumentor\Reflection\Types\Null_;

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

    public function index_userupdated(Request $request){
        $id = Auth::user()->id;
        $userId = User::find($id);
        //$userId->update($request->all());

        if($request->hasFile('file_path'))
        {
            $img_ext = $request->file('file_path')->getClientOriginalExtension();
            
        //    dd($imagePath);
        if ($userId->file_path ='Null') {
            
        }else{
            $imagePath = public_path('/images/profile/'.$userId->file_path);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
        }
            
            $filename = 'foto-profile-' . time() . '.' . $img_ext;
            $path = $request->file('file_path')->move(public_path('/images/profile'), $filename);//image save public folder
            $userId->file_path=$filename;
        }

        $userId->phonenumber=$request->input('phonenumber');
        $userId->name=$request->input('name');
        $userId->last_name=$request->input('last_name');
        $userId->email=$request->input('email');
        $userId->birthday=$request->input('birthday');
        $userId->save();

        // return view('/profile',compact('userId'));

        return redirect('/profile');
    }
}
