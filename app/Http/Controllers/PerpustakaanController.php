<?php

namespace App\Http\Controllers;

use App\Models\Perpustakaan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PerpustakaanController extends Controller
{
    public function index(){
        $perpus = Perpustakaan::where('status_validasi','belum')->get();
        

        return view('list-validasi',compact('perpus'));
    }

    public function detail($id){
        $user = Perpustakaan::where('status_validasi','belum')->where('id',$id)->pluck('user_id');
        $userId = User::where('id',$user)->first();
    //  dd($userId);
        $perpustakaan = Perpustakaan::where('status_validasi','belum')->where('id',$id)->first();
        
      
        return view('validasi-perpustakaan',compact('userId','perpustakaan'));
    }

    public function validasi(Request $request,$id){

        $validated=  $request->validate([
      
            'perpuslat' => 'required',
            'perpuslong' => 'required',
           
        ]);

        $user2 = Perpustakaan::where('status_validasi','belum')->where('id',$id)->pluck('user_id');
        $userId = User::where('id',$user2)->first();

        $perpustakaan = Perpustakaan::where('status_validasi','belum')->where('id',$id)->first();

  
                
    
        $userId->detachRole('user');
        $userId->attachRole('pustakawan');
        
        $perpustakaan->perpuslat = $request->input('perpuslat');
        $perpustakaan->perpuslong = $request->input('perpuslong');
        $perpustakaan->status_validasi = 'sudah';
        $perpustakaan->save();
       
        return redirect('list-validasi');
    }

}
