<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Perpustakaan;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

    //     $id2 = Wishlist::where('user_id',Auth::user()->id)->select('produk_id')->get()->pluck('produk_id');
    //     dd($id2);
    //     $buku =  Books::where('id','=',$id2)->paginate(6);
    //  dd($buku);
    //     $itemuser = $request->user();
        
    $itemuser = $request->user();
    $itemwishlist = Wishlist::where('user_id', Auth::user()->id)
                            ->paginate(5);


                               $a = Wishlist::where('user_id',Auth::user()->id)->get('produk_id')->toArray();
                            //    $b=  Books::where('id',$a)->get()->toArray();
                            $b=  Books::whereIn('id',$a)->paginate(5);
                    //        $c= Perpustakaan::select('nama_perpustakaan')->where('id',$b)->get();
                            // dd($itemwishlist);
                          
                        
                        // //    $bookdet = DB::table('perpustakaans')
                        // //     ->leftJoin('books', 'books.perpustakaan_id', '=', 'perpustakaans.id')
                        // //     ->where('books.id','=',$a)
                        // //     ->get();
                        // dd($a);
                        // $bookdet = Books::where('perpustakaan_id','=',$a)->paginate(6);
                        //    dd($bookdet);

                        // $perpus = Perpustakaan::find($bookdet);

                        // $bookdet = DB::table('perpustakaans')
                        // ->leftJoin('books', 'books.perpustakaan_id', '=', 'perpustakaans.id')
                        // ->where('books.id','=',$id)
                        // ->get();

                        
                        $data = array('title' => 'Wishlist',
                    'itemwishlist' => $itemwishlist ,'b'=> $b);
                    return view('wishlist', $data);
        // return view('wishlist', compact('itemwishlist','b'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $this->validate($request, [
            'produk_id' => 'required',
        ]);
        $itemuser = $request->user();
        $validasiwishlist = Wishlist::where('produk_id', $request->produk_id)
                                    ->where('user_id', $itemuser->id)
                                    ->first();
        if ($validasiwishlist) {
            $validasiwishlist->delete();//kalo udah ada, berarti wishlist dihapus
            return back()->with('success', 'Wishlist berhasil dihapus');
        } else {
            $inputan = $request->all();
            $inputan['user_id'] = $itemuser->id;
            $itemwishlist = Wishlist::create($inputan);
            return back()->with('success', 'Produk berhasil ditambahkan ke wishlist');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function show(Wishlist $wishlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Wishlist $wishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wishlist $wishlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itemwishlist = Wishlist::findOrFail($id);
        if ($itemwishlist->delete()) {
            return back()->with('success', 'Wishlist berhasil dihapus');
        } else {
            return back()->with('error', 'Wishlist gagal dihapus');
        }

    }

    public function all()
    {
        return $this->items;
    }
}
