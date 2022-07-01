<?php

namespace App\Http\Controllers;

use App\Models\Perpustakaan;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use phpDocumentor\Reflection\Types\Null_;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index_user(){
        $id = Auth::user()->id;
        $userId = User::find($id); 
        return view('/profile',compact('userId'));
    }

    public function index_daftarpustakawan(Request $request){
        $id = Auth::user()->id;
        $userId = User::find($id);
        $perpustakaan =  Perpustakaan::where('user_id',$id)->first();

        if($perpustakaan){
            return view('/sudah-mendaftar-pustakawan',compact('userId','perpustakaan'));
        }else{
            return view('/mendaftar-pustakawan',compact('userId'));
        }

        
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

    public function daftarperpus(Request $request){

        $id = Auth::user()->id;
        $userId = User::find($id);
        //$userId->update($request->all());
        $perpustakaan =  Perpustakaan::where('user_id',$id)->get();
       
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

        if($request->hasFile('foto_ktp'))
        {
            $img_ext2 = $request->file('foto_ktp')->getClientOriginalExtension();
            
        //    dd($imagePath);
        if ($userId->foto_ktp ='Null') {
            
        }else{
            $imagePath2 = public_path('/images/ktp/'.$userId->foto_ktp);
            if(File::exists($imagePath2)){
                unlink($imagePath2);
            }
        }
            
        $filename2 = 'foto-ktp-' . time() . '.' . $img_ext2;
        $path2 = $request->file('foto_ktp')->move(public_path('/images/ktp'), $filename2);//image save public folder
        $userId->foto_ktp=$filename2;
        }
      
      
       
        

        //user
        $userId->phonenumber=$request->input('phonenumber');
        $userId->name=$request->input('name');
        $userId->last_name=$request->input('last_name');
        $userId->email=$request->input('email');
        $userId->birthday=$request->input('birthday');
        $userId->save();


        //perpustakaan

        $validated=  $request->validate([
            'user_id' => 'required',
            'nama_perpustakaan' => 'required|max:255',
            'alamat_perpustakaan' => 'required',
            'Kota'=> 'required',
            'phonenumber_perpustakaan' => 'required',
            'email_perpustakaan' => 'required',
            'link_google_maps' => 'required',
            'status_donasi' => 'required',
            'foto_perpustakaan' => 'required',
            // 'dokumen_perpustakaan' => 'required',
        ]);


        $img_ext3 = $request->file('foto_perpustakaan')->getClientOriginalExtension();
        $filename3 = 'foto-perpus-' . time() . '.' . $img_ext3;
        $path3 = $request->file('foto_perpustakaan')->move(public_path('/images/fotoperpus/'), $filename3);//image save public folder



      
        // $perpustakaan->nama_perpustakaan=$request->input('nama_perpustakaan');
        // $perpustakaan->alamat_perpustakaan=$request->input('alamat_perpustakaan');
        // $perpustakaan->Kota=$request->input('Kota');
        // $perpustakaan->phonenumber_perpustakaan=$request->input('phonenumber_perpustakaan');
        // $perpustakaan->email_perpustakaan=$request->input('email_perpustakaan');
        // $perpustakaan->link_google_maps=$request->input('link_google_maps');
        // $perpustakaan->status_donasi=$request->input('status_donasi');
        // $perpustakaan->foto_perpustakaan=$filename3;

        // $img_ext4 = $request->file('dokumen_perpustakaan')->getClientOriginalExtension();
        // $filename4 = 'dokumen-perpus-' . time() . '.' . $img_ext4;
        // $path4 = $request->file('dokumen_perpustakaan')->move(public_path('/images/dokumenperpus/'), $filename4);//image save public folder

        if($perpustakaan){
            

            Perpustakaan::create([
                'user_id' => $id,
                'nama_perpustakaan' => $request->input('nama_perpustakaan'),
                'alamat_perpustakaan' => $request->input('alamat_perpustakaan'),
                'Kota'=> $request->input('Kota'),
                'phonenumber_perpustakaan' => $request->input('phonenumber_perpustakaan'),
                'email_perpustakaan' => $request->input('email_perpustakaan'),
                'link_google_maps' => $request->input('link_google_maps'),
                'status_donasi' => $request->input('status_donasi'),
                'deskripsi_perpustakaan' => $request->input('deskripsi_perpustakaan'),
                'foto_perpustakaan'=>$filename3,
                
                
            ]);

            
        }else{
            $perpustakaan->nama_perpustakaan=$request->input('nama_perpustakaan');
            $perpustakaan->alamat_perpustakaan=$request->input('alamat_perpustakaan');
            $perpustakaan->Kota=$request->input('Kota');
            $perpustakaan->phonenumber_perpustakaan=$request->input('phonenumber_perpustakaan');
            $perpustakaan->email_perpustakaan=$request->input('email_perpustakaan');
            $perpustakaan->link_google_maps=$request->input('link_google_maps');
            $perpustakaan->status_donasi=$request->input('status_donasi');
            $perpustakaan->foto_perpustakaan=$filename3;
            $perpustakaan->save();
          
        }
       
       



        return redirect('/mendaftar-pustakawan');
    }

}
