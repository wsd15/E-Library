<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Perpustakaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function index2(Request $request){
        
        // dd($data);
        return view('home');
    }

    // public function detail($id) {
    //     $data = Books::find($id)->get();
    //     // $perpus = Perpustakaan::WhereIn('perpustakaan_id',Books::find($id));
    //     //Book($id) 'perpustakaan_id'
    //     $perpus = Perpustakaan::find(Books::where('id',$id)->pluck('perpustakaan_id')->first())->get();
        
    //     $bookdet = $data->concat($perpus);
    //     // dd($bookdet); 
    //     return view('detail-buku', compact('bookdet'));
    // }
    
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

}
