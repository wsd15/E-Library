<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Perpustakaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BooksController extends Controller
{
    public function index(Request $request){
        if ($request->has('search')) {
            $data =  Books::where('nama_buku','LIKE','%'.$request->search.'%')
            ->orWhere('penulis','LIKE','%'.$request->search.'%')
            ->orWhere('penerbit','LIKE','%'.$request->search.'%')
            ->orWhere('isbn','LIKE','%'.$request->search.'%')
            ->paginate(6);
        }else {
            $data =  Books::paginate(6);
        }
        
        // dd($data);
        return view('hasil-cari',compact('data'));
    }


    
    public function detail($id) {
    
        // $data = Books::find($id)->where('books.id','=',$id)->get();
        $bookdet = DB::table('perpustakaans')
                ->leftJoin('books', 'books.perpustakaan_id', '=', 'perpustakaans.id')
                ->where('books.id','=',$id)
                ->get();
        // $bookdet = $data->concat($data2); 
                // dd($bookdet);

        return view('detail-buku',compact('bookdet'));
    }

    // public function insert(Request $request){
    //     $id = $request->perpustakaan_id;
    //     dd($id);
    //     Books::create($request->all());

    //     return redirect('daftar-buku-perpustakaan');
    // }
    


    public function insert(Request $request){
        // dd($request->all());

        $id2 = Perpustakaan::where('user_id',Auth::user()->id)->select('id')->get()->pluck('id');//id login
        // // $id2 = Perpustakaan::select('id','user_id')->where('user_id','=',$id)->get()->toArray;
        // dd($id2);
        $img_ext = $request->file('file_path')->getClientOriginalExtension();
        $filename = 'foto-buku-' . time() . '.' . $img_ext;
        $path = $request->file('file_path')->move(public_path(), $filename);//image save public folder
      
        Books::create([
            'nama_buku' =>$request->input('nama_buku'),
            'penerbit'=>$request->input('penerbit'),
            'penulis'=>$request->input('penulis'),
            'perpustakaan_id'=>$id2[0],
            'isbn'=>$request->input('isbn'),
            'file_path'=>$filename,
            'tahun_terbit'=>$request->input('tahun_terbit'),
            'stok'=>$request->input('stok'),
            'deskripsi'=>$request->input('deskripsi'),
        ]);

        return redirect('daftar-buku-perpustakaan');
    }

    public function index2(Request $request){
        $id2 = Perpustakaan::where('user_id',Auth::user()->id)->select('id')->get()->pluck('id');
    
        $data =  Books::where('perpustakaan_id','=',$id2)->paginate(6);
        

        return view('daftar-buku-perpustakaan',compact('data'));
    }

    public function editbuku($id){
        
        $buku = Books::find($id);
      
        return view('edit-buku',compact('buku'));
    }

}
