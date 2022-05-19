<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(){
        $data =  Books::all();
        // dd($data);
        return view('hasil-cari',compact('data'));
    }

    public function detail($id) {
        $bookdet = Books::find($id);
        return view('detail-buku', compact('bookdet'));
    }
    
}
