<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Perpustakaan;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;


class BooksController extends Controller
{
    public function index(Request $request){
        if ($request->has('search')) {
            $data =  Books::where('nama_buku','LIKE','%'.$request->search.'%')
            ->orWhere('penulis','LIKE','%'.$request->search.'%')
            ->orWhere('penerbit','LIKE','%'.$request->search.'%')
            ->orWhere('isbn','LIKE','%'.$request->search.'%')
            ->paginate(6);
            // dd($data);
        }else {
            $data =  Books::paginate(6);
        }
        
        // dd($data);
        return view('hasil-cari',compact('data'));
    }


    
    public function detail($id) {
    
        // $data = Books::find($id)->where('books.id','=',$id)->get();
        // $bookdet = DB::table('perpustakaans')
        //         ->leftJoin('books', 'books.perpustakaan_id', '=', 'perpustakaans.id')
        //         ->where('books.id','=',$id)
        //         ->get();
        // $bookdet = $data->concat($data2); 
                // dd($bookdet[0]);
                $itemproduk = Books::find($id);
            // dd($itemproduk->id);
                

        $bookdet = Books::where('id',$id)->paginate(1);


        if(Auth::user()){
            $itemuser = Auth::user()->id;
            $itemwishlist = Wishlist::where('produk_id', $itemproduk->id)
            ->where('user_id', $itemuser)
            ->first();
            // dd($itemwishlist);
// dd($bookdet[0]);

            return view('detail-buku',compact('bookdet','itemwishlist'));
        }else{
            return view('detail-buku',compact('bookdet'));
        }
       
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
        $path = $request->file('file_path')->move(public_path('/images/buku'), $filename);//image save public folder
      
        Books::create([
            'nama_buku' =>$request->input('nama_buku'),
            'penerbit'=>$request->input('penerbit'),
            'penulis'=>$request->input('penulis'),
            'perpustakaan_id'=>$id2[0],
            'isbn'=>$request->input('isbn'),
            'file_path'=>$filename,
            'tahun_terbit'=>$request->input('tahun_terbit'),
            'stok'=>$request->input('stok'),
            'deposit'=>$request->input('deposit'),
            'deskripsi'=>$request->input('deskripsi'),
        ]);

        return redirect('daftar-buku-perpustakaan');
    }

    public function index2(Request $request){
        $id2 = Perpustakaan::where('user_id',Auth::user()->id)->select('id')->get()->pluck('id');
    // dd($id2);
        $data =  Books::where('perpustakaan_id','=',$id2)->paginate(6);

        return view('daftar-buku-perpustakaan',compact('data'));
    }

    public function editbukudetail($id){
        
        $buku = Books::find($id);
        
        return view('edit-buku',compact('buku'));
    }

    public function editbuku(Request $request,$id){

        $validated=  $request->validate([
            'nama_buku' => 'required|max:255',
            'penerbit' => 'required',
            'isbn'=> 'integer',
            'tahun_terbit' => 'required',
            'penulis' => 'required',
            'stok' => 'required|integer',
            'deskripsi' => 'required|max:255',

        ]);

     
        
        $buku = Books::find($id);

        if($request->hasFile('file_path'))
        {
            $img_ext = $request->file('file_path')->getClientOriginalExtension();
            $imagePath = public_path('/images/buku/'.$buku->file_path);
           
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
            $filename = 'foto-buku-' . time() . '.' . $img_ext;
            $request->file('file_path')->move(public_path('/images/buku'), $filename);//image save public folder
            $buku->file_path=$filename;
        }
        $buku->nama_buku=$request->input('nama_buku');
        $buku->penerbit=$request->input('penerbit');
        $buku->isbn=$request->input('isbn');
       
        $buku->tahun_terbit=$request->input('tahun_terbit');
        $buku->penulis=$request->input('penulis');
        $buku->stok=$request->input('stok');
        $buku->deskripsi=$request->input('deskripsi');
        
        $buku->save();
      
        return redirect('daftar-buku-perpustakaan');
    }

    public function destroy($id){
        $book= Books::find($id);
        $imagePath = public_path('/images/buku/'.$book->file_path);
           
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
        $book->delete();
        return redirect('/daftar-buku-perpustakaan');

    }

}
