<?php

namespace App\Http\Controllers;

use App\Models\Perpustakaan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


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

    public function profileperpus(Request $request){
        $user = $request->user();
        $perpustakaan = Perpustakaan::where('user_id',$user->id)->first();
        // dd($perpustakaan);
        return view('profile-perpustakaan',compact('perpustakaan'));
    }


    public function updateprofileperpus(Request $request){

        $user = $request->user();
        $perpustakaan = Perpustakaan::where('user_id',$user->id)->first();


        if($request->hasFile('foto_perpustakaan'))
        {
            $img_ext3 = $request->file('foto_perpustakaan')->getClientOriginalExtension();
            
        //    dd($imagePath);
        if ($perpustakaan->foto_perpustakaan ='Null') {
            
        }else{
            $imagePath = public_path('/images/fotoperpus/'.$perpustakaan->foto_perpustakaan);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
        }
            
       
        $filename3 = 'foto-perpus-' . time() . '.' . $img_ext3;
        $path3 = $request->file('foto_perpustakaan')->move(public_path('/images/fotoperpus/'), $filename3);//image save public folder
        $perpustakaan->foto_perpustakaan=$filename3;
        }

        $perpustakaan->status_donasi=$request->input('status_donasi');
        $perpustakaan->deskripsi_perpustakaan = $request->input('deskripsi_perpustakaan');
        $perpustakaan->save();

        


        return redirect('profile-perpustakaan');
    }

}
